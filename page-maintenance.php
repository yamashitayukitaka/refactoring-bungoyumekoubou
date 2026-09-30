<?php
// Template Name: maintenance
if (!defined('ABSPATH')) {
  exit;
}
get_header();
?>
<main class="p-maintenance">
  <div class="c-pageMv u-mb100">
    <div class="c-pageMv__heading">
      <h2 class="c-pageMv__heading__title">
        アフターメンテナンス
      </h2>
      <p class="c-pageMv__heading__subTitle">
        MAINTENANCE
      </p>
    </div>
    <?php $mv = get_field('mv-maintenance-img'); ?>
    <?php if ($mv) : ?>
      <figure class="c-pageMv__visual" style="background-image: url('<?php echo esc_url($mv); ?>');"></figure>
    <?php endif; ?>
  </div>

  <section class="c-title__decoration">
    <div class="c-title__decoration__head">
      <h3 class="c-title--sectionLine u-mb40">アフターメンテナンス</h3>
      <p class="c-title--orangeLine">
        <span class="marker">
          <span class="u-orange">ゆめ</span>の住まいを<span class="u-orange">守る</span>、<br>
          <span class="u-orange">安心</span>のアフターメンテナンス
        </span>
      </p>
    </div>
  </section>

  <section class="p-maintenance__about" id="maintenance-description">
    <div class="p-maintenance__about__row">
      <div class="p-maintenance__about__media">
        <img class="p-maintenance__about__img" src="<?php echo esc_url(IMG_URL . '/maintenance/maintenance_1.png'); ?>" alt="">
      </div>
      <div class="p-maintenance__about__panel">
        <p class="p-maintenance__about__title"><span class="marker">アフターメンテナンス</span></p>
        <div class="p-maintenance__about__text">
          <?php echo wp_kses_post('住み始めた後も、安心して暮らせるよう、20年間に渡ってプロによる定期巡回点検訪問を行っています。<br />経験豊富なスタッフが定期的にお宅を訪問し、細かな点検とメンテナンスを実施します。快適な生活を守るお手伝いをお任せください。'); ?>
        </div>
      </div>
    </div>
    <p class="p-maintenance__about__lead l-content--middle">
      <?php echo wp_kses_post('お引渡しを行った御客様宅の保守業務(定期点検、不具合の補修等(※1))を行っております。<br />定期点検ではお引渡しから3ヵ月、1年、2年、5年、10年、20年のお客様宅にお伺いして、お客様が気になっている箇所のメンテナンスや補修等(※2)、サッシや扉の動作確認、水回りの排水状況の確認、外壁やバルコニーなどの防水周りの状態確認等を行っております。また、車の点検と同じで建材の劣化等により交換が必要な場合にはお客様に相談後、建材の交換や補修も行っております。<br />また、定期点検以外に建材や住宅設備の不具合やお客様が気になる事案が発生した場合の訪問(※3)やメーカー修理の手配等も行っています。<br /><br />※1、※2、※3：建材毎に設定された保証期間に沿った補修等になる為、有料の場合があります。<br><br>'); ?>
    </p>
  </section>

  <section class="p-maintenance__inspection">
    <p class="p-maintenance__heading">点検内容</p>
    <div class="p-maintenance__inspection__inner l-content--middle">
      <?php
      $inspection_items = [
        [
          'label' => '外壁・バルコニー',
          'img' => IMG_URL . '/maintenance/maintenance_2.jpg',
        ],
        [
          'label' => '水回り',
          'img' => IMG_URL . '/maintenance/maintenance_3.jpg',
        ],
        [
          'label' => 'サッシや扉',
          'img' => IMG_URL . '/maintenance/maintenance_4.jpg',
        ],
      ];
      ?>
      <ul class="p-maintenance__inspection__list">
        <?php foreach ($inspection_items as $item) : ?>
          <li class="p-maintenance__inspection__item">
            <div class="p-maintenance__inspection__media">
              <img class="p-maintenance__inspection__img" src="<?php echo esc_url($item['img']); ?>" alt="">
            </div>
            <div class="p-maintenance__inspection__label">
              <?php echo esc_html($item['label']); ?>
            </div>
          </li>
        <?php endforeach; ?>
      </ul>
      <div class="p-maintenance__inspection__detail">
        <img class="p-maintenance__inspection__chart" src="<?php echo esc_url(IMG_URL . '/maintenance/maintenance_5.webp'); ?>" alt="">
        <img class="p-maintenance__inspection__schedule" src="<?php echo esc_url(IMG_URL . '/maintenance/maintenance_6.webp'); ?>" alt="">
        <p class="p-maintenance__note"><?php echo wp_kses_post('お客様が気になっている箇所のメンテナンス、点検以外に建材や住宅設備の不具合やお客様が気になる事が発生した場合の訪問(※3)やメーカー修理の手配等も行っています。<br />お困りの際はお気軽にご連絡ください。<br />'); ?></p>
      </div>
    </div>
  </section>

  <section class="p-maintenance__warranty">
    <p class="p-maintenance__heading">保証と保守期間</p>
    <div class="p-maintenance__warranty__body l-content--middle">
      <p class="p-maintenance__note">
        お引渡しから20年の定期巡回訪問に合わせて、長期住宅保証や設備保証も行っております。 住まわれるご家族の皆様がいつまでも快適にお暮らしいただけるよう、 安心の保証制度でご入居後も末永くサポートします。
      </p>
      <img class="p-maintenance__warranty__img" src="<?php echo esc_url(IMG_URL . '/maintenance/maintenance_7.webp'); ?>" alt="">
      <a class="p-maintenance__warranty__link" href="<?php echo esc_url(home_url('/after-support/')); ?>">安心保証をみる</a>
    </div>
  </section>

  <?php get_template_part('template-parts/common'); ?>
</main>
<?php get_footer(); ?>
