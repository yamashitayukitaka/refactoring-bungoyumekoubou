<section class="u-mb100">
  <div class="c-title__wrap--sectionLine">
    <h3 class="c-title--sectionLine">
      MEMBER
    </h3>
    <div>
      <p class="c-title--orangeLine u-mb50">
        <span class="u-orange">快適ゆめ空間</span>をつくるスタッフたち
      </p>
    </div>
  </div>
  <?php
  $staff = array(
    'post_type' => 'staff',
    'posts_per_page' =>20,
  ); ?>
  <?php $staffLoop = new WP_Query($staff); ?>
  <?php if ($staffLoop->have_posts()) : ?>
    <ul class="p-about__staff__list">
      <?php while ($staffLoop->have_posts()) : $staffLoop->the_post(); ?>
        <li class="p-about__staff__listItem">
          <a href = "<?php the_permalink(); ?>">
            <img src="<?php the_field('staff-img'); ?>" class="p-about__staff__listImg" alt="スタッフ画像">
          </a>
        </li>
      <?php endwhile;
      endif;
      wp_reset_postdata(); ?>
    </ul>
</section>