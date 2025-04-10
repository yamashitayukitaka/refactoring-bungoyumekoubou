<?php 
// Template Name: property
if ( ! defined( 'ABSPATH' ) ) exit;
get_header();
?>
<?php 
  $taxonomy = 'property-category';
  $posyType = 'property';
  $tag = 'property-area';
?>

<main>
  <h2 class = "c-title--section u-mb50">
    土地・物件情報
  </h2>

  <?php $terms = get_terms($taxonomy, 
    [
    'hide_empty' => false,
    'parent' =>0,
    'orderby'=>'id',
    'order'=>'DESC',
    ]
  );?>
 
  <ul class = "c-term__list">
    
    <li class = "c-term__list__item u-current">
      <a href = "<?php echo esc_url (get_post_type_archive_link('property')); ?>">
        すべて
      </a>
    </li>
  
    <?php foreach($terms as $term):?>
      <li class = "c-term__list__item">
        <a href = "<?php echo esc_url (get_term_link($term)); ?>">
          <?php echo esc_html($term->name); ?>
        </a>
      </li>
    <?php endforeach;?>
  </ul>

  <?php $areaTags = get_terms($tag, 
        [
        'hide_empty' => false,
        'parent' =>0,
        'orderby'=>'id',
        'order'=>'ASC',
        ]
      );?>

    <ul class = "c-tag__list l-content--large">

      
      <li class = "c-tag__list__item">
        <a href = "#" class = "js-allTab c-tag__list__link u-currentTab">すべて</a>
      </li>
      
      
      <?php foreach($areaTags as $areaTag):?>
        <?php $areaSlug = $areaTag->slug ;?>
        <li class = "c-tag__list__item">
          <a href = "<?php echo get_term_link($areaSlug,$tag); ?>" class = "js-tab c-tag__list__link">
            <?php echo esc_html($areaTag->name); ?>
          </a>
        </li>
      <?php endforeach;?>
    </ul>

    <section class = "l-content">
    <?php
      $paged = ( get_query_var('paged') ) ? get_query_var('paged') : 1;//get_query_var('paged')で現在表示されているページ番号を取得する。
      $property = array(
      'post_type' => 'property',
      'posts_per_page' => 7,
      'paged'=>$paged,//get_query_varで得られた現在表示されているページ番号を渡す。この部分は、ページネーションが正しく機能するために非常に重要です。get_query_var('paged') で取得した値を 'paged' => $paged としてクエリに設定することで、正しいページが表示されるようになります。
      'orderby' => 'menu_order',
      'order' => 'ASC',
    );?>
    <?php $propertyLoop = new WP_Query($property);?>
    <?php if ($propertyLoop->have_posts()): ?>
      <ul class = "p-content__list">
        <?php while ($propertyLoop->have_posts()) : $propertyLoop->the_post();?>
          <?php get_template_part('property-loop','property'); ?>
        <?php endwhile;?>
      </ul>
    <?php endif;
    wp_reset_postdata();?>

    <?php if ($propertyLoop->found_posts > $property['posts_per_page']):?>
      <div class = "u-mb50">
        <?php the_posts_pagination(); ?>
      </div>
    <?php endif; ?>
    

  </section> 
</main>

<?php get_footer(); ?>