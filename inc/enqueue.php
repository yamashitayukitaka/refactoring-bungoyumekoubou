<?php
/**
 * ページごとに読み込む CSS と JavaScript を指定する.
 *
 * @package Wazeka
 */

if ( ! defined( 'ABSPATH' ) ) {
  exit;
}

/**
 * 表示中のページに合わせて、テーマの JS と CSS を WordPress に読み込ませる.
 *
 * @return void
 */
function wazeka_scripts() {

  wp_enqueue_script( 'jquery' );

  wp_register_script( 'slick-carousel', 'https://cdnjs.cloudflare.com/ajax/libs/slick-carousel/1.9.0/slick.js', array( 'jquery' ), '1.9.0', true );
  $js = get_template_directory_uri() . '/dist/js';

wp_enqueue_script(
    'wazeka-common',
    $js . '/common.js',
    array(),
    '1.0.0',
    true
);
  if ( is_page( 'about' ) || is_singular( 'staff' ) ) {
    wp_enqueue_script(
        'wazeka-page',
        $js . '/about.js',
        array( 'jquery' ),
        '1.0.0',
        true
    );
  }

  if ( is_front_page() ) {
    wp_enqueue_script(
        'wazeka-staff-slider',
        $js . '/staff-slider.js',
        array( 'jquery', 'slick-carousel' ),
        '1.0.0',
        true
    );
  }

  if ( is_front_page() || is_page( array( 'heig', 'rireve' ) ) ) {
    wp_enqueue_script(
        'wazeka-mv-slider',
        $js . '/mv-slider.js',
        array( 'jquery', 'slick-carousel' ),
        '1.0.0',
        true
    );
  }

  if ( is_page( 'faq' ) ) {
    wp_enqueue_script(
        'wazeka-faq',
        $js . '/faq.js',
        array(),
        '1.0.0',
        true
    );
  }

  if ( is_page( 'recruit' ) ) {
    wp_enqueue_script(
        'wazeka-recruit',
        $js . '/recruit.js',
        array( 'jquery' ),
        '1.0.0',
        true
    );
  }

  // js-commonSlick（LOCATION）: template-parts/common.php / js-hasThumbSlider（ギャラリー）
  $wazeka_location_pages = array(
    'about',
    'after-support',
    'concept',
    'cost',
    'design',
    'faq',
    'flow',
    'maintenance',
    'model-house',
    'quality',
    'renovation',
  );

  if (
      is_singular( 'works' )
      || is_page_template( array( 'used.php', 'land.php', 'rental.php' ) )
      || is_page( array( 'heig', 'rireve', 'irohaie', 'model-house' ) )
      || is_front_page()
      || is_page( $wazeka_location_pages )
      || is_post_type_archive( 'staff' )
      || is_singular( 'staff' )
  ) {
    wp_enqueue_script(
        'wazeka-thumb-slider',
        $js . '/thumb-slider.js',
        array( 'jquery', 'slick-carousel' ),
        '1.0.0',
        true
    );
  }

  wp_enqueue_style( 'custom-style', get_template_directory_uri() . '/dist/css/style.css', array(), '1.0.0' );

wp_enqueue_style(
    'wazeka-google-fonts-noto',
    'https://fonts.googleapis.com/css2?family=Noto+Sans+JP:wght@100..900&family=Noto+Serif+JP:wght@200..900&display=swap',
    array(),
    null
);
wp_enqueue_style(
    'wazeka-google-fonts-inter',
    'https://fonts.googleapis.com/css2?family=Inter:slnt,wght@-10..0,100..900&display=swap',
    array(),
    null
);
wp_enqueue_style(
    'wazeka-google-fonts-noto-serif',
    'https://fonts.googleapis.com/css2?family=Noto+Serif+JP&display=swap',
    array(),
    null
);
wp_enqueue_style(
    'wazeka-google-fonts-roboto',
    'https://fonts.googleapis.com/css2?family=Roboto:ital,wght@0,100;0,300;0,400;0,500;0,700;0,900;1,100;1,300;1,400;1,500;1,700;1,900&display=swap',
    array(),
    null
);

  if ( is_front_page() || is_post_type_archive( 'xo_event' ) ) {
    wp_enqueue_style(
        'wazeka-wink-event-client',
        'https://bungoyumekoubou.winksys.jp/event/css/client_top.css',
        array(),
        null
    );
  }

  // WINKMARK LP INDEX 2: イベント一覧を #wink_event_list に差し込む JS.
  if ( is_front_page() ) {
    wp_enqueue_script(
        'wazeka-wink-event-top',
        'https://bungoyumekoubou.winksys.jp/event/event_top_js.php',
        array(),
        null,
        true
    );
  }

  if ( is_post_type_archive( 'xo_event' ) ) {
    wp_enqueue_script(
        'wazeka-wink-event-archive',
        'https://bungoyumekoubou.winksys.jp/event/eventpage_js.php',
        array(),
        null,
        true
    );
  }

  if (
      wp_script_is( 'wazeka-thumb-slider', 'enqueued' )
      || wp_script_is( 'wazeka-staff-slider', 'enqueued' )
      || wp_script_is( 'wazeka-mv-slider', 'enqueued' )
  ) {
    wp_enqueue_style( 'slick-carousel', 'https://cdnjs.cloudflare.com/ajax/libs/slick-carousel/1.9.0/slick.css', array(), '1.9.0' );
    wp_enqueue_style( 'slick-carousel-theme', 'https://cdnjs.cloudflare.com/ajax/libs/slick-carousel/1.9.0/slick-theme.css', array(), '1.9.0' );
  }
}

add_action( 'wp_enqueue_scripts', 'wazeka_scripts' );
