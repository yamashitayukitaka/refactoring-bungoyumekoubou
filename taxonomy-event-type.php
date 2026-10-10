<?php
if ( ! defined( 'ABSPATH' ) ) {
  exit;
}

get_header(); ?>

<?php
  $local_taxonomy             = 'area';
  $local_tag                  = 'event-type';
  $main_query_term      = get_queried_object();
  $main_query_term_name = $main_query_term->name;
  $main_query_term_slug = $main_query_term->slug;
?>

<?php
$loot_slug = sanitize_title( (string) get_query_var( 'event_area' ) );
$local_paged     = ( get_query_var( 'paged' ) ) ? get_query_var( 'paged' ) : 1;

if ( $loot_slug ) {
    $event = array(
        'post_type'      => 'xo_event',
        'posts_per_page' => 6,
        'paged'          => $local_paged,
        'orderby'        => 'menu_order',
        'order'          => 'ASC',
        'tax_query'      => array(
            'relation' => 'AND',
            array(
                'taxonomy' => $local_tag,
                'field'    => 'slug',
                'terms'    => $main_query_term_slug,
            ),
            array(
                'taxonomy' => 'area',
                'field'    => 'slug',
                'terms'    => $loot_slug,
            ),
        ),
    );
} else {
    $event = array(
        'post_type'      => 'xo_event',
        'posts_per_page' => 6,
        'paged'          => $local_paged,
        'orderby'        => 'menu_order',
        'order'          => 'ASC',
        'tax_query'      => array(
            array(
                'taxonomy' => $local_tag,
                'field'    => 'slug',
                'terms'    => $main_query_term_slug,
            ),
        ),
    );
}
?>
<main>

<h2 class = "c-title--section u-mb50">
  イベント情報
</h2>

<?php $terms = get_terms(
    $local_taxonomy,
    [
    'hide_empty' => false,
    'parent'     => 0,
    'orderby'    => 'id',
    'order'      => 'DESC',
    ]
);?>

  <?php if ( $loot_slug ) : ?>
      <ul class = "c-term__list">
        <li class = "c-term__list__item">
          <a href = "<?php echo esc_url( get_post_type_archive_link( 'xo_event' ) ); ?>">
            すべて
          </a>
        </li>
        <?php if ( $terms && ! is_wp_error( $terms ) ) : ?>
          <?php foreach ( $terms as $local_term ) :?>
            <?php $term_slug = $local_term->slug;?>
            <li class = "c-term__list__item <?php if ( $loot_slug === $term_slug ) :
              ?>u-current<?php
                                            endif; ?>">
              <a href = "<?php echo esc_url( get_term_link( $local_term ) ); ?>">
                <?php echo esc_html( $local_term->name ); ?>
              </a>
            </li>
          <?php endforeach;?>
        <?php endif; ?>
      </ul>

  <?php else : ?>
      <ul class = "c-term__list">
        <li class = "c-term__list__item u-current">
          <a href = "<?php echo esc_url( get_post_type_archive_link( 'xo_event' ) ); ?>">
            すべて
          </a>
        </li>
        <?php if ( $terms && ! is_wp_error( $terms ) ) : ?>
          <?php foreach ( $terms as $local_term ) :?>
            <?php $term_slug = $local_term->slug;?>
            <li class = "c-term__list__item">
              <a href = "<?php echo esc_url( get_term_link( $local_term ) ); ?>">
                <?php echo esc_html( $local_term->name ); ?>
              </a>
            </li>
          <?php endforeach;?>
        <?php endif; ?>
      </ul>
    
  <?php endif; ?>
  

<?php $event_tags = get_terms(
    $local_tag,
    [
      'hide_empty' => false,
      'parent'     => 0,
      'orderby'    => 'id',
      'order'      => 'DESC',
      ]
);?>


  
    <ul class = "c-tag__list l-content--large">
      
    <?php if ( $loot_slug ) :?>
      <li class = "c-tag__list__item">
        <a href = "<?php echo esc_url( home_url( 'area/' . $loot_slug ) ); ?>" class = "js-allTab c-tag__list__link">すべて</a>
      </li>
    <?php else : ?>
      <li class = "c-tag__list__item">
        <a href = "<?php echo esc_url( home_url( 'xo_event/' ) ); ?>" class = "js-allTab c-tag__list__link">すべて</a>
      </li>
    <?php endif; ?>
      
      <?php if ( $event_tags && ! is_wp_error( $event_tags ) ) : ?>
        <?php foreach ( $event_tags as $event_tag ) :?>
          <?php $event_slug = $event_tag->slug;?>
          <li class = "c-tag__list__item">
            <a href = "<?php echo esc_url( $loot_slug ? add_query_arg( 'event_area', $loot_slug, get_term_link( $event_slug, $local_tag ) ) : get_term_link( $event_slug, $local_tag ) ); ?>" class = "js-tab c-tag__list__link <?php if ( $event_slug === $main_query_term_slug ) :
              ?>u-currentTab<?php
                       endif; ?>">
              <?php echo esc_html( $event_tag->name ); ?>
            </a>
          </li>
        <?php endforeach;?>
      <?php endif; ?>
    </ul>

 

    

  <section class = "l-content">
    <?php $event_loop = new WP_Query( $event );?>
      <?php if ( $event_loop->have_posts() ) : ?>
        <ul class = "c-cardList js-allswitch">
          <?php while ( $event_loop->have_posts() ) :
            $event_loop->the_post();?>
            <?php get_template_part( 'template-parts/event-loop' ); ?>
          <?php endwhile;?>
        </ul>
      <?php endif;
      wp_reset_postdata();?>

    <?php if ( $event_loop->max_num_pages > 1 ) :?>
      <div class = "u-mb50">
        <?php wazeka_query_pagination( $event_loop ); ?>
      </div>
    <?php endif; ?>

  </section>
  <?php get_template_part( 'template-parts/xo-event' ); ?>
</main>
<?php get_footer(); ?>