<?php
if (!defined('ABSPATH')) exit;
get_header();
?>
<main class="p-design">
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
  <section class="p-design__intro u-mb100">
    <div class="c-title__wrap--sectionLine">
      <h3 class="c-title--sectionLine u-mb40">
        デザインへのこだわり
      </h3>
      <div>
        <div>
          <p class="c-title--orangeLine p-design__intro__lead"><span class="u-textOrange">快適な住まい</span>を<br class="u-none__pc--sp">ご提供するための<br>
              <span class="u-textOrange">デザイン</span>のこだわり<br>
          </p>
        </div>
      </div>
    </div>
  </section>

  <!-- メニュー -->
  <section class="p-design__nav">
    <div class="p-design__nav__heading">
      <span class="u-textOrange">豊後夢工房</span>がこだわる<span class="u-textOrange">デザイン</span>へのこだわり
    </div>
    <div class="p-design__nav__list">
      <a href="#design1" class="p-design__nav__link">
        <div class="p-design__nav__card">
          <div class="p-design__nav__number">
            <img class="p-design__nav__numberImg" src="<?php echo esc_url(IMG_URL . '/number/number1.webp'); ?>" alt="">
          </div>
          <div>
            <p class="p-design__nav__label">
              <span class="p-design__nav__emphasis">暮らし</span>と<span class="p-design__nav__emphasis">動線</span>を<br>
              <span class="p-design__nav__emphasis">楽</span>にするデザイン
            </p>
          </div>
        </div>
      </a>
      <a href="#design2" class="p-design__nav__link">
        <div class="p-design__nav__card">
          <div class="p-design__nav__number">
            <img class="p-design__nav__numberImg" src="<?php echo esc_url(IMG_URL . '/number/number2.webp'); ?>" alt="">
          </div>
          <div>
            <p class="p-design__nav__label">
              <span class="p-design__nav__emphasis">住む人らしさ</span>を<br>
              大切にするデザイン
            </p>
          </div>
        </div>
      </a>
      <a href="#design3" class="p-design__nav__link">
        <div class="p-design__nav__card">
          <div class="p-design__nav__number">
            <img class="p-design__nav__numberImg" src="<?php echo esc_url(IMG_URL . '/number/number3.webp'); ?>" alt="">
          </div>
          <div>
            <p class="p-design__nav__label">
              <span class="p-design__nav__emphasis">太陽</span>と<span class="p-design__nav__emphasis">自然</span>を<br>
              生かすデザイン
            </p>
          </div>
        </div>
      </a>
      <a href="#design4" class="p-design__nav__link">
        <div class="p-design__nav__card">
          <div class="p-design__nav__number">
            <img class="p-design__nav__numberImg" src="<?php echo esc_url(IMG_URL . '/number/number4.webp'); ?>" alt="">
          </div>
          <div>
            <p class="p-design__nav__label">
              <span class="p-design__nav__emphasis">メンテナンス</span><br>
              しやすいデザイン
            </p>
          </div>
        </div>
      </a>
    </div>
  </section>

  <!-- points -->
  <section class="p-design__points u-mb100">
    <div class="p-design__point p-design__point--lead" id="design1">
      <?php
      $designs = get_field('designs');
      $design = ($designs && !empty($designs[0])) ? $designs[0] : null;
      if ($design && (!empty($design['img']) || !empty($design['txt']) || !empty($design['point_img_one']) || !empty($design['point_txt_one']) || !empty($design['point_img_two']) || !empty($design['point_txt_two']))) :
      ?>
      <div class="p-design__point__hero">
        <?php if (!empty($design['img'])) : ?>
          <div class="p-design__point__media p-design__point__media--right">
            <img class="p-design__point__mediaImg" src="<?php echo esc_url($design['img']); ?>" alt="">
          </div>
        <?php endif; ?>
        <div class="p-design__point__panel p-design__point__panel--left">
          <h3 class="c-title--sectionLine p-design__point__label">
            DESIGN 01
          </h3>
          <div>
            <p class="c-title--orangeLine p-design__point__headline">
              <span class="u-textOrange">家族の暮らし</span>に合わせた<br>
                <span class="u-textOrange">動線</span>をつくるデザイン
            </p>
          </div>
          <?php if (!empty($design['txt'])) : ?>
            <div class="p-design__point__text u-mb25">
              <?php echo wp_kses_post($design['txt']); ?>
            </div>
          <?php endif; ?>
        </div>
      </div>
      <div class="p-design__detail">
        <div class="p-design__detail__inner">
          <?php if (!empty($design['point_img_one'])) : ?>
            <div class="p-design__detail__media p-design__detail__media--left">
              <img class="p-design__detail__mediaImg" src="<?php echo esc_url($design['point_img_one']); ?>" alt="">
            </div>
          <?php endif; ?>
          <div class="p-design__detail__body p-design__detail__body--afterMedia">
            <div class="p-design__detail__pointLabel">
              <img class="p-design__detail__pointLabelImg" src="<?php echo esc_url(IMG_URL . '/common/point1.webp'); ?>" alt="">
            </div>
            <p class="p-design__detail__subtit">
              <span class="u-textOrange">家事らく</span>動線
            </p>
            <?php if (!empty($design['point_txt_one'])) : ?>
              <div class="p-design__detail__bodyText">
                <?php echo wp_kses_post($design['point_txt_one']); ?>
              </div>
            <?php endif; ?>
          </div>
        </div>
      </div>
      <div class="p-design__detail">
        <div class="p-design__detail__inner">
          <?php if (!empty($design['point_img_two'])) : ?>
            <div class="p-design__detail__media p-design__detail__media--right u-none__pc--tab">
              <img class="p-design__detail__mediaImg" src="<?php echo esc_url($design['point_img_two']); ?>" alt="">
            </div>
          <?php endif; ?>
          <div class="p-design__detail__body p-design__detail__body--beforeMedia">
            <div class="p-design__detail__pointLabel">
              <img class="p-design__detail__pointLabelImg" src="<?php echo esc_url(IMG_URL . '/common/point2.webp'); ?>" alt="">
            </div>
            <p class="p-design__detail__subtit">
              <span class="u-textOrange">子育て</span>動線
            </p>
            <?php if (!empty($design['point_txt_two'])) : ?>
              <div class="p-design__detail__bodyText">
                <?php echo wp_kses_post($design['point_txt_two']); ?>
              </div>
            <?php endif; ?>
          </div>
          <?php if (!empty($design['point_img_two'])) : ?>
            <div class="p-design__detail__media p-design__detail__media--right u-none__mobile--tab">
              <img class="p-design__detail__mediaImg" src="<?php echo esc_url($design['point_img_two']); ?>" alt="">
            </div>
          <?php endif; ?>
        </div>
      </div>
      <?php endif; ?>
    </div>

    <div class="p-design__divider"></div>

    <!-- point2 -->
    <div class="p-design__point" id="design2">
      <?php
      $designs = get_field('designs');
      $design = ($designs && !empty($designs[1])) ? $designs[1] : null;
      if ($design && (!empty($design['img']) || !empty($design['txt']) || !empty($design['point_img_one']) || !empty($design['point_txt_one']))) :
      ?>
      <div class="p-design__point__hero">
        <?php if (!empty($design['img'])) : ?>
          <div class="p-design__point__media">
            <img class="p-design__point__mediaImg" src="<?php echo esc_url($design['img']); ?>" alt="">
          </div>
        <?php endif; ?>
        <div class="p-design__point__panel p-design__point__panel--right">
          <h3 class="c-title--sectionLine p-design__point__label">
            DESIGN 02
          </h3>
          <div>
            <p class="c-title--orangeLine u-mb10 p-design__point__headline">
              <span class="u-textOrange">住む人らしさ</span>を<br>
                デザインする
            </p>
          </div>
          <?php if (!empty($design['txt'])) : ?>
            <div class="p-design__point__text u-mb25">
              <?php echo wp_kses_post($design['txt']); ?>
            </div>
          <?php endif; ?>
        </div>
      </div>

      <div class="p-design__detail p-design__detail--spaced">
        <div class="p-design__detail__inner">
          <?php if (!empty($design['point_img_one'])) : ?>
            <div class="p-design__detail__media p-design__detail__media--left">
              <img class="p-design__detail__mediaImg" src="<?php echo esc_url($design['point_img_one']); ?>" alt="">
            </div>
          <?php endif; ?>
          <div class="p-design__detail__body p-design__detail__body--afterMedia">
            <div class="p-design__detail__pointLabel">
              <img class="p-design__detail__pointLabelImg" src="<?php echo esc_url(IMG_URL . '/common/point1.webp'); ?>" alt="">
            </div>
            <p class="p-design__detail__subtit">
              <span class="u-textOrange">こんなお家がいいな</span>を<br>
              楽しく共有
            </p>
            <?php if (!empty($design['point_txt_one'])) : ?>
              <div class="p-design__detail__bodyText">
                <?php echo wp_kses_post($design['point_txt_one']); ?>
              </div>
            <?php endif; ?>
          </div>
        </div>
      </div>
      <?php endif; ?>
    </div>

    <div class="p-design__divider"></div>

    <!-- point3 -->
    <div class="p-design__point" id="design3">
      <?php
      $designs = get_field('designs');
      $design = ($designs && !empty($designs[2])) ? $designs[2] : null;
      if ($design && (!empty($design['img']) || !empty($design['txt']) || !empty($design['point_img_one']) || !empty($design['point_txt_one']) || !empty($design['point_img_two']) || !empty($design['point_txt_two']))) :
      ?>
      <div class="p-design__point__hero">
        <?php if (!empty($design['img'])) : ?>
          <div class="p-design__point__media p-design__point__media--right">
            <img class="p-design__point__mediaImg" src="<?php echo esc_url($design['img']); ?>" alt="">
          </div>
        <?php endif; ?>
        <div class="p-design__point__panel p-design__point__panel--left">
          <h3 class="c-title--sectionLine p-design__point__label">
            DESIGN 03
          </h3>
          <div>
            <p class="c-title--orangeLine p-design__point__headline">
              <span class="u-textOrange">太陽</span>と<span class="u-textOrange">自然</span>の恵みを生かし、<br class="u-none__mobile--sp">
                <span class="u-textOrange">快適</span>と<span class="u-textOrange">エネルギー</span>をつくる
            </p>
          </div>
          <?php if (!empty($design['txt'])) : ?>
            <div class="p-design__point__text u-mb25">
              <?php echo wp_kses_post($design['txt']); ?>
            </div>
          <?php endif; ?>
        </div>
      </div>
      <div class="p-design__detail">
        <div class="p-design__detail__inner">
          <?php if (!empty($design['point_img_one'])) : ?>
            <div class="p-design__detail__media p-design__detail__media--left">
              <img class="p-design__detail__mediaImg" src="<?php echo esc_url($design['point_img_one']); ?>" alt="">
            </div>
          <?php endif; ?>
          <div class="p-design__detail__body p-design__detail__body--afterMedia">
            <div class="p-design__detail__pointLabel">
              <img class="p-design__detail__pointLabelImg" src="<?php echo esc_url(IMG_URL . '/common/point1.webp'); ?>" alt="">
            </div>
            <div>
              <p class="p-design__detail__subtit">
                <span class="u-textOrange">心地よい風</span>と、<span class="u-textOrange">自然光</span>が<br>
                家全体に<span class="u-textOrange">行き渡る</span>空間デザイン
              </p>
            </div>
            <?php if (!empty($design['point_txt_one'])) : ?>
              <div class="p-design__detail__bodyText">
                <?php echo wp_kses_post($design['point_txt_one']); ?>
              </div>
            <?php endif; ?>
          </div>
        </div>
      </div>
      <div class="p-design__detail">
        <div class="p-design__detail__inner">
          <?php if (!empty($design['point_img_two'])) : ?>
            <div class="p-design__detail__media p-design__detail__media--right u-none__pc--tab">
              <img class="p-design__detail__mediaImg" src="<?php echo esc_url($design['point_img_two']); ?>" alt="">
            </div>
          <?php endif; ?>
          <div class="p-design__detail__body p-design__detail__body--beforeMedia">
            <div class="p-design__detail__pointLabel">
              <img class="p-design__detail__pointLabelImg" src="<?php echo esc_url(IMG_URL . '/common/point2.webp'); ?>" alt="">
            </div>
            <p class="p-design__detail__subtit">
              <span class="u-textOrange">エネルギー効率</span>を<br>
              <span class="u-textOrange">最大化</span>するデザイン
            </p>
            <?php if (!empty($design['point_txt_two'])) : ?>
              <div class="p-design__detail__bodyText">
                <?php echo wp_kses_post($design['point_txt_two']); ?>
              </div>
            <?php endif; ?>
            <div class="p-design__detail__cta">
              <a class="c-button--orange" href="<?php echo esc_url(home_url('/quality/')); ?>">性能について</a>
            </div>
          </div>
          <?php if (!empty($design['point_img_two'])) : ?>
            <div class="p-design__detail__media p-design__detail__media--right u-none__mobile--tab">
              <img class="p-design__detail__mediaImg" src="<?php echo esc_url($design['point_img_two']); ?>" alt="">
            </div>
          <?php endif; ?>
        </div>
      </div>
      <?php endif; ?>
    </div>

    <div class="p-design__divider"></div>

    <!-- point4 -->
    <div class="p-design__point p-design__point--last" id="design4">
      <?php
      $designs = get_field('designs');
      $design = ($designs && !empty($designs[3])) ? $designs[3] : null;
      if ($design && (!empty($design['img']) || !empty($design['txt']) || !empty($design['point_img_one']) || !empty($design['point_txt_one']))) :
      ?>
      <div class="p-design__point__hero">
        <?php if (!empty($design['img'])) : ?>
          <div class="p-design__point__media">
            <img class="p-design__point__mediaImg" src="<?php echo esc_url($design['img']); ?>" alt="">
          </div>
        <?php endif; ?>
        <div class="p-design__point__panel p-design__point__panel--right">
          <h3 class="c-title--sectionLine p-design__point__label">
            DESIGN 04
          </h3>
          <div>
            <p class="c-title--orangeLine u-mb10 p-design__point__headline">
              <span class="u-textOrange">メンテナンス</span><br>
                しやすいデザイン
            </p>
          </div>
          <?php if (!empty($design['txt'])) : ?>
            <div class="p-design__point__text u-mb25">
              <?php echo wp_kses_post($design['txt']); ?>
            </div>
          <?php endif; ?>
        </div>
      </div>

      <div class="p-design__detail">
        <div class="p-design__detail__inner">
          <?php if (!empty($design['point_img_one'])) : ?>
            <div class="p-design__detail__media p-design__detail__media--left">
              <img class="p-design__detail__mediaImg" src="<?php echo esc_url($design['point_img_one']); ?>" alt="">
            </div>
          <?php endif; ?>
          <div class="p-design__detail__body p-design__detail__body--afterMedia">
            <div class="p-design__detail__pointLabel">
              <img class="p-design__detail__pointLabelImg" src="<?php echo esc_url(IMG_URL . '/common/point1.webp'); ?>" alt="">
            </div>
            <div>
              <p class="u-mb10 p-design__detail__subtit">
                <span class="u-textOrange">故障時</span>にもすぐに<span class="u-textOrange">修理</span>しやすく
              </p>
            </div>
            <?php if (!empty($design['point_txt_one'])) : ?>
              <div class="p-design__detail__bodyText">
                <?php echo wp_kses_post($design['point_txt_one']); ?>
              </div>
            <?php endif; ?>
            <div class="p-design__detail__cta">
              <a class="c-button--orange" href="<?php echo esc_url(home_url('/maintenance/')); ?>">アフターサポートについて</a>
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
