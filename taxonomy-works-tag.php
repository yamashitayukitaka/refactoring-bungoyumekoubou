<?php 

if ( ! defined( 'ABSPATH' ) ) exit;

get_header(); ?>

<?php 
  $taxonomy = 'works-type';
  $tag = 'works-tag';
  $mainQueryTerm = get_queried_object();
  $mainQueryTermName = $mainQueryTerm -> name;
  $mainQueryTermSlug = $mainQueryTerm -> slug;
?>

<?php
$lootSlug = sanitize_title((string) get_query_var('works_type'));
$paged = (get_query_var('paged')) ? get_query_var('paged') : 1;

if ($lootSlug) {
    $works = array(
        'post_type' => 'works',
        'posts_per_page' =>6,
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
                'taxonomy' => 'works-type',
                'field' => 'slug',
                'terms' => $lootSlug,
            ),
        ),
    );
} else {
    $works = array(
        'post_type' => 'works',
        'posts_per_page' =>6,
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
  施工事例
</h2>

<?php $terms = get_terms($taxonomy, 
    [
    'hide_empty' => false,
    'parent' =>0,
    'orderby'=>'id',
    'order'=>'DESC',
    ]
  );?>

<?php if ($lootSlug): ?>

  <ul class = "c-term__list">
    <li class = "c-term__list__item">
      <a href = "<?php echo esc_url (get_post_type_archive_link('works')); ?>">
        すべて
      </a>
    </li>
    <?php if ($terms && !is_wp_error($terms)): ?>
    <?php foreach($terms as $term):?>
      <?php $termSlug = $term -> slug;?>
        <li class = "c-term__list__item <?php if ($lootSlug === $termSlug):?>u-current<?php endif; ?>">
          <a href = "<?php echo esc_url (get_term_link($term)); ?>">
            <?php echo esc_html($term->name); ?>
          </a>
        </li>
    <?php endforeach;?>
    <?php endif; ?>
  </ul>

<?php else:?>

  <ul class = "c-term__list">
    <li class = "c-term__list__item u-current">
      <a href = "<?php echo esc_url (get_post_type_archive_link('works')); ?>">
        すべて
      </a>
    </li>
    <?php if ($terms && !is_wp_error($terms)): ?>
    <?php foreach($terms as $term):?>
      <?php $termSlug = $term -> slug;?>
        <li class = "c-term__list__item">
          <a href = "<?php echo esc_url (get_term_link($term)); ?>">
            <?php echo esc_html($term->name); ?>
          </a>
        </li>
    <?php endforeach;?>
    <?php endif; ?>
  </ul>

<?php endif; ?>



  <?php $worksTags = get_terms($tag, 
      [
      'hide_empty' => false,
      'parent' =>0,
      'orderby'=>'id',
      'order'=>'ASC',
      ]
    );?>

  <?php if($worksTags && !is_wp_error($worksTags)):?>

    <ul class = "c-tag__list l-content--large">
      
      <?php if($lootSlug):?>
        <li class = "c-tag__list__item">
          <a href = "<?php echo esc_url(home_url('works-type/' . $lootSlug)); ?>" class = "js-allTab c-tag__list__link">すべて</a>
        </li>
      <?php else: ?>
        <li class = "c-tag__list__item">
          <a href = "<?php echo esc_url(home_url('works/')); ?>" class = "js-allTab c-tag__list__link">すべて</a>
        </li>
      <?php endif; ?>
      
      <?php foreach($worksTags as $worksTag):?>
        <?php $worksSlug = $worksTag->slug ;?>
        <li class = "c-tag__list__item">
          <a href = "<?php echo esc_url($lootSlug ? add_query_arg('works_type', $lootSlug, get_term_link($worksSlug,$tag)) : get_term_link($worksSlug,$tag)); ?>" class = "js-tab c-tag__list__link <?php if ($worksSlug === $mainQueryTermSlug):?>u-currentTab<?php endif; ?>">
            <?php echo esc_html($worksTag->name); ?>
          </a>
        </li>
      <?php endforeach;?>
    </ul>

  <?php endif; ?>

  <section class = "l-content">
    <?php $worksLoop = new WP_Query($works);?>
      <?php if ($worksLoop->have_posts()): ?>
        <ul class = "c-cardList__list js-allswitch">
          <?php while ($worksLoop->have_posts()) : $worksLoop->the_post();?>
            <?php get_template_part('template-parts/works-loop'); ?>
          <?php endwhile;?>
        </ul>
      <?php endif;
      wp_reset_postdata();?>
    
      <?php if ($worksLoop->max_num_pages > 1):?>
        <div class = "u-mb50">
          <?php wazeka_query_pagination($worksLoop); ?>
        </div>
      <?php endif; ?>
  </section>

</main>

<?php get_footer(); ?>