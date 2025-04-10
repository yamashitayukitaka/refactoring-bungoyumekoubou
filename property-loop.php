<li class = "p-content__list__item">
  <a href = "<?php the_permalink(); ?>" class = "p-content__list__link">
    <figure class = "p-content__list__imgWrap">
      <?php the_post_thumbnail();?>
    </figure>
    <div class = "p-content__list__txtWrap">

      <?php $terms = get_the_terms(get_the_ID(),'property-category', 
      //get_terms  と　get_the_termsの違いは、get_the_termsはループ内でget_the_idを引数にとれば、
      //その投稿に紐ずくタームのみを取得でき、get_termsはループ外でターム一覧を取得する
        [
          'hide_empty' => false,
          'parent' =>0,
          'orderby'=>'id',
          'order'=>'ASC',
        ]
      );?>

      <?php if(get_field('property-category')): ?>
        <?php foreach($terms as $term):?>
          <span class = "c-id u-mb8"><?php echo esc_html($term->name); ?></span>
        <?php endforeach;?>
      <?php endif; ?>

      <?php $tags = get_the_terms(get_the_ID(),'property-area', 
      //get_terms  と　get_the_termsの違いは、get_the_termsはループ内でget_the_idを引数にとれば、
      //その投稿に紐ずくタームのみを取得でき、get_termsはループ外でターム一覧を取得する
        [
          'hide_empty' => false,
          'parent' =>0,
          'orderby'=>'id',
          'order'=>'ASC',
        ]
      );?>

      <?php if(get_field('property-area')): ?>
        <?php foreach($tags as $tag):?>
          <div><span class = "p-content__tag"><?php echo esc_html($tag->name); ?></span></div>
        <?php endforeach;?>
      <?php endif; ?>
      <p class = "p-content__list__ttl">
        <?php the_title(); ?>
      </p>
      <?php 
        $topInfo = get_field('top-info');
        if($topInfo):
        $topInfoArea = $topInfo['area'];
        $topInfoSchool = $topInfo['school'];
      ?>
        <p class = "p-content__list__txt">土地面積：<?php echo esc_html($topInfoArea);?></p>
        <p class = "p-content__list__txt">校区：<?php echo esc_html($topInfoSchool);?></p>
      <?php endif; ?>

      <?php 
        $topInfoUsed = get_field('top-info-used');
        if($topInfoUsed):
        $topInfoUsedFloor = $topInfoUsed['floor'];
        $topInfoUsedSchool = $topInfoUsed['school'];
      ?>
        <p class = "p-content__list__txt">間取り：<?php echo esc_html($topInfoUsedFloor);?></p>
        <p class = "p-content__list__txt">校区：<?php echo esc_html($topInfoUsedSchool);?></p>
      <?php endif; ?>

    </div>
  </a>
</li>