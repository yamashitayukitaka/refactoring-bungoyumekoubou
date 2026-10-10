<?php
/**
 * Theme helper functions.
 *
 * @package Wazeka
 */

if ( ! defined( 'ABSPATH' ) ) {
  exit;
}

define( 'IMG_URL', get_template_directory_uri() . '/dist/img' );

function wazeka_remove_archive_prefix( $title ) {
  return preg_replace( '/^アーカイブ: /', '', $title );
}
add_filter( 'get_the_archive_title', 'wazeka_remove_archive_prefix' );

function wazeka_remove_archive_span_tag( $title ) {
  return strip_tags( $title );
}
add_filter( 'get_the_archive_title', 'wazeka_remove_archive_span_tag' );

function wazeka_custom_excerpt_length( $length ) {
  return 20;
}
add_filter( 'excerpt_length', 'wazeka_custom_excerpt_length' );

function wazeka_kses_iframe( $html ) {
return wp_kses(
    $html,
    array(
      'iframe' => array(
        'src'             => true,
        'width'           => true,
        'height'          => true,
        'style'           => true,
        'allow'           => true,
        'allowfullscreen' => true,
        'loading'         => true,
        'referrerpolicy'  => true,
        'frameborder'     => true,
        'class'           => true,
      ),
      )
);
}

function wazeka_taxonomy_orderby_description( $orderby, $args ) {

  if ( isset( $args['orderby'] ) && 'description' === $args['orderby'] ) {
      $orderby = 'tt.description';
  }
  return $orderby;
}
add_filter( 'get_terms_orderby', 'wazeka_taxonomy_orderby_description', 10, 2 );
