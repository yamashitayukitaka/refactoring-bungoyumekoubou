<?php
// Template Name: after-support
if (!defined('ABSPATH')) exit;
get_header();
?>
<main class="p-afterSupport">
  <div class="c-pageMv u-mb100">
    <div class="c-pageMv__heading">
      <h2 class="c-pageMv__heading__title">
        安心の保証制度
      </h2>
      <p class="c-pageMv__heading__subTitle">
        GUARANTEE
      </p>
    </div>
    <?php $mv = get_field('mv-support-img'); ?>
    <?php if ($mv) : ?>
      <figure class="c-pageMv__visual" style="background-image: url('<?php echo esc_url($mv); ?>');"></figure>
    <?php endif; ?>
  </div>

  <!-- トップタイトル概要 -->
  <section class="c-title__decoration">
    <div class="c-title__decoration__head">
      <h3 class="c-title--sectionLine u-mb40">安心の保証制度</h3>
      <p class="c-title--orangeLine">
        <span class="marker">
          あなたの<span class="u-orange">大切</span>な<span class="u-orange">おうち</span>を<br>
          ずっと<span class="u-orange">快適</span>に、ずっと<span class="u-orange">安心</span>に
        </span>
      </p>
    </div>
  </section>

  <!-- メニュー -->
  <nav class="p-afterSupport__nav noto-sans-jp" aria-label="安心の保証メニュー">
    <div class="p-afterSupport__nav__heading">
      <span class="u-textOrange">豊後夢工房</span>の安心保証メニュー
    </div>
    <ul class="p-afterSupport__nav__list">
      <li class="p-afterSupport__nav__item">
        <a href="#support1" class="p-afterSupport__nav__link">
          <div class="p-afterSupport__nav__card">
            <div class="p-afterSupport__nav__number">
              <img class="p-afterSupport__nav__numberImg" src="<?php echo esc_url(IMG_URL . '/number/number1.webp'); ?>" alt="">
            </div>
            <div>
              <p class="p-afterSupport__nav__label">安心の長期住宅保証</p>
            </div>
          </div>
        </a>
      </li>
      <li class="p-afterSupport__nav__item">
        <a href="#support2" class="p-afterSupport__nav__link">
          <div class="p-afterSupport__nav__card">
            <div class="p-afterSupport__nav__number">
              <img class="p-afterSupport__nav__numberImg" src="<?php echo esc_url(IMG_URL . '/number/number2.webp'); ?>" alt="">
            </div>
            <div>
              <p class="p-afterSupport__nav__label">地盤保証システム</p>
            </div>
          </div>
        </a>
      </li>
      <li class="p-afterSupport__nav__item">
        <a href="#support3" class="p-afterSupport__nav__link">
          <div class="p-afterSupport__nav__card">
            <div class="p-afterSupport__nav__number">
              <img class="p-afterSupport__nav__numberImg" src="<?php echo esc_url(IMG_URL . '/number/number3.webp'); ?>" alt="">
            </div>
            <div>
              <p class="p-afterSupport__nav__label">設備機器保証</p>
            </div>
          </div>
        </a>
      </li>
      <li class="p-afterSupport__nav__item">
        <a href="#support4" class="p-afterSupport__nav__link">
          <div class="p-afterSupport__nav__card">
            <div class="p-afterSupport__nav__number">
              <img class="p-afterSupport__nav__numberImg" src="<?php echo esc_url(IMG_URL . '/number/number4.webp'); ?>" alt="">
            </div>
            <div>
              <p class="p-afterSupport__nav__label">定期巡回訪問</p>
            </div>
          </div>
        </a>
      </li>
    </ul>
  </nav>

  <section class="l_content_middle_80 support1 noto-sans-jp" id="support1">
    <div class="support__content">
      <div class="support__content_text">
        <div class="support__content_number">
          <img src="<?php echo esc_url(IMG_URL . '/number/number1.webp'); ?>" alt="">
        </div>
        <p class="c_title_orangeLine_t"><span class="marker">安心の長期住宅保証</span></p>
        <p class="common_meta_content">
          建物保証<span>20年</span>、最長<span>60年</span>まで延長可能
        </p>
        <div class="support__content_img sp_tab">
          <img src="<?php echo esc_url(IMG_URL . '/after/guarantee-1.png'); ?>" alt="">
        </div>
        <div class="commitment__security1_content_maintext">
          <?php echo wp_kses_post('家の構造的な部分をプロによる定期点検で20年、最長60年まで保証します。<br>大きな不安、急な出費に迅速に対応できる豊後夢工房の長期住宅保証は安心、安全、豊かな暮らしをサポートし続けます。'); ?>
        </div>
      </div>
      <div class="support__content_img pc">
        <img src="<?php echo esc_url(IMG_URL . '/after/guarantee-1.png'); ?>" alt="">
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
    <div class="support__content">
      <div class="support__content_text">
        <div class="support__content_number">
          <img src="<?php echo esc_url(IMG_URL . '/number/number2.webp'); ?>" alt="">
        </div>
        <p class="c_title_orangeLine_t">
          <span class="marker">地盤保証システム</span>
        </p>
        <div class="support__content_img sp_tab">
          <img src="<?php echo esc_url(IMG_URL . '/after/guarantee-2.jpg'); ?>" alt="">
        </div>
        <div class="commitment__security1_content_maintext">
          <?php echo wp_kses_post('豊後夢工房では、指定専門機関による地盤検査を実施し、問題があれば地盤改良工事を行うなど対策を万全にしていますが、万が一、建物が不同沈下などにより損壊した場合、豊後夢工房が建物と地盤の修復工事をお約束する制度です。保証期間はお引き渡しから20年間保証が付きます。'); ?>
        </div>
      </div>
      <div class="support__content_img pc">
        <img src="<?php echo esc_url(IMG_URL . '/after/guarantee-2.jpg'); ?>" alt="">
      </div>
    </div>
  </section>

  <section class=" support1 noto-sans-jp" id="support3">
    <div class="l_content_middle_80">
      <div class="support__content">
        <div class="support__content_text">
          <div class="support__content_number">
            <img src="<?php echo esc_url(IMG_URL . '/number/number3.webp'); ?>" alt="">
          </div>
          <p class="c_title_orangeLine_t">
            <span class="marker">設備機器保証</span>
          </p>
          <p class="common_meta_content">
            10年の設備機器保証付き。暮らしに欠かせないものだからこそ<br>急なトラブルにも迅速に対応します。
          </p>
          <div class="support__content_img sp_tab">
            <img src="<?php echo esc_url(IMG_URL . '/after/guarantee-3.png'); ?>" alt="">
          </div>
          <div class="support__threesecurity">
            <div class="support__threesecurity_ttl">
              <span>3つ</span>の安心ポイント
            </div>
            <div class="support__security_items">
              <img src="<?php echo esc_url(IMG_URL . '/after/jhs1.webp'); ?>" alt="">
              <img src="<?php echo esc_url(IMG_URL . '/after/jhs2.webp'); ?>" alt="">
              <img src="<?php echo esc_url(IMG_URL . '/after/jhs3.webp'); ?>" alt="">
            </div>
          </div>
        </div>
        <div class="support__content_img pc">
          <img src="<?php echo esc_url(IMG_URL . '/after/guarantee-3.png'); ?>" alt="">
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
            <img src="<?php echo esc_url(IMG_URL . '/after/dream_1.webp'); ?>">
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
            <img src="<?php echo esc_url(IMG_URL . '/after/dream_2.webp'); ?>">
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
            <img src="<?php echo esc_url(IMG_URL . '/after/dream_3.webp'); ?>">
          </div>
          <div class="support__dream_content">
            <div class="support__dream_ttl">温水洗浄トイレ</div>
            <p>・温水洗浄機能付き便座</p>
            <p>・リモコン</p>
          </div>
        </div>
        <div class="support__each_dream">
          <div class="support__dream_img">
            <img src="<?php echo esc_url(IMG_URL . '/after/dream_4.webp'); ?>">
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
            <img src="<?php echo esc_url(IMG_URL . '/after/dream_5.webp'); ?>">
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
    <div class="support__content">
      <div class="support__content_text">
        <div class="support__content_number">
          <img src="<?php echo esc_url(IMG_URL . '/number/number4.webp'); ?>" alt="">
        </div>
        <p class="c_title_orangeLine_t">
          <span class="marker">定期点検</span>
        </p>
        <div class="support__content_img sp_tab">
          <img src="<?php echo esc_url(IMG_URL . '/after/guarantee-4.jpg'); ?>" alt="">
        </div>
        <div class="commitment__security1_content_maintext">
          <?php echo wp_kses_post('ご入居されてからのお客様の暮らしをサポートしてくために、ご入居から3ヶ月・1年・2年・5年・10年・20年のタイミングで定期点検に訪問させていただきます。専門スタッフにより、外壁、基礎、内装、床などを確認させていただき、不具合点がないか聞きとりの上、点検を行い、必要なメンテナンスについてのアドバイスをさせていただきます。'); ?>
        </div>
        <div class="content_center top_p_3">
          <a class="link__btn" href="<?php echo esc_url(home_url('/maintenance/')); ?>">アフターメンテナンスへ</a>
        </div>
      </div>
      <div class="support__content_img pc">
        <img src="<?php echo esc_url(IMG_URL . '/after/guarantee-4.jpg'); ?>" alt="">
      </div>
    </div>
  </section>

  <?php get_template_part('template-parts/common'); ?>

</main>
<?php get_footer(); ?>