<?php
/**
 * Property card loop item part.
 *
 * @package Wazeka
 */

?>
<li class = "c-cardList__item">
  <a href = "<?php the_permalink(); ?>" class = "c-cardList__link">
    <figure class = "c-cardList__imgWrap">
      <?php the_post_thumbnail( '', array( 'loading' => 'lazy' ) ); ?>
    </figure>
    <div class = "c-cardList__txtWrap">

    <?php $terms = get_the_terms(
        get_the_ID(),
        'property-category',
        [
          'hide_empty' => false,
          'parent'     => 0,
          'orderby'    => 'id',
          'order'      => 'ASC',
          ]
    );?>

      <?php $property_category = get_field( 'property-category' ); ?>
      <?php if ( $property_category && $terms && ! is_wp_error( $terms ) ) : ?>
        <?php foreach ( $terms as $local_term ) :?>
          <span class = "c-id u-mb8"><?php echo esc_html( $local_term->name ); ?></span>
        <?php endforeach;?>
      <?php endif; ?>

    <?php $tags = get_the_terms(
        get_the_ID(),
        'property-area',
        [
          'hide_empty' => false,
          'parent'     => 0,
          'orderby'    => 'id',
          'order'      => 'ASC',
          ]
    );?>

      <?php $property_area = get_field( 'property-area' ); ?>
      <?php if ( $property_area && $tags && ! is_wp_error( $tags ) ) : ?>
        <?php foreach ( $tags as $local_tag ) :?>
          <div><span class = "c-cardList__tag"><?php echo esc_html( $local_tag->name ); ?></span></div>
        <?php endforeach;?>
      <?php endif; ?>
      <p class = "c-cardList__ttl">
        <?php the_title(); ?>
      </p>
      <?php
        $top_info = get_field( 'top-info' );
      if ( $top_info && ( ! empty( $top_info['area'] ) || ! empty( $top_info['school'] ) ) ) :
        ?>
        <?php if ( ! empty( $top_info['area'] ) ) : ?>
        <p class = "c-cardList__txt">土地面積：<?php echo esc_html( $top_info['area'] );?></p>
        <?php endif; ?>
        <?php if ( ! empty( $top_info['school'] ) ) : ?>
        <p class = "c-cardList__txt">校区：<?php echo esc_html( $top_info['school'] );?></p>
        <?php endif; ?>
      <?php endif; ?>

      <?php
        $top_info_used = get_field( 'top-info-used' );
      if ( $top_info_used && ( ! empty( $top_info_used['floor'] ) || ! empty( $top_info_used['school'] ) ) ) :
        ?>
        <?php if ( ! empty( $top_info_used['floor'] ) ) : ?>
        <p class = "c-cardList__txt">間取り：<?php echo esc_html( $top_info_used['floor'] );?></p>
        <?php endif; ?>
        <?php if ( ! empty( $top_info_used['school'] ) ) : ?>
        <p class = "c-cardList__txt">校区：<?php echo esc_html( $top_info_used['school'] );?></p>
        <?php endif; ?>
      <?php endif; ?>

    </div>
  </a>
</li>