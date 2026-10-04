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
  wp_enqueue_script(
      'wazeka-main',
      $js . '/main.js',
      array('jquery'),
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

  // LOCATION（js-commonSlick）: template-parts/common.php を読む固定ページ
  $wazeka_common_slick_pages = array(
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
      is_front_page()
      || is_page($wazeka_common_slick_pages)
      || is_post_type_archive('staff')
      || is_singular('staff')
  ) {
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
