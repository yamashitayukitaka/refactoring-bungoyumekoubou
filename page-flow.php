<?php
if (!defined('ABSPATH')) exit;
get_header();
?>
<main>
  <div class="c-pageMv u-mb100">
    <div class="c-pageMv__ttl__wrap">
      <h2 class="c-pageMv__ttl">
        ゆめづくりの流れ
      </h2>
      <p class="c-pageMv__subTtl">
        FLOW
      </p>
    </div>
    <?php $mv = get_field('mv-flow-img'); ?>
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
        いえづくりのながれ
      </h3>
      <div>
        <div>
          <p class="c-title--orangeLine "><span class="marker">
              <span class="u-orange">出会い</span>から完成<span class="u-orange">お引き渡し</span>まで<br>
              <span class="u-orange">家づくりの流れ</span>をご紹介致します。
          </p>
        </div>
      </div>
    </div>
  </section>

  <p class="service_model_wrap u-mb100 flow-desc">
    はじめての家づくり、何をどう進めればいいか分からないことも多いと思います。<br class="pc_tab">
    ここでは、豊後夢工房の一般的な 家づくりのプロセスを、順を追ってご紹介。<br class="pc_tab">
    展示場や見学会での出会いからご契約、 上棟、完成お引き渡しまでの、 家づくりのプロセスをご紹介致します。
  </p>

  <div class="bottom_m_20">
    <?php
    $showrooms = get_field('showroom');
    for ($i = 0; $i < count($showrooms); $i++) {
      $title = $showrooms[$i]['title'];
      $subtitle = $showrooms[$i]['subtitle'];
      $img = $showrooms[$i]['img'];
    ?>
      <section class="service_model_wrap flow__showroom robots">
        <div class="flow__showroom_content">
          <div class="flow__showroom_ttl">
            <span>
              <?php echo sprintf("%02d", ($i + 1)); ?>.
            </span>
            <?php echo $title; ?>
          </div>
          <div class="flow__showroom_text">
            <?php echo wp_kses_post($subtitle); ?>
          </div>
          <?php
          if ($i == count($showrooms) - 1) { ?>
            <div class="go_to_details">
              <a class="form__btn" href="<?php echo esc_url(home_url('/maintenance/')); ?>">アフターサービスについて</a>
            </div>
          <?php
          }
          ?>
        </div>
        <div class="flow__showroom_img">
          <img src="<?php echo esc_url($img); ?>">
        </div>
      </section>
      <?php
      if ($i != count($showrooms) - 1) {
      ?>
        <div class="common__down_btn"></div>
        <div></div>
      <?php
      }
      ?>
    <?php
    }
    ?>
  </div>

  <?php include get_template_directory() . '/common.php'   ?>

</main>
<?php get_footer(); ?>