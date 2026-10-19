<?php
/**
 * Store location section part.
 *
 * @package Wazeka
 * 
 */

?>
<?php
$heading_tag = $args['heading_tag'] ?? 'h2';
?>

<section class="p-location">
  <div class="c-title__head">
    <<?php echo esc_attr( $heading_tag ); ?> class="c-title--sectionLine">
      LOCATION
    </<?php echo esc_attr( $heading_tag ); ?>>
    <div>
      <p class="c-title--orangeLine u-mb50"><span class="marker">
          店舗情報</span>
      </p>
    </div>
  </div>

  <?php $stores = get_field( 'store_informations', 'option' ); ?>

  <?php
  $has_store = false;
  if ( ! empty( $stores ) && is_array( $stores ) ) {
    foreach ( $stores as $row ) {
      if ( ! empty( $row['address'] ) || ! empty( $row['postal_code'] ) || ! empty( $row['building'] ) || ! empty( $row['phone'] ) || ! empty( $row['map'] ) || ! empty( $row['detail'] ) ) {
        $has_store = true;
        break;
      }
    }
  }
  ?>
  <?php if ( $has_store ) : ?>
    <?php foreach ( $stores as $store ) :
      if ( empty( $store['address'] ) && empty( $store['postal_code'] ) && empty( $store['building'] ) && empty( $store['phone'] ) && empty( $store['map'] ) && empty( $store['detail'] ) ) {
        continue;
      }
      ?>
      <?php
      $location_alt_base = ! empty( $store['building'] ) ? $store['building'] : '店舗';
      ?>
      <div class="p-location__content">
        <div class="p-location__inner">
          <ul class="js-commonSlick p-location__list">
            <?php if ( ! empty( $store['detail'] ) ) : ?>
              <?php $count = 0; ?>
              <?php foreach ( $store['detail'] as $item ) : ?>
                <?php if ( ! empty( $item['detail_img'] ) ) : ?>
                  <?php $photo_num = $count + 1; ?>
                <li class="p-location__list__item">
                  <?php
                  echo wp_get_attachment_image(
                    $item['detail_img'],
                    'full',
                    false,
                    array(
                      'class' => 'p-location__list__img',
                      'alt'   => $location_alt_base . 'の' . $photo_num . '枚目のイメージ',
                    )
                  );
                  ?>
                </li>
                  <?php ++$count; ?>
                <?php endif; ?>
              <?php endforeach; ?>
            <?php endif; ?>
          </ul>

          <div class="p-location__info">
            <ul class="p-location__info__list">
              <?php if ( ! empty( $store['address'] ) ) : ?>
                <li class="p-location__info__listItem"><?php echo nl2br( esc_html( $store['address'] ) ); ?></li>
              <?php endif; ?>
              <?php if ( ! empty( $store['postal_code'] ) ) : ?>
                <li class="p-location__info__listItem"><?php echo nl2br( esc_html( $store['postal_code'] ) ); ?></li>
              <?php endif; ?>
              <?php if ( ! empty( $store['building'] ) ) : ?>
                <li class="p-location__info__listItem"><?php echo nl2br( esc_html( $store['building'] ) ); ?></li>
              <?php endif; ?>
              <?php if ( ! empty( $store['phone'] ) ) : ?>
                <li class="p-location__info__listItem"><?php echo nl2br( esc_html( $store['phone'] ) ); ?></li>
              <?php endif; ?>
            </ul>
            <?php if ( ! empty( $store['map'] ) ) : ?>
            <div class="p-location__info__map">
              <iframe class="p-location__info__mapEmbed" src="<?php echo esc_url( $store['map'] ); ?>" style="border:0;" allowfullscreen="" loading="lazy" width="100%" referrerpolicy="no-referrer-when-downgrade"></iframe>
            </div>
            <?php endif; ?>
            <div class="p-location__info__contact u-none__mobile--sp">
              <a class="p-location__info__contactLink" href="<?php echo esc_url( home_url( '/contact/' ) ); ?>">お問い合わせ</a>
            </div>
          </div>
        </div>

        <ul class="p-location__thumb__list">
          <?php if ( ! empty( $store['detail'] ) ) : ?>
            <?php $count = 0; ?>
            <?php foreach ( $store['detail'] as $item ) : ?>
              <?php if ( ! empty( $item['detail_img'] ) ) : ?>
                <?php $photo_num = $count + 1; ?>
              <li class="p-location__thumb__item" data-slide="<?php echo esc_html( $count++ ); ?>">
                <?php
                echo wp_get_attachment_image(
                  $item['detail_img'],
                  'full',
                  false,
                  array(
                    'class' => 'p-location__thumb__img',
                    'alt'   => $location_alt_base . 'の' . $photo_num . '枚目のイメージ',
                  )
                );
                ?>
              </li>
              <?php endif; ?>
            <?php endforeach; ?>
          <?php endif; ?>
        </ul>

        <div class="p-location__info__contact u-none__pc--sp">
          <a class="p-location__info__contactLink" href="<?php echo esc_url( home_url( '/contact/' ) ); ?>">お問い合わせ</a>
        </div>


      </div>

    <?php endforeach; ?>
  <?php endif; ?>
</section>
