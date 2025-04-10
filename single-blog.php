<?php 
if ( ! defined( 'ABSPATH' ) ) exit;
get_header();
?>

<main>
  <h2 class = "c-title--section u-mb50">
    ブログ
  </h2>

  <section class = "l-content--middle u-mb150">

    <h3 class = "c-title--large u-mb5"> 
      <?php the_title(); ?>
    </h3>

    <deta class = "p-blog__deta"><?php echo get_the_date('y/m/d'); ?></deta>

    <?php if (has_post_thumbnail()) : ?>
      <figure class="p-flex__one__imgWrap u-mb200">
        <?php the_post_thumbnail(); ?>
      </figure>
    <?php endif; ?>

    <?php if(have_posts() ): ?>
      <?php
      while(have_posts() ):
        the_post();
        ?>

        <?php the_content(); ?>

      <?php endwhile; ?>
    <?php endif; ?>

    <?php if( have_rows('contents') ): //柔軟コンテンツフィールドの値を持っているかどうかをチェック ?>
      <?php while ( have_rows('contents') ) : the_row(); //値のループ ?>
        <?php if( get_row_layout() == 'img-column' ): //レイアウト名1があった場合に出力 ?>
          <div class = "p-flex__one__imgWrap u-mb50">
            <img src = "<?php the_sub_field('img');?>">
          </div>
        <?php elseif( get_row_layout() == 'ttl-column' ): //レイアウト名2があった場合に出力 ?>
          <h4 class = "c-title--middle u-mb50">
            <?php the_sub_field('ttl'); //柔軟コンテンツ内は'the_sub_field'や'get_sub_field'を使用 ?>
          </h4>
        <?php elseif( get_row_layout() == 'txt-column' ): //レイアウト名2があった場合に出力 ?>
          <p class = "u-mb50">
            <?php the_sub_field('txt'); //柔軟コンテンツ内は'the_sub_field'や'get_sub_field'を使用 ?>
          </p>
        <?php endif; ?>
      <?php endwhile; ?>
    <?php endif; ?>
    
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

<?php get_footer(); ?>