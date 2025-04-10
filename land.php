<?php

// Template Name: 土地情報
// Template Post Type: property

if (!defined('ABSPATH')) exit;
get_header();
?>

<?php $post_id = get_the_ID(); ?>
<?php $terms = wp_get_post_terms($post_id, 'property-area'); ?>

<main>
  <h2 class="c-title--section u-mb50">
    土地情報
  </h2>
  <section class="l-content--middle">
    <h3 class="p-event__ttl u-mb50">
      【<?php the_title(); ?>】
    </h3>

    <?php if (has_post_thumbnail()) : ?>
      <figure class="c-thumbnail">
        <?php the_post_thumbnail(); ?>
      </figure>
    <?php endif; ?>

  </section>
  <section class="l-content--middle u-mb100">

    <?php if (get_field('property-area')) : ?>
      <?php foreach ($terms as $term) : ?>
        <div class="c-id__wrap--top u-mb50">
          <span class="c-id"><?php echo esc_html($term->name); ?></span>
        </div>
      <?php endforeach; ?>
    <?php endif; ?>

    <?php $topInfo = get_field('top-info');
    $topInfoArea = $topInfo['area'];
    $topInfoSchool = $topInfo['school'];
    $copy = $topInfo['copy'];
    $price = $topInfo['price'];
    ?>

    <div class="p-property__dl__flex">
      <div class="p-property__dl__wrap">

        <?php if ($topInfoArea) : ?>
          <dl class="p-property__dl">
            <dt class="p-property__dl__txt">土地面積:</dt>
            <dd class="p-property__dl__txt"><?php echo esc_html($topInfoArea); ?></dd>
          </dl>
        <?php endif; ?>
        <?php if ($topInfoSchool) : ?>
          <dl class="p-property__dl">
            <dt class="p-property__dl__txt">校区:</dt>
            <dd class="p-property__dl__txt"><?php echo esc_html($topInfoSchool); ?></dd>
          </dl>
        <?php endif; ?>
      </div>
    </div>
    <?php if ($copy) : ?>
      <p class="p-property__copy u-center u-mb50">
        <?php echo esc_html($copy); ?>
      </p>
    <?php endif; ?>

    <?php if ($price) : ?>
      <div class="p-property__price">
        <span class="p-property__price__num"><?php echo esc_html($price); ?></span><span class="p-property__price__unit"></span>
      </div>
    <?php endif; ?>

  </section>

  <?php get_template_part('hasThumbSlider-loop', 'hasThumbSlider'); ?>

  <?php
  $detail = get_field('detail');
  $name = $detail['name'];
  $address = $detail['address'];
  $traffic = $detail['traffic'];
  $price = $detail['price'];
  $landArea = $detail['land-area'];
  $elementary = $detail['elementary'];
  $juniorHigh = $detail['junior-high'];
  $point = $detail['point'];
  $ground = $detail['ground'];
  $purpose = $detail['purpose'];
  $health = $detail['health'];
  $FloorAreaRatio = $detail['floor-area-ratio'];
  $urban = $detail['urban'];
  $contactPath = $detail['contact-path'];
  $transaction = $detail['transaction'];
  $commission = $detail['commission'];
  $facility = $detail['facility'];
  $remarks = $detail['remarks'];
  $contact = $detail['contact'];
  ?>

  <?php if ($detail) : ?>
    <section class="l-content--middle u-mb100">
      <h3 class="c-title--sectionEn">
        DETAIL
      </h3>
      <p class="c-title--sectionSub u-mb50">
        詳細情報
      </p>

      <div class="p-property__dl__infoWrap u-mb50">
        <dl class="p-property__dl__info">
          <dt class="p-property__dt__item--short">物件名</dt>
          <dd class="p-property__dt__value--long"><?php echo esc_html($name); ?></dd>
        </dl>
        <dl class="p-property__dl__info">
          <dt class="p-property__dt__item--short">所在地</dt>
          <dd class="p-property__dt__value--long"><?php echo esc_html($address); ?></dd>
        </dl>
        <dl class="p-property__dl__info">
          <dt class="p-property__dt__item--short">交通</dt>
          <dd class="p-property__dt__value--long"><?php echo esc_html($traffic); ?></dd>
        </dl>
        <dl class="p-property__dl__info--half">
          <dt class="p-property__dt__item--md">価格</dt>
          <dd class="p-property__dt__value--md"><?php echo esc_html($price); ?></dd>
        </dl>
        <dl class="p-property__dl__info--half">
          <dt class="p-property__dt__item--md">土地面積</dt>
          <dd class="p-property__dt__value--md"><?php echo esc_html($landArea); ?></dd>
        </dl>
        <dl class="p-property__dl__info--half">
          <dt class="p-property__dt__item--md">小学校区</dt>
          <dd class="p-property__dt__value--md"><?php echo esc_html($elementary); ?></dd>
        </dl>
        <dl class="p-property__dl__info--half">
          <dt class="p-property__dt__item--md">中学校区</dt>
          <dd class="p-property__dt__value--md"><?php echo esc_html($juniorHigh); ?></dd>
        </dl>
        <dl class="p-property__dl__info">
          <dt class="p-property__dt__item--lg">POINT</dt>
          <dd class="p-property__dt__value--lg"><?php echo wp_kses_post($point); ?></dd>
        </dl>
      </div>

      <div class="p-property__dl__infoWrap u-mb50">
        <dl class="p-property__dl__info--half">
          <dt class="p-property__dt__item--sm">地目</dt>
          <dd class="p-property__dt__value--sm"><?php echo esc_html($ground); ?></dd>
        </dl>
        <dl class="p-property__dl__info--half">
          <dt class="p-property__dt__item--sm">用途地域</dt>
          <dd class="p-property__dt__value--sm"><?php echo esc_html($purpose); ?></dd>
        </dl>
        <dl class="p-property__dl__info--half">
          <dt class="p-property__dt__item--sm">建ぺい率</dt>
          <dd class="p-property__dt__value--sm"><?php echo esc_html($health); ?></dd>
        </dl>
        <dl class="p-property__dl__info--half">
          <dt class="p-property__dt__item--sm">容積率</dt>
          <dd class="p-property__dt__value--sm"><?php echo esc_html($FloorAreaRatio); ?></dd>
        </dl>
        <dl class="p-property__dl__info--half">
          <dt class="p-property__dt__item--sm">都市計画</dt>
          <dd class="p-property__dt__value--sm"><?php echo esc_html($urban); ?></dd>
        </dl>
        <dl class="p-property__dl__info--half">
          <dt class="p-property__dt__item--sm">接道</dt>
          <dd class="p-property__dt__value--sm"><?php echo esc_html($contactPath); ?></dd>
        </dl>
        <dl class="p-property__dl__info--half">
          <dt class="p-property__dt__item--sm">取引形態</dt>
          <dd class="p-property__dt__value--sm"><?php echo esc_html($transaction); ?></dd>
        </dl>
        <dl class="p-property__dl__info--half">
          <dt class="p-property__dt__item--sm">仲介手数料</dt>
          <dd class="p-property__dt__value--sm"><?php echo esc_html($commission); ?></dd>
        </dl>
        <dl class="p-property__dl__info">
          <dt class="p-property__dt__item--lg">設備</dt>
          <dd class="p-property__dt__value--lg"><?php echo esc_html($facility); ?></dd>
        </dl>
        <dl class="p-property__dl__info">
          <dt class="p-property__dt__item--lg">備考</dt>
          <dd class="p-property__dt__value--lg"><?php echo esc_html($remarks); ?></dd>
        </dl>
        <dl class="p-property__dl__info">
          <dt class="p-property__dt__item--lg">お問い合わせ先</dt>
          <dd class="p-property__dt__value--lg"><?php echo wp_kses_post($contact); ?></dd>
        </dl>
      </div>
      <div class="u-center">
        <a href="#contact" class="c-button--page">お問い合わせ</a>
      </div>
    </section>
  <?php endif; ?>

  <?php $map = get_field('mhtml'); ?>
  <?php if ($map) : ?>
    <section class="l-content--middle u-mb100">
      <h3 class="c-title--sectionEn">
        ACCESS MAP
      </h3>
      <p class="c-title--sectionSub u-mb50">
        アクセス
      </p>
      <div class="p-property__iframe__wrap">
        <?php echo $map; ?>
      </div>
    </section>
  <?php endif; ?>

  <?php get_template_part('infomation-loop', 'infomation'); ?>

  <div class="l-content--middle recruit__contact__form u-mb100">
    <p class="recruit__contact__desc">
      理想の土地や物件を見つける第一歩はこちらから。私たち豊後夢工房にお任せください。
      <br>各土地・物件情報についての詳細は、以下のお問い合わせフォーム
      <br>またはお電話にてお気軽にご連絡ください。
    </p>
    <a href="tel:0975941481" class="recruit__contact__info">
      <span class="recruit__contact__info__txt">お問い合わせはこちら</span>
      <p class=recruit__contact__info__tel>TEL.　<span class="recruit__contact__info__tel__number">097-594-1481</span>
      </p>
    </a>
  </div>

  <section class="p-contact l-content" id="contact">
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
    <div class="p-contact__form">
      <?php echo do_shortcode('[mwform_formkey key="1820"]'); ?>
    </div>
  </section>
  <?php get_template_part('common-footer', 'common'); ?>

</main>



<?php get_footer(); ?>