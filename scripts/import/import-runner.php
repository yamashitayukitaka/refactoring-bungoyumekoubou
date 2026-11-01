<?php
/**
 * 【このファイルの役割】
 * バリデーション済み JSON を WordPress に書き込むインポート本体です。
 * import_id で既存 post を検索し、あれば update・なければ insert（upsert）します。
 * ACF は field key 経由で update_field、照合用に post meta も保存します。
 *
 * @package Wazeka
 */

if ( ! defined( 'ABSPATH' ) ) {
  exit;
}

// JsonValidator（JSON 読込・バリデーション・field map 解決）.
require_once __DIR__ . '/ImportMedia.php';
require_once __DIR__ . '/validators/JsonValidator.php';

/**
 * Config 1種別分のインポートを実行（validate → 各 row を upsert）.
 *
 * @param array<string, mixed> $config 種別設定.
 * @return void
 */
function wazeka_import_run( array $config ) {
  // config の slug（property / works など）。WP-CLI の見出しとエラーメッセージの [種別] に使う。無ければ unknown。
  $slug = $config['slug'] ?? 'unknown';
  // json_path または json_relpath から、読み込む JSON のフルパスを決める（テーマ内 data/*.json）。
  $json_path = wazeka_import_resolve_json_path( $config );

  WP_CLI::line( '--- ' . $slug . ' ---' );

  // ファイルを開いて、問題が無いか調べます。
  $result = wazeka_import_json_load_and_validate( $config, $json_path );

  // 1つでも問題があれば、警告を出して処理全体を止めます（書き込みはしません）。
  if ( ! empty( $result['errors'] ) ) {
    foreach ( $result['errors'] as $error ) {
      WP_CLI::warning( $error );
    }
    WP_CLI::error( '[' . $slug . '] バリデーションに失敗したため、インポートを中止しました。' );
  }

  $data = $result['data'];

  if ( empty( $data ) ) {
    WP_CLI::log( 'インポート対象データがありません。' );
    return;
  }

  // 終わったあとに、何件成功したか数えます。
  $created = 0;
  $updated = 0;
  $failed  = 0;

  // 1件ずつ投稿として保存します。
  foreach ( $data as $row ) {
    $outcome = wazeka_import_row( $config, $row );

    if ( 'create' === $outcome['action'] ) {
      ++$created;
    } elseif ( 'update' === $outcome['action'] ) {
      ++$updated;
    } else {
      ++$failed;
    }
  }

  WP_CLI::line( '' );
  WP_CLI::success( '[' . $slug . '] インポート処理が終了しました。' );
  WP_CLI::line( '新規作成: ' . $created . '件' );
  WP_CLI::line( '更新: ' . $updated . '件' );
  WP_CLI::line( 'エラー: ' . $failed . '件' );
}

/**
 * Json_path または json_relpath からインポート JSON のフルパスを組み立てます。
 *
 * @param array<string, mixed> $config 種別設定.
 * @return string
 */
function wazeka_import_resolve_json_path( array $config ) {
  if ( ! empty( $config['json_path'] ) ) {
    return (string) $config['json_path'];
  }

  // get_template_directory() + 相対パス（テーマ root 基準）.
  $rel = $config['json_relpath'] ?? '';

  return trailingslashit( get_template_directory() ) . ltrim( $rel, '/' );
}

/**
 * JSON の1 row を post + ACF に upsert します。
 *
 * @param array<string, mixed> $config 種別設定.
 * @param array<string, mixed> $row    JSON 1 行.
 * @return array{action: string, post_id?: int}
 */
