<?php

if (! defined('ABSPATH')) {
  exit;
}

get_header(); ?>

<?php
    $taxonomy = 'property-category';
    $mainQueryTerm = get_queried_object();
    $mainQueryTermName = $mainQueryTerm -> name;
    $mainQueryTermSlug = $mainQueryTerm -> slug;
    $tag = 'property-area';
?>

<?php
$lootSlug = sanitize_title((string) get_query_var('property_category'));
$paged = (get_query_var('paged')) ? get_query_var('paged') : 1;

if ($lootSlug) {
  $args = array(
      'post_type' => 'property',
      'posts_per_page' => 6,
      'paged' => $paged,
      'orderby' => 'menu_order',
      'order' => 'ASC',
      'tax_query' => array(
          'relation' => 'AND',
          array(
              'taxonomy' => $tag,
              'field' => 'slug',
              'terms' => $mainQueryTermSlug,
          ),
          array(
              'taxonomy' => 'property-category',
              'field' => 'slug',
              'terms' => $lootSlug,
          ),
      ),
  );
} else {
  $args = array(
      'post_type' => 'property',
      'posts_per_page' => 6,
      'paged' => $paged,
      'orderby' => 'menu_order',
      'order' => 'ASC',
      'tax_query' => array(
          array(
              'taxonomy' => $tag,
              'field' => 'slug',
              'terms' => $mainQueryTermSlug,
          ),
      ),
  );
}
?>
<main>

<h2 class = "c-title--section u-mb50">
  土地・物件情報
</h2>

<?php $terms = get_terms(
    $taxonomy,
    [
    'hide_empty' => false,
    'parent' => 0,
    'orderby' => 'id',
    'order' => 'DESC',
    ]
);?>

<?php if ($lootSlug) : ?>
  <ul class = "c-term__list">
    <li class = "c-term__list__item">
      <a href = "<?php echo esc_url(get_post_type_archive_link('property')); ?>">
        すべて
      </a>
    </li>
    <?php if ($terms && !is_wp_error($terms)) : ?>
      <?php foreach ($terms as $term) :?>
        <?php $termSlug = $term -> slug;?>
        <li class = "c-term__list__item <?php if ($lootSlug === $termSlug) :
          ?>u-current<?php
                                        endif; ?>">
          <a href = "<?php echo esc_url(get_term_link($term)); ?>">
            <?php echo esc_html($term->name); ?>
          </a>
        </li>
      <?php endforeach;?>
    <?php endif; ?>
  </ul>

<?php else :?>
  <ul class = "c-term__list">
    <li class = "c-term__list__item u-current">
      <a href = "<?php echo esc_url(get_post_type_archive_link('property')); ?>">
        すべて
      </a>
    </li>
    <?php if ($terms && !is_wp_error($terms)) : ?>
      <?php foreach ($terms as $term) :?>
        <?php $termSlug = $term -> slug;?>
        <li class = "c-term__list__item">
          <a href = "<?php echo esc_url(get_term_link($term)); ?>">
            <?php echo esc_html($term->name); ?>
          </a>
        </li>
      <?php endforeach;?>
    <?php endif; ?>
  </ul>

<?php endif; ?>

  <?php $propertyTags = get_terms(
      $tag,
      [
      'hide_empty' => false,
      'parent' => 0,
      'orderby' => 'id',
      'order' => 'ASC',
      ]
  );?>

  <ul class = "c-tag__list l-content--large">
    
  <?php if ($lootSlug) :?>
    <li class = "c-tag__list__item">
      <a href = "<?php echo esc_url(home_url('property-category/' . $lootSlug)); ?>" class = "c-tag__list__link">すべて</a>
    </li>
  <?php else :?>
    <li class = "c-tag__list__item">
      <a href = "<?php echo esc_url(home_url('property/')); ?>" class = "c-tag__list__link">すべて</a>
    </li>
  <?php endif; ?>
    
    <?php if ($propertyTags && !is_wp_error($propertyTags)) : ?>
      <?php foreach ($propertyTags as $propertyTag) :?>
        <?php $propertySlug = $propertyTag->slug ;?>
      <li class = "c-tag__list__item">
        <a href = "<?php echo esc_url($lootSlug ? add_query_arg('property_category', $lootSlug, get_term_link($propertySlug, $tag)) : get_term_link($propertySlug, $tag)); ?>" class = "js-tab c-tag__list__link <?php if ($propertySlug === $mainQueryTermSlug) :
          ?>u-currentTab<?php
                   endif; ?>">
          <?php echo esc_html($propertyTag->name); ?>
        </a>
      </li>
      <?php endforeach;?>
    <?php endif; ?>
  </ul>

  <section class = "l-content">
    <?php $myOuery = new WP_Query($args);?>
      <?php if ($myOuery->have_posts()) : ?>
        <ul class = "c-cardList js-allswitch">
          <?php while ($myOuery->have_posts()) :
            $myOuery->the_post();?>
            <?php get_template_part('template-parts/property-loop'); ?>
          <?php endwhile;?>
        </ul>
      <?php endif;
      wp_reset_postdata();?>
    
      <?php if ($myOuery->max_num_pages > 1) :?>
        <div class = "u-mb50">
          <?php wazeka_query_pagination($myOuery); ?>
        </div>
      <?php endif; ?>
  </section>

</main>

<?php get_footer(); ?>