<?php
/**
 * Works card loop item part.
 *
 * @package Wazeka
 */

?>
<li class = "c-cardList__item">
  <article class = "c-cardList__body">
    <a href = "<?php the_permalink(); ?>" class = "c-cardList__link">
      <?php $thumb = get_field( 'works-thumb' ); ?>
      <?php if ( ! empty( $thumb ) ) : ?>
      <figure class = "c-cardList__imgWrap">
        <img src = "<?php echo esc_url( $thumb ); ?>" alt = "<?php echo esc_attr( get_the_title() ); ?>" loading="lazy">
      </figure>
      <?php endif; ?>
      <div class = "c-cardList__txtWrap">
      <?php $works_types = get_the_terms(
          get_the_ID(),
          'works-type',
          [
              'hide_empty' => false,
              'parent'     => 0,
              'orderby'    => 'id',
              'order'      => 'ASC',
            ]
      );?>

        <?php if ( $works_types && ! is_wp_error( $works_types ) ) :?>
          <?php foreach ( $works_types as $works_type ) :?>
            <span class = "c-id u-mb15"><?php echo esc_html( $works_type->name ); ?></span>
          <?php endforeach;?>
          
          <p class = "c-cardList__ttl">
            <?php the_title(); ?>
          </p>
        <?php endif; ?>

      <?php $works_tags = get_the_terms(
          get_the_ID(),
          'works-tag',
          [
              'hide_empty' => false,
              'parent'     => 0,
              'orderby'    => 'id',
              'order'      => 'ASC',
            ]
      );?>

        <?php if ( $works_tags && ! is_wp_error( $works_tags ) ) :?>
          <?php foreach ( $works_tags as $works_tag ) :?>
            <span class = "c-tag__txt">#<?php echo esc_html( $works_tag->name ); ?></span>
          <?php endforeach;?>
        <?php endif; ?>
        <?php $area = get_field( 'works-area' ); ?>
        <?php if ( $area && ! empty( $area['total-floor'] ) ) :?>
            <dl class = "u-flex">
              <dt>延床面積&nbsp;&nbsp;</dt>
              <dd><?php echo esc_html( $area['total-floor'] );?></dd>
            <dl>
        <?php endif; ?>
    　</div>
    </a>
  </article>
</li>
