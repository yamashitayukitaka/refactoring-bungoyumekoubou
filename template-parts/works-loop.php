<li class = "c-cardList__list__item">
  <a href = "<?php the_permalink(); ?>" class = "c-cardList__list__link">
    <?php $sliders = get_field('works-slider-list'); ?>
    <?php
    $hasSliderImg = false;
    if ($sliders) {
      foreach ($sliders as $row) {
        if (!empty($row['works-slider-img'])) {
          $hasSliderImg = true;
          break;
        }
      }
    }
    ?>
    <?php if ($hasSliderImg):?>
      <ul class = "js-worksSlider c-cardList__slider__list">
        <?php foreach($sliders as $slider):?>
          <?php if (!empty($slider['works-slider-img'])): ?>
          <li class = "c-cardList__slider__item"><img src = "<?php echo esc_url($slider['works-slider-img']); ?>" class = "c-cardList__slider__img"></li>
          <?php endif; ?>
        <?php endforeach;?>
      </ul>
    <?php endif; ?>
    <div class = "c-cardList__list__txtWrap">
      <?php $worksTypes = get_the_terms(get_the_ID(),'works-type',
          [
            'hide_empty' => false,
            'parent' =>0,
            'orderby'=>'id',
            'order'=>'ASC',
          ]
      );?>

      <?php if($worksTypes && !is_wp_error($worksTypes)):?>
        <?php foreach($worksTypes as $worksType):?>
          <span class = "c-id u-mb15"><?php echo esc_html($worksType->name); ?></span>
        <?php endforeach;?>
        
        <p class = "c-cardList__list__ttl">
          <?php the_title(); ?>
        </p>
      <?php endif; ?>

      <?php $worksTags = get_the_terms(get_the_ID(),'works-tag',
          [
            'hide_empty' => false,
            'parent' =>0,
            'orderby'=>'id',
            'order'=>'ASC',
          ]
      );?>

      <?php if($worksTags && !is_wp_error($worksTags)):?>
        <?php foreach($worksTags as $worksTag):?>
          <span class = "c-tag__txt">#<?php echo esc_html($worksTag->name); ?></span>
        <?php endforeach;?>
      <?php endif; ?>
      <?php $area = get_field('works-area'); ?>
      <?php if($area && !empty($area['total-floor'])):?>
          <dl class = "u-flex">
            <dt>延床面積&nbsp;&nbsp;</dt>
            <dd><?php echo esc_html($area['total-floor']);?></dd>
          <dl>
      <?php endif; ?>
  　</div>
  </a>  
</li>