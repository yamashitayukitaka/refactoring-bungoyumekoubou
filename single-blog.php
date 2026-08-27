<?php 
if ( ! defined( 'ABSPATH' ) ) exit;
get_header();
?>

<main>
  <h2 class = "c-title--section u-mb50">
    ブログ
  </h2>

  <section class = "l-content--middle u-mb150">

    <h3 class = "c-title--large u-mb5"> 
      <?php the_title(); ?>
    </h3>

    <deta class = "p-blog__deta"><?php echo esc_html(get_the_date('y/m/d')); ?></deta>

    <?php if (has_post_thumbnail()) : ?>
      <figure class="p-flex__one__imgWrap u-mb200">
        <?php the_post_thumbnail(); ?>
      </figure>
    <?php endif; ?>

    <?php if(have_posts() ): ?>
      <?php
      while(have_posts() ):
        the_post();
        ?>

        <?php the_content(); ?>

      <?php endwhile; ?>
    <?php endif; ?>

    <?php if( have_rows('contents') ): ?>
      <?php while ( have_rows('contents') ) : the_row(); ?>
        <?php if( get_row_layout() == 'img-column' ): ?>
          <?php $img = get_sub_field('img'); ?>
          <?php if ($img) : ?>
          <div class = "p-flex__one__imgWrap u-mb50">
            <img src = "<?php echo esc_url($img);?>">
          </div>
          <?php endif; ?>
        <?php elseif( get_row_layout() == 'ttl-column' ): ?>
          <?php $ttl = get_sub_field('ttl'); ?>
          <?php if ($ttl) : ?>
          <h4 class = "c-title--middle u-mb50">
            <?php echo esc_html($ttl); ?>
          </h4>
          <?php endif; ?>
        <?php elseif( get_row_layout() == 'txt-column' ): ?>
          <?php $txt = get_sub_field('txt'); ?>
          <?php if ($txt) : ?>
          <p class = "u-mb50">
            <?php echo wp_kses_post($txt); ?>
          </p>
          <?php endif; ?>
        <?php endif; ?>
      <?php endwhile; ?>
    <?php endif; ?>
    
    <p class = "p-blog__search__ttl">
        アーカイブ
    </p>
    <div> 
      <?php wp_get_archives(array(
          'type' => 'monthly',
          'format' => 'custom',
          'show_post_count' => true,
          'echo' => 1,
          'post_type' => 'blog',
          'post_status' => 'publish',
          'before' => '<p class="p-blog__search__link">',
          'after' => '</p>',
        )); ?>
    </div>
  </section>
</main>

<?php get_footer(); ?>