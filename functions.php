<?php
require_once get_theme_file_path('/inc/enqueue.php');
require_once get_theme_file_path('/inc/post-types.php');
require_once get_theme_file_path('/inc/acf.php');
require_once get_theme_file_path('/inc/query.php');
require_once get_theme_file_path('/inc/pagination.php');
require_once get_theme_file_path('/inc/helpers.php');

function wazeka_theme()
{
  add_theme_support('post-thumbnails');
  add_theme_support('title-tag');
}

add_action('after_setup_theme', 'wazeka_theme');

if (is_admin_bar_showing()) {
  add_action('wp_head', function () {
    echo '<style type="text/css">
            body {
                margin-top: -32px !important;
            }
        </style>';
  });
}

function remove_default_post_type()
{
  remove_menu_page('edit.php');
}
add_action('admin_menu', 'remove_default_post_type');

function remove_admin_bar_new_post()
{
  global $wp_admin_bar;
  $wp_admin_bar->remove_node('new-post');
}
add_action('wp_before_admin_bar_render', 'remove_admin_bar_new_post');
