<?php if (get_row_layout() == 'two-column') : ?>
  <div class="p-flex__two u-mb50">
    <?php if (have_rows('contents-1')) : ?>
      <?php while (have_rows('contents-1')) : the_row(); ?>
        <div class = "p-flex__two__content">
          <figure class = "p-flex__two__imgWrap u-mb10">
            <img src="<?php the_sub_field('img'); ?>" alt="">
          </figure>
          <p class = "c-title--middle"><?php the_sub_field('ttl'); ?></p>
          <p class = "c-txt--middleBold"><?php the_sub_field('txt'); ?></p>
        </div>
      <?php endwhile; ?>
    <?php endif; ?>

    <?php if (have_rows('contents-2')) : ?>
      <?php while (have_rows('contents-2')) : the_row(); ?>
        <div class = "p-flex__two__content">
          <figure class = "p-flex__two__imgWrap u-mb10">
            <img src="<?php the_sub_field('img'); ?>" alt="">
          </figure>
          <p class = "c-title--middle"><?php the_sub_field('ttl'); ?></p>
          <p class = "c-txt--middleBold"><?php the_sub_field('txt'); ?></p>
        </div>
      <?php endwhile; ?>
    <?php endif; ?>
  </div>
<?php elseif (get_row_layout() == 'one-column') : ?>
  <div class="p-flex__one u-mb50">
    <?php if (have_rows('contents')) : ?>
      <?php while (have_rows('contents')) : the_row(); ?>
        <div>
          <figure class = "p-flex__one__imgWrap u-mb10">
            <img src="<?php the_sub_field('img'); ?>" alt="柔軟なコンテンツ画像">
          </figure>
          <p class = "c-title--middle"><?php the_sub_field('ttl'); ?></p>
          <p class = "c-txt--middleBold"><?php the_sub_field('txt'); ?></p>
        </div>
      <?php endwhile; ?>
    <?php endif; ?>
  </div>
<?php endif; ?>