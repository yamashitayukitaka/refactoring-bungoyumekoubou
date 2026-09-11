<?php
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
