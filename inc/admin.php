<?php
/**
 * 管理画面の見た目やメニューを調整する.
 *
 * @package Wazeka
 */

if ( ! defined( 'ABSPATH' ) ) {
  exit;
}

if ( is_admin_bar_showing() ) {
add_action(
    'wp_head',
    function () {
    echo '<style type="text/css">
            body {
                margin-top: -32px !important;
            }
        </style>';
    }
);
}

/**
 * 管理画面の左メニューから「投稿」を非表示にする.
 *
 * @return void
 */
function wazeka_remove_default_post_type() {
  remove_menu_page( 'edit.php' );
}
add_action( 'admin_menu', 'wazeka_remove_default_post_type' );

/**
 * 画面上部の管理バーから「新規投稿」を非表示にする.
 *
 * @return void
 */
function wazeka_remove_admin_bar_new_post() {
  global $wp_admin_bar;
  $wp_admin_bar->remove_node( 'new-post' );
}
add_action( 'wp_before_admin_bar_render', 'wazeka_remove_admin_bar_new_post' );
