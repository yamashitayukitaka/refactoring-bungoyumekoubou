<?php
if ( ! defined( 'ABSPATH' ) ) {
  exit;
}
get_header();
?>

<?php
    $taxonomy             = 'property-category';
    $main_query_term      = get_queried_object();
    $main_query_term_name = $main_query_term->name;
    $main_query_term_slug = $main_query_term->slug;
    $tag                  = 'property-area';
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
      <li class = "c-term__list__item">
        <a href = "<?php echo esc_url( get_post_type_archive_link( 'property' ) ); ?>">
          すべて
        </a>
      </li>
      <?php if ( $terms && ! is_wp_error( $terms ) ) : ?>
        <?php foreach ( $terms as $term ) :?>
          <?php $term_name = $term->name;?>
        <li class = "c-term__list__item <?php if ( $main_query_term_name === $term_name ) :
          ?> u-current <?php
                                        endif; ?>">
          <a href = "<?php echo esc_url( get_term_link( $term ) ); ?>">
            <?php echo esc_html( $term->name ); ?>
          </a>
        </li>
        <?php endforeach;?>
      <?php endif; ?>
    </ul>

    <?php $property_tags = get_terms(
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
        <a href = "<?php echo esc_url( home_url( 'property-category/' . $main_query_term_slug ) ); ?>" class = "js-allTab c-tag__list__link u-currentTab">すべて</a>
      </li>
      
      <?php if ( $property_tags && ! is_wp_error( $property_tags ) ) : ?>
        <?php foreach ( $property_tags as $property_tag ) :?>
          <?php $property_slug = $property_tag->slug;?>
        <li class = "c-tag__list__item">
          <a href = "<?php echo esc_url( add_query_arg( 'property_category', $main_query_term_slug, get_term_link( $property_slug, $tag ) ) ); ?>" class = "js-tab c-tag__list__link">
            <?php echo esc_html( $property_tag->name ); ?>
          </a>
        </li>
        <?php endforeach;?>
      <?php endif; ?>
    </ul>

  <section class = "l-content">
    <?php
      $paged = ( get_query_var( 'paged' ) ) ? get_query_var( 'paged' ) : 1;
      $args  = array(
      'post_type'      => 'property',
      'posts_per_page' => 6,
      'paged'          => $paged,
      'orderby'        => 'menu_order',
      'order'          => 'ASC',
      'tax_query'      => array(
      array(
        'taxonomy' => $taxonomy,
        'field'    => 'slug',
        'terms'    => $main_query_term_slug,
        ),
      ),
      );?>

    <?php $my_query = new WP_Query( $args );?>
    <?php if ( $my_query->have_posts() ) : ?>
      <ul class = "c-cardList js-allswitch">
        <?php while ( $my_query->have_posts() ) :
          $my_query->the_post();?>
          <?php get_template_part( 'template-parts/property-loop' ); ?>
        <?php endwhile;?>
      </ul>
    <?php endif;
    wp_reset_postdata();?>

    <?php if ( $my_query->max_num_pages > 1 ) :?>
      <div class = "u-mb50">
        <?php wazeka_query_pagination( $my_query ); ?>
      </div>
    <?php endif; ?>
    
  </section>

</main>

<?php get_footer(); ?>