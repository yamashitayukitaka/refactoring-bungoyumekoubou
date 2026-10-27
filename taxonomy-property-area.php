<?php
/**
 * Property area taxonomy archive template.
 *
 * @package Wazeka
 */

if ( ! defined( 'ABSPATH' ) ) {
  exit;
}

get_header(); ?>

<?php
    $local_taxonomy       = 'property-category';
    $main_query_term      = get_queried_object();
    $main_query_term_name = $main_query_term->name;
    $main_query_term_slug = $main_query_term->slug;
    $local_tag            = 'property-area';
?>

<?php
$loot_slug   = sanitize_title( (string) get_query_var( 'property_category' ) );
$local_paged = ( get_query_var( 'paged' ) ) ? get_query_var( 'paged' ) : 1;

if ( $loot_slug ) {
  $args = array(
      'post_type'      => 'property',
      'posts_per_page' => 6,
      'paged'          => $local_paged,
      'orderby'        => 'menu_order',
      'order'          => 'ASC',
      'tax_query'      => array(
          'relation' => 'AND',
          array(
              'taxonomy' => $local_tag,
              'field'    => 'slug',
              'terms'    => $main_query_term_slug,
          ),
          array(
              'taxonomy' => 'property-category',
              'field'    => 'slug',
              'terms'    => $loot_slug,
          ),
      ),
  );
} else {
  $args = array(
      'post_type'      => 'property',
      'posts_per_page' => 6,
      'paged'          => $local_paged,
      'orderby'        => 'menu_order',
      'order'          => 'ASC',
      'tax_query'      => array(
          array(
              'taxonomy' => $local_tag,
              'field'    => 'slug',
              'terms'    => $main_query_term_slug,
          ),
      ),
  );
}
?>
<main>

<h1 class = "c-title--section u-mb50">
  土地・物件情報
</h1>

<?php $terms = get_terms(
    [
    'taxonomy'   => $local_taxonomy,
    'hide_empty' => false,
    'parent'     => 0,
    'orderby'    => 'id',
    'order'      => 'DESC',
    ]
);?>

<?php if ( $loot_slug ) : ?>
  <ul class = "c-term__list">
    <li class = "c-term__list__item">
      <a href = "<?php echo esc_url( get_post_type_archive_link( 'property' ) ); ?>">
        すべて
      </a>
    </li>
    <?php if ( $terms && ! is_wp_error( $terms ) ) : ?>
      <?php foreach ( $terms as $local_term ) :?>
        <?php $term_slug = $local_term->slug;?>
        <li class = "c-term__list__item <?php if ( $loot_slug === $term_slug ) :
          ?>u-current<?php
                                        endif; ?>">
          <a href = "<?php echo esc_url( get_term_link( $local_term ) ); ?>">
            <?php echo esc_html( $local_term->name ); ?>
          </a>
        </li>
      <?php endforeach;?>
    <?php endif; ?>
  </ul>

<?php else : ?>
  <ul class = "c-term__list">
    <li class = "c-term__list__item u-current">
      <a href = "<?php echo esc_url( get_post_type_archive_link( 'property' ) ); ?>">
        すべて
      </a>
    </li>
    <?php if ( $terms && ! is_wp_error( $terms ) ) : ?>
      <?php foreach ( $terms as $local_term ) :?>
        <?php $term_slug = $local_term->slug;?>
        <li class = "c-term__list__item">
          <a href = "<?php echo esc_url( get_term_link( $local_term ) ); ?>">
            <?php echo esc_html( $local_term->name ); ?>
          </a>
        </li>
      <?php endforeach;?>
    <?php endif; ?>
  </ul>

<?php endif; ?>

<?php $property_tags = get_terms(
    [
      'taxonomy'   => $local_tag,
      'hide_empty' => false,
      'parent'     => 0,
      'orderby'    => 'id',
      'order'      => 'ASC',
      ]
);?>

  <ul class = "c-tag__list l-content--large">
    
  <?php if ( $loot_slug ) :?>
    <li class = "c-tag__list__item">
      <a href = "<?php echo esc_url( home_url( 'property-category/' . $loot_slug ) ); ?>" class = "c-tag__list__link">すべて</a>
    </li>
  <?php else : ?>
    <li class = "c-tag__list__item">
      <a href = "<?php echo esc_url( home_url( 'property/' ) ); ?>" class = "c-tag__list__link">すべて</a>
    </li>
  <?php endif; ?>
    
    <?php if ( $property_tags && ! is_wp_error( $property_tags ) ) : ?>
      <?php foreach ( $property_tags as $property_tag ) :?>
        <?php $property_slug = $property_tag->slug;?>
      <li class = "c-tag__list__item">
        <a href = "<?php echo esc_url( $loot_slug ? add_query_arg( 'property_category', $loot_slug, get_term_link( $property_slug, $local_tag ) ) : get_term_link( $property_slug, $local_tag ) ); ?>" class = "js-tab c-tag__list__link <?php if ( $property_slug === $main_query_term_slug ) :
          ?>u-currentTab<?php
                   endif; ?>">
          <?php echo esc_html( $property_tag->name ); ?>
        </a>
      </li>
      <?php endforeach;?>
    <?php endif; ?>
  </ul>

  <div class="l-content">
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
  </div>

</main>

<?php get_footer(); ?>