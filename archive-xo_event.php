<?php
if ( ! defined( 'ABSPATH' ) ) {
  exit;
}
get_header();
?>
<?php
  $local_taxonomy  = 'area';
  $local_post_type = 'xo_event';
  $local_tag       = 'event-type';
?>
<main>
<h2 class = "c-title--section u-mb50">
  イベント情報
</h2>
<!-- WINKMARK LP INDEX 1 start -->
<link rel="stylesheet" href="https://bungoyumekoubou.winksys.jp/event/css/client_top.css" type="text/css">
<div class="event-box">
    <div class="lst-event" id="wink_event_list">
    </div>
</div>
<!-- WINKMARK LP INDEX 1 end-->

<?php $terms = get_terms(
    $local_taxonomy,
    [
      'hide_empty' => false,
      'parent'     => 0,
      'orderby'    => 'id',
      'order'      => 'DESC',
      ]
);?>
 
    <ul class = "c-term__list">
      <li class = "c-term__list__item u-current">
        <a href = "<?php echo esc_url( get_post_type_archive_link( $local_post_type ) ); ?>">
          すべて
        </a>
      </li>
      <?php if ( $terms && ! is_wp_error( $terms ) ) : ?>
        <?php foreach ( $terms as $local_term ) :?>
        <li class = "c-term__list__item">
          <a href = "<?php echo esc_url( get_term_link( $local_term ) ); ?>">
            <?php echo esc_html( $local_term->name ); ?>
          </a>
        </li>
        <?php endforeach;?>
      <?php endif; ?>
    </ul>

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
      
        <li class = "c-tag__list__item">
          <a href = "#" class = "u-currentTab c-tag__list__link">すべて</a>
        </li>
      
      <?php if ( $event_tags && ! is_wp_error( $event_tags ) ) : ?>
        <?php foreach ( $event_tags as $event_tag ) :?>
          <?php $event_slug = $event_tag->slug;?>
        <li class = "c-tag__list__item">
          <a href = "<?php echo esc_url( get_term_link( $event_slug, $local_tag ) ); ?>" class = "js-tab c-tag__list__link">
            <?php echo esc_html( $event_tag->name ); ?>
          </a>
        </li>
        <?php endforeach;?>
      <?php endif; ?>
    </ul>

  <section class = "l-content u-mb100">
    <?php
      $local_paged = ( get_query_var( 'paged' ) ) ? get_query_var( 'paged' ) : 1;
      $event       = array(
      'post_type'      => $local_post_type,
      'posts_per_page' => 7,
      'paged'          => $local_paged,
      'orderby'        => 'menu_order',
      'order'          => 'ASC',
      );?>
    <?php $event_loop = new WP_Query( $event );?>
    <?php if ( $event_loop->have_posts() ) : ?>
      <ul class = "c-cardList c-cardList--lead js-prepend">
        <?php while ( $event_loop->have_posts() ) :
          $event_loop->the_post();?>
          <?php get_template_part( 'template-parts/event-loop' ); ?>
        <?php endwhile;
    endif;
        wp_reset_postdata();?>
      </ul>
    
    <?php if ( $event_loop->max_num_pages > 1 ) :?>
      <?php wazeka_query_pagination( $event_loop ); ?>
    <?php endif; ?>
      
    </section>
  <?php get_template_part( 'template-parts/xo-event' ); ?>
 
</main>
  
<?php get_footer(); ?>