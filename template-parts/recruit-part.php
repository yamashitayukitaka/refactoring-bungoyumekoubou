<?php
/**
 * Recruitment section part.
 *
 * @package Wazeka
 */

?>
<?php
$heading_tag = $args['heading_tag'] ?? 'h2';
?>
<a href = "<?php echo esc_url( home_url( 'recruit' ) ); ?>">
<section class = "p-about__recruit u-mb100">
  <div class = "p-about__recruit__content">
    <?php
      $staff = array(
      'post_type'      => 'staff',
      'posts_per_page' => 6,
      'orderby'        => 'date',
      'order'          => 'ASC',
      );?>
    <?php $staff_loop = new WP_Query( $staff );?>
      <?php if ( $staff_loop->have_posts() ) : ?>
      <ul class = "p-about__recruitStaff__list">
        <?php while ( $staff_loop->have_posts() ) :
          $staff_loop->the_post();?>
          <li class = "p-about__recruitStaff__listItem js-staffImg">
            
              <?php $staff_img = get_field( 'staff-img' ); ?>
              <?php if ( $staff_img ) : ?>
              <?php
              echo wp_get_attachment_image(
                $staff_img,
                'full',
                false,
                array(
                  'class'   => 'p-about__staff__listImg',
                  'alt'     => 'スタッフ画像',
                  'loading' => 'lazy',
                )
              );
              ?>
              <?php endif; ?>
            
          </li>
        <?php endwhile;
      endif;
        wp_reset_postdata();?>
      </ul>
    
      <div class = "p-about__recruit__txtWrap">
        <<?php echo esc_attr( $heading_tag ); ?> class = "p-about__recruit__ttl">Recruit</<?php echo esc_attr( $heading_tag ); ?>>
        <p class = "p-about__recruit__ttlSub">
          採用情報
        </p>
        <p class = "p-about__recruit__txt">
        「ゆめづくり、一緒にしてみませんか」
        </p>
        <p class = "p-about__recruit__link">詳細を見る</p>
      </div>
    

    <?php
      $staff2 = array(
      'post_type'      => 'staff',
      'posts_per_page' => 6,
      'orderby'        => 'date',
      'order'          => 'DESC',
      );?>
    <?php $staff_loop2 = new WP_Query( $staff2 );?>
      <?php if ( $staff_loop2->have_posts() ) : ?>
      <ul class = "p-about__recruitStaff__list">
        <?php while ( $staff_loop2->have_posts() ) :
          $staff_loop2->the_post();?>
          <li class = "p-about__recruitStaff__listItem js-staffImg">
            
              <?php $staff_img = get_field( 'staff-img' ); ?>
              <?php if ( $staff_img ) : ?>
              <?php
              echo wp_get_attachment_image(
                $staff_img,
                'full',
                false,
                array(
                  'class'   => 'p-about__staff__listImg',
                  'alt'     => 'スタッフ画像',
                  'loading' => 'lazy',
                )
              );
              ?>
              <?php endif; ?>
            
          </li>
        <?php endwhile;
      endif;
        wp_reset_postdata();?>
      </ul>
  </div>
</section>
</a>