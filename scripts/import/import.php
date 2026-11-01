<?php
/**
 * 【このファイルの役割】
 * WP-CLI から実行する JSON インポートのエントリポイントです。
 * config/*.php を読み込み、種別（slug）ごとに wazeka_import_run() を呼び出します。
 *
 * 実行例（WordPress ルート）:
 *   wp eval-file wp-content/themes/wazeka/scripts/import/import.php
 *
 * @package Wazeka
 */

// 直アクセス防止（ABSPATH 必須）.
if ( ! defined( 'ABSPATH' ) ) {
  exit;
}

// WP-CLI 専用（eval-file 以外では動かさない）.
if ( ! defined( 'WP_CLI' ) || ! WP_CLI ) {
  exit( 'This script must be executed with WP-CLI.' );
}

// 実際に「読む→チェック→保存」を行う処理が書いてあるファイルを読み込みます。
require_once __DIR__ . '/import-runner.php';

/**
 * Config ディレクトリ内のインポート種別 slug 一覧を返します（property, works など）.
 *
 * @return string[]
 */
function wazeka_import_discover_types() {
  // config フォルダ内の .php ファイルをすべて探します。
  $files = glob( __DIR__ . '/config/*.php' );

  // 探せなかったときは、空の一覧を返します。
  if ( ! is_array( $files ) ) {
    return array();
  }

  // ここに種類の名前（拡張子 .php を除いたファイル名）を入れていきます。
  $types = array();

  foreach ( $files as $file ) {
    // 例: property.php というファイル → property という名前.
    $types[] = basename( $file, '.php' );
  }

  // 名前順に並べ替えて、見やすくします。
  sort( $types );

  return $types;
}

/**
 * Slug に対応する config/*.php を require して設定配列を返します。
 *
 * @param string $slug 種別 slug（例: property）.
 * @return array<string, mixed>|null
 */
function wazeka_import_load_config( $slug ) {
  // パストラバーサル対策: slug は英数字と _ - のみ。
  $slug = preg_replace( '/[^a-z0-9_-]/', '', (string) $slug );

  if ( '' === $slug ) {
    return null;
  }

  // 読み込むファイルの場所: config フォルダ + 名前 + .php
  $path = __DIR__ . '/config/' . $slug . '.php';

  if ( ! is_readable( $path ) ) {
    return null;
  }

  // 設定ファイルは「return array(...);」だけの PHP なので、require すると配列がもらえます。
  $config = require $path;

  if ( ! is_array( $config ) ) {
    return null;
  }

  // 設定の中に slug が無ければ、ファイル名を slug として補います。
  if ( empty( $config['slug'] ) ) {
    $config['slug'] = $slug;
  }

  return $config;
}

// WAZEKA_IMPORT_TYPES が未定義なら config 内の全 slug をインポート。
$types = defined( 'WAZEKA_IMPORT_TYPES' ) ? WAZEKA_IMPORT_TYPES : wazeka_import_discover_types();

if ( ! is_array( $types ) || empty( $types ) ) {
  WP_CLI::error( 'インポート種別が指定されていません。config/*.php を確認してください。' );
}

foreach ( $types as $import_slug ) {
  $config = wazeka_import_load_config( $import_slug );

  if ( null === $config ) {
    WP_CLI::warning( '設定が見つかりません: ' . $import_slug );
    continue;
  }

  wazeka_import_run( $config );
}
