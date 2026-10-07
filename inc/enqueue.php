<?php

if (!defined('ABSPATH')) {
  exit;
}

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
  if (is_page('about') || is_singular('staff')) {
    wp_enqueue_script(
        'wazeka-page',
        $js . '/about.js',
        array('jquery'),
        '1.0.0',
        true
    );
  }

  if (is_front_page()) {
    wp_enqueue_script(
        'wazeka-staff-slider',
        $js . '/staff-slider.js',
        array('jquery', 'slick-carousel'),
        '1.0.0',
        true
    );
  }

  if (is_front_page() || is_page(array('heig', 'rireve'))) {
    wp_enqueue_script(
        'wazeka-mv-slider',
        $js . '/mv-slider.js',
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
        array('jquery'),
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
      is_singular('works')
      || is_page_template(array('used.php', 'land.php', 'rental.php'))
      || is_page(array('heig', 'rireve', 'irohaie', 'model-house'))
      || is_front_page()
      || is_page($wazeka_location_pages)
      || is_post_type_archive('staff')
      || is_singular('staff')
  ) {
    wp_enqueue_script(
        'wazeka-thumb-slider',
        $js . '/thumb-slider.js',
        array('jquery', 'slick-carousel'),
        '1.0.0',
        true
    );
  }

  wp_enqueue_style('custom-style', get_template_directory_uri() . '/dist/css/style.css', array(), '1.0.0');

  if (
      wp_script_is('wazeka-thumb-slider', 'enqueued')
      || wp_script_is('wazeka-staff-slider', 'enqueued')
      || wp_script_is('wazeka-mv-slider', 'enqueued')
  ) {
    wp_enqueue_style('slick-carousel', 'https://cdnjs.cloudflare.com/ajax/libs/slick-carousel/1.9.0/slick.css', array(), '1.9.0');
    wp_enqueue_style('slick-carousel-theme', 'https://cdnjs.cloudflare.com/ajax/libs/slick-carousel/1.9.0/slick-theme.css', array(), '1.9.0');
  }
}

add_action('wp_enqueue_scripts', 'wazeka_scripts');
