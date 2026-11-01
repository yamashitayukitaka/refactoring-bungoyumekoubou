<?php
/**
 * 【このファイルの役割】
 * インポート前の JSON バリデーション。ファイル読込 → json_decode → 各行（row）の必須キー・
 * import_id 重複・page template・ACF field name までチェックする関数群です。
 *
 * @package Wazeka
 */

if ( ! defined( 'ABSPATH' ) ) {
  exit;
}

// ACF field key まわりと acf-json から map を作る処理。
require_once __DIR__ . '/../AcfFieldKeys.php';
require_once __DIR__ . '/../AcfJsonFieldMap.php';

/**
 * JSON ファイルを読み込み、デコード後に row 単位のバリデーションまで実行します。
 *
 * @param array  $config    config/*.php の設定配列.
 * @param string $json_path インポート用 JSON のフルパス.
 * @return array{data: array<int, array<string, mixed>>, errors: string[]}
 */
function wazeka_import_json_load_and_validate( array $config, $json_path ) {
  $errors = array();

  // ファイルが無い、または開けない場合はここで止めます。
  if ( ! file_exists( $json_path ) || ! is_readable( $json_path ) ) {
    $errors[] = 'JSONファイルが存在しないか、読み込めません: ' . $json_path;
    return array(
      'data'   => array(),
      'errors' => $errors,
    );
  }

  $json = file_get_contents( $json_path );

  if ( false === $json ) {
    $errors[] = 'JSONファイルの読み込みに失敗しました: ' . $json_path;
    return array(
      'data'   => array(),
      'errors' => $errors,
    );
  }

  // 文字列を PHP の配列に変換します。
  $data = json_decode( $json, true );

  if ( JSON_ERROR_NONE !== json_last_error() || ! is_array( $data ) ) {
    $errors[] = 'JSONの解析に失敗しました (' . ( $config['slug'] ?? '' ) . '): ' . json_last_error_msg();
    return array(
      'data'   => array(),
      'errors' => $errors,
    );
  }

  // update_field が無い＝ACF プラグイン未読込。
  if ( ! function_exists( 'update_field' ) ) {
    $errors[] = 'ACF が有効化されていません。';
    return array(
      'data'   => $data,
      'errors' => $errors,
    );
  }

  // 1件ずつのチェック結果を、上のエラーに足し合わせます。
  $errors = array_merge( $errors, wazeka_import_json_validate_rows( $config, $data ) );

  return array(
    'data'   => $data,
    'errors' => $errors,
  );
}

/**
 * デコード済み JSON 配列の各 row（1投稿分）をバリデーションします。
 *
 * @param array $config 種別設定（slug, post_type など）.
 * @param array $data   JSON のルート配列（row のリスト）.
 * @return string[]
 */
