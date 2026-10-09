<?php
if (! defined('ABSPATH')) {
  exit;
}
get_header();
?>
  <?php
    $taxonomy = 'works-type';
    $main_query_term = get_queried_object();
    $main_query_term_name = $main_query_term -> name;
    $main_query_term_slug = $main_query_term -> slug;
    $tag = 'works-tag';
  ?>

<main>

  <h2 class = "c-title--section u-mb50">
    施工事例
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
  
    <ul class = "c-term__list">
      <li class = "c-term__list__item">
        <a href = "<?php echo esc_url(get_post_type_archive_link('works')); ?>">
          すべて
        </a>
      </li>
      <?php if ($terms && !is_wp_error($terms)) : ?>
        <?php foreach ($terms as $term) :?>
          <?php $term_name = $term -> name;?>
        <li class = "c-term__list__item <?php if ($main_query_term_name === $term_name) :
          ?> u-current <?php
                                        endif; ?>">
          <a href = "<?php echo esc_url(get_term_link($term)); ?>">
            <?php echo esc_html($term->name); ?>
          </a>
        </li>
        <?php endforeach;?>
      <?php endif; ?>
    </ul>
    
    <?php $works_tags = get_terms(
        $tag,
        [
        'hide_empty' => false,
        'parent' => 0,
        'orderby' => 'id',
        'order' => 'ASC',
        ]
    );?>

    <?php if ($works_tags && !is_wp_error($works_tags)) :?>
      <ul class = "c-tag__list l-content--large">
        
        <li class = "c-tag__list__item">
          <a href = "<?php echo esc_url(home_url('works-type/' . $main_query_term_slug)); ?>" class = "js-allTab c-tag__list__link u-currentTab">すべて</a>
        </li>
        
        <?php foreach ($works_tags as $works_tag) :?>
          <?php $works_slug = $works_tag->slug ;?>
          <li class = "c-tag__list__item">
            <a href = "<?php echo esc_url(add_query_arg('works_type', $main_query_term_slug, get_term_link($works_slug, $tag))); ?>" class = "js-tab c-tag__list__link">
              <?php echo esc_html($works_tag->name); ?>
            </a>
          </li>
        <?php endforeach;?>
      </ul>

    <?php endif;?>

  <section class = "l-content">
    <?php
      $paged = ( get_query_var('paged') ) ? get_query_var('paged') : 1;
      $works = array(
      'post_type' => 'works',
      'posts_per_page' => 6,
      'paged' => $paged,
      'orderby' => 'menu_order',
      'order' => 'ASC',
      'tax_query' => array(
      array(
        'taxonomy' => $taxonomy,
        'field' => 'slug',
        'terms' => $main_query_term_slug,
        ),
      ),
      );?>
      
    <?php $works_loop = new WP_Query($works);?>
    <?php if ($works_loop->have_posts()) : ?>
      <ul class = "c-cardList js-allswitch">
        <?php while ($works_loop->have_posts()) :
          $works_loop->the_post();?>
          <?php get_template_part('template-parts/works-loop'); ?>
        <?php endwhile;?>
      </ul>
    <?php endif;
    wp_reset_postdata();?>

    <?php if ($works_loop->max_num_pages > 1) :?>
      <div class = "u-mb50">
        <?php wazeka_query_pagination($works_loop); ?>
      </div>
    <?php endif; ?>
    
  </section>
   
</main>

<?php get_footer(); ?>