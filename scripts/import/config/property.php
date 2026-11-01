<?php
/**
 * 【このファイルの役割】
 * property インポート用 config。import.php が require して wazeka_import_run() に渡します。
 *
 * JSON: data/property/properties.json
 * ACF: page template（land.php 等）ごとに acf-json の group ファイルを切り替え。
 *
 * @package Wazeka
 */

if ( ! defined( 'ABSPATH' ) ) {
  exit;
}

return array(
  // WP-CLI ログ用の種別名。
  'slug'                   => 'property',

  // カスタム post type。
  'post_type'              => 'property',

  // テーマ root からの JSON 相対パス。
  'json_relpath'           => 'data/property/properties.json',

  // upsert 検索用 post meta key（ACF の import_id フィールドと別管理）.
  'import_meta_key'        => '_wazeka_import_id',

  // row に post_status が無いときのデフォルト。
  'default_post_status'    => 'publish',

  // JSON 内で page template を指定するキー名。
  'page_template_field'    => 'template',

  // バリデーションで許可する template ファイル名。
  'allowed_page_templates' => array( 'land.php', 'rental.php', 'used.php' ),

  // template → acf-json の field group ファイル。
  'acf_json_groups'        => array(
    'land.php'   => 'group_6b000020land.json',
    'rental.php' => 'group_6b000030rental.json',
    'used.php'   => 'group_6b000010used.json',
  ),
);
