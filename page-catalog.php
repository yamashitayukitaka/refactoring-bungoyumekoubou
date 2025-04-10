<?php 
// Template Name: catalog
if ( ! defined( 'ABSPATH' ) ) exit;
get_header();
?>
<main>
  <figure class = "c-pageMv u-mb50">
    <img src = "<?php echo esc_url (get_template_directory_uri() ); ?>/dist/img/catalog/catalog_top_img.webp" alt = "ヘッダー画像" class = "p-catalog__mv__img">
    <span class = "p-catalog__mv__logo">
      <img src = "<?php echo esc_url (get_template_directory_uri() ); ?>/dist/img/catalog/catalog_top.webp" alt = "カタログロゴ" class = "p-catalog__mv__img">
    </span>
  </figure>
  <section class = "p-catalog__desc l-content">
    <p class = "p-catalog__desc__txt">
      理想の住まいを実現するための最初のステップとして、私たちのカタログをご請求ください。
      <br>カタログには、最新のデザイン、施工事例、設備情報がぎっしり詰まっています。
      <br>家づくりに役立つ情報が満載で、具体的なイメージを描くのに最適です。
    </p>
    <ul class = "p-catalog__desc__list">
      <li class = "p-catalog__desc__listItem"><img src = "<?php echo esc_url (get_template_directory_uri() ); ?>/dist/img/catalog/list01.webp" alt = "カタログ画像" class = "p-catalog__list__img"></li>
      <li class = "p-catalog__desc__listItem"><img src = "<?php echo esc_url (get_template_directory_uri() ); ?>/dist/img/catalog/list02.webp" alt = "カタログ画像" class = "p-catalog__list__img"></li>
      <li class = "p-catalog__desc__listItem"><img src = "<?php echo esc_url (get_template_directory_uri() ); ?>/dist/img/catalog/list03.webp" alt = "カタログ画像" class = "p-catalog__list__img"></li>
    </ul>
    <p class = "p-catalog__desc__listTtl">カタログの中身は...</p>
    <ul class = "p-catalog__desc__listTxt">
      <li class = "p-catalog__desc__listTxtItem">
        ・多彩なデザイン事例:<span class ="u-normal">あなたのライフスタイルに合わせたさまざまなデザインの住まいを紹介しています。</span>
      </li>
      <li class = "p-catalog__desc__listTxtItem">
        ・最新の設備と技術:<span class ="u-normal">快適でエコな暮らしを実現するための最新設備と技術について詳しく説明しています。</span>
      </li>
      <li class = "p-catalog__desc__listTxtItem">
        ・お客様の声:<span class ="u-normal">一緒に家づくりをされたお客様の感想や体験談を掲載しています。</span>
      </li>
      <li class = "p-catalog__desc__listTxtItem">
        ・わかりやすいプランニングガイド:<span class ="u-normal">家づくりのプロセスやポイントをわかりやすく解説し、安心して計画を進められるようサポートします。</span>
      </li>
    </ul>
  </section>
  <section class="p-contact l-content">
    <div class="c-title__wrap--sectionLine">
        <h3 class="c-title--sectionLine">
          CTALOG
        </h3>
        <div>
          <p class="c-title--orangeLine u-mb50">
            <span class = "marker">カタログ請求</span>
          </p>
        </div>
      </div>
    <div class="p-contact__form">
      <?php echo do_shortcode('[mwform_formkey key="1706"]'); ?>
    </div>
  </section>
</main>
<?php get_footer(); ?>