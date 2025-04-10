<?php
if (!defined('ABSPATH')) exit;
get_header();
?>
<main>
  <div class="c-pageMv u-mb100">
    <div class="c-pageMv__ttl__wrap">
      <h2 class="c-pageMv__ttl">
        アフターメンテナンス
      </h2>
      <p class="c-pageMv__subTtl">
        MAINTENANCE
      </p>
    </div>
    <?php $mv = get_field('mv-maintenance-img'); ?>
    <figure class="c-pageMv__img__wrap" style="background-image: url('<?php echo $mv; ?>');"></figure>
  </div>

  <!-- トップタイトル概要 -->
  <section class="l_content_middle_80 support-title u-mb100 illustration_set">
    <figure class="illustration_2">
      <img src="<?php echo esc_url(IMG_URL . '/family_img.webp'); ?>" alt="">
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
    <div class="concept__policy1" id="maintenance-description">
      <?php
      $maintenance = get_field('maintenance');
      $maintenance_txt = $maintenance['txt'];
      $maintenance_img = $maintenance['img'];
      $maintenance_description = $maintenance['description'];
      ?>
      <div class="concept__policy1 maintenance-description">
        <div class="design-right-image">
          <img src="<?php echo esc_url($maintenance_img); ?>">
        </div>
        <div class="concept__policy2-content">
          <div class="u-mb20">
            <p class=" concept__policy1-mainttl maintenance-ttl"><span class="marker">
                アフターメンテナンス</span>
            </p>
          </div>
          <div class="concept__policy2-text u-mb25">
            <?php echo $maintenance_txt; ?>
          </div>
        </div>
      </div>
      <p class="l-content--middle maintenance-description">
        <?php echo $maintenance_description; ?><br><br>
      </p>
    </div>

    <div class="support__conver_devices">点検内容</div>
    <?php
    $inspection = get_field('inspection');
    $img_1 = $inspection['img_1'];
    $txt_1 = $inspection['txt_1'];
    $img_2 = $inspection['img_2'];
    $txt_2 = $inspection['txt_2'];
    $img_3 = $inspection['img_3'];
    $txt_3 = $inspection['txt_3'];
    $description = $inspection['description'];
    ?>
    <div class="l-content--middle samplelogo__three_points">
      <div class="samplelogo__three_items_renovation mx-auto u-mb40">
        <div class="samplelogo_item-one">
          <div class="samplelogo_item_img">
            <img src="<?php echo esc_url($img_1); ?>">
          </div>
          <div class="samplelogo_button mx-auto">
            <?php echo $txt_1; ?>
          </div>
        </div>
        <div class="samplelogo_item-one">
          <div class="samplelogo_item_img">
            <img src="<?php echo esc_url($img_2); ?>">
          </div>
          <div class="samplelogo_button mx-auto">
            <?php echo $txt_2; ?>
          </div>
        </div>
        <div class="samplelogo_item-one">
          <div class="samplelogo_item_img">
            <img src="<?php echo esc_url($img_3); ?>">
          </div>
          <div class="samplelogo_button mx-auto">
            <?php echo $txt_3; ?>
          </div>
        </div>
      </div>
      <div class="inspection-description">
        <img class="inspection-description--img" src=" <?php echo esc_url(IMG_URL . '/maintenance/maintenance_5.webp'); ?>">

        <img class="inspection_description_img2" src=" <?php echo esc_url(IMG_URL . '/maintenance/maintenance_6.webp'); ?>">
        <p class="inspection-description--txt"><?php echo $description; ?></p>

      </div>
    </div>

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

  <?php include get_template_directory() . '/common.php'   ?>


</main>
<?php get_footer(); ?>