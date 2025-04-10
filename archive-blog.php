<?php 
if ( ! defined( 'ABSPATH' ) ) exit;//WordPressのファイルやプラグインのコードなどで、!defined('ABSPATH') という式が使用されることがあります。
                                  //これは、WordPressのインストールパス (ABSPATH 定数) が定義されていない場合に、ファイルの実行を停止するために使われる一般的なパターンです。
                                  //WordPressの環境外でのファイルの実行を防ぐために使用され、セキュリティ上の理由から推奨されます。
                                  //exit は、PHP言語で使用される制御構造の一つであり、スクリプトの実行を即座に終了させるために使用されます。
                                  //exit を呼び出すと、その時点で実行中のスクリプトが中断され、その後の処理は実行されません。
get_header();
?>

<main class = "p-blog">
  <h2 class = "c-title--section u-mb50">
    ブログ
  </h2>
  
  <!-- <ul class = "p-bread__list">
    <li class = "p-bread__list__item"><a href = "<?php echo esc_url (home_url('') ); ?>" class = "p-bread__list__link">ホーム</a><span class = "p-bread__list__arrow">></span></li>
    <li class = "p-bread__list__item">ブログ</li>
  </ul> -->
 
    <ul class = "p-blog__list u-flex l-content">
      <!-- <?php
        $paged = ( get_query_var('paged') ) ? get_query_var('paged') : 1;//get_query_var('paged')で現在表示されているページ番号を取得する。
        $blogs = array(
        'post_type' => 'blog',
        'posts_per_page' => 6,
        'paged'=>$paged,//get_query_varで得られた現在表示されているページ番号を渡す。この部分は、ページネーションが正しく機能するために非常に重要です。get_query_var('paged') で取得した値を 'paged' => $paged としてクエリに設定することで、正しいページが表示されるようになります。
        'order' => 'DESC',
        'orderby' => 'post_date',
        );?> -->
   
      <?php
        // 月別アーカイブページかどうかを判定
        if (is_month()) {
            // 月別アーカイブページではメインクエリを使用しなければ適切に表示されない。
          $blogLoop = $wp_query;
            //$wp_query にはメインクエリが代入されていると考えて問題ない
        } else {
            // それ以外のページは WP_Query を使用
          $paged = ( get_query_var('paged') ) ? get_query_var('paged') : 1;
          $args = array(
              'post_type' => 'blog',
              'posts_per_page' => 6,
              'paged' => $paged,
              'order' => 'DESC',
              'orderby' => 'post_date',
          );
          $blogLoop = new WP_Query($args);
        }
      ?>
      
        <?php if ($blogLoop->have_posts()): ?>
          <?php while ($blogLoop->have_posts()) : $blogLoop->the_post();?>
          <li class = "p-blog__list__item">
            <a href = "<?php the_permalink(); ?>">
              <figure class = "p-blog__list__img">
                <?php the_post_thumbnail();?>
              </figure>
            
              <div>
                <deta class = "p-blog__list__deta"><?php echo get_the_date('y/m/d'); ?></deta>
                  <p><?php the_title(); ?></p>
              </div>
            </a>
          </li>
          <?php endwhile;
        endif;
       wp_reset_postdata();?>
    </ul>

    <?php if ($blogLoop->found_posts > $blogs['posts_per_page']):?>
      <div class = "u-mb50">
        <?php the_posts_pagination(); ?>
      </div>
    <?php endif; ?>

    <section class = "p-blog__search l-content u-mb100">
      <!-- <p class = "p-blog__search__ttl">
        最新記事
      </p> -->
      <!-- <div class = "p-blog__search__latest">
        <?php
          $args = array(
          'post_type' => 'blog',
          'posts_per_page' => 4,
          'orderby' => 'date', // 投稿を日付で並べ替えます。
          'order' => 'DESC', // 降順に並べ替えます（新しい順）。
          );?>
          <?php $blogLoop = new WP_Query($args);?>
          <?php if ($blogLoop->have_posts()): ?>
          <?php while ($blogLoop->have_posts()) : $blogLoop->the_post();?>
          <a href = "<?php the_permalink(); ?>">
          <?php the_title(); ?>
          </a>
        <?php endwhile;
        endif;
        wp_reset_postdata();?>
      </div> -->
      <p class = "p-blog__search__ttl">
        アーカイブ
      </p>
      <div> 
        <?php wp_get_archives(array(
          //これらの設定によりarcive-$posttype.phpで月別アーカイブを表示することが可能になる。
            'type' => 'monthly',
            'format' => 'custom',
            'show_post_count' => true,
            'echo' => 1,
            'post_type' => 'blog',
            'post_status' => 'publish',
            'before' => '<p class="p-blog__search__link">',
            'after' => '</p>',
          )); ?>
      </div>
    </section> 
</main>
<?php get_footer();?>