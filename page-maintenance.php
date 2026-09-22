<?php
// Template Name: maintenance
if (!defined('ABSPATH')) exit;
get_header();
?>
<main>
  <div class="c-pageMv u-mb100">
    <div class="c-pageMv__heading">
      <h2 class="c-pageMv__heading__title">
        アフターメンテナンス
      </h2>
      <p class="c-pageMv__heading__subTitle">
        MAINTENANCE
      </p>
    </div>
    <?php $mv = get_field('mv-maintenance-img'); ?>
    <?php if ($mv) : ?>
      <figure class="c-pageMv__visual" style="background-image: url('<?php echo esc_url($mv); ?>');"></figure>
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
        アフターメンテナンス
      </h3>
      <div>
        <div>
          <p class="c-title--orangeLine "><span class="marker">
              <span class="u-orange">ゆめ</span>の住まいを<span class="u-orange">守る</span>、<br>
              <span class="u-orange">安心</span>のアフターメンテナンス
          </p>
        </div>
      </div>
    </div>
  </section>

  <section class="u-mb100">
    <?php
    $maintenance = get_field('maintenance');
    if ($maintenance && (!empty($maintenance['img']) || !empty($maintenance['txt']) || !empty($maintenance['description']))) :
    ?>
      <div class="concept__policy1" id="maintenance-description">
        <div class="concept__policy1 maintenance-description">
          <?php if (!empty($maintenance['img'])) : ?>
            <div class="design-right-image">
              <img src="<?php echo esc_url($maintenance['img']); ?>">
            </div>
          <?php endif; ?>
          <div class="concept__policy2-content">
            <div class="u-mb20">
              <p class=" concept__policy1-mainttl maintenance-ttl"><span class="marker">
                  アフターメンテナンス</span>
              </p>
            </div>
            <?php if (!empty($maintenance['txt'])) : ?>
              <div class="concept__policy2-text u-mb25">
                <?php echo wp_kses_post($maintenance['txt']); ?>
              </div>
            <?php endif; ?>
          </div>
        </div>
        <?php if (!empty($maintenance['description'])) : ?>
          <p class="l-content--middle maintenance-description">
            <?php echo wp_kses_post($maintenance['description']); ?><br><br>
          </p>
        <?php endif; ?>
      </div>
    <?php endif; ?>

    <?php
    $inspection = get_field('inspection');
    if ($inspection && (!empty($inspection['img_1']) || !empty($inspection['txt_1']) || !empty($inspection['img_2']) || !empty($inspection['txt_2']) || !empty($inspection['img_3']) || !empty($inspection['txt_3']) || !empty($inspection['description']))) :
    ?>
      <div class="support__conver_devices">点検内容</div>
      <div class="l-content--middle samplelogo__three_points">
        <div class="samplelogo__three_items_renovation mx-auto u-mb40">
          <?php if (!empty($inspection['img_1']) || !empty($inspection['txt_1'])) : ?>
            <div class="samplelogo_item-one">
              <?php if (!empty($inspection['img_1'])) : ?>
                <div class="samplelogo_item_img">
                  <img src="<?php echo esc_url($inspection['img_1']); ?>">
                </div>
              <?php endif; ?>
              <?php if (!empty($inspection['txt_1'])) : ?>
                <div class="samplelogo_button mx-auto">
                  <?php echo wp_kses_post($inspection['txt_1']); ?>
                </div>
              <?php endif; ?>
            </div>
          <?php endif; ?>
          <?php if (!empty($inspection['img_2']) || !empty($inspection['txt_2'])) : ?>
            <div class="samplelogo_item-one">
              <?php if (!empty($inspection['img_2'])) : ?>
                <div class="samplelogo_item_img">
                  <img src="<?php echo esc_url($inspection['img_2']); ?>">
                </div>
              <?php endif; ?>
              <?php if (!empty($inspection['txt_2'])) : ?>
                <div class="samplelogo_button mx-auto">
                  <?php echo wp_kses_post($inspection['txt_2']); ?>
                </div>
              <?php endif; ?>
            </div>
          <?php endif; ?>
          <?php if (!empty($inspection['img_3']) || !empty($inspection['txt_3'])) : ?>
            <div class="samplelogo_item-one">
              <?php if (!empty($inspection['img_3'])) : ?>
                <div class="samplelogo_item_img">
                  <img src="<?php echo esc_url($inspection['img_3']); ?>">
                </div>
              <?php endif; ?>
              <?php if (!empty($inspection['txt_3'])) : ?>
                <div class="samplelogo_button mx-auto">
                  <?php echo wp_kses_post($inspection['txt_3']); ?>
                </div>
              <?php endif; ?>
            </div>
          <?php endif; ?>
        </div>
        <div class="inspection-description">
          <img class="inspection-description--img" src=" <?php echo esc_url(IMG_URL . '/maintenance/maintenance_5.webp'); ?>">

          <img class="inspection_description_img2" src=" <?php echo esc_url(IMG_URL . '/maintenance/maintenance_6.webp'); ?>">
          <?php if (!empty($inspection['description'])) : ?>
            <p class="inspection-description--txt"><?php echo wp_kses_post($inspection['description']); ?></p>
          <?php endif; ?>

        </div>
      </div>
    <?php endif; ?>

    <div class="support__conver_devices">保証と保守期間</div>
    <div class="l-content--middle inspection-description">
      <p class="inspection-description--txt">
        お引渡しから20年の定期巡回訪問に合わせて、長期住宅保証や設備保証も行っております。 住まわれるご家族の皆様がいつまでも快適にお暮らしいただけるよう、 安心の保証制度でご入居後も末永くサポートします。
      </p>
      <img class="inspection_description_img" src=" <?php echo esc_url(IMG_URL . '/maintenance/maintenance_7.webp'); ?>">
      <span class="go-support">
        <a class="link__btn" href="<?php echo esc_url(home_url('/after-support/')); ?>">安心保証をみる</a>
      </span>
    </div>
  </section>

  <?php get_template_part('template-parts/common'); ?>


</main>
<?php get_footer(); ?>