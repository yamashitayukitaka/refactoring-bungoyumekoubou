<a href = "<?php echo esc_url (home_url('recruit') ); ?>">
<section class = "p-about__recruit u-mb100">
  <div class = "p-about__recruit__content">
    <?php
      $staff = array(
      'post_type' => 'staff',
      'posts_per_page' =>6,
      'orderby'=> 'date',
      'order'=>'ASC'
      );?>
    <?php $staffLoop = new WP_Query($staff);?>
      <?php if ($staffLoop->have_posts()): ?>
      <ul class = "p-about__recruitStaff__list">
        <?php while ($staffLoop->have_posts()) : $staffLoop->the_post();?>
          <li class = "p-about__recruitStaff__listItem js-staffImg">
            
              <img src = "<?php the_field('staff-img'); ?>" class = "p-about__staff__listImg" alt= "スタッフ画像">
            
          </li>
        <?php endwhile;
        endif;
        wp_reset_postdata();?>
      </ul>
    
      <div class = "p-about__recruit__txtWrap">
        <h3 class = "p-about__recruit__ttl">Recruit</h3>
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
      'post_type' => 'staff',
      'posts_per_page' =>6,
      'orderby'=> 'date',
      'order'=>'DESC'
      );?>
    <?php $staffLoop2 = new WP_Query($staff2);?>
      <?php if ($staffLoop2->have_posts()): ?>
      <ul class = "p-about__recruitStaff__list">
        <?php while ($staffLoop2->have_posts()) : $staffLoop2->the_post();?>
          <li class = "p-about__recruitStaff__listItem js-staffImg">
            
              <img src = "<?php the_field('staff-img'); ?>" class = "p-about__staff__listImg" alt= "スタッフ画像">
            
          </li>
        <?php endwhile;
        endif;
        wp_reset_postdata();?>
      </ul>
  </div>
</section>
</a>