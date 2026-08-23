<?php if (get_row_layout() == 'two-column') : ?>
  <div class="p-flex__two u-mb50">
    <?php if (have_rows('contents-1')) : ?>
      <?php while (have_rows('contents-1')) : the_row(); ?>
        <div class = "p-flex__two__content">
          <figure class = "p-flex__two__imgWrap u-mb10">
          <?php $flex_img = get_sub_field('img'); ?>
          <?php $flex_ttl = get_sub_field('ttl'); ?>
          <?php $flex_txt = get_sub_field('txt'); ?>
          <?php if ($flex_img) : ?>
            <img src="<?php echo esc_url($flex_img); ?>" alt="">
          <?php endif; ?>
          </figure>
          <?php if ($flex_ttl) : ?>
          <p class = "c-title--middle"><?php echo $flex_ttl; ?></p>
          <?php endif; ?>
          <?php if ($flex_txt) : ?>
          <p class = "c-txt--middleBold"><?php echo $flex_txt; ?></p>
          <?php endif; ?>
        </div>
      <?php endwhile; ?>
    <?php endif; ?>

    <?php if (have_rows('contents-2')) : ?>
      <?php while (have_rows('contents-2')) : the_row(); ?>
        <div class = "p-flex__two__content">
          <figure class = "p-flex__two__imgWrap u-mb10">
          <?php $flex_img = get_sub_field('img'); ?>
          <?php $flex_ttl = get_sub_field('ttl'); ?>
          <?php $flex_txt = get_sub_field('txt'); ?>
          <?php if ($flex_img) : ?>
            <img src="<?php echo esc_url($flex_img); ?>" alt="">
          <?php endif; ?>
          </figure>
          <?php if ($flex_ttl) : ?>
          <p class = "c-title--middle"><?php echo $flex_ttl; ?></p>
          <?php endif; ?>
          <?php if ($flex_txt) : ?>
          <p class = "c-txt--middleBold"><?php echo $flex_txt; ?></p>
          <?php endif; ?>
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
          <?php $flex_img = get_sub_field('img'); ?>
          <?php $flex_ttl = get_sub_field('ttl'); ?>
          <?php $flex_txt = get_sub_field('txt'); ?>
          <?php if ($flex_img) : ?>
            <img src="<?php echo esc_url($flex_img); ?>" alt="柔軟なコンテンツ画像">
          <?php endif; ?>
          </figure>
          <?php if ($flex_ttl) : ?>
          <p class = "c-title--middle"><?php echo $flex_ttl; ?></p>
          <?php endif; ?>
          <?php if ($flex_txt) : ?>
          <p class = "c-txt--middleBold"><?php echo $flex_txt; ?></p>
          <?php endif; ?>
        </div>
      <?php endwhile; ?>
    <?php endif; ?>
  </div>
<?php endif; ?>