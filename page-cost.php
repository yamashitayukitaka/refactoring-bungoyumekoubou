<?php
// Template Name: cost
if (!defined('ABSPATH')) {
  exit;
}
get_header();
?>
<main>
  <div class="c-pageMv u-mb100">
    <div class="c-pageMv__heading">
      <h2 class="c-pageMv__heading__title">
        コストへのこだわり
      </h2>
      <p class="c-pageMv__heading__subTitle">
        COST PERFORMANCE
      </p>
    </div>
    <?php $mv = get_field('mv-cost-img'); ?>
    <?php if ($mv) : ?>
      <figure class="c-pageMv__visual" style="background-image: url('<?php echo esc_url($mv); ?>');"></figure>
    <?php endif; ?>
  </div>

  <!-- トップタイトル概要 -->
  <section class="c-title__decoration">
    <div class="c-title__decoration__head">
      <h3 class="c-title--sectionLine u-mb40">コストへのこだわり</h3>
      <p class="c-title--orangeLine">
        <span class="marker">
          大手他社よりも<br class="sp"><span class="u-orange">ワンランク上</span>の<span class="u-orange">設備</span>、<br>
          <span class="u-orange">プランニング</span>、<span class="u-orange">デザ</span><span class="u-orange">イン</span>、<br>
          <span class="u-orange">高品質</span>を<span class="u-orange">低コスト</span>で提供します。
        </span>
      </p>
    </div>
  </section>


  <!-- メニュー -->
  <nav class="p-cost__nav" aria-label="コストへのこだわり">
    <div class="p-cost__nav__heading">
      <span class="u-textOrange">豊後夢工房</span>がこだわる<span class="u-textOrange">コスト</span>へのこだわり
    </div>
    <ul class="p-cost__nav__list">
      <li class="p-cost__nav__item">
        <a href="#cost1" class="p-cost__nav__link">
          <div class="p-cost__nav__card">
            <div class="p-cost__nav__number">
              <img class="p-cost__nav__numberImg" src="<?php echo esc_url(IMG_URL . '/number/number1.webp'); ?>" alt="">
            </div>
            <div>
              <p class="p-cost__nav__label">
                <span class="p-cost__nav__emphasis">経済的な暮らし</span>を<br>
                サポートする家づくり
              </p>
            </div>
          </div>
        </a>
      </li>
      <li class="p-cost__nav__item">
        <a href="#cost2" class="p-cost__nav__link">
          <div class="p-cost__nav__card">
            <div class="p-cost__nav__number">
              <img class="p-cost__nav__numberImg" src="<?php echo esc_url(IMG_URL . '/number/number2.webp'); ?>" alt="">
            </div>
            <div>
              <p class="p-cost__nav__label">
                充実した<br>
                <span class="p-cost__nav__emphasis">標準設備</span>
              </p>
            </div>
          </div>
        </a>
      </li>
      <li class="p-cost__nav__item">
        <a href="#cost3" class="p-cost__nav__link">
          <div class="p-cost__nav__card">
            <div class="p-cost__nav__number">
              <img class="p-cost__nav__numberImg" src="<?php echo esc_url(IMG_URL . '/number/number3.webp'); ?>" alt="">
            </div>
            <div>
              <p class="p-cost__nav__label">
                <span class="p-cost__nav__emphasis">大手他社</span>にはできない<br class="pc_tab">
                <span class="p-cost__nav__emphasis">丁寧な</span>プランニング
              </p>
            </div>
          </div>
        </a>
      </li>
      <li class="p-cost__nav__item">
        <a href="#cost4" class="p-cost__nav__link">
          <div class="p-cost__nav__card">
            <div class="p-cost__nav__number">
              <img class="p-cost__nav__numberImg" src="<?php echo esc_url(IMG_URL . '/number/number4.webp'); ?>" alt="">
            </div>
            <div>
              <p class="p-cost__nav__label">
                <span class="p-cost__nav__emphasis">ワンストップ</span>での<br>
                サポート体制
              </p>
            </div>
          </div>
        </a>
      </li>
    </ul>
  </nav>


  <section class="p-cost__points">
    <!-- point1 -->
    <section class="p-cost__economy" id="cost1">
      <div class="p-cost__economy__container">
        <div class="p-cost__points__media p-cost__points__media--right">
          <img class="p-cost__points__mediaImg" src="<?php echo esc_url(IMG_URL . '/cost/cost_1.png'); ?>" alt="">
        </div>
        <div class="p-cost__points__panel p-cost__points__panel--left">
          <div class="p-cost__points__badge">
            <img class="p-cost__points__badgeImg" src="<?php echo esc_url(IMG_URL . '/common/point1.webp'); ?>" alt="">
          </div>
          <div>
            <p class="c-title--orangeLine p-cost__points__headline">
              <span class="marker">
                <span class="u-orange">経済的な暮らし</span>を<br>
                サポートする家づくり
              </span>
            </p>
          </div>
          <div class="p-cost__points__text u-mb25">
            豊後夢工房では、最新の太陽光発電システムを採用し、高い気密性と断熱性を備えた標準仕様の設計と熱交換式換気システムを提供しています。これにより、住んでからも光熱費を削減することができます。暮らしのスタートから経済的な生活をサポートします。
          </div>
        </div>
      </div>

      <p class="p-cost__section__subtitle">
        <span class="u-orange">経済的</span>な暮らしをサポートする<br class="sp"><span class="u-orange">3</span>つのポイント
      </p>
      <?php
      $economy_points = [
        [
          'img' => '/cost/cost_2.webp',
          'number' => '/number/number1.webp',
          'label' => '太陽光パネル',
          'text' => '従来よりも25％発電力の高い最新高性能太陽光パネルを、大手他社よりも低価格で提供が可能。業界最長の40年間の保証が付いており、長期間にわたり安心してご利用いただけます。',
        ],
        [
          'img' => '/cost/cost_3.webp',
          'number' => '/number/number2.webp',
          'label' => '高断熱・高気密',
          'text' => '断熱樹脂サッシやLow-Eガラス、基礎断熱、W断熱など、高い断熱性と気密性を備えた素材を使用しています。',
        ],
        [
          'img' => '/cost/cost_4.webp',
          'number' => '/number/number3.webp',
          'label' => '高性能換気システム',
          'text' => '世界トップクラスの熱交換率約93％の高性能換気システムを標準で採用しています。換気システム+高気密性+高断熱性を組み合わせて、快適で経済的な生活をサポートします。',
        ],
      ];
      ?>
      <ul class="p-cost__economy__list">
        <?php foreach ($economy_points as $point) : ?>
          <li class="p-cost__economy__item">
            <img class="p-cost__economy__itemImg" src="<?php echo esc_url(IMG_URL . $point['img']); ?>" alt="コストへのこだわり">
            <div class="p-cost__economy__itemLabel">
              <div class="p-cost__economy__itemLabelIcon">
                <img class="p-cost__economy__itemLabelImg" src="<?php echo esc_url(IMG_URL . $point['number']); ?>" alt="">
              </div>
              <div class="p-cost__economy__itemLabelText">
                <?php echo esc_html($point['label']); ?>
              </div>
            </div>
            <p class="p-cost__economy__itemDesc"><?php echo esc_html($point['text']); ?></p>
          </li>
        <?php endforeach; ?>
      </ul>
    </section>

    <section class="p-cost__facility" id="cost2">
      <div class="p-cost__facility__container">
        <div class="p-cost__points__media">
          <img class="p-cost__points__mediaImg" src="<?php echo esc_url(IMG_URL . '/cost/cost_5.png'); ?>" alt="">
        </div>
        <div class="p-cost__points__panel p-cost__points__panel--right">
          <div class="p-cost__points__badge">
            <img class="p-cost__points__badgeImg" src="<?php echo esc_url(IMG_URL . '/common/point2.webp'); ?>" alt="">
          </div>
          <div>
            <p class="c-title--orangeLine u-mb10 p-cost__points__headline">
              <span class="marker">
                充実した<span class="u-orange">標準設備</span></span>
            </p>
          </div>
          <div class="p-cost__points__text u-mb25">
            標準仕様にお客様が望む設備が多く含まれているので、追加費用が少ないことを特徴としています。
          </div>
        </div>
      </div>

      <p class="p-cost__section__subtitle">
        <span class="u-orange">豊後夢工房</span>の標準設備<br class="sp"><span class="u-orange">3</span>つのポイント
      </p>
      <?php
      $facility_points = [
        [
          'img' => '/cost/cost_6.webp',
          'number' => '/number/number1.webp',
          'label' => '快適',
        ],
        [
          'img' => '/cost/cost_7.webp',
          'number' => '/number/number2.webp',
          'label' => '省エネ',
        ],
        [
          'img' => '/cost/cost_8.webp',
          'number' => '/number/number3.webp',
          'label' => '耐震',
        ],
      ];
      ?>
      <ul class="p-cost__facility__list">
        <?php foreach ($facility_points as $point) : ?>
          <li class="p-cost__facility__item">
            <img class="p-cost__facility__itemImg" src="<?php echo esc_url(IMG_URL . $point['img']); ?>" alt="コストへのこだわり">
            <div class="p-cost__facility__itemLabel">
              <div class="p-cost__facility__itemLabelIcon">
                <img class="p-cost__facility__itemLabelImg" src="<?php echo esc_url(IMG_URL . $point['number']); ?>" alt="">
              </div>
              <div class="p-cost__facility__itemLabelText">
                <?php echo esc_html($point['label']); ?>
              </div>
            </div>
          </li>
        <?php endforeach; ?>
      </ul>
      <p class="p-cost__facility__description">
        家づくりで気になる、快適性能や省エネ設備、 <br class="sp">耐震設備が全てセットに含まれているので、<br>
        追加費用が掛かりにくいのが特徴です。
      </p>

    </section>

    


    
    <section class="p-cost__support" id="cost3">
      <div class="p-cost__support__container">
        <div class="p-cost__points__media p-cost__points__media--right">
          <img class="p-cost__points__mediaImg" src="<?php echo esc_url(IMG_URL . '/cost/cost_9.png'); ?>" alt="">
        </div>
        <div class="p-cost__points__panel p-cost__points__panel--left">
          <div class="p-cost__points__badge">
            <img class="p-cost__points__badgeImg" src="<?php echo esc_url(IMG_URL . '/common/point3.webp'); ?>" alt="">
          </div>
          <div>
            <p class="c-title--orangeLine p-cost__points__headline">
              <span class="marker">
                <span class="u-orange">ワンストップ</span>での<br>
                サポート体制</span>
            </p>
          </div>
          <div class="p-cost__points__text u-mb25">
            自社土地による土地の提案から家づくりの相談、無料FP相談、ローンの手続きまで、全てのステップをワンストップでサポートしています。豊後夢工房では一括して対応するので、費用や時間を節約しながら家を建てることができます。
          </div>
        </div>
      </div>

      <ul class="p-cost__points__cardList">
        <li class="p-cost__points__card p-cost__points__card--overlapEnd">
          <div class="p-cost__points__cardInner">
            <div class="p-cost__points__cardMedia">
              <img class="p-cost__points__cardImg" src="<?php echo esc_url(IMG_URL . '/cost/cost_10.webp'); ?>" alt="">
            </div>
            <div class="p-cost__points__cardBody">
              <p class="p-cost__points__cardTitle">
                <span class="u-orange">土地探しのサポート</span>
              </p>
              <p class="p-cost__points__cardText">
                お客様のご要望に合った土地探しをサポートします。私たちは、専門の不動産スタッフが責任を持って土地探しを行います。営業スタッフではなく、専門家が豊富な経験と情報をもとに、最適な土地を見つけます。
              </p>
              <div class="p-cost__points__cardAction">
                <a class="link__btn" href="<?php echo esc_url(home_url('/property/')); ?>">土地・物件情報へ</a>
              </div>
            </div>
          </div>
        </li>
        <li class="p-cost__points__card p-cost__points__card--overlapStart">
          <div class="p-cost__points__cardInner">
            <div class="p-cost__points__cardMedia u-none__pc--tab">
              <img class="p-cost__points__cardImg" src="<?php echo esc_url(IMG_URL . '/cost/cost_11.webp'); ?>" alt="">
            </div>
            <div class="p-cost__points__cardBody">
              <p class="p-cost__points__cardTitle">
                <span class="u-orange">無料FP相談</span>
              </p>
              <p class="p-cost__points__cardText">
                プランを考える前に、ファイナンシャルプランナー（FP）に相談できるので、お金の心配も安心です。自分の予算やライフスタイルに合わせて、無料で相談することができます。無理な営業などは一切いたしませんので、安心してご相談ください。
              </p>
            </div>
            <div class="p-cost__points__cardMedia u-none__mobile--tab">
              <img class="p-cost__points__cardImg" src="<?php echo esc_url(IMG_URL . '/cost/cost_11.webp'); ?>" alt="">
            </div>
          </div>
        </li>
      </ul>

    </section>
   
    
    <section class="p-cost__plan" id="cost4">
      <div class="p-cost__plan__container">
        <div class="p-cost__points__media">
          <img class="p-cost__points__mediaImg" src="<?php echo esc_url(IMG_URL . '/cost/cost_12.png'); ?>" alt="">
        </div>
        <div class="p-cost__points__panel p-cost__points__panel--right">
          <div class="p-cost__points__badge">
            <img class="p-cost__points__badgeImg" src="<?php echo esc_url(IMG_URL . '/common/point4.webp'); ?>" alt="">
          </div>
          <div>
            <p class="c-title--orangeLine p-cost__points__headline">
              <span class="marker">
                <span class="u-orange">大手他社</span>にはできない<br>
                <span class="u-orange">丁寧</span>なプランニング</span>
            </p>
          </div>
          <div class="p-cost__points__text u-mb25">
            豊後夢工房では、一人一人の暮らしに向き合う、丁寧なプランニングを大切にしております。無理のない計画で、契約後の価格変動を最小限に抑え、予想外の出費がおこりにくいように努めています。また、初めてのお客様にも安心してもらえるようわかりやすいプランニングやデザイン案を提案。イメージと違ったなどの失敗を防ぎ、お客様の負担を軽減します。
          </div>
        </div>
      </div>

      <ul class="p-cost__points__cardList">
        <li class="p-cost__points__card p-cost__points__card--overlapEnd">
          <div class="p-cost__points__cardInner">
            <div class="p-cost__points__cardMedia">
              <img class="p-cost__points__cardImg" src="<?php echo esc_url(IMG_URL . '/cost/cost_13.webp'); ?>" alt="">
            </div>
            <div class="p-cost__points__cardBody">
              <p class="p-cost__points__cardTitle">
                <span class="u-orange">無料間取り図、3Dパース</span>を作成
              </p>
              <p class="p-cost__points__cardText">
                大手他社では、契約後完了後に間取り図面などを作成することが多いですが、豊後夢工房では、ご要望を教えていただければ間取り図、3Dパースも含めたプランニングも無料で作成しています。
              </p>
            </div>
          </div>
        </li>
        <li class="p-cost__points__card p-cost__points__card--overlapStart p-cost__points__card--sectionEnd">
          <div class="p-cost__points__cardInner">
            <div class="p-cost__points__cardMedia u-none__pc--tab">
              <img class="p-cost__points__cardImg" src="<?php echo esc_url(IMG_URL . '/cost/cost_14.webp'); ?>" alt="">
            </div>
            <div class="p-cost__points__cardBody">
              <p class="p-cost__points__cardTitle">
                プランニング前の<span class="u-orange">土地</span>の<br>
                <span class="u-orange">状況確認</span>もしっかりと
              </p>
              <p class="p-cost__points__cardText">
                豊後夢工房ではプランニング前に事前に土地のや周辺環境の確認をしっかりと行います。
                周辺道路、建物高低差などしっかり調査したうえで丁寧にプランニングを行うので、予想外のコストを抑えます。
              </p>
            </div>
            <div class="p-cost__points__cardMedia u-none__mobile--tab">
              <img class="p-cost__points__cardImg" src="<?php echo esc_url(IMG_URL . '/cost/cost_14.webp'); ?>" alt="">
            </div>
          </div>
        </li>
      </ul>



    </section>

  </section>

  <?php get_template_part('template-parts/common'); ?>


</main>
<?php get_footer(); ?>