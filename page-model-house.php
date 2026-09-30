<?php
// Template Name: model-house
if (!defined('ABSPATH')) {
  exit;
}
get_header();
?>
<main class="p-modelHouse">
<div class="c-pageMv u-mb100">
    <div class="c-pageMv__heading">
      <h2 class="c-pageMv__heading__title">
        MODEL HOUSE
      </h2>
      <p class="c-pageMv__heading__subTitle">
        モデルハウス
      </p>
    </div>
    <?php $mv = get_field('mv-model-img'); ?>
    <?php if ($mv) : ?>
      <figure class="c-pageMv__visual" style="background-image: url('<?php echo esc_url($mv); ?>');"></figure>
    <?php endif; ?>
  </div>

  <!-- トップタイトル概要 -->
  <section class="c-title__decoration">
    <div class="c-title__decoration__head">
      <h3 class="c-title--sectionLine u-mb40">モデルハウス</h3>
      <p class="c-title--orangeLine">
        <span class="marker">
          <span class="u-orange">見て</span>、<span class="u-orange">触れて</span>、<span class="u-orange">感じる</span>。<br>
          <span class="u-orange">理想の住まい</span>を<span class="u-orange">体験</span>してください！
        </span>
      </p>
    </div>
  </section>

  <section class="p-modelHouse__overview u-mb100">
    <figure class="p-modelHouse__overview__ribbon p-modelHouse__overview__ribbon--left">
      <img src="<?php echo esc_url(IMG_URL . '/common/left-ribbon.webp'); ?>">
    </figure>
    <div class="p-modelHouse__overview__heading">
      <p class="p-modelHouse__overview__lead u-none__mobile--tab"><span class="marker">中庭と深い軒の織りなす<br>
          スタイリッシュなデザイン</span></p>
      <p class="p-modelHouse__overview__name">TOSハウジングメッセ </p>
      <p class="p-modelHouse__overview__lead u-none__pc--tab"><span class="marker">中庭と深い軒の織りなす<br>
          スタイリッシュなデザイン</span></p>
    </div>
    <figure class="p-modelHouse__overview__logo">
      <img src="<?php echo esc_url(IMG_URL . '/model-house/tos-studio.png'); ?>" alt="">
    </figure>
    <figure class="p-modelHouse__overview__media">
      <img src="<?php echo esc_url(IMG_URL . '/model-house/tos.png'); ?>" alt="">
    </figure>
    <div class="p-modelHouse__overview__text u-mb100">
      建物の中心に「中庭」を配置し、<br>
      「深い軒」を取り入れたデザインで、<br>
      日差しを巧みにコントロール。<br>
      <br>
      水平ラインを強調することで、<br>
      スタイリッシュで視線を惹きつける<br>
      美しい外観に仕上げました。<br>
      <br>
      <br>
      洗練されたデザインと<br>
      快適な居住空間を<br>
      兼ね備えた理想的な住まいです。
    </div>
    <div class="p-modelHouse__overview__gallery">
      <?php get_template_part('template-parts/hasThumbSlider-loop'); ?>
    </div>


    <div class="u-center u-mb100">
      <span class="p-modelHouse__overview__action">
        <a class="p-modelHouse__overview__link" href="#contact">見学・ご相談はこちらから</a>
      </span>
    </div>

  </section>

  <section class="p-modelHouse__overview u-mb100">
    <figure class="p-modelHouse__overview__ribbon p-modelHouse__overview__ribbon--right">
      <img src="<?php echo esc_url(IMG_URL . '/common/right-ribbon.webp'); ?>">
    </figure>
    <div class="p-modelHouse__overview__heading">
      <p class="p-modelHouse__overview__lead u-none__mobile--tab"><span class="marker">大人カワイイ<br>
          ヨーロピアンな家</span></p>
      <p class="p-modelHouse__overview__name">
        <span>シェリーハウス</span>
        Shelly House
      </p>
      <p class="p-modelHouse__overview__lead u-none__pc--tab"><span class="marker">大人カワイイ<br>
          ヨーロピアンな家</span></p>
    </div>
    <figure class="p-modelHouse__overview__logo p-modelHouse__overview__logo--compact">
      <img src="<?php echo esc_url(IMG_URL . '/model-house/shelly-studio.png'); ?>" alt="">
    </figure>
    <figure class="p-modelHouse__overview__media">
      <img src="<?php echo esc_url(IMG_URL . '/model-house/shelly.png'); ?>" alt="">
    </figure>
    <div class="p-modelHouse__overview__text">
      ヨーロッパの街並みに溶け込むようなデザイン。<br>
      一つひとつの素材に込められた深い叡智。<br>
      シンプルでありながら緻密に計算された空間こそ、<br>
      理想の暮らしが宿る場所です。<br>
      <br>
      シェリーハウスは、ヨーロッパの豊かな暮らしをお手本に、 <br>
      <br>
      その本質を追求して誕生しました。<br>
      日本の従来の建築文化では成し得なかった、 <br>
      安心と寛ぎを追い求めた<br>
      「心を満たす邸宅」。<br>
      <br>
      そのこだわりと想いが、<br>
      他とは一線を画す存在感を放ちます。
    </div>

    <span class="p-modelHouse__overview__action">
      <a class="p-modelHouse__overview__link" href="https://sankaido.com/shelly-house/" target="_blank">Shelly Houseについて</a>
    </span>

    <?php $hasThumbsliders = get_field('b-img'); ?>
    <?php
    $hasGalleryB = false;
    if ($hasThumbsliders) {
      foreach ($hasThumbsliders as $row) {
        if (!empty($row['img'])) {
          $hasGalleryB = true;
          break;
        }
      }
    }
    ?>
    <?php if ($hasGalleryB) : ?>
      <section class="p-modelHouse__overview__gallery u-mb100">
        <h3 class="c-title--sectionEn">
          GALLERY
        </h3>
        <p class="c-title--sectionSub u-mb50">
          ギャラリー
        </p>
        <div class="p-modelHouse__overview__gallery">
          <?php if ($hasThumbsliders) : ?>
            <ul class="js-hasThumbSlider c-hasThumbSlider__list">
              <?php foreach ($hasThumbsliders as $hasThumbslider) : ?>
                <?php if (!empty($hasThumbslider['img'])) : ?>
                  <li class="c-hasThumbSlider__list__item"><img src="<?php echo esc_url($hasThumbslider['img']); ?>" alt="ギャラリー画像" class="c-hasThumbSlider__list__img"></li>
                <?php endif; ?>
              <?php endforeach; ?>
            </ul>
            <ul class="c-hasThumbSlider__thumbnail__list">
              <?php $count = 0; ?>
              <?php foreach ($hasThumbsliders as $hasThumbslider) : ?>
                <?php if (!empty($hasThumbslider['img'])) : ?>
                  <li class="c-hasThumbSlider__thumbnail__item" data-slide="<?php echo esc_html($count++); ?>">
                    <img src="<?php echo esc_url($hasThumbslider['img']); ?>" alt="ギャラリー画像" class="c-hasThumbSlider__thumbnail__img">
                  </li>
                <?php endif; ?>
              <?php endforeach; ?>
            </ul>
          <?php endif; ?>
        </div>

      </section>
    <?php endif; ?>

    <div class="u-center u-mb100">
      <span class="p-modelHouse__overview__action">
        <a class="p-modelHouse__overview__link" href="#contact">見学・ご相談はこちらから</a>
      </span>
    </div>

  </section>


  <section class="p-modelHouse__overview u-mb100">
    <figure class="p-modelHouse__overview__ribbon p-modelHouse__overview__ribbon--left">
      <img src="<?php echo esc_url(IMG_URL . '/common/left-ribbon.webp'); ?>">
    </figure>

    <div class="p-modelHouse__overview__heading">
      <p class="p-modelHouse__overview__lead u-none__mobile--tab"><span class="marker">安心の定額制で建てる<br>
          ｢完全自由設計｣の家</span></p>
      <p class="p-modelHouse__overview__name">
        <span>いろは家</span>
        IROHA・IE
      </p>
      <p class="p-modelHouse__overview__lead u-none__pc--tab"><span class="marker">安心の定額制で建てる<br>
          　｢完全自由設計｣の家</span></p>
    </div>

    <figure class="p-modelHouse__overview__logo p-modelHouse__overview__logo--compact">
      <img src="<?php echo esc_url(IMG_URL . '/model-house/iroha-studio.png'); ?>" alt="">
    </figure>
    <figure class="p-modelHouse__overview__media">
      <img src="<?php echo esc_url(IMG_URL . '/model-house/iroha.png'); ?>" alt="">
    </figure>
    <div class="p-modelHouse__overview__text">
      家づくりで不安に思う方が一番多いのがお金のこと。<br>
      構造や申請にかかわる専門的なお金のことはよくわからないことだらけ。いろいろ選ぶうちにどんどん予算が膨らみ結局どれか諦めないといけない…なんてことも。 「いろはいえ」なら家づくりに必要なすべてが含まれてワンプライスだから予算オーバーの心配はなく、安心して家づくりができます！<br>
      <br>
      「住まいの基本、すべてが入った家」<br>
      「はじめての家づくり」、わからないことがたくさん。<br>
      どんな家にしよう。どんな暮らしをしよう。夢がいっぱい。<br>
      でもやっぱり、お金のことも心配…。<br>
      「IROHA.IE」なら安心の定額制（付帯工事・カーテン・照明込み）で家づくりが実現します。<br>
      ルールの中でなら間取りは「完全自由設計」設備や建具など<br>
      標準仕様の範囲でセレクトすれば価格は変わらずワンプライスだから安心して家づくりができます。
    </div>

    <span class="p-modelHouse__overview__action">
      <a class="p-modelHouse__overview__link" href="<?php echo esc_url(home_url('irohaie')); ?>" target="_blank">いろは家について</a>
    </span>

    <?php $hasThumbsliders = get_field('c-img'); ?>
    <?php
    $hasGalleryC = false;
    if ($hasThumbsliders) {
      foreach ($hasThumbsliders as $row) {
        if (!empty($row['img'])) {
          $hasGalleryC = true;
          break;
        }
      }
    }
    ?>
    <?php if ($hasGalleryC) : ?>
      <section class="p-modelHouse__overview__gallery u-mb100">
        <h3 class="c-title--sectionEn">
          GALLERY
        </h3>
        <p class="c-title--sectionSub u-mb50">
          ギャラリー
        </p>
        <div class="p-modelHouse__overview__gallery">
          <?php if ($hasThumbsliders) : ?>
            <ul class="js-hasThumbSlider c-hasThumbSlider__list">
              <?php foreach ($hasThumbsliders as $hasThumbslider) : ?>
                <?php if (!empty($hasThumbslider['img'])) : ?>
                  <li class="c-hasThumbSlider__list__item"><img src="<?php echo esc_url($hasThumbslider['img']); ?>" alt="ギャラリー画像" class="c-hasThumbSlider__list__img"></li>
                <?php endif; ?>
              <?php endforeach; ?>
            </ul>
            <ul class="c-hasThumbSlider__thumbnail__list">
              <?php $count = 0; ?>
              <?php foreach ($hasThumbsliders as $hasThumbslider) : ?>
                <?php if (!empty($hasThumbslider['img'])) : ?>
                  <li class="c-hasThumbSlider__thumbnail__item" data-slide="<?php echo esc_html($count++); ?>">
                    <img src="<?php echo esc_url($hasThumbslider['img']); ?>" alt="ギャラリー画像" class="c-hasThumbSlider__thumbnail__img">
                  </li>
                <?php endif; ?>
              <?php endforeach; ?>
            </ul>
          <?php endif; ?>
        </div>

      </section>
    <?php endif; ?>

    <div class="u-center u-mb100">
      <span class="p-modelHouse__overview__action">
        <a class="p-modelHouse__overview__link" href="#contact">見学・ご相談はこちらから</a>
      </span>
    </div>

  </section>





  <section class="l-content" id="contact">
    <div class="c-title__head">
      <h3 class="c-title--sectionLine">
        CONTACT
      </h3>
      <div>
        <p class="c-title--orangeLine u-mb50">
          <span class="marker">お問い合わせ</span>
        </p>
      </div>
    </div>
    <div class="c-form__wrap">
      <?php echo do_shortcode('[mwform_formkey key="1820"]'); ?>
    </div>
  </section>

  <section class="l-content u-mb100">
    <div class="u-center u-mb10">
      <h3 class="c-title--sectionLine">
        EVENT
      </h3>
    </div>
    <div class="u-center u-mb30">
      <p class="c-title--orangeLine">
        <span class="marker">最新情報をお届けします</span>
      </p>
    </div>
    <?php
    $event = array(
      'post_type' => 'xo_event',
      'posts_per_page' => 3,
      'order' => 'DESC',
      'orderby' => 'date',
    ); ?>
    <?php $eventLoop = new WP_Query($event); ?>
    <?php if ($eventLoop->have_posts()) : ?>
      <ul class="c-cardList u-mb50">
        <?php while ($eventLoop->have_posts()) :
          $eventLoop->the_post(); ?>
          <?php get_template_part('template-parts/event-loop'); ?>
        <?php endwhile;
    endif;
      wp_reset_postdata(); ?>
      </ul>
      <div class="u-center">
        <a href="<?php echo esc_url(home_url('xo_event')); ?>" class="c-button--outline">イベント一覧へ</a>
      </div>
  </section>


  <?php get_template_part('template-parts/common'); ?>


</main>
<?php get_footer(); ?>