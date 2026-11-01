<?php
/**
 * 【このファイルの役割】
 * ACF（Advanced Custom Fields）の field name と field key（field_ で始まる内部ID）を扱う関数群です。
 * JSON の acf ブロックが、acf-json の定義と矛盾していないかバリデーションする処理もここにあります。
 *
 * @package Wazeka
 */

// ABSPATH が無い＝WordPress 外からの直アクセスなので exit。
if ( ! defined( 'ABSPATH' ) ) {
  exit;
}

require_once __DIR__ . '/ImportMedia.php';

/**
 * フィールド定義から、update_field に渡す field key を取り出します。
 *
 * @param string|array<string, mixed>|null $field_definition 文字列 key か、'key' を含む配列定義.
 * @return string|null
 */
function wazeka_import_acf_storage_key( $field_definition ) {
  // 定義が文字列だけなら、そのまま field key。
  if ( is_string( $field_definition ) && '' !== $field_definition ) {
    return $field_definition;
  }

  // 入れ子定義（group / repeater など）では配列の 'key' に field key が入る。
  if ( is_array( $field_definition ) && ! empty( $field_definition['key'] ) && is_string( $field_definition['key'] ) ) {
    return $field_definition['key'];
  }

  return null;
}

/**
 * JSON の acf オブジェクトを、許可された field map と照合してバリデーションします。
 * repeater や group など sub field がある型は、再帰的に中までチェックします。
 *
 * @param array<string, mixed> $data  1 row 分の acf またはその一部.
 * @param array<string, mixed> $map   name → key / 入れ子 fields の対応表.
 * @param string               $label エラーメッセージ用のパス（例: import_id.detail[0]）.
 * @return string[]
 */
function wazeka_import_acf_validate_data( array $data, array $map, $label = 'acf' ) {
  $errors = array();

  // データの各項目を1つずつ見ます。
  foreach ( $data as $field_name => $value ) {
    // 一覧に無い名前が書かれていたらエラーにします。
    if ( ! isset( $map[ $field_name ] ) ) {
      $errors[] = $label . ': 未定義の ACF フィールドです: ' . $field_name;
      continue;
    }

    $nested_field_map = $map[ $field_name ];

    if ( wazeka_import_acf_is_taxonomy_definition( $nested_field_map ) ) {
    $tax_error = wazeka_import_acf_validate_taxonomy_value(
        $value,
        (string) $nested_field_map['taxonomy'],
        $label . '.' . $field_name
    );
      if ( null !== $tax_error ) {
        $errors[] = $tax_error;
      }
      continue;
    }

    if ( wazeka_import_acf_is_image_definition( $nested_field_map ) ) {
      $image_error = wazeka_import_acf_validate_image_value( $value, $label . '.' . $field_name );
      if ( null !== $image_error ) {
        $errors[] = $image_error;
      }
      continue;
    }

    // sub fields を持つ map エントリでなければ、ここで終わり（単一 field key のみ）.
    if ( ! is_array( $nested_field_map ) || empty( $nested_field_map['fields'] ) || ! is_array( $nested_field_map['fields'] ) ) {
      continue;
    }

    $sub_field_map = $nested_field_map['fields'];

    // 0 始まりのリスト配列なら repeater 行とみなして各行をバリデーション。
    if ( wazeka_import_acf_is_list_array( $value ) ) {
      // $value は repeater の「行」の配列。$index は 0,1,2…、$repeater_row はその行の acf オブジェクト。
      foreach ( $value as $index => $repeater_row ) {
        // 1行分は連想配列（field name => 値）である必要がある。文字列や数値だけなら JSON 形が壊れている。
        if ( ! is_array( $repeater_row ) ) {
          $errors[] = $label . '.' . $field_name . '[' . $index . ']: 1行分の形が正しくありません。';
          continue;
        }
        // 行の中身を sub field map で再帰バリデーション。$label に [index] を付けてエラー位置を特定しやすくする。
        $errors = array_merge(
            $errors,
            wazeka_import_acf_validate_data( $repeater_row, $sub_field_map, $label . '.' . $field_name . '[' . $index . ']' )
        );
      }
      // repeater として処理済みなので、下の group 用分岐には入らない。
      continue;
    }

    // 連想配列（group など）なら sub fields を再帰チェック。
    if ( is_array( $value ) ) {
    $errors = array_merge(
        $errors,
        wazeka_import_acf_validate_data( $value, $sub_field_map, $label . '.' . $field_name )
    );
    }
  }

  return $errors;
}

/**
 * PHP 配列がリスト形式（0,1,2… の添字）かどうか。repeater 判定の目安に使います。
 *
 * @param mixed $value 判定対象の値.
 * @return bool
 */
