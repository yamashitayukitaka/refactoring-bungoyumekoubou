<?php
/**
 * Thumbnail slider loop part.
 *
 * @package Wazeka
 */

$has_thumbsliders = get_field( 'a-imgs' );
?>
<?php
$has_gallery = false;
if ( ! empty( $has_thumbsliders ) && is_array( $has_thumbsliders ) ) {
  foreach ( $has_thumbsliders as $row ) {
    if ( ! empty( $row['img'] ) ) {
      $has_gallery = true;
      break;
    }
  }
}
?>
  <?php if ( $has_gallery ) :?>
    <section class = "l-content--middle u-mb100">
      <h3 class = "c-title--sectionEn">
        GALLERY
      </h3>
      <p class = "c-title--sectionSub u-mb50">
        ギャラリー
      </p>
    
      <ul class = "js-hasThumbSlider c-hasThumbSlider__list">
        <?php foreach ( $has_thumbsliders as $slide_index => $has_thumbslider ) :?>
          <?php if ( ! empty( $has_thumbslider['img'] ) ) : ?>
          <li class="c-hasThumbSlider__list__item">
            <?php
            $slider_attrs = array(
              'class' => 'c-hasThumbSlider__list__img',
              'alt'   => get_the_title() . 'のイメージ（' . ( $slide_index + 1 ) . '）',
            );
            if ( $slide_index > 0 ) {
              $slider_attrs['loading'] = 'lazy';
            }
            echo wp_get_attachment_image( $has_thumbslider['img'], 'full', false, $slider_attrs );
            ?>
          </li>
          <?php endif; ?>
        <?php endforeach;?>
      </ul>
      <ul class = "c-hasThumbSlider__thumbnail__list">
        <?php $count = 0; ?>
        <?php foreach ( $has_thumbsliders as $thumb_index => $has_thumbslider ) : ?>
          <?php if ( ! empty( $has_thumbslider['img'] ) ) : ?>
          <li class="c-hasThumbSlider__thumbnail__item" data-slide="<?php echo esc_html( $count++ ); ?>">
            <?php
            echo wp_get_attachment_image(
              $has_thumbslider['img'],
              'full',
              false,
              array(
                'class'   => 'c-hasThumbSlider__thumbnail__img',
                'alt'     => get_the_title() . 'のイメージ（' . ( $thumb_index + 1 ) . '）',
                'loading' => 'lazy',
              )
            );
            ?>
          </li>
          <?php endif; ?>
        <?php endforeach; ?>
      </ul>
  </section>
  <?php endif; ?>
