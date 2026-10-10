<?php
if ( ! defined( 'ABSPATH' ) ) {
  exit;
}
get_header();
?>
<?php
  $local_taxonomy  = 'works-type';
  $local_post_type = 'works';
  $local_tag       = 'works-tag';
?>

<main>

  <h2 class = "c-title--section u-mb50">
    施工事例
  </h2>

<?php $terms = get_terms(
    $local_taxonomy,
    [
      'hide_empty' => false,
      'parent'     => 0,
      'orderby'    => 'id',
      'order'      => 'DESC',
      ]
);?>
 
  <ul class = "c-term__list">
    <li class = "c-term__list__item u-current">
      <a href = "<?php echo esc_url( get_post_type_archive_link( 'works' ) ); ?>">
        すべて
      </a>
    </li>
    <?php if ( $terms && ! is_wp_error( $terms ) ) : ?>
      <?php foreach ( $terms as $local_term ) :?>
      <li class = "c-term__list__item">
        <a href = "<?php echo esc_url( get_term_link( $local_term ) ); ?>">
          <?php echo esc_html( $local_term->name ); ?>
        </a>
      </li>
      <?php endforeach;?>
    <?php endif; ?>
  </ul>

 
    <?php $works_tags = get_terms(
        $local_tag,
        [
        'hide_empty' => false,
        'parent'     => 0,
        'orderby'    => 'id',
        'order'      => 'ASC',
        ]
    );?>

    <?php if ( $works_tags && ! is_wp_error( $works_tags ) ) :?>
      <ul class = "c-tag__list l-content--large">
        
        <li class = "c-tag__list__item">
          <a href = "#" class = "js-allTab c-tag__list__link u-currentTab">すべて</a>
        </li>
        
        <?php foreach ( $works_tags as $works_tag ) :?>
          <?php $works_slug = $works_tag->slug;?>
          <li class = "c-tag__list__item">
            <a href = "<?php echo esc_url( get_term_link( $works_slug, $local_tag ) ); ?>" class = "js-tab c-tag__list__link">
              <?php echo esc_html( $works_tag->name ); ?>
            </a>
          </li>
        <?php endforeach;?>
      </ul>

    <?php endif; ?>
    
    <section class = "l-content">
    <?php
      $local_paged = ( get_query_var( 'paged' ) ) ? get_query_var( 'paged' ) : 1;
      $works = array(
      'post_type'      => 'works',
      'posts_per_page' => 7,
      'paged'          => $local_paged,
      'orderby'        => 'menu_order',
      'order'          => 'ASC',
      );?>
    <?php $works_loop = new WP_Query( $works );?>
    <?php if ( $works_loop->have_posts() ) : ?>
      <ul class = "c-cardList c-cardList--lead js-allswitch">
        <?php while ( $works_loop->have_posts() ) :
          $works_loop->the_post();?>
          <?php get_template_part( 'template-parts/works-loop' ); ?>
        <?php endwhile;?>
      </ul>
    <?php endif;
    wp_reset_postdata();?>

    <?php if ( $works_loop->max_num_pages > 1 ) :?>
      <div class = "u-mb50">
        <?php wazeka_query_pagination( $works_loop ); ?>
      </div>
    <?php endif; ?>
    
  </section> 
</main>

<?php get_footer(); ?>