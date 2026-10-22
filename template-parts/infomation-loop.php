<?php
/**
 * Information loop part.
 *
 * @package Wazeka
 */

?>
<?php
$heading_tag = $args['heading_tag'] ?? 'h2';
?>
<?php
$infomations = get_field( 'infomation' ); ?>
<?php
$has_infomation = false;
if ( ! empty( $infomations ) && is_array( $infomations ) ) {
  foreach ( $infomations as $row ) {
    if ( ! empty( $row['img'] ) || ! empty( $row['txt'] ) || ! empty( $row['value'] ) ) {
      $has_infomation = true;
      break;
    }
  }
}
?>
<?php if ( $has_infomation ) :?>
<section class = "p-property__infomation u-mb100">
  <div class = "l-content">
    <<?php echo esc_attr( $heading_tag ); ?> class = "c-title--sectionEn">
      INFOMATION
    </<?php echo esc_attr( $heading_tag ); ?>>
    <p class = "c-title--sectionSub u-mb50">
      周辺情報
    </p>
    <ul class = "p-property__infomation__list u-mb50">
      <?php foreach ( $infomations as $infomation ) : ?>
        <?php if ( ! empty( $infomation['img'] ) || ! empty( $infomation['txt'] ) || ! empty( $infomation['value'] ) ) : ?>
        <li class = "p-property__infomation__item">
          <?php if ( ! empty( $infomation['img'] ) ) : ?>
          <figure class = "p-property__infomation__imgWrap">
            <?php
            echo wp_get_attachment_image(
              $infomation['img'],
              'full',
              false,
              array(
                'class'   => 'p-property__infomation__img',
                'loading' => 'lazy',
                'alt'     => ( ! empty( $infomation['txt'] ) ? $infomation['txt'] : '周辺情報' ) . 'のイメージ',
              )
            );
            ?>
          </figure>
          <?php endif; ?>
          <?php if ( ! empty( $infomation['txt'] ) ) : ?>
          <p class = "p-property__infomation__txt"><?php echo esc_html( $infomation['txt'] );?></p>
          <?php endif; ?>
          <?php if ( ! empty( $infomation['value'] ) ) : ?>
          <p class = "p-property__infomation__distance"><span class = "p-property__infomation__value"><?php echo esc_html( $infomation['value'] );?></span></p>
          <?php endif; ?>
        </li>
        <?php endif; ?>
      <?php endforeach; ?>
    </ul>
    <?php foreach ( $infomations as $infomation ) : ?>
      <?php if ( ! empty( $infomation['txt'] ) || ! empty( $infomation['value'] ) ) : ?>
      <dl class = "p-property__infomation__dl">
        <?php if ( ! empty( $infomation['txt'] ) ) : ?>
        <dt class = "p-property__infomation__dt"><?php echo esc_html( $infomation['txt'] );?></dt>
        <?php endif; ?>
        <?php if ( ! empty( $infomation['value'] ) ) : ?>
        <dd class = "p-property__infomation__dd"><?php echo esc_html( $infomation['value'] );?></dd>
        <?php endif; ?>
      </dl>
      <?php endif; ?>
    <?php endforeach; ?>
  </div>
</section>
<?php endif; ?>
