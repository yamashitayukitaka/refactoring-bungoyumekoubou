<?php
if (!defined('ABSPATH')) exit;
get_header();
?>
<main>
  <div class="c-pageMv u-mb100">
    <div class="c-pageMv__ttl__wrap">
      <h2 class="c-pageMv__ttl">
        安心の保証制度
      </h2>
      <p class="c-pageMv__subTtl">
        GUARANTEE
      </p>
    </div>
    <?php $mv = get_field('mv-support-img'); ?>
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
        安心の保証制度
      </h3>
      <div>
        <div>
          <p class="c-title--orangeLine "><span class="marker">
              あなたの<span class="u-orange">大切</span>な<span class="u-orange">おうち</span>を<br>
              ずっと<span class="u-orange">快適</span>に、ずっと<span class="u-orange">安心</span>に
          </p>
        </div>
      </div>
    </div>
  </section>

  <!-- メニュー -->
  <section class="commitment__top_content ">
    <div class="support__top_title">
      <span class="font_orange">豊後夢工房</span>の安心保証メニュー
    </div>
    <div class="quality__top_list noto-sans-jp">
      <a href="#support1" class="go_to_link">
        <div class="support__top_button">
          <div class="support__top_button_number">
            <img src="<?php echo esc_url(IMG_URL . '/number/number1.webp'); ?>" alt="">
          </div>
          <div class="">
            <p class="support__top_button_text">
              <span class="font_orange"></span>安心の長期住宅保証
            </p>
          </div>
        </div>
      </a>
      <a href="#support2" class="go_to_link">
        <div class="support__top_button">
          <div class="support__top_button_number">
            <img src="<?php echo esc_url(IMG_URL . '/number/number2.webp'); ?>" alt="">
          </div>
          <div class="">
            <p class="support__top_button_text">
              地盤保証システム
            </p>
          </div>
        </div>
      </a>
      <a href="#support3" class="go_to_link">
        <div class="support__top_button">
          <div class="support__top_button_number">
            <img src="<?php echo esc_url(IMG_URL . '/number/number3.webp'); ?>" alt="">
          </div>
          <div class="">
            <p class="support__top_button_text">
              設備機器保証
            </p>
          </div>
        </div>
      </a>
      <a href="#support4" class="go_to_link">
        <div class="support__top_button">
          <div class="support__top_button_number">
            <img src="<?php echo esc_url(IMG_URL . '/number/number4.webp'); ?>" alt="">
          </div>
          <div class="">
            <p class="support__top_button_text">
              定期巡回訪問
            </p>
          </div>
        </div>
      </a>
    </div>
  </section>

  <section class="l_content_middle_80 support1 noto-sans-jp" id="support1">
    <?php
    $guarantee = get_field('support_guarantee')[0];
    $title = $guarantee['title'];
    $txt = $guarantee['txt'];
    $img = $guarantee['img'];
    ?>
    <div class="support__content">
      <div class="support__content_text">
        <div class="support__content_number">
          <img src="<?php echo esc_url(IMG_URL . '/number/number1.webp'); ?>" alt="">
        </div>
        <p class="c_title_orangeLine_t"><span class="marker">
            <?php echo $title ?></span>
        </p>
        <p class="common_meta_content">
          建物保証<span>20年</span>、最長<span>60年</span>まで延長可能
        </p>
        <div class="support__content_img sp_tab">
          <img src="<?php echo esc_url($img); ?>">
        </div>
        <div class="commitment__security1_content_maintext">
          <?php echo $txt; ?>
        </div>
      </div>
      <div class="support__content_img pc">
        <img src="<?php echo esc_url($img); ?>">
      </div>
    </div>
    <div class="support__content_otherimg">
      <img src="<?php echo esc_url(IMG_URL . '/maintenance/maintenance_7.webp'); ?>">
    </div>
    <!-- <p class="support__text_center">さらに長期保証に加え、水廻りのトラブルや窓ガラスの破損などの10年間の設備機器保証付き</p> -->
    <a href="#support3">
      <p class="support__detail_btn2">
        くわしくは
        <span>こちら</span>
      </p>
    </a>
  </section>
  <section class="l_content_middle_80 support1 noto-sans-jp" id="support2">
    <?php
    $guarantee = get_field('support_guarantee')[1];
    $title = $guarantee['title'];
    $txt = $guarantee['txt'];
    $img = $guarantee['img'];
    ?>
    <div class="support__content">
      <div class="support__content_text">
        <div class="support__content_number">
          <img src="<?php echo esc_url(IMG_URL . '/number/number2.webp'); ?>" alt="">
        </div>
        <p class="c_title_orangeLine_t">
          <span class="marker">
            <?php echo $title ?></span>
        </p>
        <div class="support__content_img sp_tab">
          <img src="<?php echo esc_url($img); ?>">
        </div>
        <div class="commitment__security1_content_maintext">
          <?php echo $txt; ?>
        </div>
      </div>
      <div class="support__content_img pc">
        <img src="<?php echo esc_url($img); ?>">
      </div>

    </div>
  </section>

  <section class=" support1 noto-sans-jp" id="support3">
    <div class="l_content_middle_80">
      <?php
      $guarantee = get_field('support_guarantee')[2];
      $title = $guarantee['title'];
      $txt = $guarantee['txt'];
      $img = $guarantee['img'];
      ?>
      <div class="support__content">
        <div class="support__content_text">
          <div class="support__content_number">
            <img src="<?php echo esc_url(IMG_URL . '/number/number3.webp'); ?>" alt="">
          </div>
          <p class="c_title_orangeLine_t">
            <span class="marker">
              <?php echo $title ?></span>
          </p>
          <div class="commitment__security1_content_maintext">
            <?php echo wp_kses_post($txt); ?>
          </div>
          <div class="support__content_img sp_tab">
            <img src="<?php echo esc_url($img); ?>">
          </div>
          <div class="support__threesecurity">
            <div class="support__threesecurity_ttl">
              <span>3つ</span>の安心ポイント
            </div>
            <div class="support__security_items">
              <img src="<?php echo esc_url(IMG_URL . '/after/jhs1.webp'); ?>">
              <img src="<?php echo esc_url(IMG_URL . '/after/jhs2.webp'); ?>">
              <img src="<?php echo esc_url(IMG_URL . '/after/jhs3.webp'); ?>">
            </div>
          </div>
        </div>
        <div class="support__content_img pc">
          <img src="<?php echo esc_url($img); ?>">
        </div>
      </div>
      <p class="support3__text">
        通常1～2年程度の保証しかない、トイレやキッチンなどの住宅設備機器も延長して10年間に渡り保証します。
        <br>
        水廻りのトラブルなど、緊急を要する事態に対応する24時間コールセンター対応や、修理代、代替費用が何度でも無料などの各種サービスをご用意しました。
        <br>
        <br />※人災や天災に起因する製品の故障や消耗品の交換が原因の故障、故障によって生じた経済的損害・二次災害は補償対象外となります。
      </p>
    </div>

    <div class="support__conver_devices">対象保障機器</div>

    <div class="service_model_wrap">
      <p class="support__cover_text">
        対象内であれば、<span>無償</span>で何回でも<br class="sp">保証限度額なしで修理可能
      </p>
      <div class="support__dreams">
        <div class="support__each_dream">
          <div class="support__dream_img">
            <img src="<?php echo esc_url(IMG_URL . '/dream_1.webp'); ?>">
          </div>
          <div class="support__dream_content">
            <div class="support__dream_ttl">システムキッチン</div>
            <p>・キッチン本体</p>
            <p>・コンロ（ガス・IH）</p>
            <p>・レンジフード</p>
            <p>・水栓</p>
            <p>・食洗機</p>
          </div>
        </div>
        <div class="support__each_dream">
          <div class="support__dream_img">
            <img src="<?php echo esc_url(IMG_URL . '/dream_2.webp'); ?>">
          </div>
          <div class="support__dream_content">
            <div class="support__dream_ttl">システムバス</div>
            <p>・本体（排水ボタン）</p>
            <p>・浴室換気扇</p>
            <p>・水栓</p>
            <p>・表示リモコン</p>
          </div>
        </div>
        <div class="support__each_dream">
          <div class="support__dream_img">
            <img src="<?php echo esc_url(IMG_URL . '/dream_3.webp'); ?>">
          </div>
          <div class="support__dream_content">
            <div class="support__dream_ttl">温水洗浄トイレ</div>
            <p>・温水洗浄機能付き便座</p>
            <p>・リモコン</p>
          </div>
        </div>
        <div class="support__each_dream">
          <div class="support__dream_img">
            <img src="<?php echo esc_url(IMG_URL . '/dream_4.webp'); ?>">
          </div>
          <div class="support__dream_content">
            <div class="support__dream_ttl">給湯器</div>
            <p>・ガス・石油</p>
            <p>・レンジフード</p>
            <p>・本体／操作パネル</p>
          </div>
        </div>
        <div class="support__each_dream">
          <div class="support__dream_img">
            <img src="<?php echo esc_url(IMG_URL . '/dream_5.webp'); ?>">
          </div>
          <div class="support__dream_content">
            <div class="support__dream_ttl">洗面台</div>
            <p>・本体（照明・くもり止め</p>
            <p>　ヒーター・排水ボタン）</p>
            <p>・水栓</p>
          </div>
        </div>
      </div>
      <!-- <div class="detail__btn">
        <a href="#">
          <p class="support__detail_btn">
            くわしくは
            <span>こちら</span>
          </p>
        </a>
      </div> -->
    </div>
  </section>

  <section class="l_content_middle_80 support4 noto-sans-jp" id="support4">
    <?php
    $guarantee = get_field('support_guarantee')[3];
    $title = $guarantee['title'];
    $txt = $guarantee['txt'];
    $img = $guarantee['img'];
    ?>
    <div class="support__content">
      <div class="support__content_text">
        <div class="support__content_number">
          <img src="<?php echo esc_url(IMG_URL . '/number/number4.webp'); ?>" alt="">
        </div>
        <p class="c_title_orangeLine_t">
          <span class="marker">
            <?php echo $title ?></span>
        </p>
        <div class="support__content_img sp_tab">
          <img src="<?php echo esc_url($img); ?>">
        </div>
        <!-- <p class="common_meta_content">
          定期的な点検が<br />永い安心と快適をつくる
        </p> -->
        <div class="commitment__security1_content_maintext">
          <?php echo $txt; ?>
        </div>
        <div class="content_center top_p_3">
          <a class="link__btn" href="<?php echo esc_url(home_url('/maintenance/')); ?>">アフターメンテナンスへ</a>
        </div>
      </div>
      <div class="support__content_img pc">
        <img src="<?php echo esc_url($img); ?>">
      </div>
    </div>
    <!-- <div class="l_content_middle_60 top_p_5 bottom_p_5">
      <p class="description_inspection_txt ">プロによる定期点検を20年間に渡り保証します
      </p>
      <div class="inspection-description--img ">
        <img class="" src=" <?php echo esc_url(IMG_URL . '/maintenance/maintenance_5.webp'); ?>">
      </div>
      <div class="inspection_description_img2 bottom_p_5">
        <img src=" <?php echo esc_url(IMG_URL . '/maintenance/maintenance_6.webp'); ?>">
      </div>
    </div> -->
  </section>

  <?php include get_template_directory() . '/common.php'   ?>

</main>
<?php get_footer(); ?>