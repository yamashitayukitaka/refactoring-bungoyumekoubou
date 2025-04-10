<?php
if (!defined('ABSPATH')) exit;
get_header();
?>
<main class="">
  <div class="c-pageMv u-mb100">
    <div class="c-pageMv__ttl__wrap">
      <h2 class="c-pageMv__ttl u-mb20">
        わたしたちの思い
      </h2>
      <p class="c-pageMv__subTtl_b c-conceptpage">
        <span class="font_orange">夢</span>をカタチに、<br>
        暮らしをもっと<span class="font_orange">豊か</span>に
      </p>
      <p class="c-conceptPageDesc noto-sans-jp">
        Dream in your heart,<br>
        freedom in your future
      </p>
      <!-- <p class="c-pageMv__subTtl">
        CONCEPT
      </p> -->
    </div>
    <?php $mv = get_field('mv-concept-img'); ?>
    <figure class="c-pageMv__img__wrap" style="background-image: url('<?php echo $mv; ?>');"></figure>
  </div>

  <section class="concept__top-description">
    <div class="concept__top-des-container">
      <div class="concept__top-des-image">
        <div class="concept__top-des-image1">
          <img src="<?php echo IMG_URL . '/top/top-des1.webp' ?>" alt="">
        </div>
        <div class="concept__top-des-image2">
          <img src="<?php echo IMG_URL . '/family_img.webp' ?>" alt="">
        </div>
      </div>
      <div class="concept__top-des-text roboto">
        <br>
        <div class="concept__top-des-text1">
          「豊後夢工房(ぶんごゆめこうぼう)」の名前には、大分(豊後)に暮らす皆さまの夢を形にするという強い思いが込められています。「工房」とは、職人が心を込めて作品を作り上げる場所。
          私たちはその名の通り、一人ひとりのお客様の個性を大切にし、夢を叶える住まいを丁寧に作り上げることを使命としています。

          <!-- 私たちはそれぞれのお客さまが持つ個性を大切に、住まいづくりのお手伝いをしています。 -->

          <br>
          <!-- 豊後の地に、夢をお届けする工房。それが私たち<span class="font_orange">「豊後夢工房」 </span>です。 -->
        </div>
        <div class="concept__top-des-text2">
          豊後夢工房は、住まいを通じて個性を表現できる場所です。<br>
          暮らしの理想や夢をお持ちの方々も、具体的なイメージがまだ湧いていなくても、いつも気軽に相談できるパートナーでありたいと考えています。
        </div>
        <div class="concept__top-des-text3">
          住まいづくりは、とても自由です。家が欲しい、そのひとつの入口からあなたに合った「暮らし」を一緒に探したい。まずは、暮らしのイメージを一緒に語り合いませんか。
        </div>
        あなたの住まいを、<span class="font_orange">楽しく</span>、もっと<span class="font_orange">自由</span>に。
      </div>
    </div>
  </section>

  <section class="concept__policy u-mb100">

    <div class="c-title__wrap--sectionLin concept__policy-title">
      <h3 class="c-title--sectionLine">
        POLICY
      </h3>
      <div class="span_bold1">
        <p class="c-title--orangeLine u-mb50"><span class="marker">
            <span class="u-orange">豊後夢工房</span>が大切にしていること</span>
        </p>
      </div>
    </div>
    <?php
    $policy_one_img = get_field('concept-policy_one')['policy_one_img'];
    $policy_one_txt = get_field('concept-policy_one')['policy_one_txt'];
    $policy_two_img = get_field('concept-policy_two')['policy_two_img'];
    $policy_two_txt = get_field('concept-policy_two')['policy_two_txt'];
    $policy_three_img = get_field('concept-policy_three')['policy_three_img'];
    $policy_three_txt = get_field('concept-policy_three')['policy_three_txt'];
    ?>
    <div class="concept__policy1">
      <div class="concept__policy1-image">
        <img src="<?php echo esc_url($policy_one_img); ?>" alt="">
      </div>
      <div class="concept__policy1-content">
        <h3 class="c-title--sectionLine concept__policy1-subttl">
          POLICY 01
        </h3>
        <div>
          <p class="c-title--orangeLine u-mb10 concept__policy1-mainttl"><span class="marker">
              <span class="u-orange">自由</span>に<span class="u-orange">デザイン</span>する<br>
              という楽しさ</span>
          </p>
        </div>
        <div class="concept__policy1-text u-mb25">
          <?php echo $policy_one_txt; ?>
        </div>
        <div class="content_center">
          <a class="link__btn" href="<?php echo esc_url(home_url('/design/')); ?>">デザインのこだわりを見る</a>
        </div>
      </div>
    </div>
    <div class="concept__policy1">
      <div class="concept__policy2-image">
        <img src="<?php echo esc_url($policy_two_img); ?>" alt="">
      </div>
      <div class="concept__policy2-content">
        <h3 class="c-title--sectionLine concept__policy1-subttl">
          POLICY 02
        </h3>
        <div>
          <p class="c-title--orangeLine concept__policy1-mainttl">
            <span class="marker">
              <span class="u-orange">コスト</span>を抑えた<br>
              <span class="u-orange">スマート</span>な家づくり</span>
          </p>
        </div>
        <div class="concept__policy2-text u-mb25">
          <?php echo $policy_two_txt; ?>
        </div>
        <div class="content_center">
          <a class="link__btn" href="<?php echo esc_url(home_url('/cost/')); ?>">コストへのこだわりを見る</a>
        </div>
      </div>
    </div>

    <div class="concept__policy1 sp_tab_t_10">
      <div class="concept__policy1-image ">
        <img src="<?php echo esc_url($policy_three_img); ?>" alt="">
      </div>
      <div class="concept__policy1-content">
        <h3 class="c-title--sectionLine concept__policy1-subttl">
          POLICY 03
        </h3>
        <div>
          <p class="c-title--orangeLine u-mb10 concept__policy1-mainttl"><span class="marker">
              <span class="u-orange">心地よく暮らせる</span><br>
              ということ</span>
          </p>
        </div>
        <div class="concept__policy1-text u-mb25">
          <?php echo $policy_three_txt; ?>
        </div>
        <div class="content_center">
          <a class="link__btn" href="<?php echo esc_url(home_url('/quality/')); ?>">性能のこだわりを見る</a>
        </div>
      </div>
    </div>

  </section>

  <section class="service_model_wrap service_model_wrap_sp">
    <div class="support-title">
      <figure class="system-degisn-left-img">
        <img src=" <?php echo esc_url(IMG_URL . '/top/system-left.webp'); ?>" alt="安心の保証制度">
      </figure>
      <div>
        <div class="c-title__wrap--sectionLine">
          <h3 class="c-title--sectionLine">
            SYSTEM & DESIGN
          </h3>
          <div class="u-mb40">
            <p class="c-title--orangeLine span_bold1"><span class="marker">
                豊後夢工房の<span class="u-orange">組織力</span>と<span class="u-orange">デザイン力</span></span>
            </p>
          </div>
        </div>
        <p class="u-mb50 flow-desc txt_18">
          土地探しから家づくりの相談、メンテナンスまで、<br>
          <strong class="font_orange">ワンストップで</strong>住まいづくりをおまかせできます
        </p>
      </div>
      <figure class="illustration_1">
        <img src="<?php echo esc_url(IMG_URL . '/yume_img3.webp'); ?>" alt="安心の保証制度">
      </figure>
    </div>
    <div class="concept__sysign_sixoptions u-mb20">
      <div class="concept__sysign_options_items">

        <div class="concept__sysign_item">
          <p>LAND</p>
          <span>土地</span>
        </div>
        <div class="concept__sysign_item">
          <p>DESIGN</p>
          <span>設計</span>
        </div>
      </div>
      <div class="concept__sysign_options_items">

        <div class="concept__sysign_item">
          <p>PLANNER</p>
          <span>営業</span>
        </div>
        <div class="concept__cross pc_tab"></div>
        <div class="concept__sysign_item">
          <p>COORDINATOR</p>
          <span class="pc_tab">インテリアコーディネーター</span>
          <span class="sp">コーディネーター</span>
        </div>
      </div>
      <div class="concept__sysign_options_items">

        <div class="concept__sysign_item">
          <p>SUPERVISOR</p>
          <span>施工</span>
        </div>
        <div class="concept__sysign_item">
          <p>MAINTENANCE</p>
          <span>メンテナンス</span>
        </div>
      </div>
    </div>
    <div class="concept__team u-mb100">
      <div class="u-mb20">
        <p class="c-title--orangeLine">
          <span class="marker">
            <span class="u-orange">Team 夢工房</span>の<span class="u-orange">デザイン力</span></span>
        </p>
      </div>
      <p class="concept__system_team_content u-mb20">
        <?php echo get_field('concept-team_txt'); ?>
      </p>
      <div class="go_list_wrapper">
        <a class="form__btn" href="<?php echo esc_url(home_url('/staff/')); ?>">ゆめづくりスタッフ一覧へ</a>
      </div>
    </div>
  </section>

  <?php include get_template_directory() . '/common.php'   ?>

</main>
<?php get_footer(); ?>