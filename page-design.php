<?php
if (!defined('ABSPATH')) exit;
get_header();
?>
<main>
  <div class="c-pageMv u-mb100">
    <div class="c-pageMv__ttl__wrap">
      <h2 class="c-pageMv__ttl">
        デザインへのこだわり
      </h2>
      <p class="c-pageMv__subTtl">
        HIGH QUALITY
      </p>
    </div>
    <?php $mv = get_field('mv-design-img'); ?>
    <?php if ($mv) : ?>
      <figure class="c-pageMv__img__wrap" style="background-image: url('<?php echo esc_url($mv); ?>');"></figure>
    <?php endif; ?>
  </div>

  <!-- トップタイトル概要 -->
  <section class="l_content_middle_80 support-title u-mb100 illustration_set">
    <figure class="illustration_2">
      <img src="<?php echo esc_url(IMG_URL . '/illustration/family_img.webp'); ?>" alt="">
    </figure>
    <figure class="illustration_3">
      <img src="<?php echo esc_url(IMG_URL . '/illustration/yume_img9.webp'); ?>" alt="">
    </figure>
    <figure class="illustration_4">
      <img src="<?php echo esc_url(IMG_URL . '/illustration/house.webp'); ?>" alt="">
    </figure>
    <div class="c-title__wrap--sectionLine">
      <h3 class="c-title--sectionLine u-mb40">
        デザインへのこだわり
      </h3>
      <div>
        <div>
          <p class="c-title--orangeLine cost_line"><span class="marker">
              <span class="u-orange">快適な住まい</span>を<br class="sp">ご提供するための<br>
              <span class="u-orange">デザイン</span>のこだわり<br>
            </span>
          </p>
        </div>
      </div>
    </div>
  </section>

  <!-- メニュー -->
  <section class="commitment__top_content ">
    <div class="support__top_title">
      <span class="font_orange">豊後夢工房</span>がこだわる<span class="font_orange">デザイン</span>へのこだわり
    </div>
    <div class="quality__top_list noto-sans-jp">
      <a href="#design1" class="go_to_link">
        <div class="support__top_button">
          <div class="support__top_button_number">
            <img src="<?php echo esc_url(IMG_URL . '/number/number1.webp'); ?>" alt="">
          </div>
          <div class="">
            <p class="support__top_button_text">
              <span class="font_orange">暮らし</span>と<span class="font_orange">動線</span>を<br>
              <span class="font_orange">楽</span>にするデザイン

            </p>
          </div>
        </div>
      </a>
      <a href="#design2" class="go_to_link">
        <div class="support__top_button">
          <div class="support__top_button_number">
            <img src="<?php echo esc_url(IMG_URL . '/number/number2.webp'); ?>" alt="">
          </div>
          <div class="">
            <p class="support__top_button_text">
              <span class="font_orange">住む人らしさ</span>を<br>
              大切にするデザイン
            </p>
          </div>
        </div>
      </a>
      <a href="#design3" class="go_to_link">
        <div class="support__top_button">
          <div class="support__top_button_number">
            <img src="<?php echo esc_url(IMG_URL . '/number/number3.webp'); ?>" alt="">
          </div>
          <div class="">
            <p class="support__top_button_text">

              <span class="font_orange">太陽</span>と<span class="font_orange">自然</span>を<br>
              生かすデザイン
            </p>
          </div>
        </div>
      </a>
      <a href="#design4" class="go_to_link">
        <div class="support__top_button">
          <div class="support__top_button_number">
            <img src="<?php echo esc_url(IMG_URL . '/number/number4.webp'); ?>" alt="">
          </div>
          <div class="">
            <p class="support__top_button_text">
              <span class="font_orange">メンテナンス
              </span><br>
              しやすいデザイン
            </p>
          </div>
        </div>
      </a>
    </div>
  </section>

  <!-- point1 -->
  <section class="design-wrapper u-mb100">
    <div class="concept__policy1" id="design1">
      <?php
      $designs = get_field('designs');
      $design = ($designs && !empty($designs[0])) ? $designs[0] : null;
      if ($design && (!empty($design['img']) || !empty($design['txt']) || !empty($design['point_img_one']) || !empty($design['point_txt_one']) || !empty($design['point_img_two']) || !empty($design['point_txt_two']))) :
      ?>
      <div class="concept__policy1">
        <?php if (!empty($design['img'])) : ?>
          <div class="design-right-image">
            <img src="<?php echo esc_url($design['img']); ?>">
          </div>
        <?php endif; ?>
        <div class="concept__policy2-content">
          <h3 class="c-title--sectionLine concept__policy1-subttl">
            DESIGN 01
          </h3>
          <div>
            <p class="c-title--orangeLine concept__policy1-mainttl">
              <span class="marker">
                <span class="u-orange">家族の暮らし</span>に合わせた<br>
                <span class="u-orange">動線</span>をつくるデザイン</span>
            </p>
          </div>
          <?php if (!empty($design['txt'])) : ?>
            <div class="concept__policy2-text u-mb25">
              <?php echo wp_kses_post($design['txt']); ?>
            </div>
          <?php endif; ?>
        </div>
      </div>
      <div class="design__paint1">
        <div class="design__paint1_container noto-san-jp">

          <?php if (!empty($design['point_img_one'])) : ?>
            <div class="design__paint1_img">
              <img src="<?php echo esc_url($design['point_img_one']); ?>">
            </div>
          <?php endif; ?>
          <div class="design__paint1_content">
            <div class="design__paint1_content_ttl">
              <img src="<?php echo esc_url(IMG_URL . '/common/point1.webp'); ?>">
            </div>
            <p class="paint_subtit">
              <span class=" u-orange">家事らく</span>動線
            </p>
            <?php if (!empty($design['point_txt_one'])) : ?>
              <div class="design__paint2_content_txt">
                <?php echo wp_kses_post($design['point_txt_one']); ?>
              </div>
            <?php endif; ?>
          </div>
        </div>
      </div>
      <div class="design__paint2">
        <div class="design__paint2_container noto-san-jp">
          <?php if (!empty($design['point_img_two'])) : ?>
            <div class="design__paint2_img sp_tab">
              <img src="<?php echo esc_url($design['point_img_two']); ?>">
            </div>
          <?php endif; ?>
          <div class="design__paint2_content">
            <div class="design__paint2_content_ttl">
              <img src="<?php echo esc_url(IMG_URL . '/common/point2.webp'); ?>">
            </div>
            <p class="paint_subtit">
              <span class=" u-orange">子育て</span>動線
            </p>
            <?php if (!empty($design['point_txt_two'])) : ?>
              <div class="design__paint2_content_txt">
                <?php echo wp_kses_post($design['point_txt_two']); ?>
              </div>
            <?php endif; ?>
          </div>
          <?php if (!empty($design['point_img_two'])) : ?>
            <div class="design__paint2_img pc">
              <img src="<?php echo esc_url($design['point_img_two']); ?>">
            </div>
          <?php endif; ?>

        </div>
      </div>
      <?php endif; ?>
    </div>

    <div class="border_bottom bottom_m_7">
    </div>


    <!-- point2 -->
    <div class="concept__policy1" id="design2">
      <?php
      $designs = get_field('designs');
      $design = ($designs && !empty($designs[1])) ? $designs[1] : null;
      if ($design && (!empty($design['img']) || !empty($design['txt']) || !empty($design['point_img_one']) || !empty($design['point_txt_one']))) :
      ?>
      <div class="concept__policy1">
        <?php if (!empty($design['img'])) : ?>
          <div class="design-left-image">
            <img src="<?php echo esc_url($design['img']); ?>" alt="">
          </div>
        <?php endif; ?>
        <div class="concept__policy1-content">
          <h3 class="c-title--sectionLine concept__policy1-subttl">
            DESIGN 02
          </h3>
          <div>
            <p class="c-title--orangeLine u-mb10 concept__policy1-mainttl">
              <span class="marker">
                <span class="u-orange">住む人らしさ</span>を<br>
                デザインする</span>
            </p>
          </div>
          <?php if (!empty($design['txt'])) : ?>
            <div class="concept__policy2-text u-mb25">
              <?php echo wp_kses_post($design['txt']); ?>
            </div>
          <?php endif; ?>
        </div>
      </div>


      <div class="design__paint1 sp_b_10">
        <div class="design__paint1_container noto-san-jp">

          <?php if (!empty($design['point_img_one'])) : ?>
            <div class="design__paint1_img">
              <img src="<?php echo esc_url($design['point_img_one']); ?>">
            </div>
          <?php endif; ?>
          <div class=" design__paint1_content">
            <div class="design__paint1_content_ttl">
              <img src="<?php echo esc_url(IMG_URL . '/common/point1.webp'); ?>">
            </div>
            <p class="paint_subtit">
              <span class=" u-orange">こんなお家がいいな</span>を<br>
              楽しく共有
            </p>
            <?php if (!empty($design['point_txt_one'])) : ?>
              <div class="design__paint2_content_txt">
                <?php echo wp_kses_post($design['point_txt_one']); ?>
              </div>
            <?php endif; ?>
          </div>
        </div>
      </div>
      <?php endif; ?>
    </div>

    <div class="border_bottom bottom_m_7">
    </div>

    <!-- point3 -->
    <div class="concept__policy1" id="design3">
      <?php
      $designs = get_field('designs');
      $design = ($designs && !empty($designs[2])) ? $designs[2] : null;
      if ($design && (!empty($design['img']) || !empty($design['txt']) || !empty($design['point_img_one']) || !empty($design['point_txt_one']) || !empty($design['point_img_two']) || !empty($design['point_txt_two']))) :
      ?>
      <div class="concept__policy1">
        <?php if (!empty($design['img'])) : ?>
          <div class="design-right-image">
            <img src="<?php echo esc_url($design['img']); ?>">
          </div>
        <?php endif; ?>
        <div class="concept__policy2-content">
          <h3 class="c-title--sectionLine concept__policy1-subttl">
            DESIGN 03
          </h3>
          <div>
            <p class="c-title--orangeLine concept__policy1-mainttl">
              <span class="marker">
                <span class="u-orange">太陽</span>と<span class="u-orange">自然</span>の恵みを生かし、<br class="pc_tab">
                <span class="u-orange">快適</span>と<span class="u-orange">エネルギー</span>をつくる
              </span>
            </p>
          </div>
          <?php if (!empty($design['txt'])) : ?>
            <div class="concept__policy2-text u-mb25">
              <?php echo wp_kses_post($design['txt']); ?>
            </div>
          <?php endif; ?>
        </div>
      </div>
      <div class="design__paint1">
        <div class="design__paint1_container noto-san-jp">

          <?php if (!empty($design['point_img_one'])) : ?>
            <div class="design__paint1_img">
              <img src="<?php echo esc_url($design['point_img_one']); ?>">
            </div>
          <?php endif; ?>
          <div class="design__paint1_content">
            <div class="design__paint1_content_ttl">
              <img src="<?php echo esc_url(IMG_URL . '/common/point1.webp'); ?>">
            </div>
            <div>
              <p class="paint_subtit">
                <span class="u-orange">心地よい風</span>と、<span class="u-orange">自然光</span>が<br>
                家全体に<span class="u-orange">行き渡る</span>空間デザイン
              </p>
            </div>
            <?php if (!empty($design['point_txt_one'])) : ?>
              <div class="design__paint2_content_txt">
                <?php echo wp_kses_post($design['point_txt_one']); ?>
              </div>
            <?php endif; ?>
          </div>
        </div>
      </div>
      <div class="design__paint2">
        <div class="design__paint2_container noto-san-jp">
          <?php if (!empty($design['point_img_two'])) : ?>
            <div class="design__paint2_img sp_tab">
              <img src="<?php echo esc_url($design['point_img_two']); ?>">
            </div>
          <?php endif; ?>
          <div class="design__paint2_content">
            <div class="design__paint2_content_ttl">
              <img src="<?php echo esc_url(IMG_URL . '/common/point2.webp'); ?>">
            </div>
            <p class="paint_subtit">
              <span class="u-orange">エネルギー効率</span>を<br>
              <span class="u-orange">最大化</span>するデザイン
            </p>
            <?php if (!empty($design['point_txt_two'])) : ?>
              <div class="design__paint2_content_txt">
                <?php echo wp_kses_post($design['point_txt_two']); ?>
              </div>
            <?php endif; ?>
            <div class="content_center top_p_3">
              <a class="link__btn" href="<?php echo esc_url(home_url('/quality/')); ?>">性能について</a>
            </div>
          </div>
          <?php if (!empty($design['point_img_two'])) : ?>
            <div class="design__paint2_img pc">
              <img src="<?php echo esc_url($design['point_img_two']); ?>">
            </div>
          <?php endif; ?>

        </div>
      </div>
      <?php endif; ?>
    </div>

    <div class="border_bottom bottom_m_7">
    </div>

    <!-- point4 -->
    <div class="concept__policy1 bottom_m_15" id="design4">
      <?php
      $designs = get_field('designs');
      $design = ($designs && !empty($designs[3])) ? $designs[3] : null;
      if ($design && (!empty($design['img']) || !empty($design['txt']) || !empty($design['point_img_one']) || !empty($design['point_txt_one']))) :
      ?>
      <div class="concept__policy1">
        <?php if (!empty($design['img'])) : ?>
          <div class="design-left-image">
            <img src="<?php echo esc_url($design['img']); ?>" alt="">
          </div>
        <?php endif; ?>
        <div class="concept__policy1-content">
          <h3 class="c-title--sectionLine concept__policy1-subttl">
            DESIGN 04
          </h3>
          <div>
            <p class="c-title--orangeLine u-mb10 concept__policy1-mainttl">
              <span class="marker">
                <span class="u-orange">メンテナンス</span><br>
                しやすいデザイン</span>
            </p>
          </div>
          <?php if (!empty($design['txt'])) : ?>
            <div class="concept__policy2-text u-mb25">
              <?php echo wp_kses_post($design['txt']); ?>
            </div>
          <?php endif; ?>
        </div>
      </div>


      <div class="design__paint1">
        <div class="design__paint1_container noto-san-jp">

          <?php if (!empty($design['point_img_one'])) : ?>
            <div class="design__paint1_img">
              <img src="<?php echo esc_url($design['point_img_one']); ?>">
            </div>
          <?php endif; ?>
          <div class=" design__paint1_content">
            <div class="design__paint1_content_ttl">
              <img src="<?php echo esc_url(IMG_URL . '/common/point1.webp'); ?>">
            </div>
            <div>
              <p class=" u-mb10 paint_subtit">
                <span class="u-orange">故障時</span>にもすぐに<span class="u-orange">修理</span>しやすく
              </p>
            </div>
            <?php if (!empty($design['point_txt_one'])) : ?>
              <div class="design__paint2_content_txt">
                <?php echo wp_kses_post($design['point_txt_one']); ?>
              </div>
            <?php endif; ?>
            <div class="content_center top_p_3">
              <a class="link__btn" href="<?php echo esc_url(home_url('/maintenance/')); ?>">アフターサポートについて</a>
            </div>
          </div>
        </div>
      </div>
      <?php endif; ?>
    </div>

  </section>

  <?php get_template_part('template-parts/common'); ?>


</main>
<?php get_footer(); ?>