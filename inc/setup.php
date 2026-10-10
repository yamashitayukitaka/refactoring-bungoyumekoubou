<?php
/**
 * テーマの基本機能を WordPress に登録する.
 *
 * @package Wazeka
 */

if ( ! defined( 'ABSPATH' ) ) {
  exit;
}

/**
 * アイキャッチ画像とブラウザのタイトル表示をテーマで使えるようにする.
 *
 * @return void
 */
function wazeka_theme() {
  add_theme_support( 'post-thumbnails' );
  add_theme_support( 'title-tag' );
}

add_action( 'after_setup_theme', 'wazeka_theme' );