function wazeka_import_row( array $config, array $row ) {
  $import_id = trim( (string) $row['import_id'] );
  $post_type = (string) $config['post_type'];
  // post meta のキー（_wazeka_import_id）。再インポート時の検索に使う。
  $meta_key = (string) ( $config['import_meta_key'] ?? '_wazeka_import_id' );

  // この行で使う入力項目の対応表を用意します。
  $acf_map = wazeka_import_resolve_acf_field_map( $config, $row );

  if ( null === $acf_map ) {
    WP_CLI::warning( $import_id . ': ACF フィールド定義を解決できません。' );
    return array( 'action' => 'fail' );
  }

  // import_id 用の map エントリから field key を取得。
  $import_id_field_definition = $acf_map['import_id'] ?? null;
  $import_id_field_key        = wazeka_import_acf_storage_key( $import_id_field_definition );

  if ( null === $import_id_field_key ) {
    WP_CLI::warning( $import_id . ': import_id 用 ACF キーがありません。' );
    return array( 'action' => 'fail' );
  }

  // meta_query で既存 post を検索（upsert の update 側判定）.
  $existing_posts = wazeka_import_find_existing_posts( $post_type, $meta_key, $import_id );

  if ( count( $existing_posts ) > 1 ) {
    $duplicate_msg = '識別子が重複しています: ' . $import_id . ' (Post ID: ' . implode( ', ', $existing_posts ) . ')。余分な投稿を削除してから再実行してください。';
    WP_CLI::warning( $duplicate_msg );
    return array( 'action' => 'fail' );
  }

  // WordPress に渡す「投稿の基本情報」を組み立てます。
  $post_data = array(
    'post_type'   => $post_type,
    'post_title'  => $row['post_title'],
    'post_status' => $row['post_status'] ?? ( $config['default_post_status'] ?? 'publish' ),
  );

  if ( ! empty( $existing_posts ) ) {
    $post_data['ID'] = $existing_posts[0];
    $post_id         = wp_update_post( $post_data, true );
    $action          = 'update';
  } else {
    $post_id = wp_insert_post( $post_data, true );
    $action  = 'create';
  }

  if ( is_wp_error( $post_id ) || 0 === $post_id ) {
    $message = is_wp_error( $post_id ) ? $post_id->get_error_message() : 'unknown';
    WP_CLI::warning( '投稿の作成・更新に失敗しました: ' . $import_id . ' (' . $message . ')' );
    return array( 'action' => 'fail' );
  }

  // page template（_wp_page_template post meta）.
  if ( ! empty( $config['page_template_field'] ) ) {
    $template_key = (string) $config['page_template_field'];
    $template     = $row[ $template_key ] ?? '';
    if ( is_string( $template ) && '' !== $template ) {
      update_post_meta( $post_id, '_wp_page_template', $template );
    }
  }

  update_field( $import_id_field_key, $import_id, $post_id );

  // row.acf を field key で update_field（import_id はループ内で skip）.
  $acf_data = $row['acf'] ?? array();

  if ( is_array( $acf_data ) ) {
    foreach ( $acf_data as $field_name => $value ) {
      // import_id は上で保存済みなので、二重に書かないように飛ばします。
      if ( 'import_id' === $field_name ) {
        continue;
      }

      if ( ! isset( $acf_map[ $field_name ] ) ) {
        continue;
      }

      $field_definition = $acf_map[ $field_name ];
      $field_key        = wazeka_import_acf_storage_key( $field_definition );

      if ( null === $field_key ) {
        continue;
      }

    $prepared_value = wazeka_import_acf_prepare_field_value(
        $field_definition,
        $value,
        $import_id . '.' . $field_name,
        (int) $post_id
    );

      if ( null === $prepared_value ) {
        continue;
      }

      update_field( $field_key, $prepared_value, $post_id );
    }
  }

  // 検索用 post meta（ACF とは別キーで import_id を保持）.
  update_post_meta( $post_id, $meta_key, $import_id );

  // after_import フック（config で任意指定）.
  if ( is_callable( $config['after_import'] ?? null ) ) {
    call_user_func( $config['after_import'], $post_id, $row, $action );
  }

  // 画面に出すログ用。テンプレート名があれば [land.php] のように付けます。
  $log_suffix = '';
  if ( ! empty( $config['page_template_field'] ) ) {
    $template_key = (string) $config['page_template_field'];
    $template     = $row[ $template_key ] ?? '';
    if ( is_string( $template ) && '' !== $template ) {
      $log_suffix = ' [' . $template . ']';
    }
  }

  WP_CLI::log( $action . ': ' . $import_id . $log_suffix . ' (Post ID: ' . $post_id . ')' );

  return array(
    'action'  => $action,
    'post_id' => $post_id,
  );
}

/**
 * Import_id に一致する post を WP_Query + meta_query で最大2件取得します。
 *
 * @param string $post_type 投稿タイプ slug.
 * @param string $meta_key  import_meta_key（例: _wazeka_import_id）.
 * @param string $import_id JSON の import_id.
 * @return int[] post ID の配列.
 */
function wazeka_import_find_existing_posts( $post_type, $meta_key, $import_id ) {
  $args = array(
    'post_type'              => $post_type,
    'post_status'            => 'any',
    'posts_per_page'         => 2,
    'fields'                 => 'ids',
    'no_found_rows'          => true,
    'suppress_filters'       => true,
    'update_post_meta_cache' => false,
    'update_post_term_cache' => false,
    // _wazeka_import_id または legacy な import_id meta の OR 条件。
    'meta_query'             => array(
      'relation' => 'OR',
      array(
        'key'     => $meta_key,
        'value'   => $import_id,
        'compare' => '=',
      ),
      array(
        'key'     => 'import_id',
        'value'   => $import_id,
        'compare' => '=',
      ),
    ),
  );

  $query = new WP_Query( $args );

  return $query->posts;
}
