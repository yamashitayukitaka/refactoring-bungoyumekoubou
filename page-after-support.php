<?php
/**
 * Template Name: after-support
 *
 * @package Wazeka
 */

if ( ! defined( 'ABSPATH' ) ) {
  exit;
}
get_header();
?>
<main class="p-afterSupport">
  <div class="c-pageMv u-mb100">
    <div class="c-pageMv__heading">
      <h1 class="c-pageMv__heading__title">
        安心の保証制度
      </h1>
      <p class="c-pageMv__heading__subTitle">
        GUARANTEE
      </p>
    </div>
    <figure class="c-pageMv__visual" style="background-image: url('<?php echo esc_url( get_template_directory_uri() . '/dist/img/after-support/mv01.webp' ); ?>');"></figure>
  </div>

  <section class="c-title__decoration">
    <div class="c-title__decoration__head">
      <h2 class="c-title--sectionLine u-mb40">安心の保証制度</h2>
      <p class="c-title--orangeLine">
        <span class="marker">
          あなたの<span class="u-orange">大切</span>な<span class="u-orange">おうち</span>を<br>
          ずっと<span class="u-orange">快適</span>に、ずっと<span class="u-orange">安心</span>に
        </span>
      </p>
    </div>
  </section>

  <nav class="p-afterSupport__nav" aria-label="安心の保証メニュー">
    <div class="p-afterSupport__nav__heading">
      <span class="u-textOrange">豊後夢工房</span>の安心保証メニュー
    </div>
    <?php
    $after_support_nav_items = [
      [
        'section_id' => 'support1',
        'number'     => 1,
        'label'      => '安心の長期住宅保証',
      ],
      [
        'section_id' => 'support2',
        'number'     => 2,
        'label'      => '地盤保証システム',
      ],
      [
        'section_id' => 'support3',
        'number'     => 3,
        'label'      => '設備機器保証',
      ],
      [
        'section_id' => 'support4',
        'number'     => 4,
        'label'      => '定期点検',
      ],
    ];
    ?>
    <ul class="p-afterSupport__nav__list">
      <?php foreach ( $after_support_nav_items as $nav_item ) : ?>
        <li class="p-afterSupport__nav__item">
          <a href="<?php echo esc_url( '#' . $nav_item['section_id'] ); ?>" class="p-afterSupport__nav__link">
            <div class="p-afterSupport__nav__card">
              <div class="p-afterSupport__nav__number">
                <img loading="lazy"
                  class="p-afterSupport__nav__numberImg"
                  src="<?php echo esc_url( get_template_directory_uri() . '/dist/img/number/number' . $nav_item['number'] . '.webp' ); ?>"
                  alt=""
                >
              </div>
              <div>
                <p class="p-afterSupport__nav__label"><?php echo esc_html( $nav_item['label'] ); ?></p>
              </div>
            </div>
          </a>
        </li>
      <?php endforeach; ?>
    </ul>
  </nav>

  <section class="p-afterSupport__section p-afterSupport__section--bordered" id="support1">
    <div class="l-content--inner">
      <div class="p-afterSupport__overview">
        <div class="p-afterSupport__overviewBody">
          <div class="p-afterSupport__overviewNum">
            <img loading="lazy" width="106" height="81" src="<?php echo esc_url( get_template_directory_uri() . '/dist/img/number/number1.webp' ); ?>" alt="">
          </div>
          <h3 class="p-afterSupport__sectionTitle"><span class="marker">安心の長期住宅保証</span></h3>
          <p class="p-afterSupport__overviewLead">
            建物保証<span>20年</span>、最長<span>60年</span>まで延長可能
          </p>
          <div class="p-afterSupport__overviewMedia u-none__pc--tab">
            <img loading="lazy" width="1600" height="1000" src="<?php echo esc_url( get_template_directory_uri() . '/dist/img/after/guarantee-1.png' ); ?>" alt="分譲住宅の外観のイメージ（安心の長期住宅保証）">
          </div>
          <div class="p-afterSupport__overviewText">
            家の構造的な部分をプロによる定期点検で20年、最長60年まで保証します。
            大きな不安、急な出費に迅速に対応できる豊後夢工房の長期住宅保証は安心、安全、豊かな暮らしをサポートし続けます。
          </div>
        </div>
        <div class="p-afterSupport__overviewMedia u-none__mobile--tab">
          <img loading="lazy" width="1600" height="1000" src="<?php echo esc_url( get_template_directory_uri() . '/dist/img/after/guarantee-1.png' ); ?>" alt="分譲住宅の外観のイメージ（安心の長期住宅保証）">
        </div>
      </div>
      <figure class="p-afterSupport__wideFigure">
        <img loading="lazy" width="1600" height="1000" src="<?php echo esc_url( get_template_directory_uri() . '/dist/img/maintenance/maintenance_7.webp' ); ?>" alt="保証と保守期間のイメージ">
      </figure>
      <a class="p-afterSupport__more" href="#support3">くわしくは <span>こちら</span></a>
    </div>
  </section>

  <section class="p-afterSupport__section p-afterSupport__section--bordered" id="support2">
    <div class="l-content--inner">
      <div class="p-afterSupport__overview">
        <div class="p-afterSupport__overviewBody">
          <div class="p-afterSupport__overviewNum">
            <img loading="lazy" width="118" height="81" src="<?php echo esc_url( get_template_directory_uri() . '/dist/img/number/number2.webp' ); ?>" alt="">
          </div>
          <h3 class="p-afterSupport__sectionTitle">
            <span class="marker">地盤保証システム</span>
          </h3>
          <div class="p-afterSupport__overviewMedia u-none__pc--tab">
            <img loading="lazy" width="1920" height="1440" src="<?php echo esc_url( get_template_directory_uri() . '/dist/img/after/guarantee-2.jpg' ); ?>" alt="地盤改良工事のイメージ（地盤保証システム）">
          </div>
          <div class="p-afterSupport__overviewText">
            豊後夢工房では、指定専門機関による地盤検査を実施し、問題があれば地盤改良工事を行うなど対策を万全にしていますが、万が一、建物が不同沈下などにより損壊した場合、豊後夢工房が建物と地盤の修復工事をお約束する制度です。保証期間はお引き渡しから20年間保証が付きます。
          </div>
        </div>
        <div class="p-afterSupport__overviewMedia u-none__mobile--tab">
          <img loading="lazy" width="1920" height="1440" src="<?php echo esc_url( get_template_directory_uri() . '/dist/img/after/guarantee-2.jpg' ); ?>" alt="地盤改良工事のイメージ（地盤保証システム）">
        </div>
      </div>
    </div>
  </section>

  <section class="p-afterSupport__section p-afterSupport__section--bordered" id="support3">
    <div class="l-content--inner">
      <div class="p-afterSupport__overview">
        <div class="p-afterSupport__overviewBody">
          <div class="p-afterSupport__overviewNum">
            <img loading="lazy" width="118" height="81" src="<?php echo esc_url( get_template_directory_uri() . '/dist/img/number/number3.webp' ); ?>" alt="">
          </div>
          <h3 class="p-afterSupport__sectionTitle">
            <span class="marker">設備機器保証</span>
          </h3>
          <p class="p-afterSupport__overviewText">
            10年の設備機器保証付き。暮らしに欠かせないものだからこそ急なトラブルにも迅速に対応します。
          </p>
          <div class="p-afterSupport__overviewMedia u-none__pc--tab">
            <img loading="lazy" width="1600" height="1000" src="<?php echo esc_url( get_template_directory_uri() . '/dist/img/after/guarantee-3.png' ); ?>" alt="キッチン設備のイメージ（設備機器保証）">
          </div>
          <div class="p-afterSupport__points">
            <p class="p-afterSupport__pointsHeading">
              <span>3つ</span>の安心ポイント
            </p>
            <ul class="p-afterSupport__pointsList">
              <li class="p-afterSupport__pointsItem">
                <img loading="lazy" width="743" height="311" src="<?php echo esc_url( get_template_directory_uri() . '/dist/img/after/jhs1.webp' ); ?>" alt="10年間の設備機器保証のイメージ">
              </li>
              <li class="p-afterSupport__pointsItem">
                <img loading="lazy" width="743" height="311" src="<?php echo esc_url( get_template_directory_uri() . '/dist/img/after/jhs2.webp' ); ?>" alt="24時間コールセンター対応のイメージ">
              </li>
              <li class="p-afterSupport__pointsItem">
                <img loading="lazy" width="743" height="311" src="<?php echo esc_url( get_template_directory_uri() . '/dist/img/after/jhs3.webp' ); ?>" alt="修理代・代替費用が何度でも無料のイメージ">
              </li>
            </ul>
          </div>
        </div>
        <div class="p-afterSupport__overviewMedia u-none__mobile--tab">
          <img loading="lazy" width="1600" height="1000" src="<?php echo esc_url( get_template_directory_uri() . '/dist/img/after/guarantee-3.png' ); ?>" alt="キッチン設備のイメージ（設備機器保証）">
        </div>
      </div>
      <p class="p-afterSupport__note">
        通常1～2年程度の保証しかない、トイレやキッチンなどの住宅設備機器も延長して10年間に渡り保証します。<br>
        水廻りのトラブルなど、緊急を要する事態に対応する24時間コールセンター対応や、修理代、代替費用が何度でも無料などの各種サービスをご用意しました。<br>
        <br>※人災や天災に起因する製品の故障や消耗品の交換が原因の故障、故障によって生じた経済的損害・二次災害は補償対象外となります。
      </p>
    </div>

    <h4 class="p-afterSupport__devicesHeading">対象保障機器</h4>

    <div class="p-afterSupport__devices">
      <p class="p-afterSupport__devicesLead">
        対象内であれば、<span>無償</span>で何回でも<br class="u-none__pc--sp">保証限度額なしで修理可能
      </p>
      <ul class="p-afterSupport__devicesList">
        <li class="p-afterSupport__devicesItem">
          <div class="p-afterSupport__devicesItemMedia">
            <img loading="lazy" width="102" height="99" src="<?php echo esc_url( get_template_directory_uri() . '/dist/img/after/dream_1.webp' ); ?>" alt="">
          </div>
          <div class="p-afterSupport__devicesItemBody">
            <p class="p-afterSupport__devicesItemTitle">システムキッチン</p>
            <ul class="p-afterSupport__devicesItemList">
              <li>キッチン本体</li>
              <li>コンロ（ガス・IH）</li>
              <li>レンジフード</li>
              <li>水栓</li>
              <li>食洗機</li>
            </ul>
          </div>
        </li>
        <li class="p-afterSupport__devicesItem">
          <div class="p-afterSupport__devicesItemMedia">
            <img loading="lazy" width="102" height="99" src="<?php echo esc_url( get_template_directory_uri() . '/dist/img/after/dream_2.webp' ); ?>" alt="">
          </div>
          <div class="p-afterSupport__devicesItemBody">
            <p class="p-afterSupport__devicesItemTitle">システムバス</p>
            <ul class="p-afterSupport__devicesItemList">
              <li>本体（排水ボタン）</li>
              <li>浴室換気扇</li>
              <li>水栓</li>
              <li>表示リモコン</li>
            </ul>
          </div>
        </li>
        <li class="p-afterSupport__devicesItem">
          <div class="p-afterSupport__devicesItemMedia">
            <img loading="lazy" width="102" height="99" src="<?php echo esc_url( get_template_directory_uri() . '/dist/img/after/dream_3.webp' ); ?>" alt="">
          </div>
          <div class="p-afterSupport__devicesItemBody">
            <p class="p-afterSupport__devicesItemTitle">温水洗浄トイレ</p>
            <ul class="p-afterSupport__devicesItemList">
              <li>温水洗浄機能付き便座</li>
              <li>リモコン</li>
            </ul>
          </div>
        </li>
        <li class="p-afterSupport__devicesItem">
          <div class="p-afterSupport__devicesItemMedia">
            <img loading="lazy" width="101" height="99" src="<?php echo esc_url( get_template_directory_uri() . '/dist/img/after/dream_4.webp' ); ?>" alt="">
          </div>
          <div class="p-afterSupport__devicesItemBody">
            <p class="p-afterSupport__devicesItemTitle">給湯器</p>
            <ul class="p-afterSupport__devicesItemList">
              <li>ガス・石油</li>
              <li>レンジフード</li>
              <li>本体／操作パネル</li>
            </ul>
          </div>
        </li>
        <li class="p-afterSupport__devicesItem">
          <div class="p-afterSupport__devicesItemMedia">
            <img loading="lazy" width="102" height="99" src="<?php echo esc_url( get_template_directory_uri() . '/dist/img/after/dream_5.webp' ); ?>" alt="">
          </div>
          <div class="p-afterSupport__devicesItemBody">
            <p class="p-afterSupport__devicesItemTitle">洗面台</p>
            <ul class="p-afterSupport__devicesItemList">
              <li>本体（照明・くもり止め<br>ヒーター・排水ボタン）</li>
              <li>水栓</li>
            </ul>
          </div>
        </li>
      </ul>
    </div>
  </section>

  <section class="p-afterSupport__section p-afterSupport__section--last" id="support4">
    <div class="l-content--inner">
      <div class="p-afterSupport__overview">
        <div class="p-afterSupport__overviewBody">
          <div class="p-afterSupport__overviewNum">
            <img loading="lazy" width="119" height="81" src="<?php echo esc_url( get_template_directory_uri() . '/dist/img/number/number4.webp' ); ?>" alt="">
          </div>
          <h3 class="p-afterSupport__sectionTitle">
            <span class="marker">定期点検</span>
          </h3>
          <div class="p-afterSupport__overviewMedia u-none__pc--tab">
            <img loading="lazy" width="1920" height="1280" src="<?php echo esc_url( get_template_directory_uri() . '/dist/img/after/guarantee-4.jpg' ); ?>" alt="住宅の定期点検のイメージ">
          </div>
          <div class="p-afterSupport__overviewText">
            ご入居されてからのお客様の暮らしをサポートしてくために、ご入居から3ヶ月・1年・2年・5年・10年・20年のタイミングで定期点検に訪問させていただきます。専門スタッフにより、外壁、基礎、内装、床などを確認させていただき、不具合点がないか聞きとりの上、点検を行い、必要なメンテナンスについてのアドバイスをさせていただきます。
          </div>
          <div class="p-afterSupport__cta">
            <a class="c-button c-button--orange" href="<?php echo esc_url( home_url( '/maintenance/' ) ); ?>">アフターメンテナンスへ</a>
          </div>
        </div>
        <div class="p-afterSupport__overviewMedia u-none__mobile--tab">
          <img loading="lazy" width="1920" height="1280" src="<?php echo esc_url( get_template_directory_uri() . '/dist/img/after/guarantee-4.jpg' ); ?>" alt="住宅の定期点検のイメージ">
        </div>
      </div>
    </div>
  </section>
</main>
<?php get_footer(); ?>
