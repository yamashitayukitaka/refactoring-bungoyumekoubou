<?php
/**
 * Thumbnail slider loop part.
 *
 * @package Wazeka
 */

$has_thumbsliders = get_field( 'a-imgs' ); ?>
<?php
$has_gallery = false;
if ( $has_thumbsliders ) {
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
        <?php foreach ( $has_thumbsliders as $has_thumbslider ) :?>
          <?php if ( ! empty( $has_thumbslider['img'] ) ) : ?>
          <li class = "c-hasThumbSlider__list__item"><img src = "<?php echo esc_url( $has_thumbslider['img'] ); ?>" alt = "ギャラリー画像" class = "c-hasThumbSlider__list__img"></li>
          <?php endif; ?>
        <?php endforeach;?>
      </ul>
      <ul class = "c-hasThumbSlider__thumbnail__list">
        <?php $count = 0; ?>
        <?php foreach ( $has_thumbsliders as $has_thumbslider ) : ?>
          <?php if ( ! empty( $has_thumbslider['img'] ) ) : ?>
          <li class="c-hasThumbSlider__thumbnail__item" data-slide="<?php echo esc_html( $count++ ); ?>">
            <img src="<?php echo esc_url( $has_thumbslider['img'] ); ?>" alt="ギャラリー画像" class = "c-hasThumbSlider__thumbnail__img">
          </li>
          <?php endif; ?>
        <?php endforeach; ?>
      </ul>
  </section>
  <?php endif; ?>
