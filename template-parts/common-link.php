<section class = "l-content u-mb100 u-pt100">
  <div class = "u-center u-mb10">
    <h3 class = "c-title--sectionLine">
      WORKS＆VOICE
    </h3>
  </div>
  <div class = "u-center u-mb30">
    <p class = "c-title--orangeLine">
      <span class = "marker">施工事例・お客様の声</span>
    </p>
  </div>

  <?php
      $paged = ( get_query_var('paged') ) ? get_query_var('paged') : 1;
      $works = array(
      'post_type' => 'works',
      'posts_per_page' => 3,
      'paged'=>$paged,
      'order' => 'DESC',
      'orderby'=>'date',
    );?>

    <?php $worksLoop = new WP_Query($works);?>
    <?php if ($worksLoop->have_posts()): ?>
      <ul class = "c-cardList js-allswitch">
        <?php while ($worksLoop->have_posts()) : $worksLoop->the_post();?>
          <?php get_template_part('template-parts/works-loop'); ?>
        <?php endwhile;?>
      </ul>
    <?php endif;
    wp_reset_postdata();?>

  <div class = "u-center">
    <a href = "<?php echo esc_url (home_url('works') ); ?>" class = "c-button--page">施工事例一覧へ</a>
  </div>

</section>









<section class = "l-content u-mb100 ">
  
  <div class = "u-center u-mb10">
    <h3 class = "c-title--sectionLine">
      EVENT
    </h3>
  </div>

  <div class = "u-center u-mb30">
    <p class = "c-title--orangeLine">
      <span class = "marker">最新情報をお届けします</span>
    </p>
  </div>

<?php
  $event = array(
  'post_type' => 'xo_event',
  'posts_per_page' =>3,
  'order' => 'DESC',
  'orderby'=>'date',
);?>
<?php $eventLoop = new WP_Query($event);?>
<?php if ($eventLoop->have_posts()): ?>
  <ul class = "c-cardList u-mb50">
    <?php while ($eventLoop->have_posts()) : $eventLoop->the_post();?>
      <?php get_template_part('template-parts/event-loop'); ?>
    <?php endwhile;
    endif;
    wp_reset_postdata();?>
  </ul>
  <div class = "u-center">
    <a href = "<?php echo esc_url (home_url('xo_event') ); ?>" class = "c-button--page">イベント一覧へ</a>
  </div>
</section>