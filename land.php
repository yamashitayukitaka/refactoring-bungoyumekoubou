<?php

// Template Name: 土地情報
// Template Post Type: property

if (!defined('ABSPATH')) {
  exit;
}
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

    <?php $property_area = get_field('property-area'); ?>
    <?php if ($property_area && $terms && !is_wp_error($terms)) : ?>
      <?php foreach ($terms as $term) : ?>
        <div class="c-id__wrap--top u-mb50">
          <span class="c-id"><?php echo esc_html($term->name); ?></span>
        </div>
      <?php endforeach; ?>
    <?php endif; ?>

    <?php $topInfo = get_field('top-info'); ?>
    <?php if ($topInfo && (!empty($topInfo['area']) || !empty($topInfo['school']) || !empty($topInfo['copy']) || !empty($topInfo['price']))) : ?>
    <div class="p-property__dl__flex">
      <div class="p-property__dl__wrap">

        <?php if (!empty($topInfo['area'])) : ?>
          <dl class="p-property__dl">
            <dt class="p-property__dl__txt">土地面積:</dt>
            <dd class="p-property__dl__txt"><?php echo esc_html($topInfo['area']); ?></dd>
          </dl>
        <?php endif; ?>
        <?php if (!empty($topInfo['school'])) : ?>
          <dl class="p-property__dl">
            <dt class="p-property__dl__txt">校区:</dt>
            <dd class="p-property__dl__txt"><?php echo esc_html($topInfo['school']); ?></dd>
          </dl>
        <?php endif; ?>
      </div>
    </div>
      <?php if (!empty($topInfo['copy'])) : ?>
      <p class="p-property__copy u-center u-mb50">
        <?php echo esc_html($topInfo['copy']); ?>
      </p>
      <?php endif; ?>

      <?php if (!empty($topInfo['price'])) : ?>
      <div class="p-property__price">
        <span class="p-property__price__num"><?php echo esc_html($topInfo['price']); ?></span><span class="p-property__price__unit"></span>
      </div>
      <?php endif; ?>
    <?php endif; ?>

  </section>

  <?php get_template_part('template-parts/hasThumbSlider-loop'); ?>

  <?php $detail = get_field('detail'); ?>
  <?php if ($detail && (!empty($detail['name']) || !empty($detail['address']) || !empty($detail['traffic']) || !empty($detail['price']) || !empty($detail['land-area']) || !empty($detail['elementary']) || !empty($detail['junior-high']) || !empty($detail['point']) || !empty($detail['ground']) || !empty($detail['purpose']) || !empty($detail['health']) || !empty($detail['floor-area-ratio']) || !empty($detail['urban']) || !empty($detail['contact-path']) || !empty($detail['transaction']) || !empty($detail['commission']) || !empty($detail['facility']) || !empty($detail['remarks']) || !empty($detail['contact']))) : ?>
    <section class="l-content--middle u-mb100">
      <h3 class="c-title--sectionEn">
        DETAIL
      </h3>
      <p class="c-title--sectionSub u-mb50">
        詳細情報
      </p>

      <div class="p-property__dl__infoWrap u-mb50">
        <?php if (!empty($detail['name'])) : ?>
        <dl class="p-property__dl__info">
          <dt class="p-property__dt__item--short">物件名</dt>
          <dd class="p-property__dt__value--long"><?php echo esc_html($detail['name']); ?></dd>
        </dl>
        <?php endif; ?>
        <?php if (!empty($detail['address'])) : ?>
        <dl class="p-property__dl__info">
          <dt class="p-property__dt__item--short">所在地</dt>
          <dd class="p-property__dt__value--long"><?php echo esc_html($detail['address']); ?></dd>
        </dl>
        <?php endif; ?>
        <?php if (!empty($detail['traffic'])) : ?>
        <dl class="p-property__dl__info">
          <dt class="p-property__dt__item--short">交通</dt>
          <dd class="p-property__dt__value--long"><?php echo esc_html($detail['traffic']); ?></dd>
        </dl>
        <?php endif; ?>
        <?php if (!empty($detail['price'])) : ?>
        <dl class="p-property__dl__info--half">
          <dt class="p-property__dt__item--md">価格</dt>
          <dd class="p-property__dt__value--md"><?php echo esc_html($detail['price']); ?></dd>
        </dl>
        <?php endif; ?>
        <?php if (!empty($detail['land-area'])) : ?>
        <dl class="p-property__dl__info--half">
          <dt class="p-property__dt__item--md">土地面積</dt>
          <dd class="p-property__dt__value--md"><?php echo esc_html($detail['land-area']); ?></dd>
        </dl>
        <?php endif; ?>
        <?php if (!empty($detail['elementary'])) : ?>
        <dl class="p-property__dl__info--half">
          <dt class="p-property__dt__item--md">小学校区</dt>
          <dd class="p-property__dt__value--md"><?php echo esc_html($detail['elementary']); ?></dd>
        </dl>
        <?php endif; ?>
        <?php if (!empty($detail['junior-high'])) : ?>
        <dl class="p-property__dl__info--half">
          <dt class="p-property__dt__item--md">中学校区</dt>
          <dd class="p-property__dt__value--md"><?php echo esc_html($detail['junior-high']); ?></dd>
        </dl>
        <?php endif; ?>
        <?php if (!empty($detail['point'])) : ?>
        <dl class="p-property__dl__info">
          <dt class="p-property__dt__item--lg">POINT</dt>
          <dd class="p-property__dt__value--lg"><?php echo wp_kses_post($detail['point']); ?></dd>
        </dl>
        <?php endif; ?>
      </div>

      <div class="p-property__dl__infoWrap u-mb50">
        <?php if (!empty($detail['ground'])) : ?>
        <dl class="p-property__dl__info--half">
          <dt class="p-property__dt__item--sm">地目</dt>
          <dd class="p-property__dt__value--sm"><?php echo esc_html($detail['ground']); ?></dd>
        </dl>
        <?php endif; ?>
        <?php if (!empty($detail['purpose'])) : ?>
        <dl class="p-property__dl__info--half">
          <dt class="p-property__dt__item--sm">用途地域</dt>
          <dd class="p-property__dt__value--sm"><?php echo esc_html($detail['purpose']); ?></dd>
        </dl>
        <?php endif; ?>
        <?php if (!empty($detail['health'])) : ?>
        <dl class="p-property__dl__info--half">
          <dt class="p-property__dt__item--sm">建ぺい率</dt>
          <dd class="p-property__dt__value--sm"><?php echo esc_html($detail['health']); ?></dd>
        </dl>
        <?php endif; ?>
        <?php if (!empty($detail['floor-area-ratio'])) : ?>
        <dl class="p-property__dl__info--half">
          <dt class="p-property__dt__item--sm">容積率</dt>
          <dd class="p-property__dt__value--sm"><?php echo esc_html($detail['floor-area-ratio']); ?></dd>
        </dl>
        <?php endif; ?>
        <?php if (!empty($detail['urban'])) : ?>
        <dl class="p-property__dl__info--half">
          <dt class="p-property__dt__item--sm">都市計画</dt>
          <dd class="p-property__dt__value--sm"><?php echo esc_html($detail['urban']); ?></dd>
        </dl>
        <?php endif; ?>
        <?php if (!empty($detail['contact-path'])) : ?>
        <dl class="p-property__dl__info--half">
          <dt class="p-property__dt__item--sm">接道</dt>
          <dd class="p-property__dt__value--sm"><?php echo esc_html($detail['contact-path']); ?></dd>
        </dl>
        <?php endif; ?>
        <?php if (!empty($detail['transaction'])) : ?>
        <dl class="p-property__dl__info--half">
          <dt class="p-property__dt__item--sm">取引形態</dt>
          <dd class="p-property__dt__value--sm"><?php echo esc_html($detail['transaction']); ?></dd>
        </dl>
        <?php endif; ?>
        <?php if (!empty($detail['commission'])) : ?>
        <dl class="p-property__dl__info--half">
          <dt class="p-property__dt__item--sm">仲介手数料</dt>
          <dd class="p-property__dt__value--sm"><?php echo esc_html($detail['commission']); ?></dd>
        </dl>
        <?php endif; ?>
        <?php if (!empty($detail['facility'])) : ?>
        <dl class="p-property__dl__info">
          <dt class="p-property__dt__item--lg">設備</dt>
          <dd class="p-property__dt__value--lg"><?php echo esc_html($detail['facility']); ?></dd>
        </dl>
        <?php endif; ?>
        <?php if (!empty($detail['remarks'])) : ?>
        <dl class="p-property__dl__info">
          <dt class="p-property__dt__item--lg">備考</dt>
          <dd class="p-property__dt__value--lg"><?php echo esc_html($detail['remarks']); ?></dd>
        </dl>
        <?php endif; ?>
        <?php if (!empty($detail['contact'])) : ?>
        <dl class="p-property__dl__info">
          <dt class="p-property__dt__item--lg">お問い合わせ先</dt>
          <dd class="p-property__dt__value--lg"><?php echo wp_kses_post($detail['contact']); ?></dd>
        </dl>
        <?php endif; ?>
      </div>
      <div class="u-center">
        <a href="#contact" class="c-button--outline">お問い合わせ</a>
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
        <?php echo wazeka_kses_iframe($map); ?>
      </div>
    </section>
  <?php endif; ?>

  <?php get_template_part('template-parts/infomation-loop'); ?>

  <div class="l-content--middle c-contact u-mb100">
    <p class="c-contact__desc">
      理想の土地や物件を見つける第一歩はこちらから。私たち豊後夢工房にお任せください。
      <br>各土地・物件情報についての詳細は、以下のお問い合わせフォーム
      <br>またはお電話にてお気軽にご連絡ください。
    </p>
    <a href="tel:0975941481" class="c-contact__link">
      <span class="c-contact__linkLabel">お問い合わせはこちら</span>
      <p class="c-contact__tel">TEL.　<span class="c-contact__telNumber">097-594-1481</span>
      </p>
    </a>
  </div>

  <section class="l-content" id="contact">
    <div class="c-title__head">
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
  <?php get_template_part('template-parts/common-footer'); ?>

</main>



<?php get_footer(); ?>