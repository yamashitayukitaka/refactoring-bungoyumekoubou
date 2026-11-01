<?php
/**
 * 【このファイルの役割】
 * works（施工事例）だけを JSON インポートする WP-CLI 用エントリです。
 * WAZEKA_IMPORT_TYPES を works に固定してから import.php を読み込みます。
 *
 * 実行例:
 *   1. Downloads/works-media を管理画面メディアに一括アップロード
 *   2. wp eval-file wp-content/themes/wazeka/scripts/import/import-works.php
 *
 * @package Wazeka
 */

if ( ! defined( 'ABSPATH' ) ) {
  exit;
}

if ( ! defined( 'WAZEKA_IMPORT_TYPES' ) ) {
  define( 'WAZEKA_IMPORT_TYPES', array( 'works' ) );
}

require __DIR__ . '/import.php';
