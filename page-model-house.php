<?php
/**
 * Template Name: model-house
 *
 * @package Wazeka
 */

if ( ! defined( 'ABSPATH' ) ) {
  exit;
}
get_header();
?>
<main class="p-modelHouse">
<div class="c-pageMv u-mb100">
    <div class="c-pageMv__heading">
      <h1 class="c-pageMv__heading__title">
        MODEL HOUSE
      </h1>
      <p class="c-pageMv__heading__subTitle">
        モデルハウス
      </p>
    </div>
    <figure class="c-pageMv__visual" style="background-image: url('<?php echo esc_url( get_template_directory_uri() . '/dist/img/model-house/mv01.webp' ); ?>');"></figure>
  </div>

  <!-- トップタイトル概要 -->
  <section class="c-title__decoration">
    <div class="c-title__decoration__head">
      <h2 class="c-title--sectionLine u-mb40">モデルハウス</h2>
      <p class="c-title--orangeLine">
        <span class="marker">
          <span class="u-orange">見て</span>、<span class="u-orange">触れて</span>、<span class="u-orange">感じる</span>。<br>
          <span class="u-orange">理想の住まい</span>を<span class="u-orange">体験</span>してください！
        </span>
      </p>
    </div>
  </section>

  <section class="p-modelHouse__overview u-mb100">
    <div class="p-modelHouse__overview__ribbon p-modelHouse__overview__ribbon--left">
      <img loading="lazy" width="323" height="101" src="<?php echo esc_url( get_template_directory_uri() . '/dist/img/common/left-ribbon.webp' ); ?>" alt="">
    </div>
    <div class="p-modelHouse__overview__heading">
      <p class="p-modelHouse__overview__lead u-none__mobile--tab"><span class="marker">中庭と深い軒の織りなす<br>
        スタイリッシュなデザイン</span>
      </p>
      <h3 class="p-modelHouse__overview__name">TOSハウジングメッセ </h3>
      <p class="p-modelHouse__overview__lead u-none__pc--tab"><span class="marker">中庭と深い軒の織りなす<br>
          スタイリッシュなデザイン</span></p>
    </div>
    <figure class="p-modelHouse__overview__logo">
      <img loading="lazy" width="614" height="366" src="<?php echo esc_url( get_template_directory_uri() . '/dist/img/model-house/tos-studio.png' ); ?>" alt="TOSハウジングメッセの外観イメージ">
    </figure>
    <figure class="p-modelHouse__overview__media">
      <img loading="lazy" width="1600" height="579" src="<?php echo esc_url( get_template_directory_uri() . '/dist/img/model-house/tos.png' ); ?>" alt="TOSハウジングメッセの間取り図イメージ">
    </figure>
    <div class="p-modelHouse__overview__text u-mb100">
      建物の中心に「中庭」を配置し、<br>
      「深い軒」を取り入れたデザインで、<br>
      日差しを巧みにコントロール。<br>
      <br>
      水平ラインを強調することで、<br>
      スタイリッシュで視線を惹きつける<br>
      美しい外観に仕上げました。<br>
      <br>
      <br>
      洗練されたデザインと<br>
      快適な居住空間を<br>
      兼ね備えた理想的な住まいです。
    </div>
    <div class="p-modelHouse__overview__gallery">
      <?php
      get_template_part(
        'template-parts/hasThumbSlider-loop',
        null,
        array(
          'has_thumbsliders' => get_field( 'a-imgs' ),
          'alt' => 'TOSハウジングメッセのギャラリーイメージ',
        )
      );
      ?>
    </div>


    <div class="u-center u-mb100">
      <span class="p-modelHouse__overview__action">
        <a class="p-modelHouse__overview__link" href="#contact">見学・ご相談はこちらから</a>
      </span>
    </div>

  </section>

  <section class="p-modelHouse__overview u-mb100">
    <div class="p-modelHouse__overview__ribbon p-modelHouse__overview__ribbon--right">
      <img loading="lazy" width="322" height="111" src="<?php echo esc_url( get_template_directory_uri() . '/dist/img/common/right-ribbon.webp' ); ?>" alt="">
    </div>
    <div class="p-modelHouse__overview__heading">
      <p class="p-modelHouse__overview__lead u-none__mobile--tab"><span class="marker">大人カワイイ<br>
          ヨーロピアンな家</span></p>
      <h3 class="p-modelHouse__overview__name">
        <span>シェリーハウス</span>
        Shelly House
      </h3>
      <p class="p-modelHouse__overview__lead u-none__pc--tab"><span class="marker">大人カワイイ<br>
          ヨーロピアンな家</span></p>
    </div>
    <figure class="p-modelHouse__overview__logo p-modelHouse__overview__logo--compact">
      <img loading="lazy" width="495" height="494" src="<?php echo esc_url( get_template_directory_uri() . '/dist/img/model-house/shelly-studio.png' ); ?>" alt="シェリーハウス外観イメージ">
    </figure>
    <figure class="p-modelHouse__overview__media">
      <img loading="lazy" width="1600" height="615" src="<?php echo esc_url( get_template_directory_uri() . '/dist/img/model-house/shelly.png' ); ?>" alt="シェリーハウス間取り図イメージ">
    </figure>
    <div class="p-modelHouse__overview__text">
      ヨーロッパの街並みに溶け込むようなデザイン。<br>
      一つひとつの素材に込められた深い叡智。<br>
      シンプルでありながら緻密に計算された空間こそ、<br>
      理想の暮らしが宿る場所です。<br>
      <br>
      シェリーハウスは、ヨーロッパの豊かな暮らしをお手本に、 <br>
      <br>
      その本質を追求して誕生しました。<br>
      日本の従来の建築文化では成し得なかった、 <br>
      安心と寛ぎを追い求めた<br>
      「心を満たす邸宅」。<br>
      <br>
      そのこだわりと想いが、<br>
      他とは一線を画す存在感を放ちます。
    </div>

    <span class="p-modelHouse__overview__action">
      <a class="p-modelHouse__overview__link" href="https://sankaido.com/shelly-house/" target="_blank">Shelly Houseについて</a>
    </span>

    <div class="p-modelHouse__overview__gallery">
    <?php
    get_template_part(
      'template-parts/hasThumbSlider-loop',
      null,
      array(
        'has_thumbsliders' => get_field( 'b-img' ),
        'alt' => 'シェリーハウスのギャラリーイメージ',
      )
    );
    ?>
    </div>

    <div class="u-center u-mb100">
      <span class="p-modelHouse__overview__action">
        <a class="p-modelHouse__overview__link" href="#contact">見学・ご相談はこちらから</a>
      </span>
    </div>

  </section>


  <section class="p-modelHouse__overview u-mb100">
    <div class="p-modelHouse__overview__ribbon p-modelHouse__overview__ribbon--left">
      <img loading="lazy" width="323" height="101" src="<?php echo esc_url( get_template_directory_uri() . '/dist/img/common/left-ribbon.webp' ); ?>" alt="">
    </div>

    <div class="p-modelHouse__overview__heading">
      <p class="p-modelHouse__overview__lead u-none__mobile--tab"><span class="marker">安心の定額制で建てる<br>
          ｢完全自由設計｣の家</span></p>
      <h2 class="p-modelHouse__overview__name">
        <span>いろは家</span>
        IROHA・IE
      </h2>
      <p class="p-modelHouse__overview__lead u-none__pc--tab"><span class="marker">安心の定額制で建てる<br>
          　｢完全自由設計｣の家</span></p>
    </div>

    <figure class="p-modelHouse__overview__logo p-modelHouse__overview__logo--compact">
      <img loading="lazy" width="990" height="988" src="<?php echo esc_url( get_template_directory_uri() . '/dist/img/model-house/iroha-studio.png' ); ?>" alt="いろは家の外観イメージ">
    </figure>
    <figure class="p-modelHouse__overview__media">
      <img loading="lazy" width="1600" height="870" src="<?php echo esc_url( get_template_directory_uri() . '/dist/img/model-house/iroha.png' ); ?>" alt="いろは家の間取り図イメージ">
    </figure>
    <div class="p-modelHouse__overview__text">
      家づくりで不安に思う方が一番多いのがお金のこと。<br>
      構造や申請にかかわる専門的なお金のことはよくわからないことだらけ。いろいろ選ぶうちにどんどん予算が膨らみ結局どれか諦めないといけない…なんてことも。 「いろはいえ」なら家づくりに必要なすべてが含まれてワンプライスだから予算オーバーの心配はなく、安心して家づくりができます！<br>
      <br>
      「住まいの基本、すべてが入った家」<br>
      「はじめての家づくり」、わからないことがたくさん。<br>
      どんな家にしよう。どんな暮らしをしよう。夢がいっぱい。<br>
      でもやっぱり、お金のことも心配…。<br>
      「IROHA.IE」なら安心の定額制（付帯工事・カーテン・照明込み）で家づくりが実現します。<br>
      ルールの中でなら間取りは「完全自由設計」設備や建具など<br>
      標準仕様の範囲でセレクトすれば価格は変わらずワンプライスだから安心して家づくりができます。
    </div>

    <span class="p-modelHouse__overview__action">
      <a class="p-modelHouse__overview__link" href="<?php echo esc_url( home_url( 'irohaie' ) ); ?>" target="_blank">いろは家について</a>
    </span>
  
    <div class="p-modelHouse__overview__gallery">
    <?php
    get_template_part(
      'template-parts/hasThumbSlider-loop',
      null,
      array(
        'has_thumbsliders' => get_field( 'c-img' ),
        'alt' => 'いろは家のギャラリーイメージ',
      )
    );
    ?>
    </div>

    <div class="u-center u-mb100">
      <span class="p-modelHouse__overview__action">
        <a class="p-modelHouse__overview__link" href="#contact">見学・ご相談はこちらから</a>
      </span>
    </div>

  </section>





  <section class="l-content" id="contact">
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

  <section class="l-content u-mb100">
    <div class="u-center u-mb10">
      <h2 class="c-title--sectionLine">
        EVENT
      </h2>
    </div>
    <div class="u-center u-mb30">
      <p class="c-title--orangeLine">
        <span class="marker">最新情報をお届けします</span>
      </p>
    </div>
    <div class="u-center">
        <a href="<?php echo esc_url( home_url( 'xo_event' ) ); ?>" class="c-button--outline">イベント一覧へ</a>
      </div>
  </section>
  <?php get_template_part( 'template-parts/common' ); ?>
</main>
<?php get_footer(); ?>