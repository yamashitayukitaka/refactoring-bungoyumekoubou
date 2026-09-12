<?php
require_once get_theme_file_path('/inc/enqueue.php');
require_once get_theme_file_path('/inc/post-types.php');
require_once get_theme_file_path('/inc/acf.php');
require_once get_theme_file_path('/inc/query.php');
require_once get_theme_file_path('/inc/pagination.php');

function wazeka_theme()
{
  add_theme_support('post-thumbnails');
  add_theme_support('title-tag');
}

add_action('after_setup_theme', 'wazeka_theme');

function remove_archive_prefix($title)
{
  return preg_replace('/^アーカイブ: /', '', $title);
}
add_filter('get_the_archive_title', 'remove_archive_prefix');

function remove_archive_span_tag($title)
{
  return strip_tags($title);
}
add_filter('get_the_archive_title', 'remove_archive_span_tag');

function custom_excerpt_length($length)
{
  return 20;
}
add_filter('excerpt_length', 'custom_excerpt_length', 999);

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

define('IMG_URL', get_template_directory_uri() . '/dist/img');

function wazeka_kses_iframe($html)
{
  return wp_kses(
    $html,
    array(
      'iframe' => array(
        'src' => true,
        'width' => true,
        'height' => true,
        'style' => true,
        'allow' => true,
        'allowfullscreen' => true,
        'loading' => true,
        'referrerpolicy' => true,
        'frameborder' => true,
        'class' => true,
      ),
    )
  );
}

function taxonomy_orderby_description( $orderby, $args ) {

  if ( $args['orderby'] == 'description' ) {
      $orderby = 'tt.description';
  }
  return $orderby;
}
add_filter( 'get_terms_orderby', 'taxonomy_orderby_description', 10, 2 );
