<?php
/**
 * Default page template.
 *
 * @package Wazeka
 */

if ( ! defined( 'ABSPATH' ) ) {
  exit;
}
get_header();
?>
<main>
  <?php if ( have_posts() ) : ?>
    <?php
    while ( have_posts() ) :
      the_post();
      ?>
      <h1 class="c-title--section u-mb50">
        <?php the_title(); ?>
      </h1>
      <div class="l-content--middle u-mb100">
        <?php if ( has_post_thumbnail() ) : ?>
          <figure class="c-thumbnail u-mb50">
          <?php 
            the_post_thumbnail( 'full', array(
              'loading'       => 'eager', // 初期表示なのでlazyを解除！
              'fetchpriority' => 'high',  // 最優先でダウンロード！
            ) ); 
            ?>
          </figure>
        <?php endif; ?>
        <?php the_content(); ?>
      </div>
    <?php endwhile; ?>
  <?php endif; ?>
</main>
<?php get_footer(); ?>
