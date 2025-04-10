<?php 
  // Template Name: works-type
  if ( ! defined( 'ABSPATH' ) ) exit;
  get_header();
?>
  <?php 
    $taxonomy = 'works-type';
    $mainQueryTerm = get_queried_object(); // taxonomy-$taxonomy.php テンプレートファイル内で現在のメインクエリのターム情報を取得できます。
    $mainQueryTermName = $mainQueryTerm -> name;
    $mainQueryTermSlug = $mainQueryTerm -> slug;
    $tag = 'works-tag';
  ?>

<main>

  <h2 class = "c-title--section u-mb50">
    施工事例
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
      <li class = "c-term__list__item">
        <a href = "<?php echo esc_url (get_post_type_archive_link('works')); ?>">
          すべて
        </a>
      </li>
      <?php foreach($terms as $term):?>
        <?php $termName = $term -> name;?>
        <li class = "c-term__list__item <?php if($mainQueryTermName === $termName):?> u-current <?php endif; ?>">
          <a href = "<?php echo esc_url (get_term_link($term)); ?>">
            <?php echo esc_html($term->name); ?>
          </a>
        </li>
      <?php endforeach;?>
    </ul>
    
    <?php $worksTags = get_terms($tag, 
        [
        'hide_empty' => false,
        'parent' =>0,
        'orderby'=>'id',
        'order'=>'ASC',
        ]
      );?>

    <?php if($worksTags):?>

      <ul class = "c-tag__list l-content--large">
        
        <li class = "c-tag__list__item">
          <a href = "<?php echo esc_url(home_url('works-type/' . $mainQueryTermSlug)); ?>" class = "js-allTab c-tag__list__link u-currentTab">すべて</a>
        </li>
        
        <!-- "."はworks-type/'と変数$mainQueryTermSlugの値を結合して一つの文字列にする-->
        <?php foreach($worksTags as $worksTag):?>
          <?php $worksSlug = $worksTag->slug ;?>
          <li class = "c-tag__list__item">
            <a href = "<?php echo get_term_link($worksSlug,$tag); ?>" class = "js-tab c-tag__list__link">
              <?php echo esc_html($worksTag->name); ?>
            </a>
          </li>
        <?php endforeach;?>
      </ul>

    <?php endif;?>

  <section class = "l-content">
    <?php
      $paged = ( get_query_var('paged') ) ? get_query_var('paged') : 1;//get_query_var('paged')で現在表示されているページ番号を取得する。
      $works = array(
      'post_type' => 'works',
      'posts_per_page' =>6,
      'paged'=>$paged,//get_query_varで得られた現在表示されているページ番号を渡す。この部分は、ページネーションが正しく機能するために非常に重要です。get_query_var('paged') で取得した値を 'paged' => $paged としてクエリに設定することで、正しいページが表示されるようになります。
      'orderby' => 'menu_order',
      'order' => 'ASC',
      'tax_query' => array(
      array(
        'taxonomy' => $taxonomy,
        'field' => 'slug',
        'terms' => $mainQueryTermSlug,
        ),
      ),
    );?>
      
    <?php $worksLoop = new WP_Query($works);?>
    <?php if ($worksLoop->have_posts()): ?>
      <ul class = "p-content__list js-allswitch">
        <?php while ($worksLoop->have_posts()) : $worksLoop->the_post();?>
          <?php get_template_part('works-loop','works'); ?>
        <?php endwhile;?>
      </ul>
    <?php endif;
    wp_reset_postdata();?>

    <?php if ($worksLoop->found_posts > $works['posts_per_page']):?>
      <div class = "u-mb50">
        <?php the_posts_pagination(); ?>
      </div>
    <?php endif; ?>
    
  </section>
   
</main>

<?php get_footer(); ?>