<?php 
  // Template Name: recruit
    if ( ! defined( 'ABSPATH' ) ) exit;
  get_header();
?>

<?php
  $taxonomy = 'recruit-type';
  $postType = 'recruit'
?>

<main class = "l-content">
  
  <ul class = "p-bread__list">
    <li class = "p-bread__list__item"><a href = "<?php echo esc_url (home_url('') ); ?>" class = "p-bread__list__link">ホーム</a><span class = "p-bread__list__arrow">></span></li>
    <li class = "p-bread__list__item">採用情報</li>
  </ul>

  <h3>募集の種類</h3>
  
  <section class = "u-mb50">
  <ul>
    
    <?php $types = get_terms($taxonomy, 
      [
      'hide_empty' => false,
      'orderby'=>'id',
      'order'=>'ASC',
      ]
    );?>
    
    <?php foreach($types as $type):?>
    <?php $term_id = $type->term_id ;?>
    <?php
        $args = array(
        'post_type' => $postType,
        'posts_per_page' => -1,
        'orderby' => 'menu_order',
        'order'=>'ASC',
        'tax_query' => array(
        array(
        'taxonomy' => $taxonomy,
        'terms' => $term_id,//slugではなくidの使用が推奨
        'field' => 'term_id'
        ),
      ),
    );
    $recruitLoop = new WP_Query( $args ); ?>
    <?php if ( $recruitLoop->have_posts() ): ?>
    
      <li>
        <p>
          <?php echo ($type->name); ?>
        </p>
        <?php while ( $recruitLoop->have_posts() ): $recruitLoop->the_post(); ?>
            <a href = "<?php the_permalink(); ?>" class = "c-button--jp p-recruit-department__list__button">
              <?php the_title(); ?>
            </a>
            <?php endwhile;?> 
          <?php endif; ?>
        <?php wp_reset_postdata(); ?>
      </li>

    <?php endforeach;?>
    <?php
        $sorry = array(
        'post_type' => $postType,
        'posts_per_page' => -1,
        'orderby' => 'menu_order',
        'order'=>'ASC',
        'tax_query' => array(
      ),
    );
    $sorryLoop = new WP_Query( $sorry ); ?>
    <?php if ( !($sorryLoop->have_posts()) ): ?>
      <p>
        ご訪問有難うございます。
        <br>申し訳ございません。
        <br>現在募集しておりません。
        <br>またの機会にご応募お願いいたします。
      </p>
    <?php endif; ?>
  </ul>
  </section>
  <a href ="<?php echo esc_url (home_url('') ); ?>">ホームに戻る</a>
</main>

<?php get_footer(); ?>