function wazeka_import_acf_is_list_array( $value ) {
  if ( ! is_array( $value ) ) {
    return false;
  }

  // 空配列 [] は repeater の「行が0件」と同じ。list 扱いにして repeater 分岐へ（foreach 0回で OK）。
  // PHP では JSON の {} も [] も array() になるため、空だけは明示的に repeater 側に寄せる。
  if ( array() === $value ) {
    return true;
  }

  // キーが 0,1,2… と並んでいるか比べます。
  return array_keys( $value ) === range( 0, count( $value ) - 1 );
}

/**
 * Field map 上の定義が ACF taxonomy 型かどうか。
 *
 * @param mixed $field_definition フィールド定義.
 * @return bool
 */
function wazeka_import_acf_is_taxonomy_definition( $field_definition ) {
  return is_array( $field_definition )
    && ! empty( $field_definition['type'] )
    && 'taxonomy' === $field_definition['type']
    && ! empty( $field_definition['taxonomy'] );
}

/**
 * JSON の taxonomy 値（term 名・slug オブジェクト・ID）の形をチェックする。
 *
 * @param mixed  $value    taxonomy 値.
 * @param string $taxonomy タクソノミー slug.
 * @param string $label    エラーメッセージ用ラベル.
 * @return string|null エラー文。問題なければ null.
 */
function wazeka_import_acf_validate_taxonomy_value( $value, $taxonomy, $label ) {
  if ( is_int( $value ) || ( is_string( $value ) && '' !== $value && ctype_digit( $value ) ) ) {
    return null;
  }

  if ( is_string( $value ) ) {
    if ( '' === trim( $value ) ) {
      return $label . ': taxonomy の値が空です。';
    }
    return null;
  }

  if ( is_array( $value ) && wazeka_import_acf_is_list_array( $value ) ) {
    foreach ( $value as $index => $item ) {
      $item_error = wazeka_import_acf_validate_taxonomy_value( $item, $taxonomy, $label . '[' . $index . ']' );
      if ( null !== $item_error ) {
        return $item_error;
      }
    }
    return null;
  }

  if ( is_array( $value ) ) {
    $slug = isset( $value['slug'] ) ? trim( (string) $value['slug'] ) : '';
    $name = isset( $value['name'] ) ? trim( (string) $value['name'] ) : '';
    if ( '' === $slug && '' === $name ) {
      return $label . ': taxonomy オブジェクトに slug または name がありません。';
    }
    return null;
  }

  return $label . ': taxonomy の値の形が正しくありません。';
}

/**
 * JSON の taxonomy 値を update_field 用の term ID（または ID 配列）に変換する。
 *
 * @param mixed  $value         taxonomy 値.
 * @param string $taxonomy      タクソノミー slug.
 * @param string $context_label ログ・警告用ラベル.
 * @return int|int[]|null
 */
function wazeka_import_acf_prepare_taxonomy_value( $value, $taxonomy, $context_label ) {
  if ( is_int( $value ) ) {
    return $value;
  }

  if ( is_string( $value ) && ctype_digit( $value ) ) {
    return (int) $value;
  }

  if ( is_string( $value ) ) {
    $term_id = wazeka_import_find_or_create_term( $taxonomy, '', trim( $value ), $context_label );
    return $term_id;
  }

  if ( is_array( $value ) && wazeka_import_acf_is_list_array( $value ) ) {
    $ids = array();
    foreach ( $value as $index => $item ) {
      $prepared = wazeka_import_acf_prepare_taxonomy_value( $item, $taxonomy, $context_label . '[' . $index . ']' );
      if ( null === $prepared ) {
        return null;
      }
      if ( is_array( $prepared ) ) {
        $ids = array_merge( $ids, $prepared );
      } else {
        $ids[] = $prepared;
      }
    }
    return array_values( array_unique( array_map( 'intval', $ids ) ) );
  }

  if ( is_array( $value ) ) {
    $slug = isset( $value['slug'] ) ? trim( (string) $value['slug'] ) : '';
    $name = isset( $value['name'] ) ? trim( (string) $value['name'] ) : '';
    return wazeka_import_find_or_create_term( $taxonomy, $slug, $name, $context_label );
  }

  return null;
}

/**
 * Slug / name から term を探し、無ければ作成して term_id を返す。
 *
 * @param string $taxonomy      タクソノミー slug.
 * @param string $slug          term slug.
 * @param string $name          term 名.
 * @param string $context_label ログ・警告用ラベル.
 * @return int|null
 */
