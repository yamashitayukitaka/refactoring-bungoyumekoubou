<li class = "p-content__list__item">
  <a href = "<?php the_permalink(); ?>" class = "p-content__list__link">
    <?php $sliders = get_field('works-slider-list'); ?>
    <?php if ($sliders):?>
      <ul class = "js-worksSlider p-content__slider__list">
        <?php foreach($sliders as $slider):?>
          <li class = "p-content__slider__item"><img src = "<?php echo esc_url($slider['works-slider-img']); ?>" class = "p-content__slider__img"></li>
        <?php endforeach;?>
      </ul>
    <?php endif; ?>
    <div class = "p-content__list__txtWrap">
      <?php $worksTypes = get_the_terms(get_the_ID(),'works-type', 
        //get_terms  と　get_the_termsの違いは、get_the_termsはループ内でget_the_idを引数にとれば、
        //その投稿に紐ずくタームのみを取得でき、get_termsはループ外でターム一覧を取得する
          [
            'hide_empty' => false,
            'parent' =>0,
            'orderby'=>'id',
            'order'=>'ASC',
          ]
      );?>

      <?php if($worksTypes):?>
        <?php foreach($worksTypes as $worksType):?>
          <span class = "c-id u-mb15"><?php echo esc_html($worksType->name); ?></span>
        <?php endforeach;?>
        
        <p class = "p-content__list__ttl">
          <?php the_title(); ?>
        </p>
      <?php endif; ?>

      <?php $worksTags = get_the_terms(get_the_ID(),'works-tag', 
        //get_terms  と　get_the_termsの違いは、get_the_termsはループ内でget_the_idを引数にとれば、
        //その投稿に紐ずくタームのみを取得でき、get_termsはループ外でターム一覧を取得する
          [
            'hide_empty' => false,
            'parent' =>0,
            'orderby'=>'id',
            'order'=>'ASC',
          ]
      );?>

      <?php if($worksTags):?>
        <?php foreach($worksTags as $worksTag):?>
          <span class = "c-tag__txt">#<?php echo esc_html($worksTag->name); ?></span>
        <?php endforeach;?>
      <?php endif; ?>
      <?php $area = get_field('works-area'); ?>
      <?php if($area):?>
        <?php if($area['total-floor']):?>
          <dl class = "u-flex">
            <dt>延床面積&nbsp;&nbsp;</dt>
            <dd><?php echo esc_html($area['total-floor']);?></dd>
          <dl>
        <?php endif; ?>
      <?php endif; ?>
  　</div>
  </a>  
</li>