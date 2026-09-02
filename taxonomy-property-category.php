<?php 
if ( ! defined( 'ABSPATH' ) ) exit;
get_header();
?>

<?php 
    $taxonomy = 'property-category';
    $mainQueryTerm = get_queried_object();
    $mainQueryTermName = $mainQueryTerm -> name;
    $mainQueryTermSlug = $mainQueryTerm -> slug;
    $tag = 'property-area';
  ?>

<main>

  <h2 class = "c-title--section u-mb50">
    土地・物件情報
  </h2>

  <?php $terms = get_terms($taxonomy, 
      [
      'hide_empty' => false,
      'parent' =>0,
      'orderby'=>'id',
      'order'=>'DESC',
      ]
    );?>
  
    <ul class = "c-term__list">
      <li class = "c-term__list__item">
        <a href = "<?php echo esc_url (get_post_type_archive_link('property')); ?>">
          すべて
        </a>
      </li>
      <?php if ($terms && !is_wp_error($terms)): ?>
      <?php foreach($terms as $term):?>
        <?php $termName = $term -> name;?>
        <li class = "c-term__list__item <?php if($mainQueryTermName === $termName):?> u-current <?php endif; ?>">
          <a href = "<?php echo esc_url (get_term_link($term)); ?>">
            <?php echo esc_html($term->name); ?>
          </a>
        </li>
      <?php endforeach;?>
      <?php endif; ?>
    </ul>

    <?php $propertyTags = get_terms($tag, 
        [
        'hide_empty' => false,
        'parent' =>0,
        'orderby'=>'id',
        'order'=>'ASC',
        ]
      );?>

    <ul class = "c-tag__list l-content--large">
      
      <li class = "c-tag__list__item">
        <a href = "<?php echo esc_url(home_url('property-category/' . $mainQueryTermSlug)); ?>" class = "js-allTab c-tag__list__link u-currentTab">すべて</a>
      </li>
      
      <?php if ($propertyTags && !is_wp_error($propertyTags)): ?>
      <?php foreach($propertyTags as $propertyTag):?>
        <?php $propertySlug = $propertyTag->slug ;?>
        <li class = "c-tag__list__item">
          <a href = "<?php echo esc_url(add_query_arg('property_category', $mainQueryTermSlug, get_term_link($propertySlug,$tag))); ?>" class = "js-tab c-tag__list__link">
            <?php echo esc_html($propertyTag->name); ?>
          </a>
        </li>
      <?php endforeach;?>
      <?php endif; ?>
    </ul>

  <section class = "l-content">
    <?php
      $paged = ( get_query_var('paged') ) ? get_query_var('paged') : 1;
      $args = array(
      'post_type' => 'property',
      'posts_per_page' =>6,
      'paged'=>$paged,
      'orderby' => 'menu_order',
      'order' => 'ASC',
      'tax_query' => array(
      array(
        'taxonomy' => $taxonomy,
        'field' => 'slug',
        'terms' => $mainQueryTermSlug,
        ),
      ),
    );?>

    <?php $myOuery = new WP_Query($args);?>
    <?php if ($myOuery->have_posts()): ?>
      <ul class = "c-cardList__list js-allswitch">
        <?php while ($myOuery->have_posts()) : $myOuery->the_post();?>
          <?php get_template_part('template-parts/property-loop'); ?>
        <?php endwhile;?>
      </ul>
    <?php endif;
    wp_reset_postdata();?>

    <?php if ($myOuery->max_num_pages > 1):?>
      <div class = "u-mb50">
        <?php wazeka_query_pagination($myOuery); ?>
      </div>
    <?php endif; ?>
    
  </section>

</main>

<?php get_footer(); ?>