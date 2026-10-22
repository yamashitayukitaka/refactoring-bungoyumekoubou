<?php
/**
 * Template Name: rireve
 *
 * @package Wazeka
 */

if ( ! defined( 'ABSPATH' ) ) {
  exit;
}
get_header();
?>
<main class="p-rireve">
  <!-- Rireveのトップ -->
  <div class="p-rireve__mv">
    <div class="p-rireve__mv__titleBox">
      <h1 class="p-rireve__mv__logo">
        <img class="p-rireve__mv__logoImg" width="1600" height="500" src="<?php echo esc_url( get_stylesheet_directory_uri() . '/dist/img/rireve/rireve_title_black.webp' ); ?>" alt="リレーヴ（Rireve">
      </h1>
      <p class="p-rireve__mv__title">リレーヴ自由設計</p>
    </div>
    <p class="p-rireve__mv__lead">夏涼しく冬暖かい、快適な住み心地を<br>
      可能にする次世代省エネ住宅。</p>
    <?php
    $rireve_mv_slides = array(
      array(
        'file' => 'top_img3.webp',
        'alt'  => 'リレーヴの住まいイメージ3',
      ),
      array(
        'file' => 'top_img1.webp',
        'alt'  => 'リレーヴの住まいイメージ1',
      ),
      array(
        'file' => 'top_img2.webp',
        'alt'  => 'リレーヴの住まいイメージ2',
      ),
      array(
        'file' => 'top_img4.webp',
        'alt'  => 'リレーヴの住まいイメージ4',
      ),
      array(
        'file' => 'top_img5.webp',
        'alt'  => 'リレーヴの住まいイメージ5',
      ),
      array(
        'file' => 'top_img6.webp',
        'alt'  => 'リレーヴの住まいイメージ6',
      ),
    );
    ?>
    <ul class="p-rireve__mv__slider js-mvSlider">
      <?php foreach ( $rireve_mv_slides as $slide_index => $slide ) : ?>
        <li class="p-rireve__mv__slide">
          <img
            class="p-rireve__mv__slideImg"
            width="1600"
            height="1000"
            src="<?php echo esc_url( get_stylesheet_directory_uri() . '/dist/img/rireve/' . $slide['file'] ); ?>"
            alt="<?php echo esc_attr( $slide['alt'] ); ?>"
            <?php if ( 0 === $slide_index ) : ?>
              fetchpriority="high"
            <?php else : ?>
              loading="lazy"
            <?php endif; ?>
          >
        </li>
      <?php endforeach; ?>
    </ul>
    <div class="p-rireve__mv__bg"></div>
  </div>

  <!-- Rireveの説明 -->
  <div class="p-rireve__intro">
    <div class="p-rireve__intro__body">
      <p class="p-rireve__intro__heading">豊かな「暮らし」<br>
        夢のある「暮らし」を<br>
        してほしいという想いから</p>
      <p class="p-rireve__intro__text">帰りたくなる、誰かを呼びたくなる、家の中での「暮らし」を楽しめる家。<br>
        暖かく明るい家には自然と人が集い、幸せで満たされます。<br>
        そんなコンセプトで作られた住宅に、フランス語で「豊かな」という意味を持つriche(リッシュ)と、「夢」という意味を持つreve(リーブ)を掛け合わせて、Rireve(リレーヴ)と名付けました。<br class="u-none__pc--tab">家族の健康を考えて設計された「リレーヴ」は、優れた高気密・高断熱性能に加え、高度な熱交換換気システムの採用で、季節を問わず低ランニングコストで室内の温度を一定に保ってくれる高性能な住まいです。豊後夢工房から「豊かで夢のある“暮らし”」の住まいのご提案です。
      </p>
    </div>
    <figure class="p-rireve__intro__media">
      <img loading="lazy" class="p-rireve__intro__img" width="1600" height="1000" src="<?php echo esc_url( get_stylesheet_directory_uri() . '/dist/img/rireve/rireve_1.webp' ); ?>" alt="リレーヴのコンセプトイメージ">
    </figure>
  </div>

  <div class="p-rireve__appeal">
    <div class="p-rireve__appeal__row">
      <div class="p-rireve__appeal__media u-none__mobile--tab">
        <img loading="lazy" class="p-rireve__appeal__img" width="1600" height="1000" src="<?php echo esc_url( get_stylesheet_directory_uri() . '/dist/img/rireve/rireve_2.webp' ); ?>" alt="次世代型省エネ住宅リレーヴのイメージ">
      </div>
      <div class="p-rireve__appeal__copy--right">
        <p class="p-rireve__appeal__title">エアコン1台で家全体が快適<br>
          次世代型省エネ住宅</p>
        <figure class="p-rireve__appeal__media u-none__pc--sp">
          <img loading="lazy" class="p-rireve__appeal__img" width="1600" height="1000" src="<?php echo esc_url( get_stylesheet_directory_uri() . '/dist/img/rireve/rireve_2.webp' ); ?>" alt="次世代型省エネ住宅リレーヴのイメージ">
        </figure>
        <p class="p-rireve__appeal__text">リレーヴは、ZEH（ゼロエネルギー住宅）基準をさらに超える高性能住宅。 リレーヴは、夏は涼しく、冬は暖かい理想の住まいを実現する次世代型省エネ住宅です。高気密・高断熱設計により、平家であればエアコン一台でも家じゅう快適に過ごすことが可能です。省エネルギー性能が高く、低コストで快適な生活を実現します。
        </p>
      </div>
      <figure class="p-rireve__appeal__media u-none__pc--tab u-none__mobile--sp">
        <img loading="lazy" class="p-rireve__appeal__img" width="1600" height="1000" src="<?php echo esc_url( get_stylesheet_directory_uri() . '/dist/img/rireve/rireve_2.webp' ); ?>" alt="次世代型省エネ住宅リレーヴのイメージ">
      </figure>
    </div>
    <div class="p-rireve__appeal__row p-rireve__appeal__row--reverse">
      <div class="p-rireve__appeal__copy--left">
        <p class="p-rireve__appeal__title">夏涼しく冬暖かい、<br>
          省エネ住宅のトップブランド</p>
        <figure class="p-rireve__appeal__media p-rireve__appeal__media--award u-none__pc--sp">
          <img loading="lazy" class="p-rireve__appeal__img" width="1166" height="485" src="<?php echo esc_url( get_stylesheet_directory_uri() . '/dist/img/rireve/rireve_3.webp' ); ?>" alt="ハウス・オブ・ザ・イヤー・イン・エナジー受賞のイメージ">
        </figure>
        <p class="p-rireve__appeal__text"> 豊後夢工房といえば、夏涼しく冬暖かい、快適な住み心地を可能にする次世代省エネ住宅リレーヴ。この高い性能が評価され、日本の優れた省エネルギー住宅に贈られる「ハウス・オブ・ザ・イヤー・イン・エナジー」に選ばれました。
        </p>
      </div>
      <figure class="p-rireve__appeal__media p-rireve__appeal__media--award u-none__mobile--sp">
        <img loading="lazy" class="p-rireve__appeal__img" width="1166" height="485" src="<?php echo esc_url( get_stylesheet_directory_uri() . '/dist/img/rireve/rireve_3.webp' ); ?>" alt="ハウス・オブ・ザ・イヤー・イン・エナジー受賞のイメージ">
      </figure>
    </div>
  </div>

  <?php get_template_part( 'template-parts/hasThumbSlider-loop' ); ?>

  
  <div class="p-rireve__feature">
    <figure class="p-rireve__feature__badge">
      <img loading="lazy" class="p-rireve__feature__badgeImg" width="1400" height="360" src="<?php echo esc_url( get_stylesheet_directory_uri() . '/dist/img/rireve/rireve_4.webp' ); ?>" alt="W断熱の家 バッジのイメージ図">
    </figure>
    <p class="p-rireve__feature__label">10年以上の実績を誇る</p>
    <div class="p-rireve__feature__plate">
      <img loading="lazy" class="p-rireve__feature__plateImg" width="647" height="102" src="<?php echo esc_url( get_stylesheet_directory_uri() . '/dist/img/rireve/rireve_6.webp' ); ?>" alt="10年以上の実績のイメージ">
    </div>
    <div class="p-rireve__feature__headline">
      <p class="p-rireve__feature__lead">夏は涼しく、冬は暖かい。<br class="u-none__pc--sp">四季を通して快適で省エネを実現。</p>
      <p class="p-rireve__feature__title">W断熱の家</p>
      <p class="p-rireve__feature__subtitle">(外断熱+内断熱)</p>
    </div>
    <div class="p-rireve__feature__body">
      <div class="p-rireve__feature__copy">
        <p class="p-rireve__feature__copyTitle">これまでより約3倍の<br>
          断熱性能を実現する<br>
          「ダブル断熱」。
        </p>
        <div class="p-rireve__feature__media--inline u-none__pc--sp">
          <img loading="lazy" class="p-rireve__feature__img" width="759" height="779" src="<?php echo esc_url( get_stylesheet_directory_uri() . '/dist/img/rireve/rireve_7.webp' ); ?>" alt="ダブル断熱のイメージ">
        </div>
        <p class="p-rireve__feature__copyText">住宅の断熱は「外断熱」と「内断熱」に分けられますが、そのどちらにも一長一短があります。<br>
          「リレーヴ」では、その両方の良い部分を活かし、外側と内側から断熱する文字通りの「ダブル断熱」です。夏涼しく冬暖かい居住空間をつくる圧倒的な快適性能を発揮し、冷暖房費の削減も可能にします。</p>
      </div>
      <div class="p-rireve__feature__media u-none__mobile--sp">
        <img loading="lazy" class="p-rireve__feature__img" width="759" height="779" src="<?php echo esc_url( get_stylesheet_directory_uri() . '/dist/img/rireve/rireve_7.webp' ); ?>" alt="ダブル断熱のイメージ">
      </div>
    </div>

    <div class="p-rireve__feature__diagram">
      <img loading="lazy" class="p-rireve__feature__diagramImg" width="1397" height="469" src="<?php echo esc_url( get_stylesheet_directory_uri() . '/dist/img/rireve/rireve_8.webp' ); ?>" alt="ダブル断熱の構造図のイメージ図">
    </div>
    <p class="p-rireve__feature__caption">
      ダブル断熱のイメージ</p>
  </div>
  

  <div class="p-rireve__feature p-rireve__feature--offset">
    <div class="p-rireve__feature__badge">
      <img loading="lazy" class="p-rireve__feature__badgeImg" width="1400" height="360" src="<?php echo esc_url( get_stylesheet_directory_uri() . '/dist/img/rireve/rireve_5.webp' ); ?>" alt="トリプルガラス樹脂サッシ バッジのイメージ図">
    </div>
    <p class="p-rireve__feature__label">10年以上の実績を誇る</p>
    <div class="p-rireve__feature__plate">
      <img loading="lazy" class="p-rireve__feature__plateImg" width="647" height="102" src="<?php echo esc_url( get_stylesheet_directory_uri() . '/dist/img/rireve/rireve_6.webp' ); ?>" alt="10年以上の実績のイメージ">
    </div>
    <div class="p-rireve__feature__headline">
      <p class="p-rireve__feature__lead">断熱性能最高レベルの窓が標準装備</p>
      <p class="p-rireve__feature__title p-rireve__feature__title--glass">トリプルガラス樹脂サッシ</p>
    </div>
    <div class="p-rireve__feature__split">
      <div class="p-rireve__feature__splitMedia">
        <img loading="lazy" class="p-rireve__feature__splitImg" width="463" height="1535" src="<?php echo esc_url( get_stylesheet_directory_uri() . '/dist/img/rireve/rireve_9.webp' ); ?>" alt="トリプルガラス樹脂サッシのイメージ">
      </div>
      <div class="p-rireve__feature__splitCopy">
        <div class="p-rireve__effect__titleBox">
          <div class="p-rireve__effect__label">
            快適効果<br>
            その1
          </div>
          <div class="p-rireve__effect__heading">
            夏は涼しく冬は暖かく。
          </div>
        </div>
        <div class="p-rireve__effect__grid">
          <div class="p-rireve__effect__item">
            <div class="p-rireve__effect__season">
              <div class="p-rireve__effect__seasonLabel">夏</div>
              <div class="p-rireve__effect__seasonText">太陽光や紫外線の侵入を防ぎ<br class="u-none__mobile--sp">
                冷房効果を高めます。</div>
            </div>
            <div class="p-rireve__effect__img">
              <img loading="lazy" class="p-rireve__effect__photo" width="703" height="774" src="<?php echo esc_url( get_stylesheet_directory_uri() . '/dist/img/rireve/rireve_10.webp' ); ?>" alt="夏の快適効果イメージ">
            </div>
          </div>
          <div class="p-rireve__effect__item">
            <div class="p-rireve__effect__season">
              <div class="p-rireve__effect__seasonLabel">冬</div>
              <div class="p-rireve__effect__seasonText">冬季の暖房による輻射熱を<br class="u-none__mobile--sp">
                逃しません。<br class="u-none__pc--sp"><br class="u-none__pc--sp"></div>
            </div>
            <div class="p-rireve__effect__img">
              <img loading="lazy" class="p-rireve__effect__photo" width="703" height="774" src="<?php echo esc_url( get_stylesheet_directory_uri() . '/dist/img/rireve/rireve_11.webp' ); ?>" alt="冬の快適効果イメージ">
            </div>
          </div>
        </div>

        <div class="p-rireve__effect__titleBox">
          <div class="p-rireve__effect__label">
            快適効果<br>
            その2
          </div>
          <div class="p-rireve__effect__heading">
            結露を抑制して<br class="u-none__pc--sp">健康な住まいを。
          </div>
        </div>

        <p class="p-rireve__effect__desc">トリプルガラス樹脂サッシは断熱性能が高いため、冬の寒い日にも室内の表面湿度は低くなりにくく結露を抑制します。結露はお掃除が大変なだけではなく、カビやダニの発生源ともなってしまいます。</p>
        <div class="p-rireve__effect__grid p-rireve__effect__grid--stack">
          <div class="p-rireve__effect__item">
            <img loading="lazy" class="p-rireve__effect__mediaImg" width="703" height="578" src="<?php echo esc_url( get_stylesheet_directory_uri() . '/dist/img/rireve/rireve_12.webp' ); ?>" alt="リレーヴの省エネ効果1のイメージ">
          </div>
          <div class="p-rireve__effect__item">
            <img loading="lazy" class="p-rireve__effect__mediaImg p-rireve__effect__mediaImg--spaced" width="744" height="459" src="<?php echo esc_url( get_stylesheet_directory_uri() . '/dist/img/rireve/rireve_13.webp' ); ?>" alt="リレーヴの省エネ効果2のイメージ">
          </div>
        </div>
      </div>
    </div>
  </div>

  <!-- Rireveの標準仕様 -->
  <section class="p-rireve__specification">
    <h2 class="p-rireve__heading p-rireve__heading--noSpace">Rireveの標準仕様</h2>
    <!-- スタンダード1 -->
    <section class="p-rireve__specification__block">
      <div class="p-rireve__specification__icon--right">
        <img loading="lazy" class="p-rireve__specification__iconImg" width="197" height="105" src="<?php echo esc_url( get_stylesheet_directory_uri() . '/dist/img/heig/heig_right.webp' ); ?>" alt="">
      </div>
      <div class="p-rireve__specification__label--left">
        <img loading="lazy" width="400" height="80" src="<?php echo esc_url( get_stylesheet_directory_uri() . '/dist/img/rireve/rireve_14.webp' ); ?>" alt="リレーヴ標準仕様1のイメージ">
      </div>
      <h3 class="p-rireve__heading">美しさが暮らしを彩る、<br class="">洗練されたデザイン住宅</h3>

      <div class="p-rireve__specification__row">
        <figure class="p-rireve__specification__media--left">
          <img loading="lazy" class="p-rireve__specification__mediaImg" width="2048" height="1365" src="<?php echo esc_url( get_stylesheet_directory_uri() . '/dist/img/heig/heig_16.webp' ); ?>" alt="上質なデザインのHEIG住宅外観のイメージ">
        </figure>
        <div class="p-rireve__specification__copy--right">
          <p class="p-rireve__specification__copyTitle">上質なデザインが魅せる、<br>
            暮らしの新しいスタンダード。</p>
          <p class="p-rireve__specification__copyText">Rireveデザイン住宅は、住む人に誇りと満足感を与える、洗練されたデザインが特徴です。細部にまでこだわった美しい外観と、機能的で快適な空間が融合し、暮らす人々にステータスを感じさせます。</p>
        </div>
      </div>

      <div class="p-rireve__specification__row p-rireve__specification__row--ptLoose">
        <figure class="p-rireve__specification__media--right u-none__pc--sp">
          <img loading="lazy" class="p-rireve__specification__mediaImg" width="1600" height="1000" src="<?php echo esc_url( get_stylesheet_directory_uri() . '/dist/img/heig/heig_17.webp' ); ?>" alt="機能的で美しいHEIGの室内のイメージ">
        </figure>
        <div class="p-rireve__specification__copy--left">
          <p class="p-rireve__specification__copyTitle">美しく、そして機能的。<br>
            理想の暮らしを日常に</p>
          <p class="p-rireve__specification__copyText">高品質な素材と巧みな設計が生み出し、見た目の美しさだけでなく、住み心地の良さも追求しています。日々の暮らしを豊かにする、理想の住まいを提供します。</p>
        </div>
        <div class="p-rireve__specification__media--right u-none__mobile--sp">
          <img loading="lazy" class="p-rireve__specification__mediaImg" width="1600" height="1000" src="<?php echo esc_url( get_stylesheet_directory_uri() . '/dist/img/heig/heig_17.webp' ); ?>" alt="機能的で美しいHEIGの室内のイメージ">
        </div>
      </div>
    </section>

    <!-- スタンダード2 -->
    <section class="p-rireve__specification__block">
      <div class="p-rireve__specification__icon--left">
        <img loading="lazy" class="p-rireve__specification__iconImg" width="107" height="85" src="<?php echo esc_url( get_stylesheet_directory_uri() . '/dist/img/heig/heig_standard_left.webp' ); ?>" alt="">
      </div>
      <div class="p-rireve__specification__label--right">
        <img loading="lazy" width="418" height="80" src="<?php echo esc_url( get_stylesheet_directory_uri() . '/dist/img/rireve/rireve_15.webp' ); ?>" alt="リレーヴ標準仕様2のイメージ">
      </div>
      <h3 class="p-rireve__heading">
        お家の中がすっきり快適<br>
        追加費用なしの大容量収納
      </h3>

      <div class="p-rireve__specification__row">
        <figure class="p-rireve__specification__media--left">
          <img loading="lazy" class="p-rireve__specification__mediaImg" width="1600" height="1000" src="<?php echo esc_url( get_stylesheet_directory_uri() . '/dist/img/heig/heig_18.webp' ); ?>" alt="大容量収納のイメージ">
        </figure>
        <div class="p-rireve__specification__copy--right">
          <p class="p-rireve__specification__copyTitle">快適な暮らしの秘密は<br>
            追加料金不要の<br>
            多彩な収納オプション</p>
          <p class="p-rireve__specification__copyText">ライフスタイルに合わせた大容量収納が、ウォークインクローゼットからシューズクローク、キッチン背面収納、そしてランドリールームまで。追加費用なしで、すっきり快適な理想の家づくりをサポートします。</p>
        </div>
      </div>

      <div class="p-rireve__specification__grid--wide">
        <figure class="p-rireve__specification__gridItem">
          <img loading="lazy" class="p-rireve__specification__gridImg" width="800" height="448" src="<?php echo esc_url( get_stylesheet_directory_uri() . '/dist/img/heig/heig_19.webp' ); ?>" alt="大容量ウォークインクローゼットのイメージ">
          <figcaption class="p-rireve__specification__gridText">大容量<br>
            ウォークインクローゼット</figcaption>
        </figure>
        <figure class="p-rireve__specification__gridItem">
          <img loading="lazy" class="p-rireve__specification__gridImg" width="800" height="448" src="<?php echo esc_url( get_stylesheet_directory_uri() . '/dist/img/heig/heig_20.webp' ); ?>" alt="大容量シューズクロークのイメージ">
          <figcaption class="p-rireve__specification__gridText">大容量<br>
            シューズクローク</figcaption>
        </figure>
        <figure class="p-rireve__specification__gridItem">
          <img loading="lazy" class="p-rireve__specification__gridImg" width="800" height="448" src="<?php echo esc_url( get_stylesheet_directory_uri() . '/dist/img/heig/heig_21.webp' ); ?>" alt="キッチン背面収納のイメージ">
          <figcaption class="p-rireve__specification__gridText">すっきり<br>
            キッチン背面収納</figcaption>
        </figure>
        <figure class="p-rireve__specification__gridItem">
          <img loading="lazy" class="p-rireve__specification__gridImg" width="800" height="448" src="<?php echo esc_url( get_stylesheet_directory_uri() . '/dist/img/heig/heig_22.webp' ); ?>" alt="ランドリー収納のイメージ">
          <figcaption class="p-rireve__specification__gridText">あると便利な<br>
            ランドリー収納</figcaption>
        </figure>
      </div>
    </section>

    <!-- スタンダード3 -->
    <section class="p-rireve__specification__block">
      <div class="p-rireve__specification__icon--right">
        <img loading="lazy" class="p-rireve__specification__iconImg" width="197" height="105" src="<?php echo esc_url( get_stylesheet_directory_uri() . '/dist/img/heig/heig_right.webp' ); ?>" alt="">
      </div>
      <div class="p-rireve__specification__label--left">
        <img loading="lazy" width="414" height="80" src="<?php echo esc_url( get_stylesheet_directory_uri() . '/dist/img/rireve/rireve_16.webp' ); ?>" alt="リレーヴ標準仕様3のイメージ">
      </div>
      <h3 class="p-rireve__heading">毎日が楽しくなる！<br class="u-none__pc--sp">家事1/2設計</h3>

      <div class="p-rireve__specification__row">
        <figure class="p-rireve__specification__media--left">
          <img loading="lazy" class="p-rireve__specification__mediaImg" width="1600" height="1000" src="<?php echo esc_url( get_stylesheet_directory_uri() . '/dist/img/heig/heig_23.webp' ); ?>" alt="ウォークスルー洗面クローゼットのイメージ">
        </figure>
        <div class="p-rireve__specification__copy--right">
          <p class="p-rireve__specification__copyTitle">ウォークスルー洗面クローゼット<br>
            「洗う、干す、しまう」が 1箇所で超ラクになる洗濯作業！</p>
          <p class="p-rireve__specification__copyText">洗う・干す・しまう・着るを洗面空間で行うアイデア設計です。室内干しのデメリットである生乾きなどの湿気問題を換気システムで補完し、洗濯作業に掛かる時間を大幅に短縮します。</p>
        </div>
      </div>
      <div class="p-rireve__specification__grid--mid">
        <figure class="p-rireve__specification__gridItem">
          <img loading="lazy" class="p-rireve__specification__gridImg" width="753" height="893" src="<?php echo esc_url( get_stylesheet_directory_uri() . '/dist/img/heig/heig_24.webp' ); ?>" alt="家事ラク設計のイメージ1">
        </figure>
        <figure class="p-rireve__specification__gridItem">
          <img loading="lazy" class="p-rireve__specification__gridImg" width="753" height="893" src="<?php echo esc_url( get_stylesheet_directory_uri() . '/dist/img/heig/heig_25.webp' ); ?>" alt="家事ラク設計のイメージ2">
        </figure>
        <figure class="p-rireve__specification__gridItem">
          <img loading="lazy" class="p-rireve__specification__gridImg" width="753" height="893" src="<?php echo esc_url( get_stylesheet_directory_uri() . '/dist/img/heig/heig_26.webp' ); ?>" alt="家事ラク設計のイメージ3">
        </figure>
      </div>
      <div class="p-rireve__specification__copyCenter">
        <p class="p-rireve__specification__copyCenterTitle">家族のゆとり時間を創る設備が満載
        </p>
        <p class="p-rireve__specification__copyCenterText">超微細な泡を発生させるナノバブルウォーターが家中の水を除菌洗浄。食器洗い乾燥機と高効率のIH調理器を標準装備したシステムキッチンは、家事時間を節約し光熱費も削減します。タンクレストイレの除菌水付きシャワーは掃除が楽で、収納もスッキリ。さらに、汚れを雨で落とす外壁は美しく、長持ちし、メンテナンス費用を大幅に削減。家族みんなの快適な暮らしをサポートします。</p>
      </div>

      <div class="p-rireve__specification__grid--wide">
        <figure class="p-rireve__specification__gridItem">
          <img loading="lazy" class="p-rireve__specification__gridImg" width="800" height="448" src="<?php echo esc_url( get_stylesheet_directory_uri() . '/dist/img/heig/heig_27.webp' ); ?>" alt="食器洗い乾燥機・IH調理器のイメージ">
          <figcaption class="p-rireve__specification__gridText">
            食器洗い乾燥機・IH調理器</figcaption>
        </figure>
        <figure class="p-rireve__specification__gridItem u-center">
          <img loading="lazy" class="p-rireve__specification__gridImg" width="800" height="448" src="<?php echo esc_url( get_stylesheet_directory_uri() . '/dist/img/heig/heig_28.webp' ); ?>" alt="家丸ごと浄水ANOAのイメージ">
          <figcaption class = "p-rireve__specification__gridText">
            <span class = "u-inherit u-none__mobile--sp"> 
              暮らしの水をまるごとキレイに<br>
              家丸ごと浄水ANOA(アノア)
            </span>
            <span class = "u-inherit u-none__pc--sp">
              家丸ごと浄水ANOA(アノア)
            </span>
          </figcaption>
        </figure>
        <figure class="p-rireve__specification__gridItem">
          <img loading="lazy" class="p-rireve__specification__gridImg" width="800" height="448" src="<?php echo esc_url( get_stylesheet_directory_uri() . '/dist/img/heig/heig_29.webp' ); ?>" alt="タンクレスシャワートイレのイメージ">
          <figcaption class="p-rireve__specification__gridText">お手入れ楽々自動洗浄機能付き<br class="u-none__mobile--sp">
            タンクレスシャワートイレ
          </figcaption>
        </figure>
      </div>
    </section>

    <!-- スタンダード4 -->
    <section class="p-rireve__specification__block">
      <div class="p-rireve__specification__icon--left">
        <img loading="lazy" class="p-rireve__specification__iconImg" width="107" height="85" src="<?php echo esc_url( get_stylesheet_directory_uri() . '/dist/img/heig/heig_standard_left.webp' ); ?>" alt="">
      </div>
      <div class="p-rireve__specification__label--right">
        <img loading="lazy" width="420" height="80" src="<?php echo esc_url( get_stylesheet_directory_uri() . '/dist/img/rireve/rireve_17.webp' ); ?>" alt="リレーヴ標準仕様4のイメージ">
      </div>
      <h3 class="p-rireve__heading">節約×快適！<br>
        先進の設備で、災害時も安心。
      </h3>

      <div class="p-rireve__specification__mediaCenter">
        <img loading="lazy" width="1600" height="1000" src="<?php echo esc_url( get_stylesheet_directory_uri() . '/dist/img/heig/heig_31.gif' ); ?>" alt="先進設備のイメージ">
      </div>
      <div class="p-rireve__specification__copyCenter">
        <p class="p-rireve__specification__copyCenterTitle">経済的かつ快適な住まいを実現する先進の設備</p>
        <p class="p-rireve__specification__copyCenterText">豊後夢工房の家は、経済メリットを最大化する装備が揃っています。大型10kW太陽光マキシオンパネルは、世界最高水準の400Wパネルで、40年間の製品保証付き。大容量13.5kWhのテスラパワーウォールは、温度調節機能があり、4人家族の1日分の電力をまかないます。93%の熱回収率を誇る24時間eco-i換気システムや、EV車充電アダプター、ソーラーエコキュートなども装備。断熱性を高める外反射断熱シートや基礎断熱工法などにより、光熱費を抑え、持続可能な快適生活を実現します。</p>
      </div>
      <div class="p-rireve__specification__grid--narrow">
        <figure class="p-rireve__specification__gridItem">
          <img loading="lazy" class="p-rireve__specification__gridImg" width="530" height="530" src="<?php echo esc_url( get_stylesheet_directory_uri() . '/dist/img/heig/heig_32.webp' ); ?>" alt="初期費用0円太陽光発電のイメージ">
          <figcaption class="p-rireve__specification__gridText">初期費用0円太陽光発電</figcaption>
        </figure>
        <figure class="p-rireve__specification__gridItem">
          <img loading="lazy" class="p-rireve__specification__gridImg" width="530" height="530" src="<?php echo esc_url( get_stylesheet_directory_uri() . '/dist/img/heig/heig_33.webp' ); ?>" alt="オール電化・ソーラーエコキュートのイメージ">
          <figcaption class="p-rireve__specification__gridText">オール電化・<br>
            ソーラーエコキュート</figcaption>
        </figure>
        <figure class="p-rireve__specification__gridItem">
          <img loading="lazy" class="p-rireve__specification__gridImg" width="530" height="530" src="<?php echo esc_url( get_stylesheet_directory_uri() . '/dist/img/heig/heig_34.webp' ); ?>" alt="テスラ大容量蓄電池のイメージ">
          <figcaption class="p-rireve__specification__gridText">テスラ大容量蓄電池</figcaption>
        </figure>
        <figure class="p-rireve__specification__gridItem">
          <img loading="lazy" class="p-rireve__specification__gridImg" width="530" height="530" src="<?php echo esc_url( get_stylesheet_directory_uri() . '/dist/img/heig/heig_36.webp' ); ?>" alt="EV車充電アダプターのイメージ">
          <figcaption class="p-rireve__specification__gridText">EV車充電アダプター</figcaption>
        </figure>
        <figure class="p-rireve__specification__gridItem">
          <img loading="lazy" class="p-rireve__specification__gridImg" width="653" height="653" src="<?php echo esc_url( get_stylesheet_directory_uri() . '/dist/img/heig/qwan.webp' ); ?>" alt="QWAN断熱材のイメージ">
          <figcaption class="p-rireve__specification__gridText">外張り断熱キューワンボード</figcaption>
        </figure>
        <figure class="p-rireve__specification__gridItem">
          <img loading="lazy" class="p-rireve__specification__gridImg" width="530" height="530" src="<?php echo esc_url( get_stylesheet_directory_uri() . '/dist/img/heig/heig_38.webp' ); ?>" alt="24時間換気システムと基礎断熱工法のイメージ図">
          <figcaption class="p-rireve__specification__gridText">24時間換気システム<br>
            床下熱交換式+基礎断熱工法</figcaption>
        </figure>
        <figure class="p-rireve__specification__gridItem">
          <img loading="lazy" class="p-rireve__specification__gridImg" width="608" height="608" src="<?php echo esc_url( get_stylesheet_directory_uri() . '/dist/img/heig/rireve_dannetu.webp' ); ?>" alt="リレーヴの断熱仕様のイメージ">
          <figcaption class="p-rireve__specification__gridText">外断熱+内断熱のW断熱</figcaption>
        </figure>
        <figure class="p-rireve__specification__gridItem">
          <img loading="lazy" class="p-rireve__specification__gridImg" width="615" height="615" src="<?php echo esc_url( get_stylesheet_directory_uri() . '/dist/img/heig/rireve_sassi.webp' ); ?>" alt="リレーヴの樹脂サッシのイメージ">
          <figcaption class="p-rireve__specification__gridText">トリプル断熱樹脂サッシ</figcaption>
        </figure>
      </div>
    </section>

    <!-- スタンダード5 -->
    <section class="p-rireve__specification__block">
      <div class="p-rireve__specification__icon--right">
        <img loading="lazy" class="p-rireve__specification__iconImg" width="197" height="105" src="<?php echo esc_url( get_stylesheet_directory_uri() . '/dist/img/heig/heig_right.webp' ); ?>" alt="">
      </div>
      <div class="p-rireve__specification__label--left">
        <img loading="lazy" width="420" height="80" src="<?php echo esc_url( get_stylesheet_directory_uri() . '/dist/img/rireve/rireve_18.webp' ); ?>" alt="リレーヴ標準仕様5のイメージ">
      </div>
      <h3 class="p-rireve__heading">未来を見据えた、家族を守る<br>
        安心と安全の家づくり</h3>

      <figure class="p-rireve__specification__mediaCenter">
        <img loading="lazy" width="1600" height="1000" src="<?php echo esc_url( get_stylesheet_directory_uri() . '/dist/img/heig/heig_41.webp' ); ?>" alt="W地震対策と強靭な基礎のイメージ">
      </figure>
      <div class="p-rireve__specification__copyCenter">
        <p class="p-rireve__specification__copyCenterTitle">W地震対策と強靭な基礎</p>
        <p class="p-rireve__specification__copyCenterText">Rireveの建物構造は耐震施用金物を多く使用し、耐震で柱ｰ土台ｰ梁を一つの箱のように強力に固定した面構造と、地震の揺れを吸収する制震装置で建物へのダメージを軽減します。想定外の地震が来た時も家族や家の安全をサポートします。また家の要となる基礎部分はベタ基礎工法。防湿型防蟻シートを敷きシロアリ・湿気をシャットアウトします。</p>
      </div>

      <div class="p-rireve__specification__grid--wide">
        <figure class="p-rireve__specification__gridItem">
          <img loading="lazy" class="p-rireve__specification__gridImg" width="800" height="448" src="<?php echo esc_url( get_stylesheet_directory_uri() . '/dist/img/heig/heig_42.webp' ); ?>" alt="ベタ基礎工法のイメージ">
          <figcaption class="p-rireve__specification__gridText">ベタ基礎工法</figcaption>
        </figure>
        <figure class="p-rireve__specification__gridItem">
          <img loading="lazy" class="p-rireve__specification__gridImg" width="800" height="448" src="<?php echo esc_url( get_stylesheet_directory_uri() . '/dist/img/heig/heig_43.webp' ); ?>" alt="防湿型防蟻シート・ターミダンシートのイメージ">
          <figcaption class="p-rireve__specification__gridText">防湿型防蟻シート・ターミダンシート</figcaption>
        </figure>
        <figure class="p-rireve__specification__gridItem">
          <img loading="lazy" width="1600" height="1000" src="<?php echo esc_url( get_stylesheet_directory_uri() . '/dist/img/heig/heig_44.webp' ); ?>" alt="面構造の耐震構造パネルのイメージ図" class="p-rireve__specification__img--full">
          <figcaption class="p-rireve__specification__gridText">壁倍率3倍の耐震構造パネルを<br>
            使った「面構造」</figcaption>
        </figure>
        <figure class="p-rireve__specification__gridItem">
          <img loading="lazy" width="1062" height="664" src="<?php echo esc_url( get_stylesheet_directory_uri() . '/dist/img/heig/heig_45.webp' ); ?>" alt="制震装置MER SYSTEMのイメージ図" class="p-rireve__specification__img--full">
          <figcaption class="p-rireve__specification__gridText">制震装置MER　SYSTEM</figcaption>
        </figure>
      </div>
    </section>

    <!-- スタンダード6 -->
    <section class="p-rireve__specification__block">
      <div class="p-rireve__specification__icon--left">
        <img loading="lazy" class="p-rireve__specification__iconImg" width="107" height="85" src="<?php echo esc_url( get_stylesheet_directory_uri() . '/dist/img/heig/heig_standard_left.webp' ); ?>" alt="">
      </div>
      <div class="p-rireve__specification__label--right">
        <img loading="lazy" width="418" height="80" src="<?php echo esc_url( get_stylesheet_directory_uri() . '/dist/img/rireve/rireve_19.webp' ); ?>" alt="リレーヴ標準仕様6のイメージ">
      </div>
      <h3 class="p-rireve__heading">家族の安全と健康を第一に考えた、<br class="u-none__mobile--sp">
        先進の住宅設計。</ｈ>

      <figure class="p-rireve__specification__mediaCenter">
        <img loading="lazy" width="1600" height="1000" src="<?php echo esc_url( get_stylesheet_directory_uri() . '/dist/img/heig/family.webp' ); ?>" alt="">
      </figure>
      <div class="p-rireve__specification__copyCenter">
        <p class="p-rireve__specification__copyCenterTitle">健康を守る、最新の高性能換気システム</p>
        <p class="p-rireve__specification__copyCenterText">家族の健康を守るため、最新の標準装備が満載です。24時間eco-i換気システムは常に新鮮な空気を送り込み、ウイルス濃度を低減。室内の温度ムラを少なくし、一年中を通して快適な温度を保つことでヒートショックの予防をサポートします。床排気システム＆除菌フィルターはハウスダストやウイルスを除去し、給気プラズマイオン発生装置が花粉やアレルゲンを不活性化します。ウイルス対策特殊フィルターアレルノンフィルターで外部からの汚染物質を遮断し、花粉やPM2.5を大幅にカットします。</p>
      </div>
      <div class="p-rireve__specification__grid--wide p-rireve__specification__grid--wideFlush">
        <figure class="p-rireve__specification__gridItem">
          <img loading="lazy" width="1600" height="682" src="<?php echo esc_url( get_stylesheet_directory_uri() . '/dist/img/heig/heig_46_2.webp' ); ?>" alt="24時間eco-i換気システムのイメージ図" class="p-rireve__specification__img--full">
          <figcaption class="p-rireve__specification__gridText">熱回収率93％24時間eco-i換気システム</figcaption>
        </figure>
        <figure class="p-rireve__specification__gridItem">
          <img loading="lazy" width="571" height="243" src="<?php echo esc_url( get_stylesheet_directory_uri() . '/dist/img/heig/heig_48.webp' ); ?>" alt="床排気システムと除菌フィルターのイメージ図" class="p-rireve__specification__img--full">
          <figcaption class="p-rireve__specification__gridText">床排気システム＆除菌フィルター</figcaption>
        </figure>
        <figure class="p-rireve__specification__gridItem">
          <img loading="lazy" width="571" height="243" src="<?php echo esc_url( get_stylesheet_directory_uri() . '/dist/img/heig/heig_49.webp' ); ?>" alt="給気プラズマイオン発生装置のイメージ図" class="p-rireve__specification__img--full">
          <figcaption class="p-rireve__specification__gridText">給気プラズマイオン発生装置</figcaption>
        </figure>
        <figure class="p-rireve__specification__gridItem">
          <img loading="lazy" width="768" height="326" src="<?php echo esc_url( get_stylesheet_directory_uri() . '/dist/img/heig/heig_50.webp' ); ?>" alt="ウイルス対策特殊フィルターアレルノンフィルターのイメージ図" class="p-rireve__specification__img--full">
          <figcaption class="p-rireve__specification__gridText">ウイルス対策特殊フィルター<br>
            アレルノンフィルター</figcaption>
        </figure>
      </div>
    </section>

  </section>

  <section class="l-content">
    <div class="c-title__head">
      <h2 class="c-title--sectionLine">
        CONTACT
      </h2>
      <div>
        <p class="c-title--orangeLine u-mb50">
          <span class="marker">お問い合わせ</span>
        </p>
      </div>
    </div>
    <div class="c-form__wrap">
      <?php echo do_shortcode( '[mwform_formkey key="1820"]' ); ?>
    </div>
  </section>

  <?php
  $local_paged = ( get_query_var( 'paged' ) ) ? get_query_var( 'paged' ) : 1;
  $args        = array(
    'post_type'      => 'works',
    'posts_per_page' => 3,
    'order'          => 'DESC',
    'paged'          => $local_paged,
    'tax_query'      => array(
      array(
        'taxonomy' => 'works-type',
        'terms'    => array( 'rireve' ),
        'field'    => 'slug',
      ),
    ),
  );
  $works_loop  = new WP_Query( $args );
  ?>

  <?php if ( $works_loop->have_posts() ) : ?>
    <section class="l-content">
      <h2 class="c-title--large">RIREVEの施工事例をみる</h2>
      <p class="c-title--orange u-mb100">施工事例・お客様の声</p>
      <ul class="c-cardList u-mb100">
        <?php while ( $works_loop->have_posts() ) :
          $works_loop->the_post(); ?>
          <?php get_template_part( 'template-parts/works-loop' ); ?>
        <?php endwhile; ?>
      </ul>

      <div class="u-center u-mb150">
        <a class="c-button--outline" href="<?php echo esc_url( home_url( '/' ) ); ?>works-type/rireve">一覧を見る</a>
      </div>
    </section>
    <?php
  endif;
  wp_reset_postdata();
  ?>

  <section class="c-lineUp u-mb0">
    <div class="l-content--large">
      <div class="u-center u-mb15">
        <h2 class="c-title--sectionLine">
          STYLE_LINE_UP
        </h2>
      </div>
      <div class="u-center u-mb50">
        <p class="c-title--orangeLine">
          <span class="marker">あなたの「ゆめ」を叶える、特別なラインナップ</span>
        </p>
      </div>

      <ul class="c-lineUp__list">
        <li class="c-lineUp__item">
          <article class="c-lineUp__body">
            <a href="<?php echo esc_url( home_url( 'heig' ) ); ?>">
              <figure class="c-lineUp__media"><img loading="lazy" class="c-lineUp__img" width="1600" height="1000" src="<?php echo esc_url( get_template_directory_uri() . '/dist/img/top/Group01.webp' ); ?>" alt="HEIG（ヘイグ）"></figure>
              <span class="c-lineUp__tag">自由設計</span>
              <p class="c-lineUp__text">暮らしをもっと自由に</p>
            </a>
          </article>
        </li>
        <li class="c-lineUp__item">
          <article class="c-lineUp__body">
            <a href="<?php echo esc_url( home_url( 'rireve' ) ); ?>">
              <figure class="c-lineUp__media"><img loading="lazy" class="c-lineUp__img" width="1600" height="1000" src="<?php echo esc_url( get_template_directory_uri() . '/dist/img/top/Group02.webp' ); ?>" alt="リレーヴ（Rireve）"></figure>
              <span class="c-lineUp__tag">自由設計</span>
              <p class="c-lineUp__text">次世代のZEHハウス</p>
            </a>
          </article>
        </li>
        <li class="c-lineUp__item">
          <article class="c-lineUp__body">
            <a href="<?php echo esc_url( home_url( 'irohaie' ) ); ?>">
              <figure class="c-lineUp__media"><img loading="lazy" class="c-lineUp__img" width="1600" height="1000" src="<?php echo esc_url( get_template_directory_uri() . '/dist/img/top/Group03.webp' ); ?>" alt="いろはいえ"></figure>
              <span class="c-lineUp__tag">自由設計</span>
              <p class="c-lineUp__text">安心の定額制、なのに自由設計</p>
            </a>
          </article>
        </li>
      </ul>
    </div>
  </section>
</main>
<?php get_footer(); ?>
