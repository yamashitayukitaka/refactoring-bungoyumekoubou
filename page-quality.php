<?php
if (!defined('ABSPATH')) exit;
get_header();
?>
<main>
  <div class="c-pageMv u-mb100">
    <div class="c-pageMv__ttl__wrap">
      <h2 class="c-pageMv__ttl">
        品質へのこだわり
      </h2>
      <p class="c-pageMv__subTtl">
        HIGH QUALITY
      </p>
    </div>
    <?php $mv = get_field('mv-quality-img'); ?>
    <figure class="c-pageMv__img__wrap" style="background-image: url('<?php echo $mv; ?>');"></figure>
  </div>

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
        品質へのこだわり
      </h3>
      <div>
        <p class="c-title--orangeLine">
          <span class="marker"><span class="u-orange">高品質な住まい</span>を<br class="sp">ご提供するための<br>
            <span class="u-orange">5つ</span>のこだわり</span>
        </p>
      </div>
    </div>
  </section>

  <section class="commitment__top_content ">
    <div class="support__top_title">
      <span class="font_orange">豊後夢工房</span>がご提供する<span class="font_orange">住宅性能</span>と<span class="font_orange">品質</span>
    </div>
    <div class="quality__top_list noto-sans-jp">
      <a href="#quality1" class="quality_btn">
        <div class="quality__top_button">
          <div class="quality__top_button_number">
            <img src="<?php echo esc_url(IMG_URL . '/number/number1.webp'); ?>" alt="">
          </div>
          <div class="top_border">
            <p class="quality__top_button_text">
              ZEH(ゼッチ)
            </p>
          </div>
        </div>
      </a>
      <a href="#quality2" class="quality_btn">
        <div class="quality__top_button">
          <div class="quality__top_button_number">
            <img src="<?php echo esc_url(IMG_URL . '/number/number2.webp'); ?>" alt="">
          </div>
          <div class="top_border">
            <p class="quality__top_button_text">
              高耐震
            </p>
          </div>
        </div>
      </a>
      <a href="#quality3" class="quality_btn">
        <div class="quality__top_button">
          <div class="quality__top_button_number">
            <img src="<?php echo esc_url(IMG_URL . '/number/number3.webp'); ?>" alt="">
          </div>
          <div class="top_border">
            <p class="quality__top_button_text">
              高断熱
            </p>
          </div>
        </div>
      </a>
      <a href="#quality4" class="quality_btn">
        <div class="quality__top_button">
          <div class="quality__top_button_number">
            <img src="<?php echo esc_url(IMG_URL . '/number/number4.webp'); ?>" alt="">
          </div>
          <div class="top_border">
            <p class="quality__top_button_text">
              高気密
            </p>
          </div>
        </div>
      </a>
      <a href="#quality5" class="quality_btn">
        <div class="quality__top_button">
          <div class="quality__top_button_number">
            <img src="<?php echo esc_url(IMG_URL . '/number/number5.webp'); ?>" alt="">

          </div>
          <div class="top_border">
            <p class="quality__top_button_text">
              換気システム
            </p>
          </div>
        </div>
      </a>
    </div>
  </section>

  <section class="commitment__security1 noto-sans-jp " id="quality1">
    <?php
    $quality = get_field('quality')[0];
    ?>
    <div class="commitment__security1__content l_content_middle_80 support__content_t">
      <div class="support__content_text content_txt">
        <div class="support__content_number">
          <img src="<?php echo esc_url(IMG_URL . '/number/number1.webp'); ?>" alt="">
        </div>
        <div>
          <p class="c_title_orangeLine_t ">
            <span class="marker">ZEH(ゼッチ)</span>
          </p>
        </div>
        <p class="common_meta_content">
          <?php echo $quality['title']; ?>
        </p>
        <div class="commitment__security1_content_maintext">
          <?php echo wp_kses_post($quality['txt']); ?>
        </div>
      </div>
      <div class="commitment__security1_content_img content_img">
        <img src="<?php echo esc_url($quality['img']); ?>" class="img_shadow">
      </div>

    </div>
    <div class="commitment__zehhousing u-mb50 l_content_middle_80">
      <div class="commitment__zehhousing_ttl u-mb30">
        <p class="c_title_orangeLine_t">豊後夢工房は<span class="big"> <br class="sp">ZEH住宅<br class="sp"></span>が標準です。</p>
      </div>
      <div class="commitment__zehhousing_content">
        <div class="zehquestion">
          <div class="commitment__zehquestion-first">
            <span class="font_orange">ZEH住宅</span><br>
            (ネット・ゼロ・エネルギー・ハウス)ってなに？
          </div>
          <div class="commitment__zehanswer">
            高断熱性能で室内外の温度差をなくし、室内環境の質を維持しつつ、
            <bold>省エネルギーを実現。</bold>さらに<bold>再生可能エネルギー</bold>を導入し、
            <span class="marker">年間のエネルギー消費量を<bold>実質ゼロ</bold>とすることを目指した住宅</span>です。
          </div>
        </div>
        <div class="commitment__threepoint">
          <div class="commitment__threesecurity_ttl">
            <span class="font_orange">ZEH</span>住宅<span class="font_orange">3つ</span>の安心ポイント
          </div>
          <div class="commitment__security_items">
            <div class="commitment__security_item_one">
              <div class="commitment__security_item_one_img">
                <img src="<?php echo esc_url(IMG_URL . '/zeh_2.webp'); ?>" alt="ZEH">
              </div>
              <div class="commitment__security_item_content">
                <h5>省エネ</h5>
                <p>エネルギーを<br>
                  極力使わない</p>
              </div>
            </div>
            <div class="commitment__security_item_one">
              <div class="commitment__security_item_one_img">
                <img src="<?php echo esc_url(IMG_URL . '/zeh_3.webp'); ?>" alt="ZEH">
              </div>
              <div class="commitment__security_item_content">
                <h5>創エネ</h5>
                <p>エネルギーを<br>創る</p>
              </div>
            </div>

            <div class="commitment__security_item_one">
              <div class="commitment__security_item_one_img">
                <img src="<?php echo esc_url(IMG_URL . '/zeh_1.webp'); ?>" alt="ZEH">
              </div>
              <div class="commitment__security_item_content">
                <h5>高断熱</h5>
                <p>エネルギーを<br>
                  逃がさない</p>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </section>

  <section class="u-mb100">
    <div class="commitment__winner2020">
      <div class="commitment__winner2020_ttl">
        ハウス・オブ・ザ・イヤー・イン・エナジー2020にて優秀賞を受賞
      </div>
      <div class="commitment__winner2020_content l_content_middle_70">
        <div class="winner2020_img">
          <img src="<?php echo esc_url(IMG_URL . '/winner2020.webp'); ?>">
        </div>
        <div class=" winner2020_txt">
          一般財団法人日本地域開発センターが主催する優れた省エネルギー住宅を表彰する制度「ハウス･オブ･ザ･イヤー･イン･エナジー2020」において、豊後夢工房の「Rireve」が「優秀賞」を受賞。豊後夢工房ではZEH住宅が標準仕様です。
        </div>
      </div>
    </div>
    <div class="commitment__rankingtwo">
      <div class="common_commitment_subttl">
        地域型住宅グリーン化事業 <br class="sp">ZEH供給ランキング<span class="font_orange">大分県第2位</span>
      </div>
      <div class="commitment__rankingtwo_content l_content_middle_70">
        <div class="commitment__rankingtwo_content_txt">
          ZEHに特化した業界唯一の特別編集専門誌『ZEH MASTER 2024』
          ((株)アスクラスト『月刊スマートハウス』)の「令和5年度 地域型住宅
          グリーン化事業 全国ZEH供給ランキング」にて豊後夢工房が<span class="font_orange">大分県第</span>
          <span class="font_orange">2位</span>にランクイン。(※出典：令和5年度地域型住宅グリーン化事業 採
          択結果 適用申請書より集計) <br>
          今後も優れた省エネルギー性能と、環境負荷の低減につながる長寿命住宅への取り組みをすすめ、より多くのお客様に快適で地球にも家計にも優しいZEH住宅を推進してまいります。<br><br>
          <bold>各モデルハウスにて豊後夢工房の住まいをご体感いただくことが出来ます。お気軽にお立ち寄りいただき、未来基準のエコ住宅をお確かめください。</bold>
        </div>
        <div class="commitment__rankingtwo_content_img">
          <img src="<?php echo esc_url(IMG_URL . '/smarthouse.webp'); ?>">
        </div>
      </div>
    </div>
  </section>

  <section class="commitment__security2 noto-sans-jp l_content_middle_80" id="quality2">
    <?php
    $quality = get_field('quality')[1];
    ?>
    <div class="  u-mb80 support__content_t">
      <div class="support__content_text content_txt">
        <div class="support__content_number">
          <img src="<?php echo esc_url(IMG_URL . '/number/number2.webp'); ?>" alt="">
        </div>
        <div class="common_subttl_deco_commitment">
          <p class="c_title_orangeLine_t"><span class="marker">高耐震</span></p>
        </div>
        <p class="common_meta_content">
          <?php echo $quality['title']; ?>
        </p>
        <div class="support__content_maintext">
          <?php echo $quality['txt']; ?>
        </div>
      </div>
      <div class="commitment__security2_content_img content_img">
        <img src="<?php echo esc_url($quality['img']); ?>" class="img_shadow">
      </div>

    </div>
    <div class="commitment__security2_grade mt-6 u-mb100">
      <div class="commitment__security2_img">
        <img src="<?php echo esc_url(IMG_URL . '/performance/performance_8.webp'); ?>" class="img_shadow">
      </div>
      <div class="commitment__security2_grade_content">
        <div class="grade_content_first">
          <div class="grade_content_ability">
            <h5>耐震性能</h5>
            <p>標準仕様<br>
              耐震等級3
            </p>
          </div>
          <div class="quality2_grade_content_ability2">
            豊後夢工房の標準仕様<br>
            <h1>耐震等級3</h1><br>
            大地震に何度も耐え<br class="sp">られるほどの<br class="">
            耐震性能をクリア！<br>
          </div>
        </div>
        <div class="grade_content_under">
          耐震等級3を取得したうえで、制振装置でさらにダメージを軽減。
          豊後夢工房では、地震に強い家づくりに強いのが特徴です。
        </div>
      </div>
    </div>
  </section>

  <section>
    <div class="common_commitment_subttl mt-6">
      <span class="font_orange">木造軸組工法+ドリフトピン工法</span>が、<br class="sp">建物を面で支える強固な構造に
    </div>
    <?php
    $stable_structure = get_field('stable_structure');
    ?>
    <div class="commitment__woodframe">
      <div class="commitment__woodframe_img">
        <img src="<?php echo esc_url($stable_structure['img']); ?>" class="img_shadow">
      </div>
      <div class="commitment__woodframe_txt">
        <?php echo $stable_structure['txt']; ?>
      </div>
    </div>
    <div class="common_commitment_subttl">
      <span class="font_orange">制震装置</span>で大地震のエネルギーを大幅に吸収
    </div>
    <div class="commitment__mersystem l_content_middle_70">
      <?php
      $energy = get_field('energy');
      ?>
      <div class="commitment__mersystem_top">
        <div class="commitment__mersystem_img sp_tab">
          <img src="<?php echo esc_url($energy['img']); ?>" class="img_shadow">
        </div>
        <div class=" commitment__mersystem_txt">
          <?php echo $energy['txt']; ?>
        </div>
        <div class="commitment__mersystem_img pc">
          <img src="<?php echo esc_url($energy['img']); ?>" class="img_shadow">
        </div>
      </div>
      <div class="commitment__link u-mb40">
        くわしくは<a href="https://www.seishin-system.com/products/" target="_blank">こちら</a>
      </div>
    </div>

    <div class="common_commitment_subttl mt-6">
      <span class="font_orange">安心</span>と<span class="font_orange">安全</span>を確立する<span class="font_orange">3</span>つの効果

    </div>
    <div class="l_content_middle_70 commitment__mersystem_wrapper u-mb100">

      <div class="commitment__mersystem_lastimg">
        <div class="mersystem_box">
          <div class="mersystem_box_left">
            <div class="mersystem_title_box">
              <div>
                安全<br>
                その1
              </div>
              <div>
                地震エネルギーを<span class="font_orange">最大48％</span>吸収
              </div>
            </div>
            <p>建物に伝わる地震のエネルギー(加速度)を約40%から48%吸収することができます。吸収することにより建物の変位と揺れを早く抑え、建物への負担を軽減します。</p>
          </div>
          <div class="mersystem_box_right">
            <!-- <div class="mersystem_img_full">
              <img src="<?php echo esc_url(IMG_URL . '/performance/performance_11.webp'); ?>" class="img_shadow">
            </div> -->
            <div class="mersystem_img_full  ">
              <img src="<?php echo esc_url(IMG_URL . '/performance/performance_12.webp'); ?>" class="">
            </div>
          </div>
        </div>

        <div class="mersystem_box">
          <div class="mersystem_box_left">
            <div class="mersystem_title_box">
              <div>
                安全<br>
                その2
              </div>
              <div>
                揺れ始めから瞬時に<span class="font_orange">減衰</span>
              </div>
            </div>
            <p>シングルチューブ構造を採用したオイルダンパーのMER　SYSTEMは、揺れ始めから効果を発揮します。小さな揺れでもダメージが蓄積されると、釘やビスの緩みが生じ耐力壁を損傷してしまいます。当初の建物の耐震性を守ることが制震の役割です。またあえて抵抗力を制御することで耐震躯体を傷めない特性になっています。</p>
          </div>
          <div class="mersystem_box_right">
            <div class="mersystem_img_full">
              <img src="<?php echo esc_url(IMG_URL . '/performance/performance_13.webp'); ?>" class="">
            </div>
          </div>
        </div>

        <div class="mersystem_box">
          <div class="mersystem_box_left">
            <div class="mersystem_title_box">
              <div>
                安全<br>
                その3
              </div>
              <div>
                地震のあらゆる<span class="font_orange">周期</span>に対応
              </div>
            </div>
            <p>地震は震度と周期で構成されています。その周期は単周期から長周期まであります。また、震源地からの距離や地盤等の条件により、周期が変化します。MER　SYSTEMはあらゆる周期に対応し、建物の倒壊の原因である共振現象やスリップ挙動を防ぎます。<br>
              ※共振現象とは地震の周期と建物の固有周期が一致することで、揺れが増幅されることです。
            </p>
          </div>
          <div class="mersystem_box_right">
            <div class="mersystem_img_full">
              <img src="<?php echo esc_url(IMG_URL . '/performance/performance_14.webp'); ?>" class="">
            </div>
          </div>
        </div>
      </div>
    </div>
  </section>

  <section class="commitment__security2 noto-sans-jp " id="quality3">
    <?php
    $quality = get_field('quality')[2];
    ?>
    <div class="  u-mb80 l_content_middle_80 support__content_t">
      <div class="support__content_text content_txt ">
        <div class="support__content_number">
          <img src="<?php echo esc_url(IMG_URL . '/number/number3.webp'); ?>" alt="">
        </div>
        <div class="common_subttl_deco_commitment">
          <p class="c_title_orangeLine_t"><span class="marker">高断熱</span></p>
        </div>
        <p class="common_meta_content">
          <?php echo $quality['title']; ?>
        </p>
        <div class="support__content_maintext">
          <?php echo $quality['txt']; ?>
        </div>
      </div>
      <div class="commitment__security2_content_img content_img">
        <img src="<?php echo esc_url($quality['img']); ?>" class="img_shadow">
      </div>
    </div>
    <div class="common_commitment_subttl mt-6">
      <span class="font_orange">豊後夢工房</span>の<span class="font_orange">高断熱仕様</span>
    </div>
    <div class="ua l_content_middle_70 bottom_p_3">
      <img src="<?php echo esc_url(IMG_URL . '/performance/performance_20.webp'); ?>">
    </div>
    <div class="commitment__security2_grade mt-6 u-mb80 l_content_middle_70">

      <div class="commitment__security2_img">
        <img src="<?php echo esc_url(IMG_URL . '/performance/performance_19.webp'); ?>">
      </div>
      <div class="commitment__security2_grade_content">
        <div class="grade_content_first">
          <div class="grade_content_ability">
            <h5> 断熱性能 </h5>
            <p>
              UA値<br>0.36以下
            </p>
          </div>
          <div class="grade_content_ability2">
            豊後夢工房の平均UA値<br>（断熱値・リレーヴ）<br>
            <h1>UA値0.36</h1>W/m2・k<br>
            ZEH基準を上回る<br class="sp">断熱性能をクリア！
          </div>
        </div>
      </div>
    </div>
  </section>

  <section class="insulation service_model_wrap2 u-mb80">
    <div class="insulation_perform mt-5">
      <p class="insulation_perform_ttl inter">
        <span class="font_orange">豊後夢工房</span>がご提供する<span class="font_orange">断熱性能</span>
      </p>
      <div class="insulation_perform_list top_m_none noto-sans-jp">
        <div class="insulation_perform_item">
          <div class="insulation_number">01.</div>
          <div class="insulation_content">冬暖かく夏涼しい</div>
        </div>
        <div class="insulation_perform_item">
          <div class="insulation_number">02.</div>
          <div class="insulation_content">吸音性の高い静かな環境</div>
        </div>
        <div class="insulation_perform_item">
          <div class="insulation_number">03.</div>
          <div class="insulation_content">環境と家計にやさしい</div>
        </div>
        <div class="insulation_perform_item">
          <div class="insulation_number">04.</div>
          <div class="insulation_content">長寿命断熱</div>
        </div>
        <div class="insulation_perform_item">
          <div class="insulation_number">05.</div>
          <div class="insulation_content">健康で安全</div>
        </div>
        <div class="insulation_perform_item">
          <div class="insulation_number">06.</div>
          <div class="insulation_content">結露に強い</div>
        </div>
      </div>
    </div>

  </section>

  <section class="commitment__security1 noto-sans-jp l_content_middle_80" id="quality4">
    <?php
    $quality = get_field('quality')[3];
    ?>
    <div class="commitment__security1__content u-mb80 support__content_t">
      <div class="support__content_text content_txt">
        <div class="support__content_number">
          <img src="<?php echo esc_url(IMG_URL . '/number/number4.webp'); ?>" alt="">
        </div>
        <div>
          <p class="c_title_orangeLine_t"><span class="marker">
              高気密</span>
          </p>
        </div>
        <p class="common_meta_content">
          <?php echo $quality['title']; ?>
        </p>
        <div class="commitment__security1_content_maintext">
          <?php echo wp_kses_post($quality['txt']); ?>
        </div>
      </div>
      <div class="commitment__security1_content_img content_img">
        <img src="<?php echo esc_url($quality['img']); ?>" class="img_shadow">
      </div>
    </div>

  </section>

  <section class="u-mb100">
    <div class="common_commitment_subttl mt-8">
      <span class="font_orange">厳しい品質基準</span> をクリアした高気密住宅
    </div>
    <div class="airtight_content l_content_middle_70">
      <div class="airtight_content_img">
        <img src="<?php echo esc_url(IMG_URL . '/performance/performance_29.webp'); ?>" class="img_shadow">
      </div>
      <div class="airtight_content_txt">
        <p class="airtight_txt1">C値の測定は建具、断熱施工後、気密工事終了後のタイミングで専門の「気密測定試験機」を使用し、行います。</p>
        <p class="airtight_txt2">気密性の高い快適な家づくりには、隙間から外気の流入や内気の流出を防ぐ必要があり、気密性が高ければ高いほど、換気が計画的に行え、快適に暮らすことができます。
        </p>
      </div>
    </div>


    <div class="l_content_middle_70 support__content_s bottom_p_7  border_bottom">
      <div class="airtight_img">
        <img src="<?php echo esc_url(IMG_URL . '/performance/performance_32.webp'); ?>" class="img_shadow">
      </div>
      <div class="airtight_img">
        <img src="<?php echo esc_url(IMG_URL . '/performance/performance_30.webp'); ?>" class="img_shadow">
      </div>
      <div class=" airtight_img">
        <img src="<?php echo esc_url(IMG_URL . '/performance/performance_31.webp'); ?>" class="img_shadow">
      </div>
    </div>

  </section>

  <section class="commitment__security2 noto-sans-jp l_content_middle_80 u-mb100" id="quality5">
    <?php
    $quality = get_field('quality')[4];
    ?>
    <div class=" support__content_t  support__content_t">
      <div class="support__content_text content_txt">
        <div class="support__content_number">
          <img src="<?php echo esc_url(IMG_URL . '/number/number5.webp'); ?>" alt="">
        </div>
        <div class="common_subttl_deco_commitment">
          <p class="c_title_orangeLine_t"><span class="marker">24時間換気システム</span></p>
        </div>
        <p class="common_meta_content">
          <?php echo $quality['title']; ?>
        </p>
        <div class="support__content_maintext ">
          <?php echo $quality['txt']; ?>
        </div>
      </div>
      <div class="commitment__security2_content_img content_img">
        <img src="<?php echo esc_url($quality['img']); ?>" class="img_shadow">
      </div>
    </div>
  </section>
  <div class="l_content_middle_70 insulation_perform_wrap_t">
    <div class="insulation_perform mt-10 u-mb80 ">
      <p class="insulation_perform_ttl inter">
        <span class="font_orange">豊後夢工房</span>がご提供する<span class="font_orange">換気性能</span>

      </p>
      <div class="insulation_perform_list noto-sans-jp">
        <div class="insulation_perform_item top_m_3_box">
          <div class="insulation_number">01.</div>
          <div class="insulation_content">快適温度</div>
        </div>
        <div class="insulation_perform_item">
          <div class="insulation_number">02.</div>
          <div class="insulation_content">新鮮換気</div>
        </div>
        <div class="insulation_perform_item">
          <div class="insulation_number">03.</div>
          <div class="insulation_content">省エネ</div>
        </div>

      </div>
    </div>
  </div>


  <div class="common_commitment_subttl mt-8">
    <span class="font_orange">世界最高クラス</span>の換気システム
  </div>
  <div class="l_content_middle_80">
    <div class="airflow_box top_p_5">
      <div class="airflow_img">
        <img src="<?php echo esc_url(IMG_URL . '/performance/performance_24.webp'); ?>" class="img_shadow" alt="品質のこだわり">
      </div>
      <div class="airflow_txt">
        <p>熱回収率93％24時間換気システム</p>
        <p>熱交換素子で外気との温度差を回収し、温度を一定に保つ換気システムです。換気システム単体ではできなかった熱の交換機能により無駄な光熱費のロスを防ぐことができます。</p>
      </div>
    </div>
    <div class="airflow_box bottom_p_5 top_p_3">
      <div class="airflow_img sp_tab">
        <img src="<?php echo esc_url(IMG_URL . '/performance/performance_25.webp'); ?>" class="img_shadow" alt="品質のこだわり">
      </div>
      <div class="airflow_txt">
        <p>ウイルス対策特殊フィルター</p>
        <p>家に空気を取り込む給気口に特殊フィルターで覆い、外からの汚染物質をしっかりガードします。花粉を99.8％PM2.5物質を98％カットしてきれいな空気だけを室内へ取り込みます。</p>
      </div>
      <div class="airflow_img pc">
        <img src="<?php echo esc_url(IMG_URL . '/performance/performance_25.webp'); ?>" class="img_shadow" alt="品質のこだわり">
      </div>
    </div>
  </div>
  <div class="common_commitment_subttl mt-8">
    <span class="font_orange">熱交換素子</span>と<span class="font_orange">快適温度</span>のイメージ
  </div>
  <div class="l_content_middle_50 l_content_middle_50sp top_p_3">
    <img src="<?php echo esc_url(IMG_URL . '/performance/performance_28.webp'); ?>" class="">

  </div>
  <div class="commitment_img_box l_content_middle_70 bottom_p_15">
    <div>
      <img src="<?php echo esc_url(IMG_URL . '/performance/performance_26.webp'); ?>" class="cold_img">
    </div>
    <div>
      <img src="<?php echo esc_url(IMG_URL . '/performance/performance_27.webp'); ?>" class="hot_img">
    </div>
  </div>


  <?php include get_template_directory() . '/common.php'   ?>


</main>
<?php get_footer(); ?>