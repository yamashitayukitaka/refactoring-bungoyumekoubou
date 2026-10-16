<?php
/**
 * カスタムフィールド（ACF）のオプション画面を追加する.
 *
 * @package Wazeka
 */

if ( ! defined( 'ABSPATH' ) ) {
  exit;
}

/**
 * オプションページ「サイト全体管理」を登録する.
 * オプションページ登録をWordPress全体の初期化処理（init）が完了したタイミングで実行する。
 *
 * @return void
 */
function wazeka_register_acf_options_page() {
  if ( function_exists( 'acf_add_options_page' ) ) {
    acf_add_options_page(
        array(
        'page_title' => 'サイト全体管理',
        'menu_title' => 'サイト全体管理',
        'menu_slug'  => 'theme-top-setting',
        'capability' => 'edit_posts',
        'redirect'   => false,
        )
    );
  }
}
add_action( 'init', 'wazeka_register_acf_options_page' );
