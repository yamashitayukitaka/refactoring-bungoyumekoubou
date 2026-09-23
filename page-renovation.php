<?php
// Template Name: renovation
if (!defined('ABSPATH')) exit;
get_header();
?>
<main class="p-renovation">
  <div class="c-pageMv u-mb100">
    <div class="c-pageMv__heading">
      <h2 class="c-pageMv__heading__title">
        ゆめリフォーム
      </h2>
      <p class="c-pageMv__heading__subTitle">
        RENOVATION
      </p>
    </div>
    <?php $mv = get_field('mv-renovation-img'); ?>
    <?php if ($mv) : ?>
      <figure class="c-pageMv__visual" style="background-image: url('<?php echo esc_url($mv); ?>');"></figure>
    <?php endif; ?>
  </div>

  <!-- トップタイトル概要 -->
  <section class="p-renovation__intro">
    <div class="c-title__head">
      <h3 class="c-title--sectionLine u-mb40">ゆめリフォーム</h3>
      <p class="c-title--orangeLine">
        <span class="marker">
          あなたの<span class="u-orange">大切な住まい</span>を、<br>
          もっと<span class="u-orange">素敵に</span>、もっと<span class="u-orange">快適</span>に
        </span>
      </p>
    </div>
  </section>

  <section class="p-renovation__about">
    <div class="p-renovation__about__hero">
      <div class="p-renovation__about__media p-renovation__about__media--right">
        <img class="p-renovation__about__mediaImg" src="<?php echo esc_url(IMG_URL . '/renovation/about.png'); ?>" alt="">
      </div>
      <div class="p-renovation__about__panel p-renovation__about__panel--left">
        <div class="p-renovation__about__titleWrap">
          <p class="p-renovation__about__title">
            <span class="marker">ゆめリフォーム</span>
          </p>
        </div>
        <div class="p-renovation__about__text">
          あなたの大切な住まいを、もっと素敵に、もっと快適に変えてみませんか？「ゆめリフォーム」で、古くなったお家もまるで新築のように生まれ変わります。<br>
          改築や増築、水回りの交換から外構工事、耐震補強まで、あらゆるリフォームをお任せください。ワクワクするような新しい生活を、夢工房と一緒に実現しましょう。
        </div>
      </div>
    </div>
  </section>

  <section class="p-renovation__beforeAfter">
    <h3 class="p-renovation__sectionTitle">ビフォーアフター</h3>
    <div class="p-renovation__inner p-renovation__compare">
      <ul class="p-renovation__compare__list">
        <li class="p-renovation__compare__item">
          <div class="p-renovation__compare__primary">
            <div class="p-renovation__compare__row">
              <div class="p-renovation__compare__afterMain">
                <img class="p-renovation__compare__img" src="<?php echo esc_url(IMG_URL . '/renovation/beforeafter_case01_after_01.png'); ?>" alt="">
                <span class="p-renovation__compare__badge p-renovation__compare__badge--after">AFTER</span>
              </div>
              <div class="p-renovation__compare__beforeThumb">
                <img class="p-renovation__compare__img" src="<?php echo esc_url(IMG_URL . '/renovation/beforeafter_case01_before.png'); ?>" alt="">
                <span class="p-renovation__compare__badge p-renovation__compare__badge--before">BEFORE</span>
              </div>
            </div>
          </div>
          <div class="p-renovation__compare__sub">
            <div class="p-renovation__compare__row">
              <div class="p-renovation__compare__afterWide">
                <img class="p-renovation__compare__img" src="<?php echo esc_url(IMG_URL . '/renovation/beforeafter_case01_after_02.png'); ?>" alt="">
                <span class="p-renovation__compare__badge p-renovation__compare__badge--after p-renovation__compare__badge--sub">AFTER</span>
              </div>
            </div>
          </div>
        </li>
        <li class="p-renovation__compare__item">
          <div class="p-renovation__compare__secondary">
            <div class="p-renovation__compare__row">
              <div class="p-renovation__compare__afterMain p-renovation__compare__afterMain--offset">
                <img class="p-renovation__compare__img" src="<?php echo esc_url(IMG_URL . '/renovation/beforeafter_case02_after_01.png'); ?>" alt="">
                <span class="p-renovation__compare__badge p-renovation__compare__badge--after">AFTER</span>
              </div>
              <div class="p-renovation__compare__beforeThumb p-renovation__compare__beforeThumb--offset">
                <img class="p-renovation__compare__img" src="<?php echo esc_url(IMG_URL . '/renovation/beforeafter_case02_before.png'); ?>" alt="">
                <span class="p-renovation__compare__badge p-renovation__compare__badge--before">BEFORE</span>
              </div>
            </div>
          </div>
          <div class="p-renovation__compare__sub">
            <div class="p-renovation__compare__row">
              <div class="p-renovation__compare__afterWide p-renovation__compare__afterWide--offset">
                <img class="p-renovation__compare__img" src="<?php echo esc_url(IMG_URL . '/renovation/beforeafter_case02_after_02.png'); ?>" alt="">
                <span class="p-renovation__compare__badge p-renovation__compare__badge--after">AFTER</span>
              </div>
            </div>
          </div>
        </li>
      </ul>
    </div>
  </section>

  <section class="p-renovation__details">
    <h3 class="p-renovation__sectionTitle">リフォーム内容</h3>
    <div class="p-renovation__inner">
      <?php
      $detail_items = [
        [
          'label' => '水回り交換',
          'img'   => IMG_URL . '/renovation/detail_01.png',
        ],
        [
          'label' => '増・改築',
          'img'   => IMG_URL . '/renovation/detail_02.png',
        ],
        [
          'label' => '外構工事',
          'img'   => IMG_URL . '/renovation/detail_03.png',
        ],
        [
          'label' => 'シロアリ対策工事',
          'img'   => IMG_URL . '/renovation/detail_04.png',
        ],
        [
          'label' => '耐震補強',
          'img'   => IMG_URL . '/renovation/detail_05.png',
        ],
        [
          'label' => '断熱強化',
          'img'   => IMG_URL . '/renovation/detail_06.png',
        ],
      ];
      ?>
      <ul class="p-renovation__details__list">
        <?php foreach ($detail_items as $item) : ?>
          <li class="p-renovation__details__item">
            <div class="p-renovation__details__media">
              <img class="p-renovation__details__mediaImg" src="<?php echo esc_url($item['img']); ?>" alt="">
            </div>
            <div class="p-renovation__details__label">
              <?php echo esc_html($item['label']); ?>
            </div>
          </li>
        <?php endforeach; ?>
      </ul>
    </div>
  </section>

  <section class="p-renovation__process">
    <h3 class="p-renovation__sectionTitle">
      お問合わせから<span class="u-orange">リフォーム</span>までの流れ
    </h3>
    <?php
    $process_steps = [
      [
        'title' => 'お問合わせ',
        'text'  => 'まずはお電話<a href="tel:097-594-1481">097-594-1481</a>か下記フォームよりお気軽にお問合わせください。',
        'img'   => IMG_URL . '/renovation/process_01.png',
        'cta'   => true,
      ],
      [
        'title' => '現地訪問と調査',
        'text'  => 'お問合わせ後、1級施工管理技師と営業担当が現地を訪問し、詳細な聞き取りと現地調査を行います。内容によっては一級建築士が同行します。',
        'img'   => IMG_URL . '/renovation/process_02.png',
      ],
      [
        'title' => 'お見積り',
        'text'  => '現地調査の結果に基づき、お見積りを作成いたします。内容を確認していただき、ご納得していただいてから、ゆめリフォームのスタートです！',
        'img'   => IMG_URL . '/renovation/process_03.png',
      ],
    ];
    $process_last_index = count($process_steps) - 1;
    ?>
    <ul class="p-renovation__process__list">
      <?php foreach ($process_steps as $i => $step) : ?>
        <li class="p-renovation__process__item">
          <div class="p-renovation__inner<?php echo ($i < $process_last_index) ? ' p-renovation__process__step' : ''; ?>">
            <div class="p-renovation__process__row">
              <div class="p-renovation__process__media u-none__pc--tab">
                <img class="p-renovation__process__mediaImg" src="<?php echo esc_url($step['img']); ?>" alt="">
              </div>
              <div class="p-renovation__process__panel">
                <p class="c-title--orangeLine p-renovation__process__title"><span class="marker">
                    <span class="u-orange"><?php echo esc_html(sprintf('%02d. ', $i + 1)); ?></span><?php echo esc_html($step['title']); ?></span>
                </p>
                <p class="p-renovation__process__text">
                  <?php echo wp_kses_post($step['text']); ?>
                </p>
                <?php if (!empty($step['cta'])) : ?>
                  <span class="p-renovation__process__cta">
                    <a class="c-button--orange" href="#contact">お問合わせする</a>
                  </span>
                <?php endif; ?>
              </div>
              <div class="p-renovation__process__media u-none__mobile--tab">
                <img class="p-renovation__process__mediaImg" src="<?php echo esc_url($step['img']); ?>" alt="">
              </div>
            </div>
          </div>
          <?php if ($i < $process_last_index) : ?>
            <div class="p-renovation__process__arrow" aria-hidden="true"></div>
          <?php endif; ?>
        </li>
      <?php endforeach; ?>
    </ul>
  </section>

  <section class="p-renovation__features">
    <h3 class="p-renovation__sectionTitle">
      <span class="u-orange">ゆめリフォーム</span>の特徴
    </h3>
    <ul class="p-renovation__features__list">
      <li class="p-renovation__features__item">
        <div class="p-renovation__feature__hero">
          <div class="p-renovation__feature__media">
            <img class="p-renovation__feature__mediaImg" src="<?php echo esc_url(IMG_URL . '/renovation/feature_01.png'); ?>" alt="">
          </div>
          <div class="p-renovation__feature__panel">
            <div class="p-renovation__feature__badge">
              <img class="p-renovation__feature__badgeImg" src="<?php echo esc_url(IMG_URL . '/common/point1.webp'); ?>" alt="">
            </div>
            <div>
              <p class="c-title--orangeLine p-renovation__feature__headline"><span class="marker">
                  <span class="u-orange">豊富な経験</span>と<span class="u-orange">知識</span>を<br>
                  持つスタッフが<span class="u-orange">対応</span></span>
              </p>
            </div>
            <div class="p-renovation__feature__text">
              リフォームは物件ごとに状況が異なるため、豊後夢工房では経験、知識共に豊富なスタッフが対応いたします。内容によっては一級建築士が同行、施工時の監督も1級施工管理技士が担当し、品質の高い施工をお約束します。
            </div>
          </div>
        </div>
      </li>
      <li class="p-renovation__features__item">
        <div class="p-renovation__feature__hero">
          <div class="p-renovation__feature__media">
            <img class="p-renovation__feature__mediaImg" src="<?php echo esc_url(IMG_URL . '/renovation/feature_02.png'); ?>" alt="">
          </div>
          <div class="p-renovation__feature__panel">
            <div class="p-renovation__feature__badge">
              <img class="p-renovation__feature__badgeImg" src="<?php echo esc_url(IMG_URL . '/common/point2.webp'); ?>" alt="">
            </div>
            <div>
              <p class="c-title--orangeLine p-renovation__feature__headline"><span class="marker">
                  <span class="u-orange">安心</span>の<span class="u-orange">施工監督体制</span></span>
              </p>
            </div>
            <div class="p-renovation__feature__text">
              施工の各段階で1級施工管理技士が監督を担当し、安心してお任せいただける体制を整えています。私たちはお客様のニーズに応じた最適なリフォームを提供し、快適で安全な住まいを実現します。
            </div>
          </div>
        </div>
      </li>
    </ul>
  </section>

  <div class="l-content--middle recruit__contact__form u-mb100">
    <p class="recruit__contact__desc">
      わたしたちと一緒にゆめをつくりませんか？お問合せは以下のお問合せフォーム<br>
      またはお電話にてお気軽にご連絡ください。
    </p>
    <a href="tel:0975941481" class="recruit__contact__info">
      <span class="recruit__contact__info__txt">応募はこちら</span>
      <p class="recruit__contact__info__tel">TEL.　<span class="recruit__contact__info__tel__number">097-594-1481</span>
      </p>
    </a>
  </div>

  <section class="l-content" id="contact">
    <div class="c-title__wrap--sectionLine">
      <h3 class="c-title--sectionLine">
        CONTACT
      </h3>
      <div>
        <p class="c-title--orangeLine u-mb50">
          <span class="marker">お問い合わせ</span>
        </p>
      </div>
    </div>
    <div class="c-form__wrap">
      <?php echo do_shortcode('[mwform_formkey key="1820"]'); ?>
    </div>
  </section>

  <?php get_template_part('template-parts/common'); ?>


</main>
<?php get_footer(); ?>