function wazeka_import_json_validate_rows( array $config, array $data ) {
  $errors     = array();
  // ファイル内 import_id の重複検知用。
  $import_ids = array();

  foreach ( $data as $index => $row ) {
    // 画面に「何件目」と出すための番号（人間向けは1から始まる表示）.
    $row_label = (string) ( $index + 1 );

    if ( ! is_array( $row ) ) {
      $errors[] = $row_label . '件目: 1件分の形が正しくありません。';
      continue;
    }

    // import_id … upsert 時に既存 post を探す一意キー。
    $import_id = isset( $row['import_id'] ) ? trim( (string) $row['import_id'] ) : '';

    if ( '' === $import_id ) {
      $errors[] = $row_label . '件目: import_id がありません。';
      continue;
    }

    if ( isset( $import_ids[ $import_id ] ) ) {
      $errors[] = 'import_id がファイル内で重複しています: ' . $import_id;
      continue;
    }

    $import_ids[ $import_id ] = true;

    // 投稿のタイトルは文字列で、空でない必要があります。
    if ( empty( $row['post_title'] ) || ! is_string( $row['post_title'] ) ) {
      $errors[] = $import_id . ': post_title が不正です。';
    }

    // acf 部分があるなら、配列である必要があります。
    if ( isset( $row['acf'] ) && ! is_array( $row['acf'] ) ) {
      $errors[] = $import_id . ': acf が配列ではありません。';
      continue;
    }

    // property など page template 必須の種別: allowed_page_templates と照合。
    if ( ! empty( $config['page_template_field'] ) ) {
      $template_key = $config['page_template_field'];
      $template     = $row[ $template_key ] ?? '';

      $allowed = $config['allowed_page_templates'] ?? array();

      if ( ! is_string( $template ) || ! in_array( $template, $allowed, true ) ) {
        $errors[] = $import_id . ': ' . $template_key . ' が不正です (' . implode( ', ', $allowed ) . ' のいずれか)。';
        continue;
      }
    }

    // acf が無い、または配列でない行は、入力項目名のチェックはスキップします。
    if ( ! isset( $row['acf'] ) || ! is_array( $row['acf'] ) ) {
      continue;
    }

    // この row で使う ACF field map（acf-json または config から解決）.
    $acf_field_map = wazeka_import_resolve_acf_field_map( $config, $row );

    if ( null === $acf_field_map ) {
      $errors[] = $import_id . ': ACF フィールド定義を解決できません。';
      continue;
    }

    // acf の中身が、対応表に載っている名前だけか調べます。
    $errors = array_merge(
      $errors,
      wazeka_import_acf_validate_data( $row['acf'], $acf_field_map, $import_id )
    );
  }

  // config の validate_row コールバックがあれば追加バリデーション。
  if ( is_callable( $config['validate_row'] ?? null ) ) {
    foreach ( $data as $index => $row ) {
      if ( ! is_array( $row ) ) {
        continue;
      }
      $extra = call_user_func( $config['validate_row'], $row, $index );
      if ( is_array( $extra ) && ! empty( $extra ) ) {
        $errors = array_merge( $errors, $extra );
      }
    }
  }

  return $errors;
}

/**
 * 1 row から、その行で使う ACF field map を決定します。
 * 優先: acf_fields_for_row → acf_json_groups（template 別）→ acf_json_group → acf_field_map.
 *
 * @param array $config
 * @param array $row JSON の1要素.
 * @return array<string, mixed>|null
 */
function wazeka_import_resolve_acf_field_map( array $config, array $row ) {
  // カスタムコールバックで map を返すパターン。
  if ( is_callable( $config['acf_fields_for_row'] ?? null ) ) {
    $map = call_user_func( $config['acf_fields_for_row'], $row );
    if ( is_array( $map ) ) {
      return $map;
    }
  }

  // property: template ごとに別の acf-json group。
  if ( ! empty( $config['acf_json_groups'] ) && is_array( $config['acf_json_groups'] ) ) {
    $template_key = $config['page_template_field'] ?? 'template';
    $template     = $row[ $template_key ] ?? '';

    if ( ! is_string( $template ) || ! isset( $config['acf_json_groups'][ $template ] ) ) {
      return null;
    }

    return wazeka_import_acf_json_load( $config['acf_json_groups'][ $template ] );
  }

  // works など: acf_json_group が1ファイル固定。
  if ( ! empty( $config['acf_json_group'] ) && is_string( $config['acf_json_group'] ) ) {
    return wazeka_import_acf_json_load( $config['acf_json_group'] );
  }

  // 設定に手書きの対応表がある場合（あまり使わない逃げ道）.
  if ( ! empty( $config['acf_field_map'] ) && is_array( $config['acf_field_map'] ) ) {
    return $config['acf_field_map'];
  }

  return null;
}

/**
 * field map からトップレベルだけ name → field key に flatten（互換用）.
 *
 * @param array $config
 * @param array $row
 * @return array<string, string>|null
 */
function wazeka_import_resolve_acf_field_keys( array $config, array $row ) {
  $map = wazeka_import_resolve_acf_field_map( $config, $row );

  if ( null === $map ) {
    return null;
  }

  $keys = array();

  foreach ( $map as $name => $field_definition ) {
    $field_key = wazeka_import_acf_storage_key( $field_definition );
    if ( null !== $field_key ) {
      $keys[ $name ] = $field_key;
    }
  }

  return $keys;
}
