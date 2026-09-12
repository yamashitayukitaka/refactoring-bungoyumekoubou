<?php
if (!defined('ABSPATH')) {
  exit;
}

if (function_exists('acf_add_options_page')) {
  acf_add_options_page(array(
    'page_title'    => 'サイト全体管理',
    'menu_title'    => 'サイト全体管理',
    'menu_slug'     => 'theme-top-setting',
    'capability'    => 'edit_posts',
    'redirect'      => false
  ));
}
