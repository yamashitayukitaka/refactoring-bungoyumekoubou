<?php
/**
 * Template Name: 賃貸物件
 * Template Post Type: property
 *
 * @package Wazeka
 */

if ( ! defined( 'ABSPATH' ) ) {
  exit;
}
get_header();
?>

<?php $local_post_id = get_the_ID();?>
<?php $terms = wp_get_post_terms( $local_post_id, 'property-area' );?>

<main>
  <h1 class = "c-title--section u-mb50">
    賃貸物件
  </h1>
  <section class = "l-content--middle">
    <h2 class = "p-event__ttl u-mb50">
      【<?php the_title(); ?>】
    </h2>
    <figure class = "c-thumbnail">
      <?php
    the_post_thumbnail(
        'full',
        array(
        'loading'       => 'eager', // 初期表示なのでlazyを解除！
        'fetchpriority' => 'high',  // 最優先でダウンロード！
        )
    );
      ?>
    </figure>
  </section>
  <div class="l-content--middle u-mb100">
    <?php $property_area = get_field( 'property-area' ); ?>
    <?php if ( $property_area && $terms && ! is_wp_error( $terms ) ) : ?>
      <?php foreach ( $terms as $local_term ) :?>
        <div class = "c-id__wrap--top u-mb50">
          <span class = "c-id"><?php echo esc_html( $local_term->name ); ?></span>
        </div>
      <?php endforeach;?>
    <?php endif; ?>

    <?php $top = get_field( 'top' ); ?>
    <?php if ( $top && ( ! empty( $top['management'] ) || ! empty( $top['security'] ) || ! empty( $top['copy'] ) || ! empty( $top['price'] ) ) ) : ?>
      <div class = "p-property__dl__flex">
        <dl class = "p-property__dl__wrap">
          <?php if ( ! empty( $top['management'] ) ) :?>
            <div class = "p-property__dl">
              <dt class = "p-property__dl__txt">管理費・共済費:</dt>
              <dd class = "p-property__dl__txt"><?php echo esc_html( $top['management'] );?></dd>
            </div>
          <?php endif; ?>
          <?php if ( ! empty( $top['security'] ) ) :?>
            <div class = "p-property__dl">
              <dt class = "p-property__dl__txt">敷金:</dt>
              <dd class = "p-property__dl__txt"><?php echo esc_html( $top['security'] );?></dd>
            </div>
          <?php endif; ?>
        </dl>
      </div>
      <?php if ( ! empty( $top['copy'] ) ) :?>
        <p class = "p-property__copy u-center u-mb50"><?php echo esc_html( $top['copy'] );?></p>
      <?php endif; ?>
      <?php if ( ! empty( $top['price'] ) ) :?>
        <p class = "p-property__price">
          <span class = "p-property__price__num"><?php echo esc_html( $top['price'] );?></span><span class = "p-property__price__unit"></span><span class = "p-property__price__tax"></span>
        </p>
      <?php endif; ?>
    <?php endif; ?>
  </div>

  
  <?php get_template_part( 'template-parts/hasThumbSlider-loop', null, array( 'heading_tag' => 'h3' ) ); ?>
 
  <?php $detail = get_field( 'detail' ); ?>
  <?php if ( $detail && ( ! empty( $detail['name'] ) || ! empty( $detail['traffic'] ) || ! empty( $detail['address'] ) || ! empty( $detail['document'] ) || ! empty( $detail['mutual'] ) || ! empty( $detail['security'] ) || ! empty( $detail['key'] ) || ! empty( $detail['renewal'] ) || ! empty( $detail['insurance'] ) || ! empty( $detail['deposit'] ) || ! empty( $detail['brokerage'] ) || ! empty( $detail['floor'] ) || ! empty( $detail['total'] ) || ! empty( $detail['site'] ) || ! empty( $detail['age'] ) || ! empty( $detail['parking'] ) || ! empty( $detail['move'] ) || ! empty( $detail['structure'] ) || ! empty( $detail['transaction'] ) || ! empty( $detail['elementary'] ) || ! empty( $detail['juniorHigh'] ) || ! empty( $detail['facility'] ) || ! empty( $detail['point'] ) || ! empty( $detail['remarks'] ) || ! empty( $detail['contact'] ) ) ) :?>
    <section class = "l-content--middle u-mb100">
      <h3 class = "c-title--sectionEn">
        DETAIL
      </h3>
      <p class = "c-title--sectionSub u-mb50">
        詳細情報
      </p>

      <dl class = "p-property__dl__infoWrap u-mb50">
        <?php if ( ! empty( $detail['name'] ) ) :?>
        <div class = "p-property__dl__info">
          <dt class = "p-property__dt__item--lg">物件名</dt>
          <dd class = "p-property__dt__value--lg"><?php echo esc_html( $detail['name'] );?></dd>
        </div>
        <?php endif; ?>
        <?php if ( ! empty( $detail['traffic'] ) ) :?>
        <div class = "p-property__dl__info">
          <dt class = "p-property__dt__item--lg">交通</dt>
          <dd class = "p-property__dt__value--lg"><?php echo esc_html( $detail['traffic'] );?></dd>
        </div>
        <?php endif; ?>
        <?php if ( ! empty( $detail['address'] ) ) :?>
        <div class = "p-property__dl__info">
          <dt class = "p-property__dt__item--lg">所在地</dt>
          <dd class = "p-property__dt__value--lg"><?php echo esc_html( $detail['address'] );?></dd>
        </div>
        <?php endif; ?>
        <?php if ( ! empty( $detail['document'] ) ) :?>
        <div class = "p-property__dl__info--half"> 
          <dt class = "p-property__dt__item--sm">資料</dt>
          <dd class = "p-property__dt__value--sm"><?php echo esc_html( $detail['document'] );?></dd>
        </div>
        <?php endif; ?>
        <?php if ( ! empty( $detail['mutual'] ) ) :?>
        <div class = "p-property__dl__info--half">
          <dt class = "p-property__dt__item--sm">共済費</dt>
          <dd class = "p-property__dt__value--sm"><?php echo esc_html( $detail['mutual'] );?></dd>
        </div>
        <?php endif; ?>
        <?php if ( ! empty( $detail['security'] ) ) :?>
        <div class = "p-property__dl__info--half"> 
          <dt class = "p-property__dt__item--sm">敷金</dt>
          <dd class = "p-property__dt__value--sm"><?php echo esc_html( $detail['security'] );?></dd>
        </div>
        <?php endif; ?>
        <?php if ( ! empty( $detail['key'] ) ) :?>
        <div class = "p-property__dl__info--half">
          <dt class = "p-property__dt__item--sm">礼金</dt>
          <dd class = "p-property__dt__value--sm"><?php echo esc_html( $detail['key'] );?></dd>
        </div>
        <?php endif; ?>
        <?php if ( ! empty( $detail['renewal'] ) ) :?>
        <div class = "p-property__dl__info--half"> 
          <dt class = "p-property__dt__item--sm">更新料</dt>
          <dd class = "p-property__dt__value--sm"><?php echo esc_html( $detail['renewal'] );?></dd>
        </div>
        <?php endif; ?>
        <?php if ( ! empty( $detail['insurance'] ) ) :?>
        <div class = "p-property__dl__info--half">
          <dt class = "p-property__dt__item--sm">保険料</dt>
          <dd class = "p-property__dt__value--sm"><?php echo esc_html( $detail['insurance'] );?></dd>
        </div>
        <?php endif; ?>
        <?php if ( ! empty( $detail['deposit'] ) ) :?>
        <div class = "p-property__dl__info--half"> 
          <dt class = "p-property__dt__item--sm">保証金</dt>
          <dd class = "p-property__dt__value--sm"><?php echo esc_html( $detail['deposit'] );?></dd>
        </div>
        <?php endif; ?>
        <?php if ( ! empty( $detail['brokerage'] ) ) :?>
        <div class = "p-property__dl__info--half">
          <dt class = "p-property__dt__item--sm">仲介手数料</dt>
          <dd class = "p-property__dt__value--sm"><?php echo esc_html( $detail['brokerage'] );?></dd>
        </div>
        <?php endif; ?>
        <?php if ( ! empty( $detail['floor'] ) ) :?>
        <div class = "p-property__dl__info--half">
          <dt class = "p-property__dt__item--sm">間取り</dt>
          <dd class = "p-property__dt__value--sm"><?php echo esc_html( $detail['floor'] );?></dd>
        </div>
        <?php endif; ?>
        <?php if ( ! empty( $detail['total'] ) ) :?>
        <div class = "p-property__dl__info--half">
          <dt class = "p-property__dt__item--sm">延床面積</dt>
          <dd class = "p-property__dt__value--sm"><?php echo esc_html( $detail['total'] );?></dd>
        </div>
        <?php endif; ?>
        <?php if ( ! empty( $detail['site'] ) ) :?>
        <div class = "p-property__dl__info--half">
          <dt class = "p-property__dt__item--sm">敷地面積</dt>
          <dd class = "p-property__dt__value--sm"><?php echo esc_html( $detail['site'] );?></dd>
        </div>
        <?php endif; ?>
        <?php if ( ! empty( $detail['age'] ) ) :?>
        <div class = "p-property__dl__info--half">
          <dt class = "p-property__dt__item--sm">築年数</dt>
          <dd class = "p-property__dt__value--sm"><?php echo esc_html( $detail['age'] );?></dd>
        </div>
        <?php endif; ?>
        <?php if ( ! empty( $detail['parking'] ) ) :?>
        <div class = "p-property__dl__info--half">
          <dt class = "p-property__dt__item--sm">駐車場</dt>
          <dd class = "p-property__dt__value--sm"><?php echo esc_html( $detail['parking'] );?></dd>
        </div>
        <?php endif; ?>
        <?php if ( ! empty( $detail['move'] ) ) :?>
        <div class = "p-property__dl__info--half">
          <dt class = "p-property__dt__item--sm">入居</dt>
          <dd class = "p-property__dt__value--sm"><?php echo esc_html( $detail['move'] );?></dd>
        </div>
        <?php endif; ?>
        <?php if ( ! empty( $detail['structure'] ) ) :?>
        <div class = "p-property__dl__info--half">
          <dt class = "p-property__dt__item--sm">構造・階数</dt>
          <dd class = "p-property__dt__value--sm"><?php echo esc_html( $detail['structure'] );?></dd>
        </div>
        <?php endif; ?>
        <?php if ( ! empty( $detail['transaction'] ) ) :?>
        <div class = "p-property__dl__info--half">
          <dt class = "p-property__dt__item--sm">取引形態</dt>
          <dd class = "p-property__dt__value--sm"><?php echo esc_html( $detail['transaction'] );?></dd>
        </div>
        <?php endif; ?>
        <?php if ( ! empty( $detail['elementary'] ) ) :?>
        <div class = "p-property__dl__info--half">
          <dt class = "p-property__dt__item--sm">小学校区</dt>
          <dd class = "p-property__dt__value--sm"><?php echo esc_html( $detail['elementary'] );?></dd>
        </div>
        <?php endif; ?>
        <?php if ( ! empty( $detail['juniorHigh'] ) ) :?>
        <div class = "p-property__dl__info--half">
          <dt class = "p-property__dt__item--sm">中学校区</dt>
          <dd class = "p-property__dt__value--sm"><?php echo esc_html( $detail['juniorHigh'] );?></dd>
        </div>
        <?php endif; ?>
        <?php if ( ! empty( $detail['facility'] ) ) :?>
        <div class = "p-property__dl__info">
          <dt class = "p-property__dt__item--lg">設備</dt>
          <dd class = "p-property__dt__value--lg"><?php echo wp_kses_post( $detail['facility'] ); ?></dd>
        </div>
        <?php endif; ?>
        <?php if ( ! empty( $detail['point'] ) ) :?>
        <div class = "p-property__dl__info">
          <dt class = "p-property__dt__item--lg">POINT</dt>
          <dd class = "p-property__dt__value--lg"><?php echo wp_kses_post( $detail['point'] ); ?></dd>
        </div>
        <?php endif; ?>
        <?php if ( ! empty( $detail['remarks'] ) ) :?>
        <div class = "p-property__dl__info">
          <dt class = "p-property__dt__item--lg">備考</dt>
          <dd class = "p-property__dt__value--lg"><?php echo wp_kses_post( $detail['remarks'] ); ?></dd>
        </div>
        <?php endif; ?>
        <?php if ( ! empty( $detail['contact'] ) ) :?>
        <div class = "p-property__dl__info">
          <dt class = "p-property__dt__item--lg">お問い合せ先</dt>
          <dd class = "p-property__dt__value--lg"><?php echo esc_html( $detail['contact'] );?></dd>
        </div>
        <?php endif; ?>
      </dl>
    </section>
  <?php endif; ?>

  <?php if ( have_rows( 'flex-point' ) ) : ?>
  <section class = "u-bg u-mb100 p-works__design">
    <div class = "l-content--middle">
      <h3 class = "c-title--sectionEn">
        POINT
      </h3>
      <p class = "c-title--sectionSub u-mb50">
        ポイント
      </p>
      <?php while ( have_rows( 'flex-point' ) ) :
        the_row(); ?>
        <?php get_template_part( 'template-parts/flex-loop' ); ?>
      <?php endwhile; ?>
    </div>
   </section>
  <?php endif; ?>

  <?php if ( have_rows( 'flex-facilities' ) ) : ?>
    <section class = "l-content--middle u-mb100">
      <h3 class = "c-title--sectionEn">
        FACILITIES
      </h3>
      <p class = "c-title--sectionSub">
        設備
      </p>
      <?php while ( have_rows( 'flex-facilities' ) ) :
        the_row(); ?>
        <?php get_template_part( 'template-parts/flex-loop' ); ?>
      <?php endwhile; ?>
    </section>
  <?php endif; ?>

  <section class="l-content" id = "contact">
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