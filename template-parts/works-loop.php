<li class = "c-cardList__item">
  <a href = "<?php the_permalink(); ?>" class = "c-cardList__link">
    <?php $thumb = get_field('works-thumb'); ?>
    <?php if (!empty($thumb)) : ?>
    <figure class = "c-cardList__imgWrap">
      <img src = "<?php echo esc_url($thumb); ?>" alt = "<?php echo esc_attr(get_the_title()); ?>">
    </figure>
    <?php endif; ?>
    <div class = "c-cardList__txtWrap">
      <?php $worksTypes = get_the_terms(
          get_the_ID(),
          'works-type',
          [
            'hide_empty' => false,
            'parent' => 0,
            'orderby' => 'id',
            'order' => 'ASC',
          ]
      );?>

      <?php if ($worksTypes && !is_wp_error($worksTypes)) :?>
        <?php foreach ($worksTypes as $worksType) :?>
          <span class = "c-id u-mb15"><?php echo esc_html($worksType->name); ?></span>
        <?php endforeach;?>
        
        <p class = "c-cardList__ttl">
          <?php the_title(); ?>
        </p>
      <?php endif; ?>

      <?php $worksTags = get_the_terms(
          get_the_ID(),
          'works-tag',
          [
            'hide_empty' => false,
            'parent' => 0,
            'orderby' => 'id',
            'order' => 'ASC',
          ]
      );?>

      <?php if ($worksTags && !is_wp_error($worksTags)) :?>
        <?php foreach ($worksTags as $worksTag) :?>
          <span class = "c-tag__txt">#<?php echo esc_html($worksTag->name); ?></span>
        <?php endforeach;?>
      <?php endif; ?>
      <?php $area = get_field('works-area'); ?>
      <?php if ($area && !empty($area['total-floor'])) :?>
          <dl class = "u-flex">
            <dt>延床面積&nbsp;&nbsp;</dt>
            <dd><?php echo esc_html($area['total-floor']);?></dd>
          <dl>
      <?php endif; ?>
  　</div>
  </a>  
</li>
