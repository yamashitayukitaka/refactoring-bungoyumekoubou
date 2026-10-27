<?php
/**
 * Common footer event section part.
 *
 * @package Wazeka
 */

?>
<?php
$heading_tag = $args['heading_tag'] ?? 'h2';
?>
<section class = "l-content u-mb100 u-pt100">
  
  <div class = "u-center u-mb10">
    <<?php echo esc_attr( $heading_tag ); ?> class = "c-title--sectionLine">
      EVENT
    </<?php echo esc_attr( $heading_tag ); ?>>
  </div>

  <div class = "u-center u-mb30">
    <p class = "c-title--orangeLine">
      <span class = "marker">最新情報をお届けします</span>
    </p>
  </div>

  <div class = "u-center">
    <a href = "<?php echo esc_url( home_url( 'xo_event' ) ); ?>" class = "c-button--outline">イベント一覧へ</a>
  </div>
</section>
<section class = "l-content u-mb100">
  <div class = "u-center u-mb10">
    <<?php echo esc_attr( $heading_tag ); ?> class = "c-title--sectionLine">
      BUILT＆LAND
    </<?php echo esc_attr( $heading_tag ); ?>>
  </div>
  <div class = "u-center u-mb30">
    <p class = "c-title--orangeLine">
      <span class = "marker">土地・物件情報</span>
    </p>
  </div>
  <?php
    $local_paged = ( get_query_var( 'paged' ) ) ? get_query_var( 'paged' ) : 1;
    $property    = array(
    'post_type'      => 'property',
    'posts_per_page' => 3,
    'paged'          => $local_paged,
    'order'          => 'DESC',
    'orderby'        => 'date',
    );?>
  <?php $property_loop = new WP_Query( $property );?>
  <?php if ( $property_loop->have_posts() ) : ?>
    <ul class = "c-cardList">
      <?php while ( $property_loop->have_posts() ) :
        $property_loop->the_post();?>
        <?php get_template_part( 'template-parts/property-loop' ); ?>
      <?php endwhile;?>
    </ul>
    <div class = "u-center">
      <a href = "<?php echo esc_url( home_url( 'property' ) ); ?>" class = "c-button--outline">土地・物件情報一覧へ</a>
    </div>
  <?php endif;
  wp_reset_postdata();?>
</section>