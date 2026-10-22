<?php
/**
 * Event calendar and list part.
 *
 * @package Wazeka
 */

?>
<div class="l-content u-mb100">
  <div class = "p-xo-event__search__wrap">
    <p class = "p-xo-event__search">カレンダーから探す</p>
    <p class = "p-xo-event__search u-none__mobile--md">内容から探す</p>
  </div>
  <div class = "p-xo-event__outer">
    <div class = "p-xo-event__wrap">
      <?php echo do_shortcode( '[xo_event_calendar]' ); ?>
    </div>
    <div class = "p-xo-event__content">
      <ul class = "p-xo-event__list">
        <?php
          $args = array(
          'post_type'      => 'xo_event',
          'posts_per_page' => -1,
          'orderby'        => 'menu_order',
          'order'          => 'ASC',
          );?>
        <?php $event_loop = new WP_Query( $args );?>
        <?php if ( $event_loop->have_posts() ) : ?>
          <time class = "p-xo-event__time"></time>

          <div class = "p-xo-event__list__overflow">

            <?php while ( $event_loop->have_posts() ) :
              $event_loop->the_post();?>
              <li class = "p-xo-event__list__item">
                <a href = "<?php the_permalink(); ?>" class = "p-xo-event__list__link">
                  <time class = "p-xo-event__list__startDate">
                    <?php echo do_shortcode( '[xo_event_field field="start_date"]' ); ?>
                  </time>
                  <time class = "p-xo-event__list__endDate js-end">
                    <?php echo do_shortcode( '[xo_event_field field="end_date"]' ); ?>
                  </time>

                  <figure class = "p-xo-event__list__imgWrap">
                    <?php the_post_thumbnail( '', array( 'loading' => 'lazy' ) ); ?>
                  </figure>

                  <div class = "p-xo-event__list__txtContent">

                    <p>
                      <?php the_title(); ?>
                    </p>
                    
                    <?php $event_types = get_the_terms(
                        get_the_ID(),
                        'event-type',
                        [
                          'hide_empty' => false,
                          'parent'     => 0,
                          'orderby'    => 'id',
                          'order'      => 'ASC',
                          ]
                    );?>

                    <?php $event_type = get_field( 'event-type' ); ?>
                    <?php if ( $event_type && $event_types && ! is_wp_error( $event_types ) ) : ?>
                      <div class = "c-id__wrap">
                        <?php foreach ( $event_types as $event_type ) :?>
                          <span class = "c-id u-mb15"><?php echo esc_html( $event_type->name ); ?></span>
                          <span class = "c-id--end">終了</span>
                        <?php endforeach;?>
                      </div>
                    <?php endif; ?>

                  </div>
                </a>
              </li>
            <?php endwhile;?>
        <?php endif;
            wp_reset_postdata();?>
          </div>
        </ul>
      </div>
  </div>
</div>