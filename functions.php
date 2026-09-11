<?php
function wazeka_scripts()
{

  wp_enqueue_script('jquery');

  wp_register_script('slick-carousel', 'https://cdnjs.cloudflare.com/ajax/libs/slick-carousel/1.9.0/slick.js', array('jquery'), '1.9.0', true);
  $js = get_template_directory_uri() . '/dist/js';

  wp_enqueue_script(
    'wazeka-common',
    $js . '/common.js',
    array(),
    '1.0.0',
    true
  );
  wp_enqueue_script(
    'wazeka-main',
    $js . '/main.js',
    array('jquery'),
    '1.0.0',
    true
  );
  if (is_front_page()) {
    wp_enqueue_script(
      'wazeka-top',
      $js . '/top.js',
      array('jquery'),
      '1.0.0',
      true
    );
  }
  if (is_page('about') || is_singular('staff')) {
    wp_enqueue_script(
      'wazeka-page',
      $js . '/about.js',
      array('jquery'),
      '1.0.0',
      true
    );
  }

  if (is_singular('works') || is_page_template(array('used.php', 'land.php', 'rental.php')) || is_page(array('heig', 'rireve', 'irohaie', 'model-house'))) {
    wp_enqueue_script(
      'wazeka-has-thumb-slider',
      $js . '/hasThumbSlider.js',
      array('jquery', 'slick-carousel'),
      '1.0.0',
      true
    );
  }

  if (is_page(array('about', 'recruit'))) {
    wp_enqueue_script(
      'wazeka-timeline',
      $js . '/test.js',
      array('jquery'),
      '1.0.0',
      true
    );
  }

  if (is_front_page()) {
    wp_enqueue_script(
      'wazeka-staff-slider',
      $js . '/staffSlider.js',
      array('jquery', 'slick-carousel'),
      '1.0.0',
      true
    );
  }

  if (is_page('faq')) {
    wp_enqueue_script(
      'wazeka-faq',
      $js . '/faq.js',
      array(),
      '1.0.0',
      true
    );
  }

  if (is_page('recruit')) {
    wp_enqueue_script(
      'wazeka-recruit',
      $js . '/recruit.js',
      array(),
      '1.0.0',
      true
    );
  }

  if (is_front_page() || is_page(array('heig', 'rireve')) || is_post_type_archive('staff') || is_singular('staff')) {
    wp_enqueue_script(
      'wazeka-common-slick',
      $js . '/commonSlick.js',
      array('jquery', 'slick-carousel'),
      '1.0.0',
      true
    );
  }

  if (is_front_page() || is_post_type_archive('works') || is_tax(array('works-type', 'works-tag')) || is_singular(array('works', 'staff', 'xo_event')) || is_page(array('heig', 'rireve', 'irohaie', 'recruit'))) {
    wp_enqueue_script(
      'wazeka-after-loop',
      $js . '/afterWordpressLoop.js',
      array('jquery', 'slick-carousel'),
      '1.0.0',
      true
    );
  }

  if (is_singular('xo_event')) {
    wp_enqueue_script(
      'wazeka-booking',
      $js . '/booking-package.js',
      array('jquery'),
      '1.0.0',
      true
    );
  }

  wp_enqueue_style('custom-style', get_template_directory_uri() . '/dist/css/style.css', array(), '1.0.0');
  wp_enqueue_style('ichikawa-style', get_template_directory_uri() . '/src/ichikawa.css', array(), '1.0.0');
  wp_enqueue_style('tamura-style', get_template_directory_uri() . '/src/tamura.css', array(), '1.0.0');

  if (is_page(array('about', 'recruit'))) {
    wp_enqueue_style('test-style', get_template_directory_uri() . '/src/test.css', array(), '1.0.0');
  }

  if (
    wp_script_is('wazeka-has-thumb-slider', 'enqueued')
    || wp_script_is('wazeka-staff-slider', 'enqueued')
    || wp_script_is('wazeka-common-slick', 'enqueued')
    || wp_script_is('wazeka-after-loop', 'enqueued')
  ) {
    wp_enqueue_style('slick-carousel', 'https://cdnjs.cloudflare.com/ajax/libs/slick-carousel/1.9.0/slick.css', array(), '1.9.0');
    wp_enqueue_style('slick-carousel-theme', 'https://cdnjs.cloudflare.com/ajax/libs/slick-carousel/1.9.0/slick-theme.css', array(), '1.9.0');
  }
}

add_action('wp_enqueue_scripts', 'wazeka_scripts');

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

function wazeka_register_post_types()
{
  $post_types = array(
    'works' => array(
      'label' => '施工事例',
      'supports' => array('title', 'editor', 'thumbnail', 'page-attributes'),
    ),
    'property' => array(
      'label' => '土地・物件',
      'supports' => array('title', 'editor', 'thumbnail'),
    ),
    'blog' => array(
      'label' => 'ブログ',
      'supports' => array('title', 'editor', 'thumbnail'),
    ),
    'staff' => array(
      'label' => 'スタッフ',
      'supports' => array('title', 'editor', 'thumbnail', 'page-attributes'),
    ),
  );

  foreach ($post_types as $slug => $config) {
    register_post_type($slug, array(
      'label' => $config['label'],
      'labels' => array(
        'name' => $config['label'],
        'singular_name' => $config['label'],
      ),
      'public' => true,
      'publicly_queryable' => true,
      'show_ui' => true,
      'show_in_rest' => true,
      'has_archive' => true,
      'show_in_menu' => true,
      'show_in_nav_menus' => true,
      'delete_with_user' => false,
      'exclude_from_search' => false,
      'capability_type' => 'post',
      'map_meta_cap' => true,
      'hierarchical' => false,
      'can_export' => false,
      'rewrite' => array('slug' => $slug, 'with_front' => true),
      'query_var' => true,
      'supports' => $config['supports'],
    ));
  }
}
add_action('init', 'wazeka_register_post_types');

function wazeka_register_taxonomies()
{
  $taxonomies = array(
    'works-type' => array(
      'label' => '施工種別',
      'post_types' => array('works'),
      'hierarchical' => true,
    ),
    'works-tag' => array(
      'label' => '施工タグ',
      'post_types' => array('works'),
      'hierarchical' => false,
    ),
    'property-category' => array(
      'label' => '物件種別',
      'post_types' => array('property'),
      'hierarchical' => true,
    ),
    'property-area' => array(
      'label' => '物件エリア',
      'post_types' => array('property'),
      'hierarchical' => false,
    ),
    'department' => array(
      'label' => '部署',
      'post_types' => array('staff'),
      'hierarchical' => true,
    ),
  );

  foreach ($taxonomies as $slug => $config) {
    register_taxonomy($slug, $config['post_types'], array(
      'label' => $config['label'],
      'labels' => array(
        'name' => $config['label'],
        'singular_name' => $config['label'],
      ),
      'public' => true,
      'publicly_queryable' => true,
      'hierarchical' => $config['hierarchical'],
      'show_ui' => true,
      'show_in_menu' => true,
      'show_in_nav_menus' => true,
      'query_var' => true,
      'rewrite' => array(
        'slug' => $slug,
        'with_front' => true,
        'hierarchical' => $config['hierarchical'],
      ),
      'show_admin_column' => false,
      'show_in_rest' => true,
      'show_tagcloud' => false,
      'show_in_quick_edit' => false,
      'sort' => false,
    ));
  }
}
add_action('init', 'wazeka_register_taxonomies');