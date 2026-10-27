<?php
/**
 * Template Name: 土地情報
 * Template Post Type: property
 *
 * @package Wazeka
 */

if ( ! defined( 'ABSPATH' ) ) {
  exit;
}
get_header();
?>

<?php $local_post_id = get_the_ID(); ?>
<?php $terms = wp_get_post_terms( $local_post_id, 'property-area' ); ?>

<main>
  <h1 class="c-title--section u-mb50">
    土地情報
  </h1>
  <section class="l-content--middle">
    <h2 class="p-event__ttl u-mb50">
      【<?php the_title(); ?>】
    </h2>

    <?php if ( has_post_thumbnail() ) : ?>
      <figure class="c-thumbnail">
        <?php the_post_thumbnail(); ?>
      </figure>
    <?php endif; ?>

  </section>
  <div class="l-content--middle u-mb100">

    <?php $property_area = get_field( 'property-area' ); ?>
    <?php if ( $property_area && $terms && ! is_wp_error( $terms ) ) : ?>
      <?php foreach ( $terms as $local_term ) : ?>
        <div class="c-id__wrap--top u-mb50">
          <span class="c-id"><?php echo esc_html( $local_term->name ); ?></span>
        </div>
      <?php endforeach; ?>
    <?php endif; ?>

    <?php $top_info = get_field( 'top-info' ); ?>
    <?php if ( $top_info && ( ! empty( $top_info['area'] ) || ! empty( $top_info['school'] ) || ! empty( $top_info['copy'] ) || ! empty( $top_info['price'] ) ) ) : ?>
    <div class="p-property__dl__flex">
      <dl class="p-property__dl__wrap">

        <?php if ( ! empty( $top_info['area'] ) ) : ?>
          <div class="p-property__dl">
            <dt class="p-property__dl__txt">土地面積:</dt>
            <dd class="p-property__dl__txt"><?php echo esc_html( $top_info['area'] ); ?></dd>
        </div>
        <?php endif; ?>
        <?php if ( ! empty( $top_info['school'] ) ) : ?>
          <div class="p-property__dl">
            <dt class="p-property__dl__txt">校区:</dt>
            <dd class="p-property__dl__txt"><?php echo esc_html( $top_info['school'] ); ?></dd>
          </div>
        <?php endif; ?>
      </dl>
    </div>
      <?php if ( ! empty( $top_info['copy'] ) ) : ?>
      <p class="p-property__copy u-center u-mb50">
        <?php echo esc_html( $top_info['copy'] ); ?>
      </p>
      <?php endif; ?>

      <?php if ( ! empty( $top_info['price'] ) ) : ?>
      <div class="p-property__price">
        <span class="p-property__price__num"><?php echo esc_html( $top_info['price'] ); ?></span><span class="p-property__price__unit"></span>
      </div>
      <?php endif; ?>
    <?php endif; ?>

  </div>

  <?php get_template_part( 'template-parts/hasThumbSlider-loop', null, array( 'heading_tag' => 'h3' ) ); ?>

  <?php $detail = get_field( 'detail' ); ?>
  <?php if ( $detail && ( ! empty( $detail['name'] ) || ! empty( $detail['address'] ) || ! empty( $detail['traffic'] ) || ! empty( $detail['price'] ) || ! empty( $detail['land-area'] ) || ! empty( $detail['elementary'] ) || ! empty( $detail['junior-high'] ) || ! empty( $detail['point'] ) || ! empty( $detail['ground'] ) || ! empty( $detail['purpose'] ) || ! empty( $detail['health'] ) || ! empty( $detail['floor-area-ratio'] ) || ! empty( $detail['urban'] ) || ! empty( $detail['contact-path'] ) || ! empty( $detail['transaction'] ) || ! empty( $detail['commission'] ) || ! empty( $detail['facility'] ) || ! empty( $detail['remarks'] ) || ! empty( $detail['contact'] ) ) ) : ?>
    <section class="l-content--middle u-mb100">
      <h3 class="c-title--sectionEn">
        DETAIL
      </h3>
      <p class="c-title--sectionSub u-mb50">
        詳細情報
      </p>

      <dl class="p-property__dl__infoWrap u-mb50">
        <?php if ( ! empty( $detail['name'] ) ) : ?>
        <div class="p-property__dl__info">
          <dt class="p-property__dt__item--short">物件名</dt>
          <dd class="p-property__dt__value--long"><?php echo esc_html( $detail['name'] ); ?></dd>
        </div>
        <?php endif; ?>
        <?php if ( ! empty( $detail['address'] ) ) : ?>
        <div class="p-property__dl__info">
          <dt class="p-property__dt__item--short">所在地</dt>
          <dd class="p-property__dt__value--long"><?php echo esc_html( $detail['address'] ); ?></dd>
        </div>
        <?php endif; ?>
        <?php if ( ! empty( $detail['traffic'] ) ) : ?>
        <div class="p-property__dl__info">
          <dt class="p-property__dt__item--short">交通</dt>
          <dd class="p-property__dt__value--long"><?php echo esc_html( $detail['traffic'] ); ?></dd>
        </div>
        <?php endif; ?>
        <?php if ( ! empty( $detail['price'] ) ) : ?>
        <div class="p-property__dl__info--half">
          <dt class="p-property__dt__item--md">価格</dt>
          <dd class="p-property__dt__value--md"><?php echo esc_html( $detail['price'] ); ?></dd>
        </div>
        <?php endif; ?>
        <?php if ( ! empty( $detail['land-area'] ) ) : ?>
        <div class="p-property__dl__info--half">
          <dt class="p-property__dt__item--md">土地面積</dt>
          <dd class="p-property__dt__value--md"><?php echo esc_html( $detail['land-area'] ); ?></dd>
        </div>
        <?php endif; ?>
        <?php if ( ! empty( $detail['elementary'] ) ) : ?>
        <div class="p-property__dl__info--half">
          <dt class="p-property__dt__item--md">小学校区</dt>
          <dd class="p-property__dt__value--md"><?php echo esc_html( $detail['elementary'] ); ?></dd>
        </div>
        <?php endif; ?>
        <?php if ( ! empty( $detail['junior-high'] ) ) : ?>
        <div class="p-property__dl__info--half">
          <dt class="p-property__dt__item--md">中学校区</dt>
          <dd class="p-property__dt__value--md"><?php echo esc_html( $detail['junior-high'] ); ?></dd>
        </div>
        <?php endif; ?>
        <?php if ( ! empty( $detail['point'] ) ) : ?>
        <div class="p-property__dl__info">
          <dt class="p-property__dt__item--lg">POINT</dt>
          <dd class="p-property__dt__value--lg"><?php echo wp_kses_post( $detail['point'] ); ?></dd>
        </div>
        <?php endif; ?>
      </dl>

      <dl class="p-property__dl__infoWrap u-mb50">
        <?php if ( ! empty( $detail['ground'] ) ) : ?>
        <div class="p-property__dl__info--half">
          <dt class="p-property__dt__item--sm">地目</dt>
          <dd class="p-property__dt__value--sm"><?php echo esc_html( $detail['ground'] ); ?></dd>
        </div>
        <?php endif; ?>
        <?php if ( ! empty( $detail['purpose'] ) ) : ?>
        <div class="p-property__dl__info--half">
          <dt class="p-property__dt__item--sm">用途地域</dt>
          <dd class="p-property__dt__value--sm"><?php echo esc_html( $detail['purpose'] ); ?></dd>
        </div>
        <?php endif; ?>
        <?php if ( ! empty( $detail['health'] ) ) : ?>
        <div class="p-property__dl__info--half">
          <dt class="p-property__dt__item--sm">建ぺい率</dt>
          <dd class="p-property__dt__value--sm"><?php echo esc_html( $detail['health'] ); ?></dd>
        </div>
        <?php endif; ?>
        <?php if ( ! empty( $detail['floor-area-ratio'] ) ) : ?>
        <div class="p-property__dl__info--half">
          <dt class="p-property__dt__item--sm">容積率</dt>
          <dd class="p-property__dt__value--sm"><?php echo esc_html( $detail['floor-area-ratio'] ); ?></dd>
        </div>
        <?php endif; ?>
        <?php if ( ! empty( $detail['urban'] ) ) : ?>
        <div class="p-property__dl__info--half">
          <dt class="p-property__dt__item--sm">都市計画</dt>
          <dd class="p-property__dt__value--sm"><?php echo esc_html( $detail['urban'] ); ?></dd>
        </div>
        <?php endif; ?>
        <?php if ( ! empty( $detail['contact-path'] ) ) : ?>
        <div class="p-property__dl__info--half">
          <dt class="p-property__dt__item--sm">接道</dt>
          <dd class="p-property__dt__value--sm"><?php echo esc_html( $detail['contact-path'] ); ?></dd>
        </div>
        <?php endif; ?>
        <?php if ( ! empty( $detail['transaction'] ) ) : ?>
        <div class="p-property__dl__info--half">
          <dt class="p-property__dt__item--sm">取引形態</dt>
          <dd class="p-property__dt__value--sm"><?php echo esc_html( $detail['transaction'] ); ?></dd>
        </div>
        <?php endif; ?>
        <?php if ( ! empty( $detail['commission'] ) ) : ?>
        <div class="p-property__dl__info--half">
          <dt class="p-property__dt__item--sm">仲介手数料</dt>
          <dd class="p-property__dt__value--sm"><?php echo esc_html( $detail['commission'] ); ?></dd>
        </div>
        <?php endif; ?>
        <?php if ( ! empty( $detail['facility'] ) ) : ?>
        <div class="p-property__dl__info">
          <dt class="p-property__dt__item--lg">設備</dt>
          <dd class="p-property__dt__value--lg"><?php echo esc_html( $detail['facility'] ); ?></dd>
        </div>
        <?php endif; ?>
        <?php if ( ! empty( $detail['remarks'] ) ) : ?>
        <div class="p-property__dl__info">
          <dt class="p-property__dt__item--lg">備考</dt>
          <dd class="p-property__dt__value--lg"><?php echo esc_html( $detail['remarks'] ); ?></dd>
        </div>
        <?php endif; ?>
        <?php if ( ! empty( $detail['contact'] ) ) : ?>
        <div class="p-property__dl__info">
          <dt class="p-property__dt__item--lg">お問い合わせ先</dt>
          <dd class="p-property__dt__value--lg"><?php echo wp_kses_post( $detail['contact'] ); ?></dd>
        </div>
        <?php endif; ?>
      </dl>
      <div class="u-center">
        <a href="#contact" class="c-button--outline">お問い合わせ</a>
      </div>
    </section>
  <?php endif; ?>

  <?php $local_map = get_field( 'mhtml' ); ?>
  <?php if ( $local_map ) : ?>
    <section class="l-content--middle u-mb100">
      <h3 class="c-title--sectionEn">
        ACCESS MAP
      </h3>
      <p class="c-title--sectionSub u-mb50">
        アクセス
      </p>
      <div class="p-property__iframe__wrap">
        <?php echo wazeka_kses_iframe( $local_map ); ?>
      </div>
    </section>
  <?php endif; ?>

  <?php get_template_part( 'template-parts/infomation-loop', null, array( 'heading_tag' => 'h3' ) ); ?>

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
      <?php echo do_shortcode( '[mwform_formkey key="1820"]' ); ?>
    </div>
  </section>
  <?php get_template_part( 'template-parts/common-footer', null, array( 'heading_tag' => 'h3' ) ); ?>

</main>



<?php get_footer( null, array( 'heading_tag' => 'h3' ) ); ?>