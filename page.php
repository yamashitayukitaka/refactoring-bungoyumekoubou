<?php
if (!defined('ABSPATH')) {
  exit;
}
get_header();
?>
<main>
  <?php if (have_posts()) : ?>
    <?php while (have_posts()) :
      the_post(); ?>
      <h2 class="c-title--section u-mb50"><?php the_title(); ?></h2>
      <section class="l-content--middle u-mb100">
        <?php if (has_post_thumbnail()) : ?>
          <figure class="c-thumbnail u-mb50">
            <?php the_post_thumbnail(); ?>
          </figure>
        <?php endif; ?>
        <?php the_content(); ?>
      </section>
    <?php endwhile; ?>
  <?php endif; ?>
</main>
<?php get_footer(); ?>
