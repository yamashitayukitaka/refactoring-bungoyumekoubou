<?php
if (!defined('ABSPATH')) {
  exit;
}
get_header();
?>
<main class="p-top">
  <div class="c-pageMv c-pageMv--top">
    <div class="c-pageMv__heading">
      <h2 class="c-pageMv__heading__title">
        住まいに<span class="u-orange--mv">夢</span>を、
        <br>暮らしに<span class="u-orange--mv">豊かさ</span>を。
      </h2>
      <p class="c-pageMv__heading__title--small">
        Dream in your heart,
        <br>freedom in your future
      </p>
    </div>
  
    <ul class="p-top__mv__appealList">
      <li class="p-top__mv__appealItem" style="background-image: url('<?php echo esc_url(get_template_directory_uri()); ?>/dist/img/top/top001.webp');">
        <img class="p-top__mv__appealItemImg" src="<?php echo esc_url(get_template_directory_uri()); ?>/dist/img/top_slider/star3.webp" alt="">
        <p class="p-top__mv__appealTtl">断熱性能</p>
        <p class="p-top__mv__appealTxt">
          UA値
          <br>0.36以下
        </p>
      </li>
      <li class="p-top__mv__appealItem" style="background-image: url('<?php echo esc_url(get_template_directory_uri()); ?>/dist/img/top/top001.webp');">
        <img class="p-top__mv__appealItemImg" src="<?php echo esc_url(get_template_directory_uri()); ?>/dist/img/top_slider/star3.webp" alt="">
        <p class="p-top__mv__appealTtl">気密性能</p>
        <p class="p-top__mv__appealTxt">
          C値
          <br>0.3以下
        </p>
      </li>
      <li class="p-top__mv__appealItem" style="background-image: url('<?php echo esc_url(get_template_directory_uri()); ?>/dist/img/top/top001.webp');">
        <img class="p-top__mv__appealItemImg" src="<?php echo esc_url(get_template_directory_uri()); ?>/dist/img/top_slider/star3.webp" alt="">
        <p class="p-top__mv__appealTtl">耐震性能</p>
        <p class="p-top__mv__appealTxt">
          標準仕様
          <br>耐震等級3
        </p>
      </li>
    </ul>
    <ul id="js-topSlider" class="c-pageMv__visual--top">
      <?php for ($i = 0; $i < 6; $i++) : ?>
        <li class="c-pageMv__visual__item"></li>
      <?php endfor; ?>
    </ul>
  </div>

  

  <section class="p-top__desc">
    <div class="l-content--xl p-top__desc__content">
      <span class="p-top__desc__imgWrap" style="background-image: url('<?php echo esc_url(get_template_directory_uri()); ?>/dist/img/top/family_img.webp');"></span>
      <div class="top__desc__imgWrap2">
        <img src="<?php echo esc_url(get_template_directory_uri()); ?>/dist/img/top_slider/penchi.webp'" alt="">
      </div>
      <p class="p-top__desc__copy">
        あなたの<span class="u-orange--mv">「ゆめ」</span>
        <br>いっしょにつくります
      </p>
      <p class="p-top__desc__txt">
        豊後夢工房が考える本当に良い「家」とは、<br class="sp">毎日がちょっと特別になる場所。
        <br>家族と過ごす時間がもっと愛おしくなり、<br class="sp">心と体がほっと安らぐ住まいです。
        <br>私たち豊後夢工房は、あなたとご家族が笑顔で快適に過ごせる
        <br><span class="u-orange--sm">「快適ゆめ空間」</span>をご提供する施工会社です。
      </p>
      <span class="p-top__desc__imgWrap--right" style="background-image: url('<?php echo esc_url(get_template_directory_uri()); ?>/dist/img/common/support-right.webp');"></span>
    </div>
  </section>

  <section class="c-lineUp">
    <div class="l-content--large">
      <div class="u-center u-mb15">
        <h3 class="c-title--sectionLine">
          STYLE_LINE_UP
        </h3>
      </div>
      <div class="u-center u-mb50">
        <p class="c-title--orangeLine">
          <span class="marker">あなたの「ゆめ」を叶える、特別なラインナップ</span>
        </p>
      </div>
      <ul class="c-lineUp__list">
        <li class="c-lineUp__item">
          <a href="<?php echo esc_url(home_url('heig')); ?>">
            <figure class="c-lineUp__media"><img class="c-lineUp__img" src="<?php echo esc_url(get_template_directory_uri()); ?>/dist/img/top/Group01.webp"></figure>
            <span class="c-lineUp__tag">自由設計</span>
            <p class="c-lineUp__text">暮らしをもっと自由に</p>
          </a>
        </li>
        <li class="c-lineUp__item">
          <a href="<?php echo esc_url(home_url('rireve')); ?>">
            <figure class="c-lineUp__media"><img class="c-lineUp__img" src="<?php echo esc_url(get_template_directory_uri()); ?>/dist/img/top/Group02.webp"></figure>
            <span class="c-lineUp__tag">自由設計</span>
            <p class="c-lineUp__text">次世代のZEHハウス</p>
          </a>
        </li>
        <li class="c-lineUp__item">
          <a href="<?php echo esc_url(home_url('irohaie')); ?>">
            <figure class="c-lineUp__media"><img class="c-lineUp__img" src="<?php echo esc_url(get_template_directory_uri()); ?>/dist/img/top/Group03.webp"></figure>
            <span class="c-lineUp__tag">自由設計</span>
            <p class="c-lineUp__text">安心の定額制、なのに自由設計</p>
          </a>
        </li>
      </ul>
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
    <!-- WINKMARK LP INDEX 1 start -->
