<?php
if (!defined('ABSPATH')) {
  exit;
}

define('IMG_URL', get_template_directory_uri() . '/dist/img');

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
add_filter('excerpt_length', 'custom_excerpt_length');

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
