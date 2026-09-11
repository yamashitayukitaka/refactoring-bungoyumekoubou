<?php
require_once get_theme_file_path('/inc/enqueue.php');
require_once get_theme_file_path('/inc/post-types.php');

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

function custom_search_filter($query)
{
  if ($query->is_search && !is_admin()) {
    $query->set('post_type', array('blog'));
  }
  return $query;
}
add_filter('pre_get_posts', 'custom_search_filter');

function custom_search_pagination($query)
{
  if ($query->is_search && !is_admin()) {
    $query->set('posts_per_page', 5);
    $query->set('paged', get_query_var('paged') ? get_query_var('paged') : 1);
  }
  return $query;
}
add_filter('pre_get_posts', 'custom_search_pagination');

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

if (function_exists('acf_add_options_page')) {
  acf_add_options_page(array(
    'page_title'    => 'サイト全体管理',
    'menu_title'    => 'サイト全体管理',
    'menu_slug'     => 'theme-top-setting',
    'capability'    => 'edit_posts',
    'redirect'      => false
  ));
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

function wazeka_query_vars($vars)
{
  $vars[] = 'works_type';
  $vars[] = 'property_category';
  $vars[] = 'event_area';
  return $vars;
}
add_filter('query_vars', 'wazeka_query_vars');

function wazeka_query_pagination($query)
{
  if (!$query instanceof WP_Query || $query->max_num_pages <= 1) {
    return;
  }

  $big = 999999999;
  $links = paginate_links(array(
    'base'    => str_replace($big, '%#%', esc_url(get_pagenum_link($big))),
    'format'  => '?paged=%#%',
    'current' => max(1, (int) get_query_var('paged')),
    'total'   => $query->max_num_pages,
    'echo'    => false,
  ));
  if ($links === null || $links === '') {
    return;
  }
  echo '<nav class="c-pagination">' . $links . '</nav>';
}
