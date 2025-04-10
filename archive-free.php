<?php 
// Template Name: free
if ( ! defined( 'ABSPATH' ) ) exit;
get_header();
?>
<?php $taxonomy = 'free-term';
      $postType = 'free';
?>
<main class = "l-content">
  <ul class = "p-bread__list l-content--mostLarge">
    <li class = "p-bread__list__item"><a href = "<?php echo esc_url (home_url('') ); ?>" class = "p-bread__list__link">ホーム</a><span class = "p-bread__list__arrow">></span></li>
    <li class = "p-bread__list__item"><?php the_archive_title(); ?></li>
  </ul>

  <section>
    <h2>
      タイトル
    </h2>
    <?php $terms = get_terms($taxonomy, 
      [
      'hide_empty' => false,
      'parent' =>0,
      'orderby'=>'id',
      'order'=>'ASC',
      ]
    );?>
   
    <ul>
      <li class = "p-exterior-works__btnList__item">
        <a href = "<?php echo esc_url (get_post_type_archive_link('free')); ?>" class ="u-current">
          すべて
        </a>
      </li>
      <?php foreach($terms as $term):?>
        <li>
          <a href = "<?php echo esc_url (get_term_link($term)); ?>">
            <?php echo esc_html($term->name); ?>
          </a>
        </li>
      <?php endforeach;?>
    </ul>

    <ul>

      <?php
        $paged = ( get_query_var('paged') ) ? get_query_var('paged') : 1;//get_query_var('paged')で現在表示されているページ番号を取得する。
        $args = array(
          'post_type' => $postType,
          'paged'=>$paged,//get_query_varで得られた現在表示されているページ番号を渡す。この部分は、ページネーションが正しく機能するために非常に重要です。get_query_var('paged') で取得した値を 'paged' => $paged としてクエリに設定することで、正しいページが表示されるようになります。
          'order' => 'ASC',
          'orderby' => 'date',  
          'posts_per_page'=>3,
      );?>

      <?php $myQuery = new WP_Query($args);?>
        <?php if ($myQuery->have_posts()): ?>
          <?php while ($myQuery->have_posts()) : $myQuery->the_post();?>

            <?php the_title(); ?>

            <?php $loopTerms = get_the_terms(get_the_ID(),$taxonomy, 
              //get_terms  と　get_the_termsの違いは、get_the_termsはループ内でget_the_idを引数にとれば、
              //その投稿に紐ずくタームのみを取得でき、get_termsはループ外でターム一覧を取得する
                [
                  'hide_empty' => false,
                  'parent' =>0,
                  'orderby'=>'id',
                  'order'=>'ASC',
                ]
              );?>
          <?php endwhile;
        endif;
      wp_reset_postdata();?>

    </ul>

    <div class = "l-content--middle p-blog__pagination">
      <?php the_posts_pagination(); ?>
    </div>
  </section>
  <a href ="<?php echo esc_url (home_url('') ); ?>">ホームに戻る</a>
</main>

<?php get_footer(); ?>