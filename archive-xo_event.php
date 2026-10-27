<?php
/**
 * Events archive template.
 *
 * @package Wazeka
 */

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
<h1 class = "c-title--section u-mb50">
  イベント情報
</h1>
<!-- WINKMARK LP INDEX 1 start -->
<div class="event-box">
    <div class="lst-event" id="wink_event_list">
    </div>
</div>
<!-- WINKMARK LP INDEX 1 end-->

<?php $terms = get_terms(
    [
      'taxonomy'   => $local_taxonomy,
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
        [
        'taxonomy'   => $local_tag,
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

  <?php get_template_part( 'template-parts/xo-event' ); ?>
 
</main>
  
<?php get_footer(); ?>