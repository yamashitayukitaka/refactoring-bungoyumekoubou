<?php 
if ( ! defined( 'ABSPATH' ) ) exit;
get_header();
?>
<?php 
  $taxonomy = 'works-type';
  $postType = 'works';
  $tag = 'works-tag';
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
 
  <ul class = "c-term__list">
    <li class = "c-term__list__item u-current">
      <a href = "<?php echo esc_url (get_post_type_archive_link('works')); ?>">
        すべて
      </a>
    </li>
    <?php if ($terms && !is_wp_error($terms)): ?>
    <?php foreach($terms as $term):?>
      <li class = "c-term__list__item">
        <a href = "<?php echo esc_url (get_term_link($term)); ?>">
          <?php echo esc_html($term->name); ?>
        </a>
      </li>
    <?php endforeach;?>
    <?php endif; ?>
  </ul>

 
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
        
        <li class = "c-tag__list__item">
          <a href = "#" class = "js-allTab c-tag__list__link u-currentTab">すべて</a>
        </li>
        
        <?php foreach($worksTags as $worksTag):?>
          <?php $worksSlug = $worksTag->slug ;?>
          <li class = "c-tag__list__item">
            <a href = "<?php echo esc_url(get_term_link($worksSlug,$tag)); ?>" class = "js-tab c-tag__list__link">
              <?php echo esc_html($worksTag->name); ?>
            </a>
          </li>
        <?php endforeach;?>
      </ul>

    <?php endif; ?>
    
    <section class = "l-content">
    <?php
      $paged = ( get_query_var('paged') ) ? get_query_var('paged') : 1;
      $works = array(
      'post_type' => 'works',
      'posts_per_page' => 7,
      'paged'=>$paged,
      'orderby' => 'menu_order',
      'order' => 'ASC',
    );?>
    <?php $worksLoop = new WP_Query($works);?>
    <?php if ($worksLoop->have_posts()): ?>
      <ul class = "p-content__list js-allswitch">
        <?php while ($worksLoop->have_posts()) : $worksLoop->the_post();?>
          <?php get_template_part('works-loop','works'); ?>
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