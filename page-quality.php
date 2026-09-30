<?php
// Template Name: quality
if (!defined('ABSPATH')) {
  exit;
}
get_header();
?>
<main class="p-quality">
  <div class="c-pageMv u-mb100">
    <div class="c-pageMv__heading">
      <h2 class="c-pageMv__heading__title">
        品質へのこだわり
      </h2>
      <p class="c-pageMv__heading__subTitle">
        HIGH QUALITY
      </p>
    </div>
    <?php $mv = get_field('mv-quality-img'); ?>
    <?php if ($mv) : ?>
      <figure class="c-pageMv__visual" style="background-image: url('<?php echo esc_url($mv); ?>');"></figure>
    <?php endif; ?>
  </div>

  <section class="c-title__decoration">
    <div class="c-title__decoration__head">
      <h3 class="c-title--sectionLine u-mb40">品質へのこだわり</h3>
      <p class="c-title--orangeLine">
        <span class="marker">
          <span class="u-orange">高品質な住まい</span>を<br class="sp">ご提供するための<br>
          <span class="u-orange">5つ</span>のこだわり
        </span>
      </p>
    </div>
  </section>

  <nav class="p-quality__nav" aria-label="品質へのこだわり">
    <div class="p-quality__nav__heading">
      <span class="u-textOrange">豊後夢工房</span>がご提供する<span class="u-textOrange">住宅性能</span>と<span class="u-textOrange">品質</span>
    </div>
    <?php
    $quality_nav_items = [
      [
        'section_id' => 'quality1',
        'number' => 1,
        'label' => 'ZEH(ゼッチ)',
      ],
      [
        'section_id' => 'quality2',
        'number' => 2,
        'label' => '高耐震',
      ],
      [
        'section_id' => 'quality3',
        'number' => 3,
        'label' => '高断熱',
      ],
      [
        'section_id' => 'quality4',
        'number' => 4,
        'label' => '高気密',
      ],
      [
        'section_id' => 'quality5',
        'number' => 5,
        'label' => '換気システム',
      ],
    ];
    ?>
    <ul class="p-quality__nav__list">
      <?php foreach ($quality_nav_items as $nav_item) : ?>
        <li class="p-quality__nav__item">
          <a href="<?php echo esc_url('#' . $nav_item['section_id']); ?>" class="p-quality__nav__link">
            <div class="p-quality__nav__card">
              <div class="p-quality__nav__number">
                <img
                  class="p-quality__nav__numberImg"
                  src="<?php echo esc_url(IMG_URL . '/number/number' . $nav_item['number'] . '.webp'); ?>"
                  alt=""
                >
              </div>
              <div>
                <p class="p-quality__nav__label"><?php echo esc_html($nav_item['label']); ?></p>
              </div>
            </div>
          </a>
        </li>
      <?php endforeach; ?>
    </ul>
  </nav>

  <section class="p-quality__zeh" id="quality1">
    <div class="l-content--inner p-quality__feature__overview">
      <div class="p-quality__feature__overviewTxtWrap">
        <div class="p-quality__feature__overviewNum">
          <img src="<?php echo esc_url(IMG_URL . '/number/number1.webp'); ?>" alt="">
        </div>
        <div>
          <p class="p-quality__largeText">
            <span class="marker">ZEH(ゼッチ)</span>
          </p>
        </div>
        <p class="p-quality__feature__overviewStrong">
          ネット・ゼロ・エネルギー・ハウス
        </p>
        <div class="p-quality__feature__overviewDescription">
          家づくりで大切なのは、持続可能なことです。日々のランニングコストや経済性は欠かせません。私たちは、経済性と快適性を両立したZEH住宅を通じてエネルギー効率を最大限に高め、最新の再生可能エネルギーを取り入れることでランニングコストを大幅に削減しています。豊後夢工房ならではの価格で、コストを抑えたワンランク上のスマート住宅を実現します。
        </div>
      </div>
      <div class="p-quality__feature__overviewMedia">
        <img src="<?php echo esc_url(content_url('uploads/2024/07/performance_1.png')); ?>" class="img_shadow" alt="">
      </div>
    </div>
    <div class="p-quality__zeh__standard u-mb50 l-content--inner">
      <div class="p-quality__zeh__standardHeading u-mb30">
        <p class="p-quality__largeText">豊後夢工房は<span class="p-quality__zeh__standardHeadingEm"> <br class="u-none__pc--sp">ZEH住宅<br class="u-none__pc--sp"></span>が標準です。</p>
      </div>
      <div class="p-quality__zeh__standardBody">
        <div class="p-quality__zeh__faq">
          <p class="p-quality__zeh__faqQuestion">
            <span class="u-textOrange">ZEH住宅</span><br>
            (ネット・ゼロ・エネルギー・ハウス)ってなに？
          </p>
          <p class="p-quality__zeh__faqAnswer">
            高断熱性能で室内外の温度差をなくし、室内環境の質を維持しつつ、
            <span class="u-font__bold">省エネルギーを実現。</span>さらに<span class="u-font__bold">再生可能エネルギー</span>を導入し、
            <span class="marker">年間のエネルギー消費量を<span class="u-font__bold">実質ゼロ</span>とすることを目指した住宅</span>です。
          </p>
        </div>
        <div class="p-quality__zeh__points">
          <p class="p-quality__zeh__pointsHeading">
            <span class="u-orange--sizeInherit">ZEH</span>住宅<span class="u-orange--sizeInherit">3つ</span>の安心ポイント
          </p>
          <ul class="p-quality__zeh__pointsList">
            <li class="p-quality__zeh__pointsItem">
              <div class="p-quality__zeh__pointsMedia">
                <img class="p-quality__zeh__pointsImg" src="<?php echo esc_url(IMG_URL . '/performance/zeh_2.webp'); ?>" alt="ZEH">
              </div>
              <div class="p-quality__zeh__pointsItemBody">
                <p class="p-quality__zeh__pointsItemTitle">省エネ</p>
                <p class="p-quality__zeh__pointsItemText">エネルギーを<br>
                  極力使わない</p>
              </div>
            </li>
            <li class="p-quality__zeh__pointsItem">
              <div class="p-quality__zeh__pointsMedia">
                <img class="p-quality__zeh__pointsImg" src="<?php echo esc_url(IMG_URL . '/performance/zeh_3.webp'); ?>" alt="ZEH">
              </div>
              <div class="p-quality__zeh__pointsItemBody">
                <p class="p-quality__zeh__pointsItemTitle">創エネ</p>
                <p class="p-quality__zeh__pointsItemText">エネルギーを<br>創る</p>
              </div>
            </li>
            <li class="p-quality__zeh__pointsItem">
              <div class="p-quality__zeh__pointsMedia">
                <img class="p-quality__zeh__pointsImg" src="<?php echo esc_url(IMG_URL . '/performance/zeh_1.webp'); ?>" alt="ZEH">
              </div>
              <div class="p-quality__zeh__pointsItemBody">
                <p class="p-quality__zeh__pointsItemTitle">高断熱</p>
                <p class="p-quality__zeh__pointsItemText">エネルギーを<br>
                  逃がさない</p>
              </div>
            </li>
          </ul>
        </div>
      </div>
    </div>
  </section>

  <section class="p-quality__award u-mb100">
    <div class="p-quality__award__winner">
      <p class="p-quality__award__winnerHeading">
        ハウス・オブ・ザ・イヤー・イン・エナジー2020にて優秀賞を受賞
      </p>
      <div class="p-quality__award__winnerBody l-content--innerNarrow">
        <div class="p-quality__award__winnerMedia">
          <img class="p-quality__award__winnerImg" src="<?php echo esc_url(IMG_URL . '/performance/winner2020.webp'); ?>" alt="">
        </div>
        <p class="p-quality__award__winnerText">
          一般財団法人日本地域開発センターが主催する優れた省エネルギー住宅を表彰する制度「ハウス･オブ･ザ･イヤー･イン･エナジー2020」において、豊後夢工房の「Rireve」が「優秀賞」を受賞。豊後夢工房ではZEH住宅が標準仕様です。
        </p>
      </div>
    </div>
    <div class="p-quality__award__ranking">
      <p class="p-quality__sectionHeading">
        地域型住宅グリーン化事業 <br class="u-none__pc--sp">ZEH供給ランキング<span class="u-textOrange">大分県第2位</span>
      </p>
      <div class="p-quality__award__rankingBody p-quality__inner--wide">
        <p class="p-quality__award__rankingText">
          ZEHに特化した業界唯一の特別編集専門誌『ZEH MASTER 2024』
          ((株)アスクラスト『月刊スマートハウス』)の「令和5年度 地域型住宅
          グリーン化事業 全国ZEH供給ランキング」にて豊後夢工房が<span class="u-textOrange">大分県第</span>
          <span class="u-textOrange">2位</span>にランクイン。(※出典：令和5年度地域型住宅グリーン化事業 採
          択結果 適用申請書より集計) <br>
          今後も優れた省エネルギー性能と、環境負荷の低減につながる長寿命住宅への取り組みをすすめ、より多くのお客様に快適で地球にも家計にも優しいZEH住宅を推進してまいります。<br><br>
          <span class="u-font__bold">各モデルハウスにて豊後夢工房の住まいをご体感いただくことが出来ます。お気軽にお立ち寄りいただき、未来基準のエコ住宅をお確かめください。</span>
        </p>
        <div class="p-quality__award__rankingMedia">
          <img class="p-quality__award__rankingImg" src="<?php echo esc_url(IMG_URL . '/performance/smarthouse.webp'); ?>" alt="">
        </div>
      </div>
    </div>
  </section>

  <section class="p-quality__seismic" id="quality2">
    <div class="p-quality__feature__overview u-mb80 l-content--inner">
      <div class="p-quality__feature__overviewTxtWrap">
        <div class="p-quality__feature__overviewNum">
          <img src="<?php echo esc_url(IMG_URL . '/number/number2.webp'); ?>" alt="">
        </div>
        <div>
          <p class="p-quality__largeText"><span class="marker">高耐震</span></p>
        </div>
        <p class="p-quality__feature__overviewStrong">
          ZEH：普及実績および目標
        </p>
        <div class="p-quality__feature__overviewDescription">
          豊後夢工房は Sii:一般社団法人 環境共創イニシアチブによる令和 6 年度の ZEH ビルダー登録制度により、星5つ★★★★★の評価を頂きました。令和 7 年度も引き続き、Sii の執り行うネット・ゼロ・エネルギー・ハウス実証事業の定める「ZEH ビルダー」として登録いたします。つきましては過年度の実績と普及目標を公表いたします。
        </div>
      </div>
      <div class="p-quality__feature__overviewMedia">
        <img src="<?php echo esc_url(content_url('uploads/2025/06/画像3.jpg')); ?>" class="img_shadow" alt="">
      </div>
    </div>
    <div class="p-quality__seismic__grade mt-6 u-mb100 l-content--inner">
      <div class="p-quality__seismic__gradeMedia">
        <img class="p-quality__seismic__gradeImg img_shadow" src="<?php echo esc_url(IMG_URL . '/performance/performance_8.webp'); ?>" alt="">
      </div>
      <div class="p-quality__seismic__gradePanel">
        <div class="p-quality__seismic__gradeRow">
          <div class="p-quality__seismic__gradeBadge">
            <p class="p-quality__seismic__gradeBadgeTitle">耐震性能</p>
            <p class="p-quality__seismic__gradeBadgeText">標準仕様<br>
              耐震等級3
            </p>
          </div>
          <div class="p-quality__seismic__gradeDetail">
            豊後夢工房の標準仕様<br>
            <span class="p-quality__seismic__gradeValue">耐震等級3</span><br>
            大地震に何度も耐え<br class="u-none__pc--sp">られるほどの<br>
            耐震性能をクリア！<br>
          </div>
        </div>
        <p class="p-quality__seismic__gradeNote">
          耐震等級3を取得したうえで、制振装置でさらにダメージを軽減。
          豊後夢工房では、地震に強い家づくりに強いのが特徴です。
        </p>
      </div>
    </div>
    <p class="p-quality__sectionHeading mt-6">
      <span class="u-textOrange">木造軸組工法+ドリフトピン工法</span>が、<br class="u-none__pc--sp">建物を面で支える強固な構造に
    </p>
    <div class="p-quality__seismic__woodframe p-quality__inner--wide">
      <div class="p-quality__seismic__woodframeMedia">
        <img class="p-quality__seismic__woodframeImg img_shadow" src="<?php echo esc_url(content_url('uploads/2024/07/performance_9.png')); ?>" alt="">
      </div>
      <p class="p-quality__seismic__woodframeText">
        一般的な木造の家は、柱と梁（はり）で支えられています。この方法では、木材を組み合わせるために大きな穴を開けたり、細く削ったりするので、木材の強度が弱くなることがあります。<br><br>
        豊後夢工房では、独自の「金物」を使って木材を補強しています。この金物のおかげで、木材に穴を開けたり細くしたりする必要がなくなり、木材本来の強さを保つことができます。<br><br>
        さらに、金物を使うことで、柱と梁だけでなく、家全体を多面体で支える構造になります。これにより、地震に対してもより強い家を作ることができます。
      </p>
    </div>
    <p class="p-quality__sectionHeading">
      <span class="u-textOrange">制震装置</span>で大地震のエネルギーを大幅に吸収
    </p>
    <div class="p-quality__seismic__mersystem p-quality__inner--wide">
      <div class="p-quality__seismic__mersystemIntro">
        <div class="p-quality__seismic__mersystemMedia u-none__pc--tab">
          <img class="p-quality__seismic__mersystemImg img_shadow" src="<?php echo esc_url(content_url('uploads/2024/07/performance_10.png')); ?>" alt="">
        </div>
        <p class="p-quality__seismic__mersystemText">
          豊後夢工房で採用している「制震装置 MER SYSTEM」は、地震の揺れや加速度を大幅に抑えるシステムです。地震が起きた直後から素早くエネルギーを吸収し、建物に与える揺れを最大48％減少させます。これにより、あらゆる地震の揺れに効果を発揮し、建物への被害を大幅に軽減します。最近の大地震でも、MER SYSTEMを採用した住宅はほとんど被害がなく、多くのお客様から感謝の声をいただいています。
        </p>
        <div class="p-quality__seismic__mersystemMedia u-none__mobile--tab">
          <img class="p-quality__seismic__mersystemImg img_shadow" src="<?php echo esc_url(content_url('uploads/2024/07/performance_10.png')); ?>" alt="">
        </div>
      </div>
      <p class="p-quality__seismic__mersystemLink u-mb40">
        くわしくは<a href="https://www.seishin-system.com/products/" target="_blank" rel="noopener noreferrer">こちら</a>
      </p>
    </div>
    <p class="p-quality__sectionHeading mt-6">
      <span class="u-textOrange">安心</span>と<span class="u-textOrange">安全</span>を確立する<span class="u-textOrange">3</span>つの効果
    </p>
    <div class="p-quality__seismic__mersystemEffects l-content--innerNarrow">
      <ul class="p-quality__seismic__mersystemEffectsList">
        <li class="p-quality__seismic__mersystemEffectsItem">
          <div class="p-quality__seismic__mersystemEffectBody">
            <div class="p-quality__seismic__mersystemEffectHead">
              <p class="p-quality__seismic__mersystemEffectBadge">
                安全<br>
                その1
              </p>
              <p class="p-quality__seismic__mersystemEffectLead">
                地震エネルギーを<span class="u-textOrange">最大48％</span>吸収
              </p>
            </div>
            <p class="p-quality__seismic__mersystemEffectText">建物に伝わる地震のエネルギー(加速度)を約40%から48%吸収することができます。吸収することにより建物の変位と揺れを早く抑え、建物への負担を軽減します。</p>
          </div>
          <div class="p-quality__seismic__mersystemEffectMedia">
            <img class="p-quality__seismic__mersystemEffectImg" src="<?php echo esc_url(IMG_URL . '/performance/performance_12.webp'); ?>" alt="">
          </div>
        </li>
        <li class="p-quality__seismic__mersystemEffectsItem">
          <div class="p-quality__seismic__mersystemEffectBody">
            <div class="p-quality__seismic__mersystemEffectHead">
              <p class="p-quality__seismic__mersystemEffectBadge">
                安全<br>
                その2
              </p>
              <p class="p-quality__seismic__mersystemEffectLead">
                揺れ始めから瞬時に<span class="u-textOrange">減衰</span>
              </p>
            </div>
            <p class="p-quality__seismic__mersystemEffectText">シングルチューブ構造を採用したオイルダンパーのMER　SYSTEMは、揺れ始めから効果を発揮します。小さな揺れでもダメージが蓄積されると、釘やビスの緩みが生じ耐力壁を損傷してしまいます。当初の建物の耐震性を守ることが制震の役割です。またあえて抵抗力を制御することで耐震躯体を傷めない特性になっています。</p>
          </div>
          <div class="p-quality__seismic__mersystemEffectMedia">
            <img class="p-quality__seismic__mersystemEffectImg" src="<?php echo esc_url(IMG_URL . '/performance/performance_13.webp'); ?>" alt="">
          </div>
        </li>
        <li class="p-quality__seismic__mersystemEffectsItem">
          <div class="p-quality__seismic__mersystemEffectBody">
            <div class="p-quality__seismic__mersystemEffectHead">
              <p class="p-quality__seismic__mersystemEffectBadge">
                安全<br>
                その3
              </p>
              <p class="p-quality__seismic__mersystemEffectLead">
                地震のあらゆる<span class="u-textOrange">周期</span>に対応
              </p>
            </div>
            <p class="p-quality__seismic__mersystemEffectText">地震は震度と周期で構成されています。その周期は単周期から長周期まであります。また、震源地からの距離や地盤等の条件により、周期が変化します。MER　SYSTEMはあらゆる周期に対応し、建物の倒壊の原因である共振現象やスリップ挙動を防ぎます。<br>
              ※共振現象とは地震の周期と建物の固有周期が一致することで、揺れが増幅されることです。
            </p>
          </div>
          <div class="p-quality__seismic__mersystemEffectMedia">
            <img class="p-quality__seismic__mersystemEffectImg" src="<?php echo esc_url(IMG_URL . '/performance/performance_14.webp'); ?>" alt="">
          </div>
        </li>
      </ul>
    </div>
  </section>

  <section class="p-quality__thermal" id="quality3">
    <div class="l-content--inner p-quality__feature__overview u-mb80">
      <div class="p-quality__feature__overviewTxtWrap">
        <div class="p-quality__feature__overviewNum">
          <img src="<?php echo esc_url(IMG_URL . '/number/number3.webp'); ?>" alt="">
        </div>
        <div>
          <p class="p-quality__largeText"><span class="marker">高断熱</span></p>
        </div>
        <p class="p-quality__feature__overviewStrong">
          安心のW地震対策
        </p>
        <div class="quality__feature__overviewDescription">
          豊後夢工房では、地震に強い家づくりをしています。私たちは、二つの安心な地震対策を標準で取り入れています。震度7相当の揺れに複数回耐える事のできる、「壊れない耐震工法」。地震エネルギーを約1/2に軽減する「揺れない制震装置」。この二つの地震対策で、豊後夢工房で建てた家は、いつでも安心で安全な住まいです。
        </div>
      </div>
      <div class="p-quality__feature__overviewMedia">
        <img src="<?php echo esc_url(content_url('uploads/2024/07/performance_7-1.png')); ?>" class="img_shadow" alt="">
      </div>
    </div>
    <p class="p-quality__sectionHeading mt-6">
      <span class="u-textOrange">豊後夢工房</span>の<span class="u-textOrange">高断熱仕様</span>
    </p>
    <div class="p-quality__thermal__chart l-content--innerNarrow p-quality__thermal__chart--spaced">
      <img class="p-quality__thermal__chartImg" src="<?php echo esc_url(IMG_URL . '/performance/performance_20.webp'); ?>" alt="">
    </div>
    <div class="p-quality__thermal__grade l-content--innerNarrow mt-6 u-mb80">
      <div class="p-quality__thermal__gradeMedia">
        <img class="p-quality__thermal__gradeImg" src="<?php echo esc_url(IMG_URL . '/performance/performance_19.webp'); ?>" alt="">
      </div>
      <div class="p-quality__thermal__gradePanel">
        <div class="p-quality__thermal__gradeRow">
          <div class="p-quality__thermal__gradeBadge">
            <p class="p-quality__thermal__gradeBadgeTitle"> 断熱性能 </p>
            <p class="p-quality__thermal__gradeBadgeText">
              UA値<br>0.36以下
            </p>
          </div>
          <div class="p-quality__thermal__gradeDetail">
            豊後夢工房の平均UA値<br>（断熱値・リレーヴ）<br>
            <span class="p-quality__thermal__gradeValue">UA値0.36</span>W/m2・k<br>
            ZEH基準を上回る<br class="u-none__pc--sp">断熱性能をクリア！
          </div>
        </div>
      </div>
    </div>
    <div class="p-quality__thermal__benefits p-quality__inner--wide u-mb100">
      <p class="p-quality__thermal__benefitsHeading">
        <span class="u-textOrange">豊後夢工房</span>がご提供する<span class="u-textOrange">断熱性能</span>
      </p>
      <?php
      $thermal_benefits = [
        '冬暖かく夏涼しい',
        '吸音性の高い静かな環境',
        '環境と家計にやさしい',
        '長寿命断熱',
        '健康で安全',
        '結露に強い',
      ];
      ?>
      <ul class="p-quality__thermal__benefitsList">
        <?php foreach ($thermal_benefits as $index => $benefit_label) : ?>
          <li class="p-quality__thermal__benefitsItem">
            <span class="p-quality__thermal__benefitsNumber"><?php echo esc_html(sprintf('%02d.', $index + 1)); ?></span>
            <span class="p-quality__thermal__benefitsLabel"><?php echo esc_html($benefit_label); ?></span>
          </li>
        <?php endforeach; ?>
      </ul>
    </div>
  </section>

  <section class="p-quality__airtight u-mb100" id="quality4">
    <div class="l-content--inner p-quality__feature__overview u-mb80">
      <div class="p-quality__feature__overviewTxtWrap">
        <div class="p-quality__feature__overviewNum">
          <img src="<?php echo esc_url(IMG_URL . '/number/number4.webp'); ?>" alt="">
        </div>
        <div>
          <p class="c_title_orangeLine_t"><span class="marker">
              高気密</span>
          </p>
        </div>
        <p class="p-quality__feature__overviewStrong">
          ZEH基準を上回る断熱性能を標準仕様
        </p>
        <p class="p-quality__feature__overviewText">
          私たちの家は、ZEH（ゼロ・エネルギー・ハウス）基準よりも高い断熱性能を標準としています。この高い断熱性能により、外の気温の変化が室内にあまり影響しません。そのため、一年を通して快適な室内の暮らしを実現しています。
        </p>
      </div>
      <div class="p-quality__feature__overviewMedia">
        <img src="<?php echo esc_url(content_url('uploads/2024/07/performance_18.png')); ?>" class="img_shadow" alt="">
      </div>
    </div>
    <p class="p-quality__sectionHeading mt-8">
      <span class="u-textOrange">厳しい品質基準</span> をクリアした高気密住宅
    </p>
    <div class="p-quality__airtight__panel p-quality__inner--wide">
      <div class="p-quality__airtight__panelMedia">
        <img class="p-quality__airtight__panelImg img_shadow" src="<?php echo esc_url(IMG_URL . '/performance/performance_29.webp'); ?>" alt="">
      </div>
      <div class="p-quality__airtight__panelBody">
        <p class="p-quality__airtight__panelLead">C値の測定は建具、断熱施工後、気密工事終了後のタイミングで専門の「気密測定試験機」を使用し、行います。</p>
        <p class="p-quality__airtight__panelText">気密性の高い快適な家づくりには、隙間から外気の流入や内気の流出を防ぐ必要があり、気密性が高ければ高いほど、換気が計画的に行え、快適に暮らすことができます。
        </p>
      </div>
    </div>
    <div class="p-quality__airtight__gallery  p-quality__inner--wide p-quality__airtight__gallery--bordered">
      <div class="p-quality__airtight__galleryItem">
        <img class="p-quality__airtight__galleryImg img_shadow" src="<?php echo esc_url(IMG_URL . '/performance/performance_32.webp'); ?>" alt="">
      </div>
      <div class="p-quality__airtight__galleryItem">
        <img class="p-quality__airtight__galleryImg img_shadow" src="<?php echo esc_url(IMG_URL . '/performance/performance_30.webp'); ?>" alt="">
      </div>
      <div class="p-quality__airtight__galleryItem">
        <img class="p-quality__airtight__galleryImg img_shadow" src="<?php echo esc_url(IMG_URL . '/performance/performance_31.webp'); ?>" alt="">
      </div>
    </div>
  </section>

  <section class="p-quality__ventilation" id="quality5">
    <div class="p-quality__inner--narrow p-quality__ventilation__overview">
      <div class="p-quality__feature__overview u-mb80">
        <div class="p-quality__feature__overviewTxtWrap">
          <div class="p-quality__feature__overviewNum">
            <img src="<?php echo esc_url(IMG_URL . '/number/number5.webp'); ?>" alt="">
          </div>
          <div>
            <p class="c_title_orangeLine_t"><span class="marker">24時間換気システム</span></p>
          </div>
          <p class="p-quality__feature__overviewStrong">
            徹底的な気密施工
          </p>
          <p class="p-quality__feature__overviewText">
            全体の気密性能を向上させ、快適な室内環境を実現するために不可欠です。隙間が少ないことで、外気の影響を受けにくくなり、冬でも暖かく、夏でも涼しい環境を保つことができます。また、エネルギー効率も向上し、光熱費の節約にもつながります。
          </p>
        </div>
        <div class="p-quality__feature__overviewMedia">
          <img src="<?php echo esc_url(content_url('uploads/2024/07/performance_21.png')); ?>" class="img_shadow" alt="">
        </div>
      </div>
    </div>
    <div class="p-quality__ventilation__benefits l-content--innerNarrow">
      <div class="p-quality__ventilation__benefitsContainer u-mb80">
        <p class="p-quality__ventilation__benefitsHeading">
          <span class="u-textOrange">豊後夢工房</span>がご提供する<span class="u-textOrange">換気性能</span>
        </p>
        <ul class="p-quality__ventilation__benefitsList">
          <li class="p-quality__ventilation__benefitsTopItem">
            <div class="p-quality__ventilation__benefitsItem p-quality__ventilation__benefitsItem--center">
              <span class="p-quality__ventilation__benefitsNumber">01.</span>
              <span class="p-quality__ventilation__benefitsLabel">快適温度</span>
            </div>
          </li>
          <li class="p-quality__ventilation__benefitsItem">
            <span class="p-quality__ventilation__benefitsNumber">02.</span>
            <span class="p-quality__ventilation__benefitsLabel">新鮮換気</span>
          </li>
          <li class="p-quality__ventilation__benefitsItem">
            <span class="p-quality__ventilation__benefitsNumber">03.</span>
            <span class="p-quality__ventilation__benefitsLabel">省エネ</span>
          </li>
        </ul>
      </div>
    </div>
    <p class="p-quality__sectionHeading mt-8">
      <span class="u-textOrange">世界最高クラス</span>の換気システム
    </p>
    <div class="l-content--inner">
      <div class="p-quality__ventilation__airflow p-quality__ventilation__airflow--spacedTop">
        <div class="p-quality__ventilation__airflowMedia">
          <img class="p-quality__ventilation__airflowImg img_shadow" src="<?php echo esc_url(IMG_URL . '/performance/performance_24.webp'); ?>" alt="品質のこだわり">
        </div>
        <div class="p-quality__ventilation__airflowBody">
          <p class="p-quality__ventilation__airflowTitle">熱回収率93％24時間換気システム</p>
          <p class="p-quality__ventilation__airflowText">熱交換素子で外気との温度差を回収し、温度を一定に保つ換気システムです。換気システム単体ではできなかった熱の交換機能により無駄な光熱費のロスを防ぐことができます。</p>
        </div>
      </div>
      <div class="p-quality__ventilation__airflow p-quality__ventilation__airflow--stacked">
        <div class="p-quality__ventilation__airflowMedia u-none__pc--tab">
          <img class="p-quality__ventilation__airflowImg img_shadow" src="<?php echo esc_url(IMG_URL . '/performance/performance_25.webp'); ?>" alt="品質のこだわり">
        </div>
        <div class="p-quality__ventilation__airflowBody">
          <p class="p-quality__ventilation__airflowTitle">ウイルス対策特殊フィルター</p>
          <p class="p-quality__ventilation__airflowText">家に空気を取り込む給気口に特殊フィルターで覆い、外からの汚染物質をしっかりガードします。花粉を99.8％PM2.5物質を98％カットしてきれいな空気だけを室内へ取り込みます。</p>
        </div>
        <div class="p-quality__ventilation__airflowMedia u-none__mobile--tab">
          <img class="p-quality__ventilation__airflowImg img_shadow" src="<?php echo esc_url(IMG_URL . '/performance/performance_25.webp'); ?>" alt="品質のこだわり">
        </div>
      </div>
    </div>
    <p class="p-quality__sectionHeading mt-8">
      <span class="u-textOrange">熱交換素子</span>と<span class="u-textOrange">快適温度</span>のイメージ
    </p>
    <div class="p-quality__ventilation__diagram  p-quality__ventilation__diagram--spaced">
      <img class="p-quality__ventilation__diagramImg" src="<?php echo esc_url(IMG_URL . '/performance/performance_28.webp'); ?>" alt="">
    </div>
    <div class="p-quality__ventilation__compare l-content--innerNarrow p-quality__ventilation__compare--spaced">
      <div class="p-quality__ventilation__compareItem">
        <img class="p-quality__ventilation__compareImg p-quality__ventilation__compareImg--cold" src="<?php echo esc_url(IMG_URL . '/performance/performance_26.webp'); ?>" alt="">
      </div>
      <div class="p-quality__ventilation__compareItem">
        <img class="p-quality__ventilation__compareImg p-quality__ventilation__compareImg--hot" src="<?php echo esc_url(IMG_URL . '/performance/performance_27.webp'); ?>" alt="">
      </div>
    </div>
  </section>


  <?php get_template_part('template-parts/common'); ?>


</main>
<?php get_footer(); ?>