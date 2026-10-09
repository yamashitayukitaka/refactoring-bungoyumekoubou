<?php
if ( ! defined( 'ABSPATH' ) ) {
  exit;
}
get_header();
?>
<?php
  $taxonomy       = 'property-category';
  $post_type_slug = 'property';
  $tag            = 'property-area';
?>

<main>
  <h2 class = "c-title--section u-mb50">
    土地・物件情報
  </h2>

<?php $terms = get_terms(
    $taxonomy,
    [
      'hide_empty' => false,
      'parent'     => 0,
      'orderby'    => 'id',
      'order'      => 'DESC',
      ]
);?>
 
  <ul class = "c-term__list">
    
    <li class = "c-term__list__item u-current">
      <a href = "<?php echo esc_url( get_post_type_archive_link( 'property' ) ); ?>">
        すべて
      </a>
    </li>
  
    <?php if ( $terms && ! is_wp_error( $terms ) ) : ?>
      <?php foreach ( $terms as $term ) :?>
      <li class = "c-term__list__item">
        <a href = "<?php echo esc_url( get_term_link( $term ) ); ?>">
          <?php echo esc_html( $term->name ); ?>
        </a>
      </li>
      <?php endforeach;?>
    <?php endif; ?>
  </ul>

<?php $area_tags = get_terms(
    $tag,
    [
        'hide_empty' => false,
        'parent'     => 0,
        'orderby'    => 'id',
        'order'      => 'ASC',
        ]
);?>

    <ul class = "c-tag__list l-content--large">

      
      <li class = "c-tag__list__item">
        <a href = "#" class = "js-allTab c-tag__list__link u-currentTab">すべて</a>
      </li>
      
      
      <?php if ( $area_tags && ! is_wp_error( $area_tags ) ) : ?>
        <?php foreach ( $area_tags as $area_tag ) :?>
          <?php $area_slug = $area_tag->slug;?>
        <li class = "c-tag__list__item">
          <a href = "<?php echo esc_url( get_term_link( $area_slug, $tag ) ); ?>" class = "js-tab c-tag__list__link">
            <?php echo esc_html( $area_tag->name ); ?>
          </a>
        </li>
        <?php endforeach;?>
      <?php endif; ?>
    </ul>

    <section class = "l-content">
    <?php
      $paged    = ( get_query_var( 'paged' ) ) ? get_query_var( 'paged' ) : 1;
      $property = array(
      'post_type'      => 'property',
      'posts_per_page' => 7,
      'paged'          => $paged,
      'orderby'        => 'menu_order',
      'order'          => 'ASC',
      );?>
    <?php $property_loop = new WP_Query( $property );?>
    <?php if ( $property_loop->have_posts() ) : ?>
      <ul class = "c-cardList c-cardList--lead">
        <?php while ( $property_loop->have_posts() ) :
          $property_loop->the_post();?>
          <?php get_template_part( 'template-parts/property-loop' ); ?>
        <?php endwhile;?>
      </ul>
    <?php endif;
    wp_reset_postdata();?>

    <?php if ( $property_loop->max_num_pages > 1 ) :?>
      <div class = "u-mb50">
        <?php wazeka_query_pagination( $property_loop ); ?>
      </div>
    <?php endif; ?>
    

  </section> 
</main>

<?php get_footer(); ?>