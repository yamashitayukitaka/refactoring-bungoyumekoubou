<?php
function wazeka_scripts()
{

  wp_enqueue_script('jquery');

  wp_enqueue_script('slick-carousel', 'https://cdnjs.cloudflare.com/ajax/libs/slick-carousel/1.9.0/slick.js', array('jquery'), '1.9.0', true);

  wp_enqueue_script('vegas-script', 'https://cdnjs.cloudflare.com/ajax/libs/vegas/2.4.4/vegas.min.js', array('jquery'), '2.4.4', true);
  wp_enqueue_script(
    'wazeka-common',
    get_template_directory_uri() . '/dist/js/main.js',
    array(),
    '1.0.0',
    true
  );
  if (is_front_page()) {
    wp_enqueue_script(
      'wazeka-top',
      get_template_directory_uri() . '/dist/js/top.js',
      array(),
      '1.0.0',
      true
    );
  }
  // if (is_singular('xo_event')) {
  //   wp_enqueue_script(
  //     'wazeka-event',
  //     get_template_directory_uri() . '/dist/js/booking-package.js',
  //     array(),
  //     '1.0.0',
  //     true
  //   );
  //}
  if (is_page('about') || is_post_type_archive('staff') || is_singular('staff') || is_front_page()) {
    wp_enqueue_script(
      'wazeka-page',
      get_template_directory_uri() . '/dist/js/about.js',
      array(),
      '1.0.0',
      true
    );
  }

  // defer属性を付与する
  wp_script_add_data('wazeka-common', 'defer', true);
  wp_script_add_data('wazeka-top', 'defer', true);
  wp_script_add_data('wazeka-event', 'defer', true);
  wp_script_add_data('wazeka-page', 'defer', true);

  //css読み込み
  wp_enqueue_style('custom-style', get_template_directory_uri() . '/src/style.css', array(), '1.0.0');
  wp_enqueue_style('ichikawa-style', get_template_directory_uri() . '/src/ichikawa.css', array(), '1.0.0');
  wp_enqueue_style('tamura-style', get_template_directory_uri() . '/src/tamura.css', array(), '1.0.0');
  wp_enqueue_style('test-style', get_template_directory_uri() . '/src/test.css', array(), '1.0.0');

  wp_enqueue_style('vegas-style', 'https://cdnjs.cloudflare.com/ajax/libs/vegas/2.5.4/vegas.css', array(), '2.5.4');

  wp_enqueue_style('slick-carousel', 'https://cdnjs.cloudflare.com/ajax/libs/slick-carousel/1.9.0/slick.css', array(), '1.9.0');
  wp_enqueue_style('slick-carousel-theme', 'https://cdnjs.cloudflare.com/ajax/libs/slick-carousel/1.9.0/slick-theme.css', array(), '1.9.0');

  if (is_post_type_archive(array('works','xo_event','property')) || is_front_page()) {
    wp_enqueue_style(
      'wazeka-works-style',
      get_template_directory_uri() .'/src/content-first.css',
      array(),
      '1.0.0'
    ); 
  } 
}//cssのときはtrueを削除しないと、パスが通らない

add_action('wp_enqueue_scripts', 'wazeka_scripts');

//サムネイル有効化
function irodori_theme()
{
  add_theme_support('post-thumbnails');
}

add_action('after_setup_theme', 'irodori_theme');

//the_archive_titleで表示されるアーカイブという記述を削除
function remove_archive_prefix($title)
{
  return preg_replace('/^アーカイブ: /', '', $title);
}
add_filter('get_the_archive_title', 'remove_archive_prefix');

//the_archive_titleで表示されるspanタグを削除
function remove_archive_span_tag($title)
{
  return strip_tags($title); // タグを削除して返す
}
add_filter('get_the_archive_title', 'remove_archive_span_tag');

//search.phpで検索結果の表示のためのループはメインクエリ、メインループを使用するので、制御したい場合は、
//サブループを使用せずに、functions.phpでフィルターフックを使用する
//seach.phpの結果表示をカスタム投稿タイプblogに制限する
function custom_search_filter($query)
{
  if ($query->is_search && !is_admin()) {
    $query->set('post_type', array('blog'));
  }
  return $query;
}
add_filter('pre_get_posts', 'custom_search_filter');

//seach.phpでページネーションが使用できるようにpagedを設定する。
//1ページの表示件数を3件に設定する
function custom_search_pagination($query)
{
  if ($query->is_search && !is_admin()) {
    $query->set('posts_per_page', 5); // 1ページあたりの投稿数
    $query->set('paged', get_query_var('paged') ? get_query_var('paged') : 1);
  }
  return $query;
}
add_filter('pre_get_posts', 'custom_search_pagination');

//the_excerptで表示される文字数を20文字に設定
function custom_excerpt_length($length)
{
  return 20; // 20文字に設定する場合
}
add_filter('excerpt_length', 'custom_excerpt_length', 999);

//アドミンバーが表示されたときの余白を消す
if (is_admin_bar_showing()) {
  // Admin Barの余白を削除するスタイルをbody要素に追加
  add_action('wp_head', function () {
    echo '<style type="text/css">
            body {
                margin-top: -32px !important;
            }
        </style>';
  });
}

//自動出力されるｐタグを出力させない
function custom_remove_paragraph_from_content($content)
{
  $content = preg_replace('/<p>/', '', $content);
  $content = preg_replace('/<\/p>/', '', $content);
  return $content;
}
add_filter('the_content', 'custom_remove_paragraph_from_content');

if (function_exists('acf_add_options_page')) {
  acf_add_options_page(array(
    'page_title'    => 'サイト全体管理',
    'menu_title'    => 'サイト全体管理',
    'menu_slug'     => 'theme-top-setting',
    'capability'    => 'edit_posts',
    'redirect'      => false
  ));
}


//デフォルトの投稿を削除
function remove_default_post_type()
{
  remove_menu_page('edit.php'); // 投稿メニューを削除
}
add_action('admin_menu', 'remove_default_post_type');

function remove_admin_bar_new_post()
{
  global $wp_admin_bar;
  $wp_admin_bar->remove_node('new-post');
}
add_action('wp_before_admin_bar_render', 'remove_admin_bar_new_post');

function my_custom_styles()
{
  wp_enqueue_style('custom-style', get_template_directory_uri() . '/css/custom-style.css');
}
add_action('wp_enqueue_scripts', 'my_custom_styles');

define('IMG_URL', get_template_directory_uri() . '/dist/img');

function enqueue_swiper_assets()
{
  wp_enqueue_style('swiper-css', 'https://unpkg.com/swiper/swiper-bundle.min.css');

  wp_enqueue_script('swiper-js', 'https://unpkg.com/swiper/swiper-bundle.min.js', array(), null, true);
}
add_action('wp_enqueue_scripts', 'enqueue_swiper_assets');

function taxonomy_orderby_description( $orderby, $args ) {

  if ( $args['orderby'] == 'description' ) {
      $orderby = 'tt.description';
  }
  return $orderby;
}
add_filter( 'get_terms_orderby', 'taxonomy_orderby_description', 10, 2 );