<link rel="stylesheet" href="https://bungoyumekoubou.winksys.jp/event/css/client_top.css" type="text/css">
<div class="event-box">
    <div class="lst-event" id="wink_event_list">
    </div>
</div>
<!-- WINKMARK LP INDEX 1 end-->
  </section>

  <a href="<?php echo esc_url(home_url('model-house')); ?>">
    <section class="p-top__introduction u-mb100" style="background-image: url('<?php echo esc_url(get_template_directory_uri()); ?>/dist/img/top/top01.webp');">
      <div class="p-top__introduction__ttlWrap">
        <h3>
          <span class="marker c-title--sectionEn">MODEL_HOUSE</span>
        </h3>
        <p class="p-top__introduction__txt">
          豊後夢工房の暮らしを体験できるモデルハウス。
          <br>ぜひ一度ご来場いただき体験してみてください。
        </p>
      </div>
      <figure class="p-top__introduction__imgWrap--house"><img src="<?php echo esc_url(get_template_directory_uri()); ?>/dist/img/top/dream_studio_1.webp"></figure>
    </section>
  </a>

  <div class="p-common">
    <?php get_template_part('template-parts/bungo-yume-studio'); ?>
  </div>

  <a href="<?php echo esc_url(home_url('catalog')); ?>">
    <section class="p-top__introduction u-mb100" style="background-image: url('<?php echo esc_url(get_template_directory_uri()); ?>/dist/img/top/top01.webp');">
      <div class="p-top__introduction__ttlWrap">
        <h3>
          <span class="marker c-title--sectionEn">CATALOG</span>
        </h3>
        <p class="p-top__introduction__txt">
          理想の住まい作りをサポート。
          <br>無料資料請求はこちらから
        </p>
      </div>
      <figure class="p-top__introduction__imgWrap"><img src="<?php echo esc_url(get_template_directory_uri()); ?>/dist/img/top/top_catalog.webp"></figure>
    </section>
  </a>

  <section class="l-content u-mb100">
    <div class="u-center u-mb10">
      <h3 class="c-title--sectionLine">
        WORKS&VOICE
      </h3>
    </div>
    <div class="u-center u-mb30">
      <p class="c-title--orangeLine">
        <span class="marker">施工事例＆お客様の声</span>
      </p>
    </div>
    <?php $paged = (get_query_var('paged')) ? get_query_var('paged') : 1;
    $works = array(
      'post_type' => 'works',
      'posts_per_page' => 4,
      'orderby' => 'menu_order',
      'order' => 'ASC',
    ); ?>
    <?php $worksLoop = new WP_Query($works); ?>
    <?php if ($worksLoop->have_posts()) : ?>
      <ul class="c-cardList c-cardList--lead u-mb50">
        <?php while ($worksLoop->have_posts()) :
          $worksLoop->the_post(); ?>
          <?php get_template_part('template-parts/works-loop'); ?>
        <?php endwhile; ?>
      </ul>
    <?php endif;
    wp_reset_postdata(); ?>
    <div class="u-center">
      <a href="<?php echo esc_url(home_url('works')); ?>" class="c-button--outline">施工事例一覧へ</a>
    </div>
  </section>
  <section class="u-mb80">
    <?php
    $args = array(
      'post_type' => 'staff',
      'posts_per_page' => -1,
      'order' => 'DESC',
      'orderby' => 'date',
    ); ?>
    <?php $staffLoop = new WP_Query($args); ?>
    <ul class="p-top__staff__list js-staffSlider">
      <?php if ($staffLoop->have_posts()) : ?>
        <?php while ($staffLoop->have_posts()) :
          $staffLoop->the_post(); ?>
          <li class="p-top__staff__item">
            <a href="<?php the_permalink(); ?>">
              <?php $staff_img = get_field('staff-img'); ?>
              <?php if ($staff_img) : ?>
              <img src="<?php echo esc_url($staff_img); ?>" class="p-about__staff__listImg" alt="スタッフ画像">
              <?php endif; ?>
            </a>
          </li>
        <?php endwhile;
      endif;
      wp_reset_postdata(); ?>
    </ul>
    <h3 class="p-top__staff__ttl u-center u-mb20">
      YUME STAFF
    </h3>
    <p class="p-top__staff__subTtl">
      ゆめ空間づくりスタッフ
    </p>
    <div class="u-center yume_staff_p">
      <div class="top__desc__imgWrap3">
        <img src="<?php echo esc_url(get_template_directory_uri()); ?>/dist/img/top_slider/tenten.webp'" alt="">
      </div>
      <p class="p-top__staff__copy">
        あなたの<span class="p-top__staff__copy--orange">「ゆめ」</span>
        <br>いっしょにつくります。
      </p>
    </div>
    <div class="u-center u-mb30">
      <a href="<?php echo esc_url(home_url('staff')); ?>" class="c-button--outline">スタッフ一覧へ</a>
    </div>
    <?php
    $args = array(
      'post_type' => 'staff',
      'posts_per_page' => -1,
      'order' => 'ASC',
      'orderby' => 'date',
    ); ?>
    <?php $staffLoop = new WP_Query($args); ?>
    <ul class="p-top__staff__list js-staffSlider--reverse" dir="rtl">
      <?php if ($staffLoop->have_posts()) : ?>
        <?php while ($staffLoop->have_posts()) :
          $staffLoop->the_post(); ?>
          <li class="p-top__staff__item">
            <a href="<?php the_permalink(); ?>">
              <?php $staff_img = get_field('staff-img'); ?>
              <?php if ($staff_img) : ?>
              <img src="<?php echo esc_url($staff_img); ?>" class="p-about__staff__listImg" alt="スタッフ画像">
              <?php endif; ?>
            </a>
          </li>
        <?php endwhile;
      endif;
      wp_reset_postdata(); ?>
    </ul>
  </section>
  <section class="l-content u-mb100">
    <div class="u-center u-mb10">
      <h3 class="c-title--sectionLine">
        BUILT＆LAND
      </h3>
    </div>
    <div class="u-center u-mb30">
      <p class="c-title--orangeLine">
        <span class="marker">土地・物件情報</span>
      </p>
    </div>
    <?php
    $paged = (get_query_var('paged')) ? get_query_var('paged') : 1;
    $property = array(
      'post_type' => 'property',
      'posts_per_page' => 4,
      'paged' => $paged,
      'orderby' => 'menu_order',
      'order' => 'ASC',
    ); ?>
    <?php $propertyLoop = new WP_Query($property); ?>
    <?php if ($propertyLoop->have_posts()) : ?>
      <ul class="c-cardList c-cardList--lead">
        <?php while ($propertyLoop->have_posts()) :
          $propertyLoop->the_post(); ?>
          <?php get_template_part('template-parts/property-loop'); ?>
        <?php endwhile; ?>
      </ul>
    <?php endif;
    wp_reset_postdata(); ?>
  </section>

  <div class="u-center u-mb50">
    <a href="<?php echo esc_url(home_url('property')); ?>" class="c-button--outline">土地・物件情報一覧へ</a>
  </div>

  <!--
  <iframe width="853" height="480" src="https://my.matterport.com/show/?m=T7Mj3PoA11z" frameborder="0" allowfullscreen="" allow="xr-spatial-tracking"></iframe>
  -->

</main>
<?php get_footer(); ?>