function wazeka_import_find_or_create_term( $taxonomy, $slug, $name, $context_label ) {
  $slug = trim( (string) $slug );
  $name = trim( (string) $name );

  if ( '' !== $slug ) {
    $term = get_term_by( 'slug', $slug, $taxonomy );
    if ( $term instanceof WP_Term && ! is_wp_error( $term ) ) {
      return (int) $term->term_id;
    }
  }

  if ( '' !== $name ) {
    $term = get_term_by( 'name', $name, $taxonomy );
    if ( $term instanceof WP_Term && ! is_wp_error( $term ) ) {
      return (int) $term->term_id;
    }
  }

  $insert_name = '' !== $name ? $name : $slug;
  if ( '' === $insert_name ) {
    WP_CLI::warning( $context_label . ': taxonomy term を特定できません。' );
    return null;
  }

  $insert_args = array();
  if ( '' !== $slug ) {
    $insert_args['slug'] = $slug;
  }

  $result = wp_insert_term( $insert_name, $taxonomy, $insert_args );

  if ( is_wp_error( $result ) ) {
    WP_CLI::warning( $context_label . ': term の作成に失敗しました (' . $insert_name . '): ' . $result->get_error_message() );
    return null;
  }

  WP_CLI::log( $context_label . ': taxonomy term を新規作成しました: ' . $insert_name );

  return (int) $result['term_id'];
}

/**
 * Field 定義に応じて JSON 値を update_field 向けに整える（taxonomy / image / 入れ子）.
 *
 * @param string|array<string, mixed> $field_definition フィールド定義.
 * @param mixed                       $value            JSON 値.
 * @param string                      $context_label    ログ・警告用ラベル.
 * @param int                         $post_id          親投稿 ID.
 * @return mixed|null 失敗時 null.
 */
function wazeka_import_acf_prepare_field_value( $field_definition, $value, $context_label, $post_id = 0 ) {
  if ( is_array( $field_definition ) && ! empty( $field_definition['fields'] ) && is_array( $field_definition['fields'] ) ) {
    return wazeka_import_acf_prepare_container_value( $field_definition, $value, $context_label, $post_id );
  }

  if ( wazeka_import_acf_is_taxonomy_definition( $field_definition ) ) {
    return wazeka_import_acf_prepare_taxonomy_value(
        $value,
        (string) $field_definition['taxonomy'],
        $context_label
    );
  }

  if ( wazeka_import_acf_is_image_definition( $field_definition ) ) {
    return wazeka_import_acf_prepare_image_value( $value, $post_id, $context_label );
  }

  return $value;
}

/**
 * Group / repeater の JSON を再帰的に整える。
 *
 * @param array<string, mixed> $field_definition フィールド定義.
 * @param mixed                $value            JSON 値.
 * @param string               $context_label    ログ・警告用ラベル.
 * @param int                  $post_id          親投稿 ID.
 * @return mixed|null
 */
function wazeka_import_acf_prepare_container_value( $field_definition, $value, $context_label, $post_id ) {
  if ( ! is_array( $value ) ) {
    return $value;
  }

  $sub_field_map = $field_definition['fields'];

  if ( wazeka_import_acf_is_list_array( $value ) ) {
    $prepared_rows = array();
    foreach ( $value as $index => $repeater_row ) {
      if ( ! is_array( $repeater_row ) ) {
        continue;
      }
    $prepared_rows[] = wazeka_import_acf_prepare_row(
        $repeater_row,
        $sub_field_map,
        $context_label . '[' . $index . ']',
        $post_id
    );
    }
    return $prepared_rows;
  }

  return wazeka_import_acf_prepare_row( $value, $sub_field_map, $context_label, $post_id );
}

/**
 * Group / repeater 1 行分の連想配列を整える。
 *
 * @param array<string, mixed> $row           1 行分の acf データ.
 * @param array<string, mixed> $sub_field_map サブフィールド map.
 * @param string               $context_label ログ・警告用ラベル.
 * @param int                  $post_id       親投稿 ID.
 * @return array<string, mixed>
 */
function wazeka_import_acf_prepare_row( array $row, array $sub_field_map, $context_label, $post_id ) {
  $prepared = array();

  foreach ( $row as $sub_name => $sub_value ) {
    if ( ! isset( $sub_field_map[ $sub_name ] ) ) {
      continue;
    }

    $sub_prepared = wazeka_import_acf_prepare_field_value(
        $sub_field_map[ $sub_name ],
        $sub_value,
        $context_label . '.' . $sub_name,
        $post_id
    );

    if ( null !== $sub_prepared ) {
      $prepared[ $sub_name ] = $sub_prepared;
    }
  }

  return $prepared;
}
