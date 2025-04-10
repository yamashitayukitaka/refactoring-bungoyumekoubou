<?php
if (!defined('ABSPATH')) exit;
get_header();
?>
<main>
  <div class="c-pageMv u-mb100">
    <div class="c-pageMv__ttl__wrap">
      <h2 class="c-pageMv__ttl">
        MODEL HOUSE
      </h2>
      <p class="c-pageMv__subTtl">
        モデルハウス
      </p>
    </div>
    <?php $mv = get_field('mv-model-img'); ?>
    <figure class="c-pageMv__img__wrap" style="background-image: url('<?php echo $mv; ?>');"></figure>
  </div>

  <!-- トップタイトル概要 -->
  <section class="l_content_middle_80 support-title u-mb100 illustration_set">
    <figure class="illustration_2">
      <img src="<?php echo esc_url(IMG_URL . '/family_img.webp'); ?>" alt=" モデルハウス">
    </figure>
    <figure class="illustration_3">
      <img src="<?php echo esc_url(IMG_URL . '/illustration/yume_img9.webp'); ?>" alt=" モデルハウス">
    </figure>
    <figure class="illustration_4">
      <img src="<?php echo esc_url(IMG_URL . '/illustration/house.webp'); ?>" alt=" モデルハウス">
    </figure>
    <div class="c-title__wrap--sectionLine">
      <h3 class="c-title--sectionLine u-mb40">
        モデルハウス
      </h3>
      <div>
        <div>
          <p class="c-title--orangeLine "><span class="marker">
              <span class="u-orange">見て</span>、<span class="u-orange">触れて</span>、<span class="u-orange">感じる</span>。<br>
              <span class="u-orange">理想の住まい</span>を<span class="u-orange">体験</span>してください！</span>
          </p>
        </div>
      </div>
    </div>
  </section>

  <section class="TOS-housing service_model_wrap u-mb100">
    <?php
    $model = get_field('model-sample')[0];
    $studio_img = $model['img_1'];
    $design_img = $model['img_2'];
    $description = $model['desc'];
    ?>
    <figure class="title__left-ribbon">
      <img src="<?php echo esc_url(IMG_URL . '/left-ribbon.webp'); ?>">
    </figure>
    <div class="house__title">
      <div class="house__title-left">
        <div class="pc">
          <p class="house-orangeLine"><span class="marker">中庭と深い軒の織りなす<br>
              スタイリッシュなデザイン</span></p>
        </div>
      </div>
      <div class="model_center_T">
        <p class="house__title-right">TOSハウジングメッセ </p>
      </div>
      <div class="sp_tab">
        <p class="house-orangeLine"><span class="marker">中庭と深い軒の織りなす<br>
            スタイリッシュなデザイン</span></p>
      </div>
    </div>
    <figure class="dream_studio">
      <img src="<?php echo esc_url($studio_img); ?>">
    </figure>
    <figure class="dream_design">
      <img src="<?php echo esc_url($design_img); ?>">
    </figure>
    <div class="TOS-housing__text u-mb100">
      <?php echo wp_kses_post($description); ?>
    </div>
    <div class="service_model_gallery">
      <?php get_template_part('hasThumbSlider-loop', 'hasThumbSlider'); ?>
    </div>


    <div class="u-center u-mb100">
      <span class="house__details">
        <a class="link__btn" href="#contact">見学・ご相談はこちらから</a>
      </span>
    </div>

  </section>

  <section class="TOS-housing service_model_wrap u-mb100">
    <?php
    $model = get_field('model-sample')[1];
    $studio_img = $model['img_1'];
    $design_img = $model['img_2'];
    $description = $model['desc'];
    ?>
    <figure class="title__right-ribbon">
      <img src="<?php echo esc_url(IMG_URL . '/right-ribbon.webp'); ?>">
    </figure>
    <div class="house__title">
      <div class="house__title-left">
        <div class="pc">
          <p class="house-orangeLine"><span class="marker">大人カワイイ<br>
              ヨーロピアンな家</span></p>
        </div>
      </div>
      <div class="model_center_T">
        <p class="house__title-right">
          <span>シェリーハウス</span>
          Shelly House
        </p>
      </div>
      <div class="sp_tab">
        <p class="house-orangeLine"><span class="marker">大人カワイイ<br>
            ヨーロピアンな家</span></p>
      </div>
    </div>
    <figure class="dream_studio_shelly">
      <img src="<?php echo esc_url($studio_img); ?>">
    </figure>
    <figure class="dream_design">
      <img src="<?php echo esc_url($design_img); ?>">
    </figure>
    <div class="TOS-housing__text">
      <?php echo wp_kses_post($description); ?>
    </div>

    <span class="house__details">
      <a class="link__btn" href="https://sankaido.com/shelly-house/" target="_blank">Shelly Houseについて</a>
    </span>

    <?php $hasThumbsliders = get_field('b-img'); ?>

    <section class="service_model_gallery u-mb100">
      <h3 class="c-title--sectionEn">
        GALLERY
      </h3>
      <p class="c-title--sectionSub u-mb50">
        ギャラリー
      </p>
      <div class="service_model_gallery">
        <?php if ($hasThumbsliders) : ?>
          <ul class="js-hasThumbSlider c-hasThumbSlider__list">
            <?php foreach ($hasThumbsliders as $hasThumbslider) : ?>
              <li class="c-hasThumbSlider__list__item"><img src="<?php echo esc_url($hasThumbslider['img']); ?>" alt="ギャラリー画像" class="c-hasThumbSlider__list__img"></li>
            <?php endforeach; ?>
          </ul>
          <ul class="c-hasThumbSlider__thumbnail__list">
            <?php $count = 0; ?>
            <?php foreach ($hasThumbsliders as $hasThumbslider) : ?>
              <li class="c-hasThumbSlider__thumbnail__item" data-slide="<?php echo esc_html($count++); ?>">
                <img src="<?php echo esc_url($hasThumbslider['img']); ?>" alt="ギャラリー画像" class="c-hasThumbSlider__thumbnail__img">
              </li>
            <?php endforeach; ?>
          </ul>
        <?php endif; ?>
      </div>

    </section>

    <div class="u-center u-mb100">
      <span class="house__details">
        <a class="link__btn" href="#contact">見学・ご相談はこちらから</a>
      </span>
    </div>

  </section>


  <section class="TOS-housing service_model_wrap u-mb100">
    <?php
    $model = get_field('model-sample')[2];
    $studio_img = $model['img_1'];
    $design_img = $model['img_2'];
    $description = $model['desc'];
    ?>

     <figure class="title__left-ribbon">
      <img src="<?php echo esc_url(IMG_URL . '/left-ribbon.webp'); ?>">
    </figure>

    <div class="house__title">
      <div class="house__title-left">
        <div class="pc">
          <p class="house-orangeLine"><span class="marker">安心の定額制で建てる<br>
           ｢完全自由設計｣の家</span>
          </p>
        </div>
      </div>
      <div class="model_center_T">
        <p class="house__title-right">
          <span>いろは家</span>
          IROHA・IE
        </p>
      </div>
      <div class="sp_tab">
        <p class="house-orangeLine"><span class="marker">安心の定額制で建てる<br>
        　｢完全自由設計｣の家</span></p>
      </div>
    </div>

    <figure class="dream_studio_shelly">
        <img src="<?php echo esc_url($studio_img); ?>">
      </figure>
      <figure class="dream_design">
        <img src="<?php echo esc_url($design_img); ?>">
      </figure>
      <div class="TOS-housing__text">
        <?php echo wp_kses_post($description); ?>
      </div>

    <span class="house__details">
      <a class="link__btn" href="<?php echo esc_url (home_url('irohaie') ); ?>" target="_blank">いろは家について</a>
    </span>

    <?php $hasThumbsliders = get_field('c-img'); ?>

    <section class="service_model_gallery u-mb100">
      <h3 class="c-title--sectionEn">
        GALLERY
      </h3>
      <p class="c-title--sectionSub u-mb50">
        ギャラリー
      </p>
      <div class="service_model_gallery">
        <?php if ($hasThumbsliders) : ?>
          <ul class="js-hasThumbSlider c-hasThumbSlider__list">
            <?php foreach ($hasThumbsliders as $hasThumbslider) : ?>
              <?php if ($hasThumbslider['img']) : ?>
                <li class="c-hasThumbSlider__list__item"><img src="<?php echo esc_url($hasThumbslider['img']); ?>" alt="ギャラリー画像" class="c-hasThumbSlider__list__img"></li>
              <?php endif; ?>
            <?php endforeach; ?>
          </ul>
          <ul class="c-hasThumbSlider__thumbnail__list">
            <?php $count = 0; ?>
            <?php foreach ($hasThumbsliders as $hasThumbslider) : ?>
              <?php if ($hasThumbslider['img']) : ?>
                <li class="c-hasThumbSlider__thumbnail__item" data-slide="<?php echo esc_html($count++); ?>">
                  <img src="<?php echo esc_url($hasThumbslider['img']); ?>" alt="ギャラリー画像" class="c-hasThumbSlider__thumbnail__img">
                </li>
              <?php endif; ?>
            <?php endforeach; ?>
          </ul>
        <?php endif; ?>
      </div>

    </section>

    <div class="u-center u-mb100">
      <span class="house__details">
        <a class="link__btn" href="#contact">見学・ご相談はこちらから</a>
      </span>
    </div>

  </section>





  <section class="p-contact l-content" id="contact">
    <div class="c-title__wrap--sectionLine">
      <h3 class="c-title--sectionLine">
        CONTACT
      </h3>
      <div>
        <p class="c-title--orangeLine u-mb50">
          <span class="marker">お問い合わせ</span>
        </p>
      </div>
    </div>
    <div class="p-contact__form">
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
      <ul class="p-content__list u-mb50">
        <?php while ($eventLoop->have_posts()) : $eventLoop->the_post(); ?>
          <?php get_template_part('event-loop', 'event'); ?>
      <?php endwhile;
      endif;
      wp_reset_postdata(); ?>
      </ul>
      <div class="u-center">
        <a href="<?php echo esc_url(home_url('xo_event')); ?>" class="c-button--page">イベント一覧へ</a>
      </div>
  </section>


  <?php include get_template_directory() . '/common.php'   ?>


</main>
<?php get_footer(); ?>