<?php 
// Template Name: search
  if ( ! defined( 'ABSPATH' ) ) exit;
  get_header();
?>
<main class = "l-content">
  <?php if(have_posts() ): ?>
    <?php
    while(have_posts() ):
      the_post();
      ?>
        <?php the_title(); ?>
        <?php the_content(); ?>
      <?php endwhile; ?>
    <?php else:?>
    <p>検索結果は見つかりませんでした</p>
  <?php endif; ?>
</main>
<?php get_footer(); ?>