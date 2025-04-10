<?php $hasThumbsliders = get_field('a-imgs'); ?>
  <?php if($hasThumbsliders):?>
    <section class = "l-content--middle u-mb100">
      <h3 class = "c-title--sectionEn">
        GALLERY
      </h3>
      <p class = "c-title--sectionSub u-mb50">
        ギャラリー
      </p>
    
      <ul class = "js-hasThumbSlider c-hasThumbSlider__list">
        <?php foreach($hasThumbsliders as $hasThumbslider):?>
          <li class = "c-hasThumbSlider__list__item"><img src = "<?php echo esc_url($hasThumbslider['img']); ?>" alt = "ギャラリー画像" class = "c-hasThumbSlider__list__img"></li>
        <?php endforeach;?>
      </ul>
      <ul class = "c-hasThumbSlider__thumbnail__list">
        <?php $count = 0; ?>
        <?php foreach($hasThumbsliders as $hasThumbslider): ?>
          <li class="c-hasThumbSlider__thumbnail__item" data-slide="<?php echo esc_html($count++); ?>">
            <img src="<?php echo esc_url($hasThumbslider['img']); ?>" alt="ギャラリー画像" class = "c-hasThumbSlider__thumbnail__img">
          </li>
        <?php endforeach; ?>
      </ul>
    <?php endif; ?>
  </section>


