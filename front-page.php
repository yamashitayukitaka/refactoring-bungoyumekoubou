<?php
/**
 * Front page template.
 *
 * @package Wazeka
 */

if ( ! defined( 'ABSPATH' ) ) {
  exit;
}
get_header();
?>
<main class="p-top">
  <div class="c-pageMv c-pageMv--top">
    <div class="c-pageMv__heading">
      <p class="c-pageMv__heading__title">
        住まいに<span class="u-orange--mv">夢</span>を、
        <br>暮らしに<span class="u-orange--mv">豊かさ</span>を。
      </p>
      <p class="c-pageMv__heading__title--small">
        Dream in your heart,
        <br>freedom in your future
      </p>
    </div>
  
    <ul class="p-top__mv__appealList">
      <li class="p-top__mv__appealItem" style="background-image: url('<?php echo esc_url( get_template_directory_uri() . '/dist/img/top/top001.webp' ); ?>');">
        <img class="p-top__mv__appealItemImg" width="648" height="116" src="<?php echo esc_url( get_template_directory_uri() . '/dist/img/top_slider/star3.webp' ); ?>" alt="">
        <p class="p-top__mv__appealTtl">断熱性能</p>
        <p class="p-top__mv__appealTxt">
          UA値
          <br>0.36以下
        </p>
      </li>
      <li class="p-top__mv__appealItem" style="background-image: url('<?php echo esc_url( get_template_directory_uri() . '/dist/img/top/top001.webp' ); ?>');">
        <img class="p-top__mv__appealItemImg" width="648" height="116" src="<?php echo esc_url( get_template_directory_uri() . '/dist/img/top_slider/star3.webp' ); ?>" alt="">
        <p class="p-top__mv__appealTtl">気密性能</p>
        <p class="p-top__mv__appealTxt">
          C値
          <br>0.3以下
        </p>
      </li>
      <li class="p-top__mv__appealItem" style="background-image: url('<?php echo esc_url( get_template_directory_uri() . '/dist/img/top/top001.webp' ); ?>');">
        <img class="p-top__mv__appealItemImg" width="648" height="116" src="<?php echo esc_url( get_template_directory_uri() . '/dist/img/top_slider/star3.webp' ); ?>" alt="">
        <p class="p-top__mv__appealTtl">耐震性能</p>
        <p class="p-top__mv__appealTxt">
          標準仕様
          <br>耐震等級3
        </p>
      </li>
    </ul>
    <?php
    $top_mv_slides = array(
      'top1.webp',
      'top9.webp',
      'top4.webp',
      'top5.webp',
      'top6.webp',
      'top8.webp',
    );
    ?>
    <ul class="c-pageMv__visual--top js-mvSlider">
      <?php foreach ( $top_mv_slides as $slide_index => $slide_file ) : ?>
        <li class="c-pageMv__visual__item">
          <img
            class="c-pageMv__visual__itemImg"
            width="1600"
            height="800"
            src="<?php echo esc_url( get_template_directory_uri() . '/dist/img/top_slider/' . $slide_file ); ?>"
            alt="<?php echo esc_attr( '豊後夢工房の住まいイメージ' . ( $slide_index + 1 ) ); ?>"
            <?php if ( 0 === $slide_index ) : ?>
              fetchpriority="high"
            <?php else : ?>
              loading="lazy"
            <?php endif; ?>
          >
        </li>
      <?php endforeach; ?>
    </ul>
  </div>

  

  <div class="p-top__desc">
    <div class="l-content--xl p-top__desc__content">
      <p class="p-top__desc__copy">
        あなたの<span class="u-orange--mv">「ゆめ」</span>
        <br>いっしょにつくります
      </p>
      <p class="p-top__desc__txt">
        豊後夢工房が考える本当に良い「家」とは、<br class="u-none__pc--sp">毎日がちょっと特別になる場所。
        <br>家族と過ごす時間がもっと愛おしくなり、<br class="u-none__pc--sp">心と体がほっと安らぐ住まいです。
        <br>私たち豊後夢工房は、あなたとご家族が笑顔で快適に過ごせる
        <br><span class="u-orange--sm">「快適ゆめ空間」</span>をご提供する施工会社です。
      </p>
    </div>
  </div>

  <section class="c-lineUp">
    <div class="l-content--large">
      <div class="u-center u-mb15">
        <h2 class="c-title--sectionLine">
          STYLE_LINE_UP
        </h2>
      </div>
      <div class="u-center u-mb50">
        <p class="c-title--orangeLine">
          <span class="marker">あなたの「ゆめ」を叶える、特別なラインナップ</span>
        </p>
      </div>
      <ul class="c-lineUp__list">
        <li class="c-lineUp__item">
          <article class="c-lineUp__body">
            <a href="<?php echo esc_url( home_url( 'heig' ) ); ?>">
              <figure class="c-lineUp__media"><img loading="lazy" class="c-lineUp__img" width="1600" height="1000" src="<?php echo esc_url( get_template_directory_uri() . '/dist/img/top/Group01.webp' ); ?>" alt="HEIG（ヘイグ）"></figure>
              <span class="c-lineUp__tag">自由設計</span>
              <p class="c-lineUp__text">暮らしをもっと自由に</p>
            </a>
          </article>
        </li>
        <li class="c-lineUp__item">
          <article class="c-lineUp__body">
            <a href="<?php echo esc_url( home_url( 'rireve' ) ); ?>">
              <figure class="c-lineUp__media"><img loading="lazy" class="c-lineUp__img" width="1600" height="1000" src="<?php echo esc_url( get_template_directory_uri() . '/dist/img/top/Group02.webp' ); ?>" alt="リレーヴ（Rireve）"></figure>
              <span class="c-lineUp__tag">自由設計</span>
              <p class="c-lineUp__text">次世代のZEHハウス</p>
            </a>
          </article>
        </li>
        <li class="c-lineUp__item">
          <article class="c-lineUp__body">
            <a href="<?php echo esc_url( home_url( 'irohaie' ) ); ?>">
              <figure class="c-lineUp__media"><img loading="lazy" class="c-lineUp__img" width="1600" height="1000" src="<?php echo esc_url( get_template_directory_uri() . '/dist/img/top/Group03.webp' ); ?>" alt="いろはいえ"></figure>
              <span class="c-lineUp__tag">自由設計</span>
              <p class="c-lineUp__text">安心の定額制、なのに自由設計</p>
            </a>
          </article>
        </li>
      </ul>
    </div>
  </section>

  
  <section class="l-content u-mb100">
    <div class="u-center u-mb10">
      <h2 class="c-title--sectionLine">
        EVENT
      </h2>
    </div>
    <div class="u-center u-mb30">
      <p class="c-title--orangeLine">
        <span class="marker">最新情報をお届けします</span>
      </p>
    </div>
    <!-- WINKMARK LP INDEX 1 start -->
    <div class="event-box">
      <div class="lst-event" id="wink_event_list">
      </div>
    </div>
    <!-- WINKMARK LP INDEX 1 end-->
  </section>

  <section class="p-top__introduction u-mb100" style="background-image: url('<?php echo esc_url( get_template_directory_uri() . '/dist/img/top/top01.webp' ); ?>');">
    <a class="u-block" href="<?php echo esc_url( home_url( 'model-house' ) ); ?>">
      <div class="p-top__introduction__ttlWrap">
        <h2 class="c-title--sectionEn">
          <span class="marker">MODEL_HOUSE</span>
        </h2>
        <p class="p-top__introduction__txt">
          豊後夢工房の暮らしを体験できるモデルハウス。
          <br>ぜひ一度ご来場いただき体験してみてください。
        </p>
      </div>
      <div class="p-top__introduction__imgWrap--house"><img loading="lazy" width="495" height="494" src="<?php echo esc_url( get_template_directory_uri() . '/dist/img/top/dream_studio_1.webp' ); ?>" alt=""></div>
    </a>
  </section>
  

 
  <?php get_template_part( 'template-parts/bungo-yume-studio' ); ?>

  
  <section class="p-top__introduction u-mb100" style="background-image: url('<?php echo esc_url( get_template_directory_uri() . '/dist/img/top/top01.webp' ); ?>');">
    <a class="u-block"  href="<?php echo esc_url( home_url( 'catalog' ) ); ?>">
      <div class="p-top__introduction__ttlWrap">
        <h2 class="c-title--sectionEn">
          <span class="marker">CATALOG</span>
        </h2>
        <p class="p-top__introduction__txt">
          理想の住まい作りをサポート。
          <br>無料資料請求はこちらから
        </p>
      </div>
      <div class="p-top__introduction__imgWrap"><img loading="lazy" width="618" height="397" src="<?php echo esc_url( get_template_directory_uri() . '/dist/img/top/top_catalog.webp' ); ?>" alt=""></div>
    </a>
  </section>

  <section class="l-content u-mb100">
    <div class="u-center u-mb10">
      <h2 class="c-title--sectionLine">
        WORKS&VOICE
      </h2>
    </div>
    <div class="u-center u-mb30">
      <p class="c-title--orangeLine">
        <span class="marker">施工事例＆お客様の声</span>
      </p>
    </div>
    <?php $local_paged = ( get_query_var( 'paged' ) ) ? get_query_var( 'paged' ) : 1;
    $works             = array(
      'post_type'      => 'works',
      'posts_per_page' => 4,
      'orderby'        => 'menu_order',
      'order'          => 'ASC',
    ); ?>
    <?php $works_loop = new WP_Query( $works ); ?>
    <?php if ( $works_loop->have_posts() ) : ?>
      <ul class="c-cardList c-cardList--lead u-mb50">
        <?php while ( $works_loop->have_posts() ) :
          $works_loop->the_post(); ?>
          <?php get_template_part( 'template-parts/works-loop' ); ?>
        <?php endwhile; ?>
      </ul>
    <?php endif;
    wp_reset_postdata(); ?>
    <div class="u-center">
      <a href="<?php echo esc_url( home_url( 'works' ) ); ?>" class="c-button--outline">施工事例一覧へ</a>
    </div>
  </section>
  <section class="u-mb80">
    <?php
    $args = array(
      'post_type'      => 'staff',
      'posts_per_page' => -1,
      'order'          => 'DESC',
      'orderby'        => 'date',
    ); ?>
    <?php $staff_loop = new WP_Query( $args ); ?>
    <ul class="p-top__staff__list js-staffSlider">
      <?php if ( $staff_loop->have_posts() ) : ?>
        <?php while ( $staff_loop->have_posts() ) :
          $staff_loop->the_post(); ?>
          <li class="p-top__staff__item">
            <a href="<?php the_permalink(); ?>">
              <?php $staff_img = get_field( 'staff-img' ); ?>
              <?php if ( $staff_img ) : ?>
              <?php
            echo wp_get_attachment_image(
                $staff_img,
                'full',
                false,
                array(
                  'class'   => 'p-about__staff__listImg',
                  'alt'     => get_the_title(),
                  'loading' => 'lazy',
                )
            );
              ?>
              <?php endif; ?>
            </a>
          </li>
        <?php endwhile;
      endif;
      wp_reset_postdata(); ?>
    </ul>
    <h2 class="p-top__staff__ttl u-center u-mb20">
      YUME STAFF
    </h2>
    <p class="p-top__staff__subTtl">
      ゆめ空間づくりスタッフ
    </p>
    <div class="p-top__staff__copyWrap">
      <p class="p-top__staff__copy">
        あなたの<span class="p-top__staff__copy--orange">「ゆめ」</span>
        <br>いっしょにつくります。
      </p>
    </div>
    <div class="u-center u-mb30">
      <a href="<?php echo esc_url( home_url( 'staff' ) ); ?>" class="c-button--outline">スタッフ一覧へ</a>
    </div>
    <?php
    $args = array(
      'post_type'      => 'staff',
      'posts_per_page' => -1,
      'order'          => 'ASC',
      'orderby'        => 'date',
    ); ?>
    <?php $staff_loop = new WP_Query( $args ); ?>
    <ul class="p-top__staff__list js-staffSlider--reverse" dir="rtl">
      <?php if ( $staff_loop->have_posts() ) : ?>
        <?php while ( $staff_loop->have_posts() ) :
          $staff_loop->the_post(); ?>
          <li class="p-top__staff__item">
            <a href="<?php the_permalink(); ?>">
              <?php $staff_img = get_field( 'staff-img' ); ?>
              <?php if ( $staff_img ) : ?>
              <?php
            echo wp_get_attachment_image(
                $staff_img,
                'full',
                false,
                array(
                  'class'   => 'p-about__staff__listImg',
                  'alt'     => get_the_title(),
                  'loading' => 'lazy',
                )
            );
              ?>
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
      <h2 class="c-title--sectionLine">
        BUILT＆LAND
      </h2>
    </div>
    <div class="u-center u-mb30">
      <p class="c-title--orangeLine">
        <span class="marker">土地・物件情報</span>
      </p>
    </div>
    <?php
    $local_paged = ( get_query_var( 'paged' ) ) ? get_query_var( 'paged' ) : 1;
    $property    = array(
      'post_type'      => 'property',
      'posts_per_page' => 4,
      'paged'          => $local_paged,
      'orderby'        => 'menu_order',
      'order'          => 'ASC',
    ); ?>
    <?php $property_loop = new WP_Query( $property ); ?>
    <?php if ( $property_loop->have_posts() ) : ?>
      <ul class="c-cardList c-cardList--lead">
        <?php while ( $property_loop->have_posts() ) :
          $property_loop->the_post(); ?>
          <?php get_template_part( 'template-parts/property-loop' ); ?>
        <?php endwhile; ?>
      </ul>
    <?php endif;
    wp_reset_postdata(); ?>
  </section>

  <div class="u-center u-mb50">
    <a href="<?php echo esc_url( home_url( 'property' ) ); ?>" class="c-button--outline">土地・物件情報一覧へ</a>
  </div>

</main>
<?php get_footer( null, array( 'heading_tag' => 'h3' ) ); ?>