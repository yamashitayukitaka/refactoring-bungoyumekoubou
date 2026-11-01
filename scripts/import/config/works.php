<?php
/**
 * 【このファイルの役割】
 * works インポート用 config。
 *
 * JSON: data/works/works.json
 * ACF: acf-json/group_6b000011works.json を単一 field group として使用。
 *
 * @package Wazeka
 */

if ( ! defined( 'ABSPATH' ) ) {
  exit;
}

return array(
  'slug'                => 'works',
  'post_type'           => 'works',
  'json_relpath'        => 'data/works/works.json',
  'import_meta_key'     => '_wazeka_import_id',
  'default_post_status' => 'publish',

  // works は page template を使わない。
  'page_template_field' => null,

  // 1 post type = 1 acf-json group のパターン。
  'acf_json_group'      => 'group_6b000011works.json',

  // acf の image にはメディア登録用ファイル名（例: works-9__thumb.jpg）を書く。Downloads/works-media から管理画面で一括アップロード後に import。
);
