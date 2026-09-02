<section class = "l-content u-mb100 u-pt100">
  
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
<section class = "l-content u-mb100">
  <div class = "u-center u-mb10">
    <h3 class = "c-title--sectionLine">
      BUILT＆LAND
    </h3>
  </div>
  <div class = "u-center u-mb30">
    <p class = "c-title--orangeLine">
      <span class = "marker">土地・物件情報</span>
    </p>
  </div>
  <?php
    $paged = ( get_query_var('paged') ) ? get_query_var('paged') : 1;
    $property = array(
    'post_type' => 'property',
    'posts_per_page' =>3,
    'paged'=>$paged,
    'order' => 'DESC',
    'orderby'=>'date',
  );?>
  <?php $propertyLoop = new WP_Query($property);?>
  <?php if ($propertyLoop->have_posts()): ?>
    <ul class = "c-cardList">
      <?php while ($propertyLoop->have_posts()) : $propertyLoop->the_post();?>
        <?php get_template_part('template-parts/property-loop'); ?>
      <?php endwhile;?>
    </ul>
    <div class = "u-center">
      <a href = "<?php echo esc_url (home_url('property') ); ?>" class = "c-button--page">土地・物件情報一覧へ</a>
    </div>
  <?php endif;
  wp_reset_postdata();?>
</section>