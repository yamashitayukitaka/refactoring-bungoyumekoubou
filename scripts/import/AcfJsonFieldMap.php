<?php
/**
 * 【このファイルの役割】
 * テーマの acf-json フォルダ（ACF の Local JSON）を読み、
 * field name → field key（または入れ子 fields）の map を組み立てる関数群です。
 * static キャッシュで同じ group JSON は二重読み込みしません。
 *
 * @package Wazeka
 */

if ( ! defined( 'ABSPATH' ) ) {
  exit;
}

/**
 * acf-json のファイル名（例: group_6b000020land.json）から field map を返します。
 *
 * @param string $group_filename basename のみ.
 * @return array<string, mixed>|null
 */
function wazeka_import_acf_json_load( $group_filename ) {
  // リクエスト内キャッシュ（メモリ上に map を保持）.
  static $cache = array();

  // ファイル名だけにそろえます（ディレクトリが付いていても basename で取り除きます）。
  $group_filename = basename( (string) $group_filename );

  // すでに読んだファイルなら、覚えている結果をそのまま返します。
  if ( isset( $cache[ $group_filename ] ) ) {
    return $cache[ $group_filename ];
  }

  // テーマフォルダ + acf-json + ファイル名 で、読む場所を決めます。
  $path = trailingslashit( get_template_directory() ) . 'acf-json/' . $group_filename;

  if ( ! is_readable( $path ) ) {
    $cache[ $group_filename ] = null;
    return null;
  }

  // ファイルの文字列をまるごと読み込みます。
  $json = file_get_contents( $path );

  if ( false === $json ) {
    $cache[ $group_filename ] = null;
    return null;
  }

  // JSON を json_decode して PHP 配列に。
  $data = json_decode( $json, true );

  if ( JSON_ERROR_NONE !== json_last_error() || ! is_array( $data ) ) {
    $cache[ $group_filename ] = null;
    return null;
  }

  // 設計書の fields という部分から、項目名の対応表を作ります。
  $map = wazeka_import_acf_json_parse_field_list( $data['fields'] ?? array() );

  $cache[ $group_filename ] = $map;

  return $map;
}

/**
 * ACF export JSON の fields 配列を、name → key / ネスト定義の map に変換します。
 *
 * @param array<int, array<string, mixed>> $fields acf-json 内の fields.
 * @return array<string, mixed>
 */
function wazeka_import_acf_json_parse_field_list( array $fields ) {
  $map = array();

  foreach ( $fields as $field ) {
    if ( ! is_array( $field ) ) {
      continue;
    }

    // name = JSON に書くキー、key = ACF の field key（field_xxx）.
    $name = isset( $field['name'] ) ? (string) $field['name'] : '';
    $key  = isset( $field['key'] ) ? (string) $field['key'] : '';
    $type = isset( $field['type'] ) ? (string) $field['type'] : '';

    // 名前かキーが空なら、この項目は使えないので飛ばします。
    if ( '' === $name || '' === $key ) {
      continue;
    }

    // 中にさらに項目がある種類（まとまり・繰り返しなど）か調べます。
    $sub_fields = wazeka_import_acf_json_collect_sub_fields( $field, $type );

    if ( ! empty( $sub_fields ) ) {
      // 子項目がある場合は、自分の key と、子の対応表をセットで覚えます。
      $map[ $name ] = array(
        'key'    => $key,
        'fields' => wazeka_import_acf_json_parse_field_list( $sub_fields ),
      );
      continue;
    }

    // taxonomy 型は term 名 / slug を JSON に書き、インポート側で term ID に解決する。
    if ( 'taxonomy' === $type ) {
      $map[ $name ] = array(
        'key'      => $key,
        'type'     => 'taxonomy',
        'taxonomy' => isset( $field['taxonomy'] ) ? (string) $field['taxonomy'] : '',
      );
      continue;
    }

    // image 型は URL / テーマ相対パス / attachment ID を JSON に書き、インポート側で ID に解決する。
    if ( 'image' === $type ) {
      $map[ $name ] = array(
        'key'  => $key,
        'type' => 'image',
      );
      continue;
    }

    // 単純な1項目なら、保存用名前（key）だけを覚えます。
    $map[ $name ] = $key;
  }

  return $map;
}

/**
 * group / repeater / flexible_content / clone から sub_fields を集めます。
 *
 * @param array<string, mixed> $field acf-json の1 field.
 * @param string               $type  ACF field type.
 * @return array<int, array<string, mixed>>
 */
function wazeka_import_acf_json_collect_sub_fields( array $field, $type ) {
  // sub_fields を持つ field type の一覧。
  $nested_types = array(
    'group',
    'repeater',
    'flexible_content',
    'clone',
  );

  // レイアウト切替型は、layouts の中に sub_fields が入っていることがあります。
  if ( 'flexible_content' === $type && ! empty( $field['layouts'] ) && is_array( $field['layouts'] ) ) {
    $merged = array();

    foreach ( $field['layouts'] as $layout ) {
      if ( ! is_array( $layout ) || empty( $layout['sub_fields'] ) || ! is_array( $layout['sub_fields'] ) ) {
        continue;
      }

      foreach ( $layout['sub_fields'] as $sub ) {
        if ( is_array( $sub ) ) {
          $merged[] = $sub;
        }
      }
    }

    return $merged;
  }

  // まとまり・繰り返しなどは、sub_fields をそのまま使います。
  if ( in_array( $type, $nested_types, true ) && ! empty( $field['sub_fields'] ) && is_array( $field['sub_fields'] ) ) {
    return $field['sub_fields'];
  }

  return array();
}
