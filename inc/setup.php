<?php
if (!defined('ABSPATH')) {
  exit;
}

function wazeka_theme()
{
  add_theme_support('post-thumbnails');
  add_theme_support('title-tag');
}

add_action('after_setup_theme', 'wazeka_theme');
