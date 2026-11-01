<?php
/**
 * 【このファイルの役割】
 * property（土地・物件）だけを JSON インポートする WP-CLI 用エントリです。
 * WAZEKA_IMPORT_TYPES を property に固定してから import.php を読み込みます。
 *
 * 実行例:
 *   wp eval-file wp-content/themes/wazeka/scripts/import/import-properties.php
 *
 * @package Wazeka
 */

if ( ! defined( 'ABSPATH' ) ) {
  exit;
}

// インポート対象 slug を property のみに限定。
if ( ! defined( 'WAZEKA_IMPORT_TYPES' ) ) {
  define( 'WAZEKA_IMPORT_TYPES', array( 'property' ) );
}

require __DIR__ . '/import.php';
