<?php
if (!defined('ABSPATH')) exit;
get_header();
?>
<main>
  <div class="c-pageMv u-mb100">
    <div class="c-pageMv__ttl__wrap">
      <h2 class="c-pageMv__ttl">
        コストへのこだわり
      </h2>
      <p class="c-pageMv__subTtl">
        COST PERFORMANCE
      </p>
    </div>
    <?php $mv = get_field('mv-cost-img'); ?>
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
        コストへのこだわり
      </h3>
      <div>
        <div>
          <p class="c-title--orangeLine "><span class="marker">
              大手他社よりも<br class="sp"><span class="u-orange">ワンランク上</span>の<span class="u-orange">設備</span>、<br>
              <span class="u-orange">プランニング</span>、<span class="u-orange">デザ</span><span class="u-orange">イン</span>、<br>
              <span class="u-orange">高品質</span>を<span class="u-orange">低コスト</span>で提供します。</span>
          </p>
        </div>
      </div>
    </div>
  </section>


  <!-- メニュー -->
  <section class="commitment__top_content ">
    <div class="support__top_title">
      <span class="font_orange">豊後夢工房</span>がこだわる<span class="font_orange">コスト</span>へのこだわり
    </div>
    <div class="quality__top_list noto-sans-jp">
      <a href="#cost1" class="go_to_link">
        <div class="support__top_button">
          <div class="support__top_button_number">
            <img src="<?php echo esc_url(IMG_URL . '/number/number1.webp'); ?>" alt="">
          </div>
          <div class="">
            <p class="support__top_button_text">
              <span class="font_orange">経済的な暮らし</span>を<br>
              サポートする家づくり
            </p>
          </div>
        </div>
      </a>
      <a href="#cost2" class="go_to_link">
        <div class="support__top_button">
          <div class="support__top_button_number">
            <img src="<?php echo esc_url(IMG_URL . '/number/number2.webp'); ?>" alt="">
          </div>
          <div class="">
            <p class="support__top_button_text">
              充実した<br>
              <span class="font_orange">標準設備</span>
            </p>
          </div>
        </div>
      </a>
      <a href="#cost3" class="go_to_link">
        <div class="support__top_button">
          <div class="support__top_button_number">
            <img src="<?php echo esc_url(IMG_URL . '/number/number3.webp'); ?>" alt="">
          </div>
          <div class="">
            <p class="support__top_button_text">
              <span class="font_orange">大手他社</span>にはできない<br class="pc_tab">
              <span class="font_orange">丁寧な</span>プランニング
            </p>
          </div>
        </div>
      </a>
      <a href="#cost4" class="go_to_link">
        <div class="support__top_button">
          <div class="support__top_button_number">
            <img src="<?php echo esc_url(IMG_URL . '/number/number4.webp'); ?>" alt="">
          </div>
          <div class="">
            <p class="support__top_button_text">
              <span class="font_orange">ワンストップ</span>での<br>
              サポート体制
            </p>
          </div>
        </div>
      </a>
    </div>
  </section>


  <section class="design-wrapper u-mb100 top_p_15 ">
    <!-- point1 -->
    <div class="concept__policy1" id="cost1">
      <?php
      $cost = get_field('cost_one');
      $cost_txt = $cost['txt'];
      $cost_img = $cost['img'];
      ?>
      <div class="concept__policy1">
        <div class="design-right-image">
          <img src="<?php echo esc_url($cost_img); ?>" class="img_shadow">
        </div>
        <div class="concept__policy2-content">
          <div class="design__paint1_content_ttl">
            <img src="<?php echo esc_url(IMG_URL . '/point1.webp'); ?>">
          </div>
          <div>
            <p class="c-title--orangeLine concept__policy1-mainttl"><span class="marker">
                <span class="u-orange">経済的な暮らし</span>を<br>
                サポートする家づくり</span>
            </p>
          </div>
          <div class="concept__policy2-text u-mb25">
            <?php echo $cost_txt; ?>
          </div>
        </div>
      </div>
    </div>

    <div class="common_commitment_subttl mt-6">
      <span class="font_orange">経済的</span>な暮らしをサポートする<br class="sp"><span class="font_orange">3</span>つのポイント
    </div>
    <div class="l_content_middle_70 support__content_m top_p_5 bottom_p_5 ">
      <div class="airtight_img illustration_set">
        <img src="<?php echo esc_url(IMG_URL . '/cost/cost_2.webp'); ?>" alt="コストへのこだわり" class="img_shadow">
        <div class="cost_point_label">
          <div class="">
            <img src="<?php echo esc_url(IMG_URL . '/number/number1.webp'); ?>" alt="">
          </div>
          <div>
            太陽光パネル
          </div>
        </div>
        <p>従来よりも25％発電力の高い最新高性能太陽光パネルを、大手他社よりも低価格で提供が可能。業界最長の40年間の保証が付いており、長期間にわたり安心してご利用いただけます。</p>
      </div>
      <div class="airtight_img illustration_set">
        <img src="<?php echo esc_url(IMG_URL . '/cost/cost_3.webp'); ?>" alt="コストへのこだわり" class="img_shadow">
        <div class="cost_point_label">
          <div class="">
            <img src="<?php echo esc_url(IMG_URL . '/number/number2.webp'); ?>" alt="">
          </div>
          <div>
            高断熱・高気密
          </div>
        </div>
        <p>断熱樹脂サッシやLow-Eガラス、基礎断熱、W断熱など、高い断熱性と気密性を備えた素材を使用しています。</p>
      </div>
      <div class="airtight_img illustration_set">
        <img src="<?php echo esc_url(IMG_URL . '/cost/cost_4.webp'); ?>" alt="コストへのこだわり" class="img_shadow">
        <div class="cost_point_label">
          <div class="">
            <img src="<?php echo esc_url(IMG_URL . '/number/number3.webp'); ?>" alt="">
          </div>
          <div>
            高性能換気システム
          </div>
        </div>
        <p>世界トップクラスの熱交換率約93％の高性能換気システムを標準で採用しています。換気システム+高気密性+高断熱性を組み合わせて、快適で経済的な生活をサポートします。</p>
      </div>
    </div>

    <div class="border_bottom bottom_m_7">
    </div>

    <!-- point2 -->
    <div class="concept__policy1" id="cost2">
      <?php
      $cost = get_field('cost_two');
      $cost_txt = $cost['txt'];
      $cost_img = $cost['img'];
      $point_txt_one = $cost['subtxt_one'];
      $point_img_one = $cost['subimg_one'];
      $point_txt_two = $cost['subtxt_two'];
      $point_img_two = $cost['subimg_two'];
      ?>
      <div class="concept__policy1">
        <div class="design-left-image">
          <img src="<?php echo esc_url($cost_img); ?>" alt="" class="img_shadow">
        </div>
        <div class="concept__policy1-content">

          <div class="design__paint1_content_ttl">
            <img src="<?php echo esc_url(IMG_URL . '/point2.webp'); ?>">
          </div>
          <div>
            <p class="c-title--orangeLine u-mb10 concept__policy1-mainttl">
              <span class="marker">
                充実した<span class="u-orange">標準設備</span></span>
            </p>
          </div>
          <div class="concept__policy2-text u-mb25">
            <?php echo $cost_txt; ?>
          </div>
        </div>
      </div>


      <div class="common_commitment_subttl mt-6">
        <span class="font_orange">豊後夢工房</span>の標準設備<br class="sp"><span class="font_orange">3</span>つのポイント
      </div>
      <div class="l_content_middle_70 support__content_m top_p_5 bottom_p_3">
        <div class="airtight_img illustration_set">
          <img src="<?php echo esc_url(IMG_URL . '/cost/cost_6.webp'); ?>" alt="コストへのこだわり" class="img_shadow">
          <div class="cost_point_label2 cost_point_label">
            <div class="">
              <img src="<?php echo esc_url(IMG_URL . '/number/number1.webp'); ?>" alt="">
            </div>
            <div>
              快適
            </div>
          </div>
        </div>
        <div class="airtight_img illustration_set">
          <img src="<?php echo esc_url(IMG_URL . '/cost/cost_7.webp'); ?>" alt="コストへのこだわり" class="img_shadow">
          <div class="cost_point_label2 cost_point_label">
            <div class="">
              <img src="<?php echo esc_url(IMG_URL . '/number/number2.webp'); ?>" alt="">
            </div>
            <div>
              省エネ
            </div>
          </div>
        </div>
        <div class="airtight_img illustration_set">
          <img src="<?php echo esc_url(IMG_URL . '/cost/cost_8.webp'); ?>" alt="コストへのこだわり" class="img_shadow">
          <div class="cost_point_label2 cost_point_label">
            <div class="">
              <img src="<?php echo esc_url(IMG_URL . '/number/number3.webp'); ?>" alt="">
            </div>
            <div>
              耐震
            </div>
          </div>
        </div>
      </div>
      <p class="samplelogo_text mx-auto mx-6">
        家づくりで気になる、快適性能や省エネ設備、 <br class="sp">耐震設備が全てセットに含まれているので、<br>
        追加費用が掛かりにくいのが特徴です。
      </p>



      <!-- <div class="design__paint1">
        <div class="design__paint1_container noto-san-jp">

          <div class="design__paint1_img">
            <img src="<?php echo esc_url($point_img_one); ?>" class="img_shadow">
          </div>
          <div class=" design__paint1_content">
            <p class="paint_subtit">
              <span class=" u-orange">無料間取り図、3Dパース</span>を作成
            </p>
            <div class="design__paint2_content_txt">
              <?php echo $point_txt_one; ?>
            </div>
          </div>
        </div>
      </div>
      <div class="design__paint2">
        <div class="design__paint2_container noto-san-jp">
          <div class="design__paint2_content">
            <p class="paint_subtit">
              プランニング前の<span class="u-orange">土地</span>の<br>
              <span class="u-orange">状況確認</span>もしっかりと
            </p>
            <div class="design__paint2_content_txt">
              <?php echo $point_txt_two; ?>
            </div>
          </div>
          <div class="design__paint2_img">
            <img src="<?php echo esc_url($point_img_two); ?>" class="img_shadow">
          </div>

        </div>
      </div> -->
    </div>

    <div class="border_bottom bottom_m_7">
    </div>


    <!-- point3 -->
    <div class="concept__policy1" id="cost3">
      <?php
      $cost = get_field('cost_three');
      $cost_txt = $cost['txt'];
      $cost_img = $cost['img'];
      // $point_img_one = $cost['point_one'];
      // $point_img_two = $cost['point_two'];
      // $point_img_three = $cost['point_three'];
      ?>
      <div class="concept__policy1 cost-three">
        <div class="design-right-image">
          <img src="<?php echo esc_url($cost_img); ?>" class="img_shadow">
        </div>
        <div class="concept__policy2-content">

          <div class="design__paint1_content_ttl">
            <img src="<?php echo esc_url(IMG_URL . '/point3.webp'); ?>">
          </div>
          <div>
            <p class="c-title--orangeLine concept__policy1-mainttl">
              <span class="marker">
                <span class="u-orange">ワンストップ</span>での<br>
                サポート体制</span>
            </p>
          </div>
          <div class="concept__policy2-text u-mb25">
            <?php echo $cost_txt; ?>
          </div>
        </div>
      </div>

      <div class="design__paint1">
        <div class="design__paint1_container noto-san-jp">

          <div class="design__paint1_img">
            <img src="<?php echo esc_url(IMG_URL . '/cost/cost_10.webp'); ?>" class="img_shadow">
          </div>
          <div class=" design__paint1_content">
            <p class="paint_subtit">
              <span class=" u-orange">土地探しのサポート</span>
            </p>
            <div class="design__paint2_content_txt">
              お客様のご要望に合った土地探しをサポートします。私たちは、専門の不動産スタッフが責任を持って土地探しを行います。営業スタッフではなく、専門家が豊富な経験と情報をもとに、最適な土地を見つけます。
            </div>
            <div class="content_center top_p_3">
              <a class="link__btn" href="<?php echo esc_url(home_url('/property/')); ?>">土地・物件情報へ</a>
            </div>
          </div>
        </div>
      </div>
      <div class="design__paint2">
        <div class="design__paint2_container noto-san-jp">
          <div class="design__paint2_img sp_tab">
            <img src="<?php echo esc_url(IMG_URL . '/cost/cost_11.webp'); ?>" class="img_shadow">
          </div>
          <div class="design__paint2_content">
            <p class="paint_subtit">
              <span class="u-orange">無料FP相談</span>
            </p>
            <div class="design__paint2_content_txt">
              プランを考える前に、ファイナンシャルプランナー（FP）に相談できるので、お金の心配も安心です。自分の予算やライフスタイルに合わせて、無料で相談することができます。無理な営業などは一切いたしませんので、安心してご相談ください。
            </div>
          </div>
          <div class="design__paint2_img pc">
            <img src="<?php echo esc_url(IMG_URL . '/cost/cost_11.webp'); ?>" class="img_shadow">
          </div>

        </div>
      </div>

      <!-- <div class="support__conver_devices">夢工房の標準仕様<span class="u-orange">3つ</span>のポイント</div>

      <div class="l_content_middle_70 samplelogo__three_points">
        <div class="samplelogo__three_items mx-auto u-mb40">
          <div class="samplelogo_item-one">
            <div class="samplelogo_item_img">
              <img src="<?php echo esc_url($point_img_one); ?>" class="img_shadow">
            </div>
            <div class="samplelogo_button mx-auto">
              <strong>01.</strong>快適
            </div>
          </div>
          <div class="samplelogo_item-one">
            <div class="samplelogo_item_img">
              <img src="<?php echo esc_url($point_img_two); ?>" class="img_shadow">
            </div>
            <div class="samplelogo_button mx-auto">
              <strong>02.</strong>省エネ
            </div>
          </div>
          <div class="samplelogo_item-one">
            <div class="samplelogo_item_img">
              <img src="<?php echo esc_url($point_img_three); ?>" class="img_shadow">
            </div>
            <div class="samplelogo_button mx-auto">
              <strong>03.</strong>耐震
            </div>
          </div>
        </div>
        <p class="samplelogo_text mx-auto mx-6">
          快適性能、省エネ性能、耐震性能、適切なシステムがそろって高性能住宅ができると考えています。<br>
          豊後夢工房では、どのプランでもこの3つは必ずかね備えています。
        </p>
      </div> -->
    </div>


    <div class="border_bottom bottom_m_7">
    </div>
    <!-- point4 -->
    <div class="concept__policy1" id="cost4">
      <?php
      $cost = get_field('cost_four');
      $cost_txt = $cost['txt'];
      $cost_img = $cost['img'];
      $point_txt_one = $cost['subtxt_one'];
      $point_img_one = $cost['subimg_one'];
      $point_txt_two = $cost['subtxt_two'];
      $point_img_two = $cost['subimg_two'];
      ?>
      <div class="concept__policy1">
        <div class="design-left-image">
          <img src="<?php echo esc_url($cost_img); ?>" alt="" class="img_shadow">
        </div>
        <div class="concept__policy1-content">

          <div class="design__paint1_content_ttl">
            <img src="<?php echo esc_url(IMG_URL . '/point4.webp'); ?>">
          </div>
          <div>
            <p class="c-title--orangeLine concept__policy1-mainttl">
              <span class="marker">
                <span class="u-orange">大手他社</span>にはできない<br>
                <span class="u-orange">丁寧</span>なプランニング</span>
            </p>
          </div>
          <div class="concept__policy2-text u-mb25">
            <?php echo $cost_txt; ?>
          </div>
        </div>
      </div>

      <div class="design__paint1">
        <div class="design__paint1_container noto-san-jp">

          <div class="design__paint1_img">
            <img src="<?php echo esc_url(IMG_URL . '/cost/cost_13.webp'); ?>" class="img_shadow">
          </div>
          <div class=" design__paint1_content">
            <p class="paint_subtit">
              <span class=" u-orange">無料間取り図、3Dパース</span>を作成
            </p>
            <div class="design__paint2_content_txt">
              大手他社では、契約後完了後に間取り図面などを作成することが多いですが、豊後夢工房では、ご要望を教えていただければ間取り図、3Dパースも含めたプランニングも無料で作成しています。
            </div>
          </div>
        </div>
      </div>
      <div class="design__paint2 bottom_m_15">
        <div class="design__paint2_container noto-san-jp">
          <div class="design__paint2_img sp_tab">
            <img src="<?php echo esc_url(IMG_URL . '/cost/cost_14.webp'); ?>" class="img_shadow">
          </div>
          <div class="design__paint2_content">
            <p class="paint_subtit">プランニング前の<span class="u-orange">土地</span>の<br>
              <span class="u-orange"> 状況確認</span>もしっかりと
            </p>
            <div class="design__paint2_content_txt">
              豊後夢工房ではプランニング前に事前に土地のや周辺環境の確認をしっかりと行います。
              周辺道路、建物高低差などしっかり調査したうえで丁寧にプランニングを行うので、予想外のコストを抑えます。
            </div>
          </div>
          <div class="design__paint2_img pc">
            <img src="<?php echo esc_url(IMG_URL . '/cost/cost_14.webp'); ?>" class="img_shadow">
          </div>

        </div>
      </div>



    </div>

  </section>

  <?php include get_template_directory() . '/common.php'   ?>


</main>
<?php get_footer(); ?>