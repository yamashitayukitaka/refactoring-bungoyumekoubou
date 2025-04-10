<?php
if (!defined('ABSPATH')) exit;
get_header();
?>
<main>
  <div class="c-pageMv u-mb100">
    <div class="c-pageMv__ttl__wrap">
      <h2 class="c-pageMv__ttl">
        ゆめリフォーム
      </h2>
      <p class="c-pageMv__subTtl">
        RENOVATION
      </p>
    </div>
    <?php $mv = get_field('mv-renovation-img'); ?>
    <figure class="c-pageMv__img__wrap" style="background-image: url('<?php echo $mv; ?>');"></figure>
  </div>

  <!-- トップタイトル概要 -->
  <section class="l_content_middle_80 support-title u-mb100 illustration_set">
    <figure class="illustration_2">
      <img src="<?php echo esc_url(IMG_URL . '/family_img.webp'); ?>" alt="ゆめリフォーム">
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
    <div class="concept__policy1" id="maintenance-description">
      <?php
      $renovation = get_field('renovation');
      $renovation_txt = $renovation['txt'];
      $renovation_img = $renovation['img'];
      ?>
      <div class="concept__policy1 maintenance-description">
        <div class="design-right-image">
          <img src="<?php echo esc_url($renovation_img); ?>">
        </div>
        <div class="concept__policy2-content">
          <div class="u-mb20">
            <p class=" concept__policy1-mainttl maintenance-ttl concept__policy1-mainttl">
              <span class="marker">ゆめリフォーム</span>

            </p>
          </div>
          <div class="concept__policy2-text u-mb25">
            <?php echo $renovation_txt; ?>
          </div>
        </div>
      </div>
    </div>

    <section class="u-mb100">
      <div class="support__conver_devices">ビフォーアフター</div>
      <div class="changeStatus service_model_wrap">
        <?php
        $beforeafter_imgs = get_field('beforeafter');
        $imgs_one = $beforeafter_imgs[0];
        $imgs_two = $beforeafter_imgs[1];
        ?>
        <div class="before1">
          <div class="status_container">
            <div class="after1_left">
              <img src="<?php echo esc_url($imgs_one['after_img_1']); ?>">

              <span>AFTER</span>
            </div>
            <div class="before1_right">
              <img src="<?php echo esc_url($imgs_one['before_img']); ?>">
              <span>BEFORE</span>
            </div>
          </div>
        </div>
        <div class="after1">
          <div class="status_container">
            <div class="after1_img">
              <img src="<?php echo esc_url($imgs_one['after_img_2']); ?>">
              <span>AFTER</span>
            </div>
          </div>
        </div>
        <div class="before2">
          <div class="status_container">
            <div class="after2_left">
              <img src="<?php echo esc_url($imgs_two['after_img_1']); ?>">
              <span>AFTER</span>
            </div>
            <div class="before2_right">
              <img src="<?php echo esc_url($imgs_two['before_img']); ?>">
              <span>BEFORE</span>
            </div>
          </div>
        </div>
        <div class="after2">
          <div class="status_container">
            <div class="after2_img">
              <img src="<?php echo esc_url($imgs_two['after_img_2']); ?>">
              <span>AFTER</span>
            </div>
          </div>
        </div>
      </div>
    </section>

    <div class="support__conver_devices">リフォーム内容</div>
    <?php
    $details = get_field('rnv_details');
    $img_1 = $details['img_1'];
    $txt_1 = $details['txt_1'];
    $img_2 = $details['img_2'];
    $txt_2 = $details['txt_2'];
    $img_3 = $details['img_3'];
    $txt_3 = $details['txt_3'];
    $img_4 = $details['img_4'];
    $txt_4 = $details['txt_4'];
    $img_5 = $details['img_5'];
    $txt_5 = $details['txt_5'];
    $img_6 = $details['img_6'];
    $txt_6 = $details['txt_6'];
    ?>
    <div class="service_model_wrap samplelogo__three_points">
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
        <div class="samplelogo_item-one">
          <div class="samplelogo_item_img">
            <img src="<?php echo esc_url($img_4); ?>">
          </div>
          <div class="samplelogo_button mx-auto">
            <?php echo $txt_4; ?>
          </div>
        </div>
        <div class="samplelogo_item-one">
          <div class="samplelogo_item_img">
            <img src="<?php echo esc_url($img_5); ?>">
          </div>
          <div class="samplelogo_button mx-auto">
            <?php echo $txt_5; ?>
          </div>
        </div>
        <div class="samplelogo_item-one">
          <div class="samplelogo_item_img">
            <img src="<?php echo esc_url($img_6); ?>">
          </div>
          <div class="samplelogo_button mx-auto">
            <?php echo $txt_6; ?>
          </div>
        </div>
      </div>
    </div>
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
        <div class="process_img sp_tab">
          <img src="<?php echo esc_url($process['img_1']); ?>">
        </div>
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
        <div class="process_img pc">
          <img src="<?php echo esc_url($process['img_1']); ?>">
        </div>
      </div>
    </div>
    <div class="common__down_btn"></div>
    <div class="design__paint2 service_model_wrap u-mb80">
      <div class="renovation__paint_container noto-san-jp">
        <div class="process_img sp_tab">
          <img src="<?php echo esc_url($process['img_2']); ?>">
        </div>
        <div class="process_content">
          <p class="c-title--orangeLine process_content_ttl"><span class="marker">
              <span class="u-orange">02. </span>現地訪問と調査</span>
          </p>
          <p class="paint_subtit paint_subtit_t">
            お問合わせ後、1級施工管理技師と営業担当が現地を訪問し、詳細な聞き取りと現地調査を行います。内容によっては一級建築士が同行します。
          </p>
        </div>
        <div class="process_img pc">
          <img src="<?php echo esc_url($process['img_2']); ?>">
        </div>
      </div>
    </div>
    <div class="common__down_btn"></div>
    <div class="design__paint2 service_model_wrap">
      <div class="renovation__paint_container noto-san-jp">
        <div class="process_img sp_tab">
          <img src="<?php echo esc_url($process['img_3']); ?>">
        </div>
        <div class="process_content">
          <p class="c-title--orangeLine process_content_ttl"><span class="marker">
              <span class="u-orange">03. </span>お見積り</span>
          </p>
          <p class="paint_subtit paint_subtit_t">
            現地調査の結果に基づき、お見積りを作成いたします。内容を確認していただき、ご納得していただいてから、ゆめリフォームのスタートです！
          </p>
        </div>
        <div class="process_img pc">
          <img src="<?php echo esc_url($process['img_3']); ?>">
        </div>
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
        $point = get_field('rnv_point')[0];
        ?>
        <div class="concept__policy1">
          <div class="design-right-image">
            <img src="<?php echo esc_url($point['img']); ?>">
          </div>
          <div class="concept__policy2-content">
            <div class="design__paint1_content_ttl">
              <img src="<?php echo esc_url(IMG_URL . '/point1.webp'); ?>">
            </div>
            <div>
              <p class="c-title--orangeLine concept__policy1-mainttl"><span class="marker">
                  <span class="u-orange">豊富な経験</span>と<span class="u-orange">知識</span>を<br>
                  持つスタッフが<span class="u-orange">対応</span></span>
              </p>
            </div>
            <div class="concept__policy2-text u-mb25">
              <?php echo $point['txt']; ?>
            </div>
          </div>
        </div>
      </div>

      <div class="concept__policy1">
        <?php
        $point = get_field('rnv_point')[1];
        ?>
        <div class="concept__policy1">
          <div class="design-left-image">
            <img src="<?php echo esc_url($point['img']); ?>">
          </div>
          <div class="concept__policy1-content">

            <div class="design__paint1_content_ttl">
              <img src="<?php echo esc_url(IMG_URL . '/point2.webp'); ?>">
            </div>
            <div>
              <p class="c-title--orangeLine u-mb10 concept__policy1-mainttl"><span class="marker">
                  <span class="u-orange">安心</span>の<span class="u-orange">施工監督体制</span></span>
              </p>
            </div>
            <div class="concept__policy2-text u-mb25">
              <?php echo $point['txt']; ?>
            </div>
          </div>
        </div>
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

  <section class="p-contact l-content">
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

  <?php include get_template_directory() . '/common.php'   ?>


</main>
<?php get_footer(); ?>