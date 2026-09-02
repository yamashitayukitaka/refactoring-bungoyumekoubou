<?php 
if ( ! defined( 'ABSPATH' ) ) exit;

get_header(); ?>

<?php 
  $taxonomy = 'area';
  $tag = 'event-type';
  $mainQueryTerm = get_queried_object();
  $mainQueryTermName = $mainQueryTerm -> name;
  $mainQueryTermSlug = $mainQueryTerm -> slug;
?>

<?php
$lootSlug = sanitize_title((string) get_query_var('event_area'));
$paged = (get_query_var('paged')) ? get_query_var('paged') : 1;

if ($lootSlug) {
    $event = array(
        'post_type' => 'xo_event',
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
                'taxonomy' => 'area',
                'field' => 'slug',
                'terms' => $lootSlug,
            ),
        ),
    );
} else {
    $event = array(
        'post_type' => 'xo_event',
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
  イベント情報
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
          <a href = "<?php echo esc_url (get_post_type_archive_link('xo_event')); ?>">
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
          <a href = "<?php echo esc_url (get_post_type_archive_link('xo_event')); ?>">
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
  

  <?php $eventTags = get_terms($tag, 
      [
      'hide_empty' => false,
      'parent' =>0,
      'orderby'=>'id',
      'order'=>'DESC',
      ]
    );?>


  
    <ul class = "c-tag__list l-content--large">
      
    <?php if($lootSlug):?>
      <li class = "c-tag__list__item">
        <a href = "<?php echo esc_url(home_url('area/' . $lootSlug)); ?>" class = "js-allTab c-tag__list__link">すべて</a>
      </li>
    <?php else:?>
      <li class = "c-tag__list__item">
        <a href = "<?php echo esc_url(home_url('xo_event/')); ?>" class = "js-allTab c-tag__list__link">すべて</a>
      </li>
    <?php endif; ?>
      
      <?php if ($eventTags && !is_wp_error($eventTags)): ?>
      <?php foreach($eventTags as $eventTag):?>
        <?php $eventSlug = $eventTag->slug ;?>
          <li class = "c-tag__list__item">
            <a href = "<?php echo esc_url($lootSlug ? add_query_arg('event_area', $lootSlug, get_term_link($eventSlug,$tag)) : get_term_link($eventSlug,$tag)); ?>" class = "js-tab c-tag__list__link <?php if ($eventSlug === $mainQueryTermSlug):?>u-currentTab<?php endif; ?>">
              <?php echo esc_html($eventTag->name); ?>
            </a>
          </li>
      <?php endforeach;?>
      <?php endif; ?>
    </ul>

 

    

  <section class = "l-content">
    <?php $eventLoop = new WP_Query($event);?>
      <?php if ($eventLoop->have_posts()): ?>
        <ul class = "c-cardList__list js-allswitch">
          <?php while ($eventLoop->have_posts()) : $eventLoop->the_post();?>
            <?php get_template_part('template-parts/event-loop'); ?>
          <?php endwhile;?>
        </ul>
      <?php endif;
      wp_reset_postdata();?>

    <?php if ($eventLoop->max_num_pages > 1):?>
      <div class = "u-mb50">
        <?php wazeka_query_pagination($eventLoop); ?>
      </div>
    <?php endif; ?>

  </section>
  <?php get_template_part('template-parts/xo-event'); ?>
</main>
<?php get_footer(); ?>