<?php
if (!defined('ABSPATH')) exit;
get_header();
?>
<main>
  <h2 class="c-title--section u-mb50">
    <?php
    if (is_404()) {
      echo 'ページが見つかりません';
    } elseif (is_search()) {
      echo '検索結果';
    } elseif (is_archive()) {
      echo esc_html(get_the_archive_title());
    } elseif (is_singular()) {
      the_title();
    } else {
      echo '記事一覧';
    }
    ?>
  </h2>
  <section class="l-content--middle u-mb100">
    <?php if (have_posts()) : ?>
      <?php if (is_singular()) : ?>
        <?php while (have_posts()) : the_post(); ?>
          <?php if (has_post_thumbnail()) : ?>
            <figure class="c-thumbnail u-mb50">
              <?php the_post_thumbnail(); ?>
            </figure>
          <?php endif; ?>
          <?php the_content(); ?>
        <?php endwhile; ?>
      <?php else : ?>
        <ul class="p-blog__list u-flex l-content">
          <?php while (have_posts()) : the_post(); ?>
            <li class="p-blog__list__item">
              <a href="<?php echo esc_url(get_permalink()); ?>">
                <?php if (has_post_thumbnail()) : ?>
                  <figure class="p-blog__list__img">
                    <?php the_post_thumbnail(); ?>
                  </figure>
                <?php endif; ?>
                <p><?php the_title(); ?></p>
              </a>
            </li>
          <?php endwhile; ?>
        </ul>
        <div class="u-mb50">
          <?php the_posts_pagination(array('class' => 'c-pagination')); ?>
        </div>
      <?php endif; ?>
    <?php else : ?>
      <p><?php echo is_404() ? 'お探しのページは見つかりませんでした。' : '表示できるコンテンツがありません。'; ?></p>
    <?php endif; ?>
  </section>
</main>
<?php get_footer(); ?>
