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

  <nav class="p-afterSupport__nav" aria-label="安心の保証メニュー">
    <div class="p-afterSupport__nav__heading">
      <span class="u-textOrange">豊後夢工房</span>の安心保証メニュー
    </div>
    <?php
    $after_support_nav_items = [
      [
        'section_id' => 'support1',
        'number' => 1,
        'label' => '安心の長期住宅保証',
      ],
      [
        'section_id' => 'support2',
        'number' => 2,
        'label' => '地盤保証システム',
      ],
      [
        'section_id' => 'support3',
        'number' => 3,
        'label' => '設備機器保証',
      ],
      [
        'section_id' => 'support4',
        'number' => 4,
        'label' => '定期巡回訪問',
      ],
    ];
    ?>
    <ul class="p-afterSupport__nav__list">
      <?php foreach ($after_support_nav_items as $nav_item) : ?>
        <li class="p-afterSupport__nav__item">
          <a href="<?php echo esc_url('#' . $nav_item['section_id']); ?>" class="p-afterSupport__nav__link">
            <div class="p-afterSupport__nav__card">
              <div class="p-afterSupport__nav__number">
                <img
                  class="p-afterSupport__nav__numberImg"
                  src="<?php echo esc_url(IMG_URL . '/number/number' . $nav_item['number'] . '.webp'); ?>"
                  alt=""
                >
              </div>
              <div>
                <p class="p-afterSupport__nav__label"><?php echo esc_html($nav_item['label']); ?></p>
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
            <img src="<?php echo esc_url(IMG_URL . '/number/number1.webp'); ?>" alt="">
          </div>
          <p class="p-afterSupport__sectionTitle"><span class="marker">安心の長期住宅保証</span></p>
          <p class="p-afterSupport__overviewLead">
            建物保証<span>20年</span>、最長<span>60年</span>まで延長可能
          </p>
          <div class="p-afterSupport__overviewMedia u-none__pc--tab">
            <img src="<?php echo esc_url(IMG_URL . '/after/guarantee-1.png'); ?>" alt="">
          </div>
          <div class="p-afterSupport__overviewText">
            家の構造的な部分をプロによる定期点検で20年、最長60年まで保証します。
            大きな不安、急な出費に迅速に対応できる豊後夢工房の長期住宅保証は安心、安全、豊かな暮らしをサポートし続けます。
          </div>
        </div>
        <div class="p-afterSupport__overviewMedia u-none__mobile--tab">
          <img src="<?php echo esc_url(IMG_URL . '/after/guarantee-1.png'); ?>" alt="">
        </div>
      </div>
      <figure class="p-afterSupport__wideFigure">
        <img src="<?php echo esc_url(IMG_URL . '/maintenance/maintenance_7.webp'); ?>" alt="">
      </figure>
      <a class="p-afterSupport__more" href="#support3">くわしくは <span>こちら</span></a>
    </div>
  </section>

  <section class="p-afterSupport__section p-afterSupport__section--bordered" id="support2">
    <div class="l-content--inner">
      <div class="p-afterSupport__overview">
        <div class="p-afterSupport__overviewBody">
          <div class="p-afterSupport__overviewNum">
            <img src="<?php echo esc_url(IMG_URL . '/number/number2.webp'); ?>" alt="">
          </div>
          <p class="p-afterSupport__sectionTitle">
            <span class="marker">地盤保証システム</span>
          </p>
          <div class="p-afterSupport__overviewMedia u-none__pc--tab">
            <img src="<?php echo esc_url(IMG_URL . '/after/guarantee-2.jpg'); ?>" alt="">
          </div>
          <div class="p-afterSupport__overviewText">
            豊後夢工房では、指定専門機関による地盤検査を実施し、問題があれば地盤改良工事を行うなど対策を万全にしていますが、万が一、建物が不同沈下などにより損壊した場合、豊後夢工房が建物と地盤の修復工事をお約束する制度です。保証期間はお引き渡しから20年間保証が付きます。
          </div>
        </div>
        <div class="p-afterSupport__overviewMedia u-none__mobile--tab">
          <img src="<?php echo esc_url(IMG_URL . '/after/guarantee-2.jpg'); ?>" alt="">
        </div>
      </div>
    </div>
  </section>

  <section class="p-afterSupport__section p-afterSupport__section--bordered" id="support3">
    <div class="l-content--inner">
      <div class="p-afterSupport__overview">
        <div class="p-afterSupport__overviewBody">
          <div class="p-afterSupport__overviewNum">
            <img src="<?php echo esc_url(IMG_URL . '/number/number3.webp'); ?>" alt="">
          </div>
          <p class="p-afterSupport__sectionTitle">
            <span class="marker">設備機器保証</span>
          </p>
          <p class="p-afterSupport__overviewText">
            10年の設備機器保証付き。暮らしに欠かせないものだからこそ急なトラブルにも迅速に対応します。
          </p>
          <div class="p-afterSupport__overviewMedia u-none__pc--tab">
            <img src="<?php echo esc_url(IMG_URL . '/after/guarantee-3.png'); ?>" alt="">
          </div>
          <div class="p-afterSupport__points">
            <p class="p-afterSupport__pointsHeading">
              <span>3つ</span>の安心ポイント
            </p>
            <ul class="p-afterSupport__pointsList">
              <?php
              $support3_point_images = ['jhs1.webp', 'jhs2.webp', 'jhs3.webp'];
              foreach ($support3_point_images as $point_image) :
                ?>
                <li class="p-afterSupport__pointsItem">
                  <img src="<?php echo esc_url(IMG_URL . '/after/' . $point_image); ?>" alt="">
                </li>
              <?php endforeach; ?>
            </ul>
          </div>
        </div>
        <div class="p-afterSupport__overviewMedia u-none__mobile--tab">
          <img src="<?php echo esc_url(IMG_URL . '/after/guarantee-3.png'); ?>" alt="">
        </div>
      </div>
      <p class="p-afterSupport__note">
        通常1～2年程度の保証しかない、トイレやキッチンなどの住宅設備機器も延長して10年間に渡り保証します。<br>
        水廻りのトラブルなど、緊急を要する事態に対応する24時間コールセンター対応や、修理代、代替費用が何度でも無料などの各種サービスをご用意しました。<br>
        <br>※人災や天災に起因する製品の故障や消耗品の交換が原因の故障、故障によって生じた経済的損害・二次災害は補償対象外となります。
      </p>
    </div>

    <h3 class="p-afterSupport__devicesHeading">対象保障機器</h3>

    <div class="p-afterSupport__devices">
      <p class="p-afterSupport__devicesLead">
        対象内であれば、<span>無償</span>で何回でも<br class="u-none__pc--sp">保証限度額なしで修理可能
      </p>
      <?php
      $devices = [
        [
          'title' => 'システムキッチン',
          'img' => 'dream_1.webp',
          'parts' => ['キッチン本体', 'コンロ（ガス・IH）', 'レンジフード', '水栓', '食洗機'],
        ],
        [
          'title' => 'システムバス',
          'img' => 'dream_2.webp',
          'parts' => ['本体（排水ボタン）', '浴室換気扇', '水栓', '表示リモコン'],
        ],
        [
          'title' => '温水洗浄トイレ',
          'img' => 'dream_3.webp',
          'parts' => ['温水洗浄機能付き便座', 'リモコン'],
        ],
        [
          'title' => '給湯器',
          'img' => 'dream_4.webp',
          'parts' => ['ガス・石油', 'レンジフード', '本体／操作パネル'],
        ],
        [
          'title' => '洗面台',
          'img' => 'dream_5.webp',
          'parts' => ['本体（照明・くもり止め<br>ヒーター・排水ボタン）', '水栓'],
        ],
      ];
      ?>
      <ul class="p-afterSupport__devicesList">
        <?php foreach ($devices as $device) : ?>
          <li class="p-afterSupport__devicesItem">
            <div class="p-afterSupport__devicesItemMedia">
              <img src="<?php echo esc_url(IMG_URL . '/after/' . $device['img']); ?>" alt="">
            </div>
            <div class="p-afterSupport__devicesItemBody">
              <p class="p-afterSupport__devicesItemTitle"><?php echo esc_html($device['title']); ?></p>
              <ul class="p-afterSupport__devicesItemList">
                <?php foreach ($device['parts'] as $part) : ?>
                  <li><?php echo wp_kses($part, ['br' => []]); ?></li>
                <?php endforeach; ?>
              </ul>
            </div>
          </li>
        <?php endforeach; ?>
      </ul>
    </div>
  </section>

  <section class="p-afterSupport__section p-afterSupport__section--last" id="support4">
    <div class="l-content--inner">
      <div class="p-afterSupport__overview">
        <div class="p-afterSupport__overviewBody">
          <div class="p-afterSupport__overviewNum">
            <img src="<?php echo esc_url(IMG_URL . '/number/number4.webp'); ?>" alt="">
          </div>
          <p class="p-afterSupport__sectionTitle">
            <span class="marker">定期点検</span>
          </p>
          <div class="p-afterSupport__overviewMedia u-none__pc--tab">
            <img src="<?php echo esc_url(IMG_URL . '/after/guarantee-4.jpg'); ?>" alt="">
          </div>
          <div class="p-afterSupport__overviewText">
            ご入居されてからのお客様の暮らしをサポートしてくために、ご入居から3ヶ月・1年・2年・5年・10年・20年のタイミングで定期点検に訪問させていただきます。専門スタッフにより、外壁、基礎、内装、床などを確認させていただき、不具合点がないか聞きとりの上、点検を行い、必要なメンテナンスについてのアドバイスをさせていただきます。
          </div>
          <div class="p-afterSupport__cta">
            <a class="c-button c-button--orange" href="<?php echo esc_url(home_url('/maintenance/')); ?>">アフターメンテナンスへ</a>
          </div>
        </div>
        <div class="p-afterSupport__overviewMedia u-none__mobile--tab">
          <img src="<?php echo esc_url(IMG_URL . '/after/guarantee-4.jpg'); ?>" alt="">
        </div>
      </div>
    </div>
  </section>

  <?php get_template_part('template-parts/common'); ?>

</main>
<?php get_footer(); ?>
