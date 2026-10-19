<?php
/**
 * Template Name: design
 *
 * @package Wazeka
 */

if ( ! defined( 'ABSPATH' ) ) {
  exit;
}
get_header();
?>
<main class="p-design">
  <div class="c-pageMv u-mb100">
    <div class="c-pageMv__heading">
      <h1 class="c-pageMv__heading__title">
        デザインへのこだわり
      </h1>
      <p class="c-pageMv__heading__subTitle">
        HIGH QUALITY
      </p>
    </div>
    <?php $mv = get_field( 'mv-design-img' ); ?>
    <?php if ( $mv ) : ?>
      <figure class="c-pageMv__visual" style="background-image: url('<?php echo esc_url( $mv ); ?>');"></figure>
    <?php endif; ?>
  </div>

  <!-- トップタイトル概要 -->
  <section class="c-title__decoration">
    <div class="c-title__decoration__head">
      <h2 class="c-title--sectionLine u-mb40">デザインへのこだわり</h2>
      <p class="c-title--orangeLine">
        <span class="marker">
          <span class="u-orange">快適な住まい</span>を<br class="u-none__pc--sp">ご提供するための<br>
          <span class="u-orange">デザイン</span>のこだわり<br>
        </span>
      </p>
    </div>
  </section>

  <!-- メニュー -->
  <nav class="p-design__nav" aria-label="デザインへのこだわり">
    <div class="p-design__nav__heading">
      <span class="u-textOrange">豊後夢工房</span>がこだわる<span class="u-textOrange">デザイン</span>へのこだわり
    </div>
    <ul class="p-design__nav__list">
      <li class="p-design__nav__item">
        <a href="#design1" class="p-design__nav__link">
          <div class="p-design__nav__card">
            <div class="p-design__nav__number">
              <img loading="lazy" class="p-design__nav__numberImg" width="106" height="81" src="<?php echo esc_url( get_template_directory_uri() . '/dist/img/number/number1.webp' ); ?>" alt="">
            </div>
            <div>
              <p class="p-design__nav__label">
                <span class="p-design__nav__emphasis">暮らし</span>と<span class="p-design__nav__emphasis">動線</span>を<br>
                <span class="p-design__nav__emphasis">楽</span>にするデザイン
              </p>
            </div>
          </div>
        </a>
      </li>
      <li class="p-design__nav__item">
        <a href="#design2" class="p-design__nav__link">
          <div class="p-design__nav__card">
            <div class="p-design__nav__number">
              <img loading="lazy" class="p-design__nav__numberImg" width="118" height="81" src="<?php echo esc_url( get_template_directory_uri() . '/dist/img/number/number2.webp' ); ?>" alt="">
            </div>
            <div>
              <p class="p-design__nav__label">
                <span class="p-design__nav__emphasis">住む人らしさ</span>を<br>
                大切にするデザイン
              </p>
            </div>
          </div>
        </a>
      </li>
      <li class="p-design__nav__item">
        <a href="#design3" class="p-design__nav__link">
          <div class="p-design__nav__card">
            <div class="p-design__nav__number">
              <img loading="lazy" class="p-design__nav__numberImg" width="118" height="81" src="<?php echo esc_url( get_template_directory_uri() . '/dist/img/number/number3.webp' ); ?>" alt="">
            </div>
            <div>
              <p class="p-design__nav__label">
                <span class="p-design__nav__emphasis">太陽</span>と<span class="p-design__nav__emphasis">自然</span>を<br>
                生かすデザイン
              </p>
            </div>
          </div>
        </a>
      </li>
      <li class="p-design__nav__item">
        <a href="#design4" class="p-design__nav__link">
          <div class="p-design__nav__card">
            <div class="p-design__nav__number">
              <img loading="lazy" class="p-design__nav__numberImg" width="119" height="81" src="<?php echo esc_url( get_template_directory_uri() . '/dist/img/number/number4.webp' ); ?>" alt="">
            </div>
            <div>
              <p class="p-design__nav__label">
                <span class="p-design__nav__emphasis">メンテナンス</span><br>
                しやすいデザイン
              </p>
            </div>
          </div>
        </a>
      </li>
    </ul>
  </nav>

  <!-- points -->
  <?php
  $design_img = get_template_directory_uri() . '/dist/img/design/';
  ?>
  <section class="p-design__points u-mb100">
    <div class="p-design__point p-design__point--lead" id="design1">
      <div class="p-design__point__hero">
        <div class="p-design__point__media p-design__point__media--right">
          <img loading="lazy" class="p-design__point__mediaImg" width="1600" height="1000" src="<?php echo esc_url( $design_img . 'design_1.png' ); ?>" alt="<?php echo esc_attr( '家族の暮らしに合わせた動線をつくるデザイン' ); ?>">
        </div>
        <div class="p-design__point__panel p-design__point__panel--left">
          <h2 class="c-title--sectionLine p-design__point__label">
            DESIGN 01
          </h2>
          <div>
            <p class="c-title--orangeLine p-design__point__headline">
              <span class="u-textOrange">家族の暮らし</span>に合わせた<br>
              <span class="u-textOrange">動線</span>をつくるデザイン
            </p>
          </div>
          <div class="p-design__point__text u-mb25">
            <?php echo wp_kses_post( '私たちは、皆さんが少しでも楽に楽しく暮らせるように、それぞれのライフスタイルや家族構成に合わせた動線設計を考えています。今だけでなく将来も快適に過ごせるように、家の中を自由に回れる間取りやメンテナンスが簡単なデザインを取り入れて、日常生活をもっと便利にします。' ); ?>
          </div>
        </div>
      </div>
      <div class="p-design__detail">
        <div class="p-design__detail__inner">
          <div class="p-design__detail__media p-design__detail__media--left">
            <img loading="lazy" class="p-design__detail__mediaImg" width="1600" height="1000" src="<?php echo esc_url( $design_img . 'design_2.png' ); ?>" alt="<?php echo esc_attr( '家事らく動線' ); ?>">
          </div>
          <div class="p-design__detail__body p-design__detail__body--afterMedia">
            <div class="p-design__detail__pointLabel">
              <img loading="lazy" class="p-design__detail__pointLabelImg" width="122" height="37" src="<?php echo esc_url( get_template_directory_uri() . '/dist/img/common/point1.webp' ); ?>" alt="">
            </div>
            <p class="p-design__detail__subtit">
              <span class="u-textOrange">家事らく</span>動線
            </p>
            <div class="p-design__detail__bodyText">
              <?php echo wp_kses_post( '例えば、キッチンから洗濯室、物干しスペースまでの移動距離を短くし、使いやすい配置にすることで、毎日の家事がとても楽になります。料理や洗濯がスムーズにでき、忙しい日々でも楽に家事をこなせるようにデザインします。' ); ?>
            </div>
          </div>
        </div>
      </div>
      <div class="p-design__detail">
        <div class="p-design__detail__inner">
          <div class="p-design__detail__media p-design__detail__media--right u-none__pc--tab">
            <img loading="lazy" class="p-design__detail__mediaImg" width="1600" height="1000" src="<?php echo esc_url( $design_img . 'design_3.png' ); ?>" alt="<?php echo esc_attr( '子育て動線' ); ?>">
          </div>
          <div class="p-design__detail__body p-design__detail__body--beforeMedia">
            <div class="p-design__detail__pointLabel">
              <img loading="lazy" class="p-design__detail__pointLabelImg" width="126" height="37" src="<?php echo esc_url( get_template_directory_uri() . '/dist/img/common/point2.webp' ); ?>" alt="">
            </div>
            <p class="p-design__detail__subtit">
              <span class="u-textOrange">子育て</span>動線
            </p>
            <div class="p-design__detail__bodyText">
              <?php echo wp_kses_post( 'リビングから子供部屋や遊び場が見えるようにしたり、たくさんの収納スペースを設けて、おもちゃや勉強道具を整理しやすくします。また、お子様の成長に合わせて間取りを変えられるように考えて、子供も家族ものびのびと過ごせる家をデザインします。' ); ?>
            </div>
          </div>
          <div class="p-design__detail__media p-design__detail__media--right u-none__mobile--tab">
            <img loading="lazy" class="p-design__detail__mediaImg" width="1600" height="1000" src="<?php echo esc_url( $design_img . 'design_3.png' ); ?>" alt="<?php echo esc_attr( '子育て動線' ); ?>">
          </div>
        </div>
      </div>
    </div>

    <div class="p-design__divider"></div>

    <!-- point2 -->
    <div class="p-design__point" id="design2">
      <div class="p-design__point__hero">
        <div class="p-design__point__media">
          <img loading="lazy" class="p-design__point__mediaImg" width="1600" height="1000" src="<?php echo esc_url( $design_img . 'design_4.png' ); ?>" alt="<?php echo esc_attr( '住む人らしさをデザインする' ); ?>">
        </div>
        <div class="p-design__point__panel p-design__point__panel--right">
          <h2 class="c-title--sectionLine p-design__point__label">
            DESIGN 02
          </h2>
          <div>
            <p class="c-title--orangeLine u-mb10 p-design__point__headline">
              <span class="u-textOrange">住む人らしさ</span>を<br>
              デザインする
            </p>
          </div>
          <div class="p-design__point__text u-mb25">
            <?php echo wp_kses_post( '機能性と高性能はもちろん、住む人らしさを大切にしたデザインはとても大切です。私たちの家づくりは、建築家と協力し性能の良い住まいを上質であなたらしいデザインに仕上げます。デザインと性能が調和するように、一緒に考え抜きます。' ); ?>
          </div>
        </div>
      </div>

      <div class="p-design__detail p-design__detail--spaced">
        <div class="p-design__detail__inner">
          <div class="p-design__detail__media p-design__detail__media--left">
            <img loading="lazy" class="p-design__detail__mediaImg" width="1600" height="1000" src="<?php echo esc_url( $design_img . 'design_5.png' ); ?>" alt="<?php echo esc_attr( 'こんなお家がいいなを楽しく共有' ); ?>">
          </div>
          <div class="p-design__detail__body p-design__detail__body--afterMedia">
            <div class="p-design__detail__pointLabel">
              <img loading="lazy" class="p-design__detail__pointLabelImg" width="122" height="37" src="<?php echo esc_url( get_template_directory_uri() . '/dist/img/common/point1.webp' ); ?>" alt="">
            </div>
            <p class="p-design__detail__subtit">
              <span class="u-textOrange">こんなお家がいいな</span>を<br>
              楽しく共有
            </p>
            <div class="p-design__detail__bodyText">
              <?php echo wp_kses_post( '「こんなお家がいいな」と思ってもなかなか言葉では伝えづらいですよね。私たちは、家づくりのイメージをもっとお話しやすいように、SNSやInstagramを活用して、家づくりのイメージを建築士と共有。<br />「こんなお家がいいな」を共有しあうことで世界に一つだけのあなただけのお家をデザインします。ぜひあなたの理想のお家を私たちに教えてください。' ); ?>
            </div>
          </div>
        </div>
      </div>
    </div>

    <div class="p-design__divider"></div>

    <!-- point3 -->
    <div class="p-design__point" id="design3">
      <div class="p-design__point__hero">
        <div class="p-design__point__media p-design__point__media--right">
          <img loading="lazy" class="p-design__point__mediaImg" width="1600" height="1000" src="<?php echo esc_url( $design_img . 'design_6.png' ); ?>" alt="<?php echo esc_attr( '太陽と自然の恵みを生かすデザイン' ); ?>">
        </div>
        <div class="p-design__point__panel p-design__point__panel--left">
          <h2 class="c-title--sectionLine p-design__point__label">
            DESIGN 03
          </h2>
          <div>
            <p class="c-title--orangeLine p-design__point__headline">
              <span class="u-textOrange">太陽</span>と<span class="u-textOrange">自然</span>の恵みを生かし、<br class="u-none__mobile--sp">
              <span class="u-textOrange">快適</span>と<span class="u-textOrange">エネルギー</span>をつくる
            </p>
          </div>
          <div class="p-design__point__text u-mb25">
            <?php echo wp_kses_post( '豊後夢工房では、住まいをより快適にするために、光や風を調整した空間デザインを大切にしています。また、再生エネルギーを活用し、光や熱の効率的な管理を行うことで、エネルギーの最大限に効率化する設計を考えます。自然の恩恵を取り入れた設計により、夢工房のお家は一年を通じて心地よく過ごせる住まいとなっています。' ); ?>
          </div>
        </div>
      </div>
      <div class="p-design__detail">
        <div class="p-design__detail__inner">
          <div class="p-design__detail__media p-design__detail__media--left">
            <img loading="lazy" class="p-design__detail__mediaImg" width="1600" height="1000" src="<?php echo esc_url( $design_img . 'design_7.png' ); ?>" alt="<?php echo esc_attr( '心地よい風と自然光が家全体に行き渡る空間デザイン' ); ?>">
          </div>
          <div class="p-design__detail__body p-design__detail__body--afterMedia">
            <div class="p-design__detail__pointLabel">
              <img loading="lazy" class="p-design__detail__pointLabelImg" width="122" height="37" src="<?php echo esc_url( get_template_directory_uri() . '/dist/img/common/point1.webp' ); ?>" alt="">
            </div>
            <div>
              <p class="p-design__detail__subtit">
                <span class="u-textOrange">心地よい風</span>と、<span class="u-textOrange">自然光</span>が<br>
                家全体に<span class="u-textOrange">行き渡る</span>空間デザイン
              </p>
            </div>
            <div class="p-design__detail__bodyText">
              <?php echo wp_kses_post( '昼間は照明を使わずに済む設計や、夏の暑い日差しを遮り、冬の暖かい日差しを取り入れる設計を行います。日差しをコントロールすることで、室内にやさしい明かりを作りだし、また風向きを把握して心地良く風を通すよう、適切な位置に窓を配置。これにより、冬も夏も心地よい住まいを実現します。<br />' ); ?>
            </div>
          </div>
        </div>
      </div>
      <div class="p-design__detail">
        <div class="p-design__detail__inner">
          <div class="p-design__detail__media p-design__detail__media--right u-none__pc--tab">
            <img loading="lazy" class="p-design__detail__mediaImg" width="1600" height="1000" src="<?php echo esc_url( $design_img . 'design_8.png' ); ?>" alt="<?php echo esc_attr( 'エネルギー効率を最大化するデザイン' ); ?>">
          </div>
          <div class="p-design__detail__body p-design__detail__body--beforeMedia">
            <div class="p-design__detail__pointLabel">
              <img loading="lazy" class="p-design__detail__pointLabelImg" width="126" height="37" src="<?php echo esc_url( get_template_directory_uri() . '/dist/img/common/point2.webp' ); ?>" alt="">
            </div>
            <p class="p-design__detail__subtit">
              <span class="u-textOrange">エネルギー効率</span>を<br>
              <span class="u-textOrange">最大化</span>するデザイン
            </p>
            <div class="p-design__detail__bodyText">
              <?php echo wp_kses_post( '太陽光発電で電力をつくり出し、室内の光や熱を効率よく管理することで、エネルギー消費を大幅に減らします。私たちはエネルギー効率を重視し、家計の節約と快適な生活環境を提供するため、環境に配慮した次世代の住宅設計に取り組んでいます。' ); ?>
            </div>
            <div class="p-design__detail__cta">
              <a class="c-button--orange" href="<?php echo esc_url( home_url( '/quality/' ) ); ?>">性能について</a>
            </div>
          </div>
          <div class="p-design__detail__media p-design__detail__media--right u-none__mobile--tab">
            <img loading="lazy" class="p-design__detail__mediaImg" width="1600" height="1000" src="<?php echo esc_url( $design_img . 'design_8.png' ); ?>" alt="<?php echo esc_attr( 'エネルギー効率を最大化するデザイン' ); ?>">
          </div>
        </div>
      </div>
    </div>

    <div class="p-design__divider"></div>

    <!-- point4 -->
    <div class="p-design__point p-design__point--last" id="design4">
      <div class="p-design__point__hero">
        <div class="p-design__point__media">
          <img loading="lazy" class="p-design__point__mediaImg" width="1600" height="1000" src="<?php echo esc_url( $design_img . 'design_9.png' ); ?>" alt="<?php echo esc_attr( 'メンテナンスしやすいデザイン' ); ?>">
        </div>
        <div class="p-design__point__panel p-design__point__panel--right">
          <h2 class="c-title--sectionLine p-design__point__label">
            DESIGN 04
          </h2>
          <div>
            <p class="c-title--orangeLine u-mb10 p-design__point__headline">
              <span class="u-textOrange">メンテナンス</span><br>
              しやすいデザイン
            </p>
          </div>
          <div class="p-design__point__text u-mb25">
            <?php echo wp_kses_post( '家は長い間一緒に過ごすものです。年月が経つと、修理が必要になることや部品の交換が必要になることがあります。しかし、その際に高額な費用がかかったり、部品が手に入りにくかったりすることもあります。<br />豊後夢工房では、できるだけ一般的な部品を使うことで、修理やメンテナンスが迅速で費用が抑えられるように設計しています。機能性だけでなく、コストパフォーマンスにも配慮した快適な家づくりを心がけています。' ); ?>
          </div>
        </div>
      </div>

      <div class="p-design__detail">
        <div class="p-design__detail__inner">
          <div class="p-design__detail__media p-design__detail__media--left">
            <img loading="lazy" class="p-design__detail__mediaImg" width="1600" height="1000" src="<?php echo esc_url( $design_img . 'design_10.png' ); ?>" alt="<?php echo esc_attr( '故障時にもすぐに修理しやすい設計' ); ?>">
          </div>
          <div class="p-design__detail__body p-design__detail__body--afterMedia">
            <div class="p-design__detail__pointLabel">
              <img loading="lazy" class="p-design__detail__pointLabelImg" width="122" height="37" src="<?php echo esc_url( get_template_directory_uri() . '/dist/img/common/point1.webp' ); ?>" alt="">
            </div>
            <div>
              <p class="u-mb10 p-design__detail__subtit">
                <span class="u-textOrange">故障時</span>にもすぐに<span class="u-textOrange">修理</span>しやすく
              </p>
            </div>
            <div class="p-design__detail__bodyText">
              <?php echo wp_kses_post( '故障時にも迅速に対応いたします。修理やメンテナンスの際、必要な部品が簡単に手に入るように設計されていますので、修理がスムーズに行えます。さらに、10年間の設備保証があり、専門のアフターサービス部門がサポートしますので、安心してお任せください。' ); ?>
            </div>
            <div class="p-design__detail__cta">
              <a class="c-button--orange" href="<?php echo esc_url( home_url( '/maintenance/' ) ); ?>">アフターサポートについて</a>
            </div>
          </div>
        </div>
      </div>
    </div>

  </section>
  <?php get_template_part( 'template-parts/common' ); ?>
</main>
<?php get_footer(); ?>