<?php
// Template Name: renovation
if (!defined('ABSPATH')) exit;
get_header();
?>
<main>
  <div class="c-pageMv u-mb100">
    <div class="c-pageMv__heading">
      <h2 class="c-pageMv__heading__title">
        ゆめリフォーム
      </h2>
      <p class="c-pageMv__heading__subTitle">
        RENOVATION
      </p>
    </div>
    <?php $mv = get_field('mv-renovation-img'); ?>
    <?php if ($mv) : ?>
      <figure class="c-pageMv__visual" style="background-image: url('<?php echo esc_url($mv); ?>');"></figure>
    <?php endif; ?>
  </div>

  <!-- トップタイトル概要 -->
  <section class="l_content_middle_80 support-title u-mb100 illustration_set">
    <figure class="illustration_2">
      <img src="<?php echo esc_url(IMG_URL . '/illustration/family_img.webp'); ?>" alt="ゆめリフォーム">
    </figure>
    <figure class="illustration_3">
      <img src="<?php echo esc_url(IMG_URL . '/illustration/yume_img9.webp'); ?>" alt="ゆめリフォーム">
    </figure>
    <figure class="illustration_4">
      <img src="<?php echo esc_url(IMG_URL . '/illustration/house.webp'); ?>" alt="ゆめリフォーム">
    </figure>
    <div class="c-title__wrap--sectionLine">
      <h3 class="c-title--sectionLine u-mb40">
        ゆめリフォーム
      </h3>
      <div>
        <div>
          <p class="c-title--orangeLine "><span class="marker">
              あなたの<span class="u-orange">大切な住まい</span>を、<br>
              もっと<span class="u-orange">素敵に</span>、もっと<span class="u-orange">快適</span>に
            </span>
          </p>
        </div>
      </div>
    </div>
  </section>

  <section class="u-mb100">
    <?php
    $renovation = get_field('renovation');
    if ($renovation && (!empty($renovation['img']) || !empty($renovation['txt']))) :
    ?>
      <div class="concept__policy1" id="maintenance-description">
        <div class="concept__policy1 maintenance-description">
          <?php if (!empty($renovation['img'])) : ?>
            <div class="design-right-image">
              <img src="<?php echo esc_url($renovation['img']); ?>">
            </div>
          <?php endif; ?>
          <div class="concept__policy2-content">
            <div class="u-mb20">
              <p class=" concept__policy1-mainttl maintenance-ttl concept__policy1-mainttl">
                <span class="marker">ゆめリフォーム</span>

              </p>
            </div>
            <?php if (!empty($renovation['txt'])) : ?>
              <div class="concept__policy2-text u-mb25">
                <?php echo wp_kses_post($renovation['txt']); ?>
              </div>
            <?php endif; ?>
          </div>
        </div>
      </div>
    <?php endif; ?>

    <section class="u-mb100">
      <?php
      $beforeafter_imgs = get_field('beforeafter');
      $imgs_one = ($beforeafter_imgs && !empty($beforeafter_imgs[0])) ? $beforeafter_imgs[0] : null;
      $imgs_two = ($beforeafter_imgs && !empty($beforeafter_imgs[1])) ? $beforeafter_imgs[1] : null;
      if (
        ($imgs_one && (!empty($imgs_one['after_img_1']) || !empty($imgs_one['before_img']) || !empty($imgs_one['after_img_2'])))
        || ($imgs_two && (!empty($imgs_two['after_img_1']) || !empty($imgs_two['before_img']) || !empty($imgs_two['after_img_2'])))
      ) :
      ?>
        <div class="support__conver_devices">ビフォーアフター</div>
        <div class="changeStatus service_model_wrap">
          <?php
          if ($imgs_one && (!empty($imgs_one['after_img_1']) || !empty($imgs_one['before_img']) || !empty($imgs_one['after_img_2']))) :
          ?>
            <div class="before1">
              <div class="status_container">
                <?php if (!empty($imgs_one['after_img_1'])) : ?>
                  <div class="after1_left">
                    <img src="<?php echo esc_url($imgs_one['after_img_1']); ?>">

                    <span>AFTER</span>
                  </div>
                <?php endif; ?>
                <?php if (!empty($imgs_one['before_img'])) : ?>
                  <div class="before1_right">
                    <img src="<?php echo esc_url($imgs_one['before_img']); ?>">
                    <span>BEFORE</span>
                  </div>
                <?php endif; ?>
              </div>
            </div>
            <?php if (!empty($imgs_one['after_img_2'])) : ?>
              <div class="after1">
                <div class="status_container">
                  <div class="after1_img">
                    <img src="<?php echo esc_url($imgs_one['after_img_2']); ?>">
                    <span>AFTER</span>
                  </div>
                </div>
              </div>
            <?php endif; ?>
          <?php endif; ?>
          <?php
          if ($imgs_two && (!empty($imgs_two['after_img_1']) || !empty($imgs_two['before_img']) || !empty($imgs_two['after_img_2']))) :
          ?>
            <div class="before2">
              <div class="status_container">
                <?php if (!empty($imgs_two['after_img_1'])) : ?>
                  <div class="after2_left">
                    <img src="<?php echo esc_url($imgs_two['after_img_1']); ?>">
                    <span>AFTER</span>
                  </div>
                <?php endif; ?>
                <?php if (!empty($imgs_two['before_img'])) : ?>
                  <div class="before2_right">
                    <img src="<?php echo esc_url($imgs_two['before_img']); ?>">
                    <span>BEFORE</span>
                  </div>
                <?php endif; ?>
              </div>
            </div>
            <?php if (!empty($imgs_two['after_img_2'])) : ?>
              <div class="after2">
                <div class="status_container">
                  <div class="after2_img">
                    <img src="<?php echo esc_url($imgs_two['after_img_2']); ?>">
                    <span>AFTER</span>
                  </div>
                </div>
              </div>
            <?php endif; ?>
          <?php endif; ?>
        </div>
      <?php endif; ?>
    </section>

    <?php
    $details = get_field('rnv_details');
    if ($details && (!empty($details['img_1']) || !empty($details['txt_1']) || !empty($details['img_2']) || !empty($details['txt_2']) || !empty($details['img_3']) || !empty($details['txt_3']) || !empty($details['img_4']) || !empty($details['txt_4']) || !empty($details['img_5']) || !empty($details['txt_5']) || !empty($details['img_6']) || !empty($details['txt_6']))) :
    ?>
      <div class="support__conver_devices">リフォーム内容</div>
      <div class="service_model_wrap samplelogo__three_points">
        <div class="samplelogo__three_items_renovation mx-auto u-mb40">
          <?php if (!empty($details['img_1']) || !empty($details['txt_1'])) : ?>
            <div class="samplelogo_item-one">
              <?php if (!empty($details['img_1'])) : ?>
                <div class="samplelogo_item_img">
                  <img src="<?php echo esc_url($details['img_1']); ?>">
                </div>
              <?php endif; ?>
              <?php if (!empty($details['txt_1'])) : ?>
                <div class="samplelogo_button mx-auto">
                  <?php echo wp_kses_post($details['txt_1']); ?>
                </div>
              <?php endif; ?>
            </div>
          <?php endif; ?>
          <?php if (!empty($details['img_2']) || !empty($details['txt_2'])) : ?>
            <div class="samplelogo_item-one">
              <?php if (!empty($details['img_2'])) : ?>
                <div class="samplelogo_item_img">
                  <img src="<?php echo esc_url($details['img_2']); ?>">
                </div>
              <?php endif; ?>
              <?php if (!empty($details['txt_2'])) : ?>
                <div class="samplelogo_button mx-auto">
                  <?php echo wp_kses_post($details['txt_2']); ?>
                </div>
              <?php endif; ?>
            </div>
          <?php endif; ?>
          <?php if (!empty($details['img_3']) || !empty($details['txt_3'])) : ?>
            <div class="samplelogo_item-one">
              <?php if (!empty($details['img_3'])) : ?>
                <div class="samplelogo_item_img">
                  <img src="<?php echo esc_url($details['img_3']); ?>">
                </div>
              <?php endif; ?>
              <?php if (!empty($details['txt_3'])) : ?>
                <div class="samplelogo_button mx-auto">
                  <?php echo wp_kses_post($details['txt_3']); ?>
                </div>
              <?php endif; ?>
            </div>
          <?php endif; ?>
          <?php if (!empty($details['img_4']) || !empty($details['txt_4'])) : ?>
            <div class="samplelogo_item-one">
              <?php if (!empty($details['img_4'])) : ?>
                <div class="samplelogo_item_img">
                  <img src="<?php echo esc_url($details['img_4']); ?>">
                </div>
              <?php endif; ?>
              <?php if (!empty($details['txt_4'])) : ?>
                <div class="samplelogo_button mx-auto">
                  <?php echo wp_kses_post($details['txt_4']); ?>
                </div>
              <?php endif; ?>
            </div>
          <?php endif; ?>
          <?php if (!empty($details['img_5']) || !empty($details['txt_5'])) : ?>
            <div class="samplelogo_item-one">
              <?php if (!empty($details['img_5'])) : ?>
                <div class="samplelogo_item_img">
                  <img src="<?php echo esc_url($details['img_5']); ?>">
                </div>
              <?php endif; ?>
              <?php if (!empty($details['txt_5'])) : ?>
                <div class="samplelogo_button mx-auto">
                  <?php echo wp_kses_post($details['txt_5']); ?>
                </div>
              <?php endif; ?>
            </div>
          <?php endif; ?>
          <?php if (!empty($details['img_6']) || !empty($details['txt_6'])) : ?>
            <div class="samplelogo_item-one">
              <?php if (!empty($details['img_6'])) : ?>
                <div class="samplelogo_item_img">
                  <img src="<?php echo esc_url($details['img_6']); ?>">
                </div>
              <?php endif; ?>
              <?php if (!empty($details['txt_6'])) : ?>
                <div class="samplelogo_button mx-auto">
                  <?php echo wp_kses_post($details['txt_6']); ?>
                </div>
              <?php endif; ?>
            </div>
          <?php endif; ?>
        </div>
      </div>
    <?php endif; ?>
  </section>

  <section class="u-mb100">
    <div class="support__conver_devices">
      お問合わせから<span class="u-orange">リフォーム</span>までの流れ
    </div>
    <?php
    $process = get_field('rnv_process');
    ?>
    <div class="design__paint2 service_model_wrap u-mb80">
      <div class="renovation__paint_container noto-san-jp">
        <?php if ($process && !empty($process['img_1'])) : ?>
          <div class="process_img sp_tab">
            <img src="<?php echo esc_url($process['img_1']); ?>">
          </div>
        <?php endif; ?>
        <div class="process_content">
          <p class="c-title--orangeLine process_content_ttl"><span class="marker">
              <span class="u-orange">01. </span>お問合わせ</span>
          </p>
          <p class="paint_subtit paint_subtit_t">
            まずはお電話<a href="tel: 097-594-1481">097-594-1481</a>か下記フォームよりお気軽にお問合わせください。
          </p>
          <span class="go-contact">
            <a class="link__btn" href="#contact">お問合わせする</a>
          </span>
        </div>
        <?php if ($process && !empty($process['img_1'])) : ?>
          <div class="process_img pc">
            <img src="<?php echo esc_url($process['img_1']); ?>">
          </div>
        <?php endif; ?>
      </div>
    </div>
    <div class="common__down_btn"></div>
    <div class="design__paint2 service_model_wrap u-mb80">
      <div class="renovation__paint_container noto-san-jp">
        <?php if ($process && !empty($process['img_2'])) : ?>
          <div class="process_img sp_tab">
            <img src="<?php echo esc_url($process['img_2']); ?>">
          </div>
        <?php endif; ?>
        <div class="process_content">
          <p class="c-title--orangeLine process_content_ttl"><span class="marker">
              <span class="u-orange">02. </span>現地訪問と調査</span>
          </p>
          <p class="paint_subtit paint_subtit_t">
            お問合わせ後、1級施工管理技師と営業担当が現地を訪問し、詳細な聞き取りと現地調査を行います。内容によっては一級建築士が同行します。
          </p>
        </div>
        <?php if ($process && !empty($process['img_2'])) : ?>
          <div class="process_img pc">
            <img src="<?php echo esc_url($process['img_2']); ?>">
          </div>
        <?php endif; ?>
      </div>
    </div>
    <div class="common__down_btn"></div>
    <div class="design__paint2 service_model_wrap">
      <div class="renovation__paint_container noto-san-jp">
        <?php if ($process && !empty($process['img_3'])) : ?>
          <div class="process_img sp_tab">
            <img src="<?php echo esc_url($process['img_3']); ?>">
          </div>
        <?php endif; ?>
        <div class="process_content">
          <p class="c-title--orangeLine process_content_ttl"><span class="marker">
              <span class="u-orange">03. </span>お見積り</span>
          </p>
          <p class="paint_subtit paint_subtit_t">
            現地調査の結果に基づき、お見積りを作成いたします。内容を確認していただき、ご納得していただいてから、ゆめリフォームのスタートです！
          </p>
        </div>
        <?php if ($process && !empty($process['img_3'])) : ?>
          <div class="process_img pc">
            <img src="<?php echo esc_url($process['img_3']); ?>">
          </div>
        <?php endif; ?>
      </div>
    </div>
  </section>

  <section class="u-mb100">
    <div class="support__conver_devices">
      <span class="u-orange">ゆめリフォーム</span>の特徴
    </div>
    <section class="design-wrapper u-mb100 top_p_7">
      <div class="concept__policy1">
        <?php
        $points = get_field('rnv_point');
        $point = ($points && !empty($points[0])) ? $points[0] : null;
        if ($point && (!empty($point['img']) || !empty($point['txt']))) :
        ?>
          <div class="concept__policy1">
            <?php if (!empty($point['img'])) : ?>
              <div class="design-right-image">
                <img src="<?php echo esc_url($point['img']); ?>">
              </div>
            <?php endif; ?>
            <div class="concept__policy2-content">
              <div class="design__paint1_content_ttl">
                <img src="<?php echo esc_url(IMG_URL . '/common/point1.webp'); ?>">
              </div>
              <div>
                <p class="c-title--orangeLine concept__policy1-mainttl"><span class="marker">
                    <span class="u-orange">豊富な経験</span>と<span class="u-orange">知識</span>を<br>
                    持つスタッフが<span class="u-orange">対応</span></span>
                </p>
              </div>
              <?php if (!empty($point['txt'])) : ?>
                <div class="concept__policy2-text u-mb25">
                  <?php echo wp_kses_post($point['txt']); ?>
                </div>
              <?php endif; ?>
            </div>
          </div>
        <?php endif; ?>
      </div>

      <div class="concept__policy1">
        <?php
        $points = get_field('rnv_point');
        $point = ($points && !empty($points[1])) ? $points[1] : null;
        if ($point && (!empty($point['img']) || !empty($point['txt']))) :
        ?>
          <div class="concept__policy1">
            <?php if (!empty($point['img'])) : ?>
              <div class="design-left-image">
                <img src="<?php echo esc_url($point['img']); ?>">
              </div>
            <?php endif; ?>
            <div class="concept__policy1-content">

              <div class="design__paint1_content_ttl">
                <img src="<?php echo esc_url(IMG_URL . '/common/point2.webp'); ?>">
              </div>
              <div>
                <p class="c-title--orangeLine u-mb10 concept__policy1-mainttl"><span class="marker">
                    <span class="u-orange">安心</span>の<span class="u-orange">施工監督体制</span></span>
                </p>
              </div>
              <?php if (!empty($point['txt'])) : ?>
                <div class="concept__policy2-text u-mb25">
                  <?php echo wp_kses_post($point['txt']); ?>
                </div>
              <?php endif; ?>
            </div>
          </div>
        <?php endif; ?>
      </div>
    </section>
  </section>

  <div class="l-content--middle recruit__contact__form u-mb100">
    <p class="recruit__contact__desc">
      わたしたちと一緒にゆめをつくりませんか？お問合せは以下のお問合せフォーム<br>
      またはお電話にてお気軽にご連絡ください。
    </p>
    <a href="tel:0975941481" class="recruit__contact__info">
      <span class="recruit__contact__info__txt">応募はこちら</span>
      <p class=recruit__contact__info__tel>TEL.　<span class="recruit__contact__info__tel__number">097-594-1481</span>
      </p>
    </a>
  </div>

  <section class="l-content">
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
    <div class="c-form__wrap">
      <?php echo do_shortcode('[mwform_formkey key="1820"]'); ?>
    </div>
  </section>

  <?php get_template_part('template-parts/common'); ?>


</main>
<?php get_footer(); ?>