<?php
// Template Name: flow
if (!defined('ABSPATH')) {
  exit;
}
get_header();
?>
<main class="p-flow">
  <div class="c-pageMv u-mb100">
    <div class="c-pageMv__heading">
      <h2 class="c-pageMv__heading__title">
        ゆめづくりの流れ
      </h2>
      <p class="c-pageMv__heading__subTitle">
        FLOW
      </p>
    </div>
    <?php $mv = get_field('mv-flow-img'); ?>
    <?php if ($mv) : ?>
      <figure class="c-pageMv__visual" style="background-image: url('<?php echo esc_url($mv); ?>');"></figure>
    <?php endif; ?>
  </div>

  <section class="c-title__decoration">
    <div class="c-title__decoration__head">
      <h3 class="c-title--sectionLine u-mb40">いえづくりのながれ</h3>
      <p class="c-title--orangeLine">
        <span class="marker">
          <span class="u-orange">出会い</span>から完成<span class="u-orange">お引き渡し</span>まで<br>
          <span class="u-orange">家づくりの流れ</span>をご紹介致します。
        </span>
      </p>
    </div>
  </section>

  <p class="p-flow__lead">
    はじめての家づくり、何をどう進めればいいか分からないことも多いと思います。<br class="u-none__mobile--sp">
    ここでは、豊後夢工房の一般的な 家づくりのプロセスを、順を追ってご紹介。<br class="u-none__mobile--sp">
    展示場や見学会での出会いからご契約、 上棟、完成お引き渡しまでの、 家づくりのプロセスをご紹介致します。
  </p>

  <section class="p-flow__steps">
    <?php
    $flow_steps = [
      [
        'title' => '展示場見学',
        'text' => 'お近くの展示場で<br>豊後夢工房の家づくりを体験してみてください。',
        'img' => IMG_URL . '/flow/step_01.png',
      ],
      [
        'title' => '資金計画概算作成',
        'text' => '資金計画についてお伺いし、<br>おおよその資金計画概算書を作成します。',
        'img' => IMG_URL . '/flow/step_02.png',
      ],
      [
        'title' => '敷地調査',
        'text' => '土地探しのお手伝い、建築ご予定地の敷地<br>及び周辺の環境調査を行います。',
        'img' => IMG_URL . '/flow/step_03.png',
      ],
      [
        'title' => '敷地環境調査報告',
        'text' => '建築ご予定地の法的規制や、上下水道等の位置・<br>日照や風の動き・お隣との関係等詳しくご説明致します。',
        'img' => IMG_URL . '/flow/step_04.png',
      ],
      [
        'title' => '建物プランお打合せ',
        'text' => '建物のプランについて建築士同席のもと、<br>ご要望をお聞きしながらプランのお打ち合わせを行います。',
        'img' => IMG_URL . '/flow/step_05.png',
      ],
      [
        'title' => '建物プランご提案',
        'text' => 'プランのご提案をさせていただきます。<br>ご納得いただくまでプランのお打合せを繰り返します。',
        'img' => IMG_URL . '/flow/step_06.png',
      ],
      [
        'title' => '資金計画書ご提案',
        'text' => 'プランが決定したらお見積書、及び<br>総合的な資金計画書をご提案致します。',
        'img' => IMG_URL . '/flow/step_07.png',
      ],
      [
        'title' => 'ご契約',
        'text' => 'ショールームまたは最寄り展示場において、<br>ご契約をしていただきます。',
        'img' => IMG_URL . '/flow/step_08.png',
      ],
      [
        'title' => 'カラーコーディネート',
        'text' => 'ショールームまたは最寄り展示場において、<br>設備機器・インテリアの配色打合せをしていただきます。',
        'img' => IMG_URL . '/flow/step_09.png',
      ],
      [
        'title' => '地盤調査',
        'text' => '将来地盤沈下や不同沈下が起こらないよう<br>地盤や地層の状況を調べます。',
        'img' => IMG_URL . '/flow/step_10.png',
      ],
      [
        'title' => '地鎮祭',
        'text' => '工事の無事と皆様の安全を祈願します。',
        'img' => IMG_URL . '/flow/step_11.png',
      ],
      [
        'title' => '基礎着工',
        'text' => '建築確認の許可を待って、基礎工事にかかります。',
        'img' => IMG_URL . '/flow/step_12.png',
      ],
      [
        'title' => '上棟',
        'text' => '建物の柱や梁を組み立てて上棟を行います。',
        'img' => IMG_URL . '/flow/step_13.png',
      ],
      [
        'title' => '竣工',
        'text' => '厳しい品質管理体制のもと、<br>全ての工事が終わり建物が完成します。',
        'img' => IMG_URL . '/flow/step_14.png',
      ],
      [
        'title' => '竣工検査',
        'text' => '施工業者による竣工検査、役所検査を行い<br>お施主様に最終的にご確認をしていただきます。',
        'img' => IMG_URL . '/flow/step_15.png',
      ],
      [
        'title' => 'お引渡し・ご入居',
        'text' => '工事代金を全てお支払い後、<br>お引渡しをさせていただき、いよいよご入居です。',
        'img' => IMG_URL . '/flow/step_16.png',
      ],
      [
        'title' => 'アフターサービス',
        'text' => '弊社保証基準にもとづき、お住まいをお守り致します。長いおつきあいのスタートです！どうぞよろしくお願いいたします。',
        'img' => IMG_URL . '/flow/step_17.png',
        'cta' => true,
      ],
    ];
    ?>
    <ul class="p-flow__steps__list">
      <?php foreach ($flow_steps as $i => $step) : ?>
        <li class="p-flow__steps__item">
          <div class="p-flow__steps__row">
            <div class="p-flow__steps__body">
              <div class="p-flow__steps__title">
                <span class="p-flow__steps__num"><?php echo esc_html(sprintf('%02d.', $i + 1)); ?></span>
                <?php echo esc_html($step['title']); ?>
              </div>
              <div class="p-flow__steps__text">
                <?php echo wp_kses_post($step['text']); ?>
              </div>
              <?php if (!empty($step['cta'])) : ?>
                <a class="p-flow__steps__link form__btn" href="<?php echo esc_url(home_url('/maintenance/')); ?>">アフターサービスについて</a>
              <?php endif; ?>
            </div>
            <div class="p-flow__steps__media">
              <img class="p-flow__steps__img" src="<?php echo esc_url($step['img']); ?>" alt="">
            </div>
          </div>
        </li>
      <?php endforeach; ?>
    </ul>
  </section>

  <?php get_template_part('template-parts/common'); ?>

</main>
<?php get_footer(); ?>
