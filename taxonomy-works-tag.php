<?php
/**
 * Works tag taxonomy archive template.
 *
 * @package Wazeka
 */

if ( ! defined( 'ABSPATH' ) ) {
  exit;
}

get_header(); ?>

<?php
  $local_taxonomy       = 'works-type';
  $local_tag            = 'works-tag';
  $main_query_term      = get_queried_object();
  $main_query_term_name = $main_query_term->name;
  $main_query_term_slug = $main_query_term->slug;
?>

<?php
$loot_slug   = sanitize_title( (string) get_query_var( 'works_type' ) );
$local_paged = ( get_query_var( 'paged' ) ) ? get_query_var( 'paged' ) : 1;

if ( $loot_slug ) {
    $works = array(
        'post_type'      => 'works',
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
                'taxonomy' => 'works-type',
                'field'    => 'slug',
                'terms'    => $loot_slug,
            ),
        ),
    );
} else {
    $works = array(
        'post_type'      => 'works',
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
  施工事例
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
      <a href = "<?php echo esc_url( get_post_type_archive_link( 'works' ) ); ?>">
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
      <a href = "<?php echo esc_url( get_post_type_archive_link( 'works' ) ); ?>">
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



<?php $works_tags = get_terms(
    [
      'taxonomy'   => $local_tag,
      'hide_empty' => false,
      'parent'     => 0,
      'orderby'    => 'id',
      'order'      => 'ASC',
      ]
);?>

  <?php if ( $works_tags && ! is_wp_error( $works_tags ) ) :?>
    <ul class = "c-tag__list l-content--large">
      
      <?php if ( $loot_slug ) :?>
        <li class = "c-tag__list__item">
          <a href = "<?php echo esc_url( home_url( 'works-type/' . $loot_slug ) ); ?>" class = "js-allTab c-tag__list__link">すべて</a>
        </li>
      <?php else : ?>
        <li class = "c-tag__list__item">
          <a href = "<?php echo esc_url( home_url( 'works/' ) ); ?>" class = "js-allTab c-tag__list__link">すべて</a>
        </li>
      <?php endif; ?>
      
      <?php foreach ( $works_tags as $works_tag ) :?>
        <?php $works_slug = $works_tag->slug;?>
        <li class = "c-tag__list__item">
          <a href = "<?php echo esc_url( $loot_slug ? add_query_arg( 'works_type', $loot_slug, get_term_link( $works_slug, $local_tag ) ) : get_term_link( $works_slug, $local_tag ) ); ?>" class = "js-tab c-tag__list__link <?php if ( $works_slug === $main_query_term_slug ) :
            ?>u-currentTab<?php
                     endif; ?>">
            <?php echo esc_html( $works_tag->name ); ?>
          </a>
        </li>
      <?php endforeach;?>
    </ul>

  <?php endif; ?>

  <div class="l-content">
    <?php $works_loop = new WP_Query( $works );?>
      <?php if ( $works_loop->have_posts() ) : ?>
        <ul class = "c-cardList js-allswitch">
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
  </div>

</main>

<?php get_footer(); ?>