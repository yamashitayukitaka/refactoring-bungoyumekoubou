<?php 
  //投稿の日つけ別アーカイブページ
    if ( ! defined( 'ABSPATH' ) ) exit;
  get_header();
?>
<main class = "l-content">
  
  <?php
    $args = array(
    'post_type' => 'news',
    'posts_per_page' => 3,
    'orderby' => 'date', // 投稿を日付で並べ替えます。
    'order' => 'DESC', // 降順に並べ替えます（新しい順）。
    );?>
    <?php $myQuery = new WP_Query($args);?>
      <?php if ($myQuery->have_posts()): ?>
        <?php while ($myQuery->have_posts()) : $myQuery->the_post();?>
          <?php the_title(); ?>
        <?php endwhile;
      endif;
    wp_reset_postdata();?>

  <?php the_posts_pagination(); ?>

  <?php wp_get_archives(array(
    //これらの設定により月別アーカイブを表示することが可能になる。
    'type' => 'monthly',
    'format' => 'custom',
    'show_post_count' => true,
    'echo' => 1,
    'post_type' => 'news',
    'post_status' => 'publish',
    'before' => '<p class="">',
    'after' => '</p>',
  )); ?>

</main>

<?php get_footer(); ?>