<?php
/**
 * Staff listing section part.
 *
 * @package Wazeka
 */

?>
<?php
$heading_tag = $args['heading_tag'] ?? 'h2';
?>
<section class="u-mb100">
  <div class="c-title__head">
    <<?php echo esc_attr( $heading_tag ); ?> class="c-title--sectionLine">
      MEMBER
    </<?php echo esc_attr( $heading_tag ); ?>>
    <div>
      <p class="c-title--orangeLine u-mb50">
        <span class="u-orange">快適ゆめ空間</span>をつくるスタッフたち
      </p>
    </div>
  </div>
  <?php
  $staff = array(
    'post_type'      => 'staff',
    'posts_per_page' => 20,
  ); ?>
  <?php $staff_loop = new WP_Query( $staff ); ?>
  <?php if ( $staff_loop->have_posts() ) : ?>
    <ul class="p-about__staff__list">
      <?php while ( $staff_loop->have_posts() ) :
        $staff_loop->the_post(); ?>
        <li class="p-about__staff__listItem">
          <a href = "<?php the_permalink(); ?>">
            <?php $staff_img = get_field( 'staff-img' ); ?>
            <?php if ( $staff_img ) : ?>
            <?php
            echo wp_get_attachment_image(
                $staff_img,
                'full',
                false,
                array(
                'class'   => 'p-about__staff__listImg',
                'alt'     => get_the_title() . 'のイメージ',
                'loading' => 'lazy',
                )
            );
            ?>
            <?php endif; ?>
          </a>
        </li>
      <?php endwhile;
  endif;
      wp_reset_postdata(); ?>
    </ul>
</section>