<?php
if ( ! defined( 'ABSPATH' ) ) {
  exit;
}
get_header();
?>

<main class = "p-blog">
  <h2 class = "c-title--section u-mb50">
    ブログ
  </h2>
  
  <ul class = "p-blog__list u-flex l-content">
      <?php
        $local_paged = ( get_query_var( 'paged' ) ) ? get_query_var( 'paged' ) : 1;
        $blogs       = array(
        'post_type'      => 'blog',
        'posts_per_page' => 6,
        'paged'          => $local_paged,
        'order'          => 'DESC',
        'orderby'        => 'post_date',
        );?>
   
      <?php
      if ( is_month() ) {
        $blog_loop = $wp_query;
      } else {
        $local_paged = ( get_query_var( 'paged' ) ) ? get_query_var( 'paged' ) : 1;
        $args        = array(
            'post_type'      => 'blog',
            'posts_per_page' => 6,
            'paged'          => $local_paged,
            'order'          => 'DESC',
            'orderby'        => 'post_date',
        );
        $blog_loop   = new WP_Query( $args );
      }
      ?>
      
        <?php if ( $blog_loop->have_posts() ) : ?>
          <?php while ( $blog_loop->have_posts() ) :
            $blog_loop->the_post();?>
          <li class = "p-blog__list__item">
            <a href = "<?php the_permalink(); ?>">
              <figure class = "p-blog__list__img">
                <?php the_post_thumbnail();?>
              </figure>
            
              <div>
                <deta class = "p-blog__list__deta"><?php echo esc_html( get_the_date( 'y/m/d' ) ); ?></deta>
                  <p><?php the_title(); ?></p>
              </div>
            </a>
          </li>
          <?php endwhile;
        endif;
        wp_reset_postdata();?>
    </ul>

    <?php if ( $blog_loop->max_num_pages > 1 ) :?>
      <div class = "u-mb50">
        <?php wazeka_query_pagination( $blog_loop ); ?>
      </div>
    <?php endif; ?>

    <section class = "p-blog__search l-content u-mb100">
      <p class = "p-blog__search__ttl">
        最新記事
      </p>
      <div class = "p-blog__search__latest">
        <?php
          $args = array(
          'post_type'      => 'blog',
          'posts_per_page' => 4,
          'orderby'        => 'date',
          'order'          => 'DESC',
          );?>
          <?php $blog_loop = new WP_Query( $args );?>
          <?php if ( $blog_loop->have_posts() ) : ?>
            <?php while ( $blog_loop->have_posts() ) :
              $blog_loop->the_post();?>
          <a href = "<?php the_permalink(); ?>">
              <?php the_title(); ?>
          </a>
            <?php endwhile;
          endif;
          wp_reset_postdata();?>
      </div> 
      <p class = "p-blog__search__ttl">
        アーカイブ
      </p>
      <div> 
        <?php wp_get_archives(
            array(
            'type'            => 'monthly',
            'format'          => 'custom',
            'show_post_count' => true,
            'echo'            => 1,
            'post_type'       => 'blog',
            'post_status'     => 'publish',
            'before'          => '<p class="p-blog__search__link">',
            'after'           => '</p>',
            )
        ); ?>
      </div>
    </section> 
</main>
<?php get_footer();?>