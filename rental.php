<?php 

// Template Name:賃貸物件
// Template Post Type: property

if ( ! defined( 'ABSPATH' ) ) exit;
get_header();
?>

<?php $post_id = get_the_ID();?>
<?php $terms = wp_get_post_terms($post_id, 'property-area');?>

<main>
  <h2 class = "c-title--section u-mb50">
    賃貸物件
  </h2>
  <section class = "l-content--middle">
    <h3 class = "p-event__ttl u-mb50">
      【<?php the_title(); ?>】
    </h3>
    <figure class = "c-thumbnail">
      <?php the_post_thumbnail(); ?>
    </figure>
  </section>
  <section class = "l-content--middle u-mb100">
    <?php $property_area = get_field('property-area'); ?>
    <?php if($property_area && $terms && !is_wp_error($terms)): ?>
      <?php foreach($terms as $term):?>
        <div class = "c-id__wrap--top u-mb50">
          <span class = "c-id"><?php echo esc_html($term->name); ?></span>
        </div>
      <?php endforeach;?>
    <?php endif; ?>

    <?php $top = get_field('top'); ?>
    <?php if ($top && (!empty($top['management']) || !empty($top['security']) || !empty($top['copy']) || !empty($top['price']))) : ?>
      <div class = "p-property__dl__flex">
        <div class = "p-property__dl__wrap">
          <?php if (!empty($top['management'])):?>
            <dl class = "p-property__dl">
              <dt class = "p-property__dl__txt">管理費・共済費:</dt>
              <dd class = "p-property__dl__txt"><?php echo esc_html($top['management']);?></dd>
            </dl>
          <?php endif; ?>
          <?php if (!empty($top['security'])):?>
            <dl class = "p-property__dl">
              <dt class = "p-property__dl__txt">敷金:</dt>
              <dd class = "p-property__dl__txt"><?php echo esc_html($top['security']);?></dd>
            </dl>
          <?php endif; ?>
        </div>
      </div>
      <?php if (!empty($top['copy'])):?>
        <p class = "p-property__copy u-center u-mb50"><?php echo esc_html($top['copy']);?></p>
      <?php endif; ?>
      <?php if (!empty($top['price'])):?>
        <p class = "p-property__price">
          <span class = "p-property__price__num"><?php echo esc_html($top['price']);?></span><span class = "p-property__price__unit"></span><span class = "p-property__price__tax"></span>
        </p>
      <?php endif; ?>
    <?php endif; ?>
  </section>

  
  <?php get_template_part('hasThumbSlider-loop','hasThumbSlider');?>
 
  <?php $detail = get_field('detail'); ?>
  <?php if($detail && (!empty($detail['name']) || !empty($detail['traffic']) || !empty($detail['address']) || !empty($detail['document']) || !empty($detail['mutual']) || !empty($detail['security']) || !empty($detail['key']) || !empty($detail['renewal']) || !empty($detail['insurance']) || !empty($detail['deposit']) || !empty($detail['brokerage']) || !empty($detail['floor']) || !empty($detail['total']) || !empty($detail['site']) || !empty($detail['age']) || !empty($detail['parking']) || !empty($detail['move']) || !empty($detail['structure']) || !empty($detail['transaction']) || !empty($detail['elementary']) || !empty($detail['juniorHigh']) || !empty($detail['facility']) || !empty($detail['point']) || !empty($detail['remarks']) || !empty($detail['contact']))):?>
    <section class = "l-content--middle u-mb100">
      <h3 class = "c-title--sectionEn">
        DETAIL
      </h3>
      <p class = "c-title--sectionSub u-mb50">
        詳細情報
      </p>

      <!--テキストのみを出力したい場合: esc_htmlが適しています。すべてのHTMLタグをエスケープするため、純粋なテキストを安全に表示できます。-->
      <!--一部のHTMLタグを許可したい場合: wp_kses_postが適しています。ユーザー投稿などで特定のHTMLタグを許可しつつ、その他の有害なタグを排除できます。-->

      <div class = "p-property__dl__infoWrap u-mb50">
        <?php if (!empty($detail['name'])):?>
        <dl class = "p-property__dl__info">
          <dt class = "p-property__dt__item--lg">物件名</dt>
          <dd class = "p-property__dt__value--lg"><?php echo esc_html($detail['name']);?></dd>
        </dl>
        <?php endif; ?>
        <?php if (!empty($detail['traffic'])):?>
        <dl class = "p-property__dl__info">
          <dt class = "p-property__dt__item--lg">交通</dt>
          <dd class = "p-property__dt__value--lg"><?php echo esc_html($detail['traffic']);?></dd>
        </dl>
        <?php endif; ?>
        <?php if (!empty($detail['address'])):?>
        <dl class = "p-property__dl__info">
          <dt class = "p-property__dt__item--lg">所在地</dt>
          <dd class = "p-property__dt__value--lg"><?php echo esc_html($detail['address']);?></dd>
        </dl>
        <?php endif; ?>
        <?php if (!empty($detail['document'])):?>
        <dl class = "p-property__dl__info--half"> 
          <dt class = "p-property__dt__item--sm">資料</dt>
          <dd class = "p-property__dt__value--sm"><?php echo esc_html($detail['document']);?></dd>
        </dl>
        <?php endif; ?>
        <?php if (!empty($detail['mutual'])):?>
        <dl class = "p-property__dl__info--half">
          <dt class = "p-property__dt__item--sm">共済費</dt>
          <dd class = "p-property__dt__value--sm"><?php echo esc_html($detail['mutual']);?></dd>
        </dl>
        <?php endif; ?>
        <?php if (!empty($detail['security'])):?>
        <dl class = "p-property__dl__info--half"> 
          <dt class = "p-property__dt__item--sm">敷金</dt>
          <dd class = "p-property__dt__value--sm"><?php echo esc_html($detail['security']);?></dd>
        </dl>
        <?php endif; ?>
        <?php if (!empty($detail['key'])):?>
        <dl class = "p-property__dl__info--half">
          <dt class = "p-property__dt__item--sm">礼金</dt>
          <dd class = "p-property__dt__value--sm"><?php echo esc_html($detail['key']);?></dd>
        </dl>
        <?php endif; ?>
        <?php if (!empty($detail['renewal'])):?>
        <dl class = "p-property__dl__info--half"> 
          <dt class = "p-property__dt__item--sm">更新料</dt>
          <dd class = "p-property__dt__value--sm"><?php echo esc_html($detail['renewal']);?></dd>
        </dl>
        <?php endif; ?>
        <?php if (!empty($detail['insurance'])):?>
        <dl class = "p-property__dl__info--half">
          <dt class = "p-property__dt__item--sm">保険料</dt>
          <dd class = "p-property__dt__value--sm"><?php echo esc_html($detail['insurance']);?></dd>
        </dl>
        <?php endif; ?>
        <?php if (!empty($detail['deposit'])):?>
        <dl class = "p-property__dl__info--half"> 
          <dt class = "p-property__dt__item--sm">保証金</dt>
          <dd class = "p-property__dt__value--sm"><?php echo esc_html($detail['deposit']);?></dd>
        </dl>
        <?php endif; ?>
        <?php if (!empty($detail['brokerage'])):?>
        <dl class = "p-property__dl__info--half">
          <dt class = "p-property__dt__item--sm">仲介手数料</dt>
          <dd class = "p-property__dt__value--sm"><?php echo esc_html($detail['brokerage']);?></dd>
        </dl>
        <?php endif; ?>
        <?php if (!empty($detail['floor'])):?>
        <dl class = "p-property__dl__info--half">
          <dt class = "p-property__dt__item--sm">間取り</dt>
          <dd class = "p-property__dt__value--sm"><?php echo esc_html($detail['floor']);?></dd>
        </dl>
        <?php endif; ?>
        <?php if (!empty($detail['total'])):?>
        <dl class = "p-property__dl__info--half">
          <dt class = "p-property__dt__item--sm">延床面積</dt>
          <dd class = "p-property__dt__value--sm"><?php echo esc_html($detail['total']);?></dd>
        </dl>
        <?php endif; ?>
        <?php if (!empty($detail['site'])):?>
        <dl class = "p-property__dl__info--half">
          <dt class = "p-property__dt__item--sm">敷地面積</dt>
          <dd class = "p-property__dt__value--sm"><?php echo esc_html($detail['site']);?></dd>
        </dl>
        <?php endif; ?>
        <?php if (!empty($detail['age'])):?>
        <dl class = "p-property__dl__info--half">
          <dt class = "p-property__dt__item--sm">築年数</dt>
          <dd class = "p-property__dt__value--sm"><?php echo esc_html($detail['age']);?></dd>
        </dl>
        <?php endif; ?>
        <?php if (!empty($detail['parking'])):?>
        <dl class = "p-property__dl__info--half">
          <dt class = "p-property__dt__item--sm">駐車場</dt>
          <dd class = "p-property__dt__value--sm"><?php echo esc_html($detail['parking']);?></dd>
        </dl>
        <?php endif; ?>
        <?php if (!empty($detail['move'])):?>
        <dl class = "p-property__dl__info--half">
          <dt class = "p-property__dt__item--sm">入居</dt>
          <dd class = "p-property__dt__value--sm"><?php echo esc_html($detail['move']);?></dd>
        </dl>
        <?php endif; ?>
        <?php if (!empty($detail['structure'])):?>
        <dl class = "p-property__dl__info--half">
          <dt class = "p-property__dt__item--sm">構造・階数</dt>
          <dd class = "p-property__dt__value--sm"><?php echo esc_html($detail['structure']);?></dd>
        </dl>
        <?php endif; ?>
        <?php if (!empty($detail['transaction'])):?>
        <dl class = "p-property__dl__info--half">
          <dt class = "p-property__dt__item--sm">取引形態</dt>
          <dd class = "p-property__dt__value--sm"><?php echo esc_html($detail['transaction']);?></dd>
        </dl>
        <?php endif; ?>
        <?php if (!empty($detail['elementary'])):?>
        <dl class = "p-property__dl__info--half">
          <dt class = "p-property__dt__item--sm">小学校区</dt>
          <dd class = "p-property__dt__value--sm"><?php echo esc_html($detail['elementary']);?></dd>
        </dl>
        <?php endif; ?>
        <?php if (!empty($detail['juniorHigh'])):?>
        <dl class = "p-property__dl__info--half">
          <dt class = "p-property__dt__item--sm">中学校区</dt>
          <dd class = "p-property__dt__value--sm"><?php echo esc_html($detail['juniorHigh']);?></dd>
        </dl>
        <?php endif; ?>
        <?php if (!empty($detail['facility'])):?>
        <dl class = "p-property__dl__info">
          <dt class = "p-property__dt__item--lg">設備</dt>
          <dd class = "p-property__dt__value--lg"><?php echo wp_kses_post($detail['facility']); ?></dd>
        </dl>
        <?php endif; ?>
        <?php if (!empty($detail['point'])):?>
        <dl class = "p-property__dl__info">
          <dt class = "p-property__dt__item--lg">POINT</dt>
          <dd class = "p-property__dt__value--lg"><?php echo wp_kses_post($detail['point']); ?></dd>
        </dl>
        <?php endif; ?>
        <?php if (!empty($detail['remarks'])):?>
        <dl class = "p-property__dl__info">
          <dt class = "p-property__dt__item--lg">備考</dt>
          <dd class = "p-property__dt__value--lg"><?php echo wp_kses_post($detail['remarks']); ?></dd>
        </dl>
        <?php endif; ?>
        <?php if (!empty($detail['contact'])):?>
        <dl class = "p-property__dl__info">
          <dt class = "p-property__dt__item--lg">お問い合せ先</dt>
          <dd class = "p-property__dt__value--lg"><?php echo esc_html($detail['contact']);?></dd>
        </dl>
        <?php endif; ?>
      </div>
    </section>
  <?php endif; ?>

  <?php if (have_rows('flex-point')) : // 柔軟なコンテンツフィールドの名前 ?>
  <section class = "u-bg u-mb100 p-works__design">
    <div class = "l-content--middle">
      <h3 class = "c-title--sectionEn">
        POINT
      </h3>
      <p class = "c-title--sectionSub u-mb50">
        ポイント
      </p>
      <?php while (have_rows('flex-point')) : the_row(); ?>
        <?php get_template_part('flex-loop','flex'); ?>
      <?php endwhile; ?>
    </div>
   </section>
  <?php endif; ?>

  <?php if (have_rows('flex-facilities')) : // 柔軟なコンテンツフィールドの名前 ?>
    <section class = "l-content--middle u-mb100">
      <h3 class = "c-title--sectionEn">
        FACILITIES
      </h3>
      <p class = "c-title--sectionSub">
        設備
      </p>
      <?php while (have_rows('flex-facilities')) : the_row(); ?>
        <?php get_template_part('flex-loop','flex'); ?>
      <?php endwhile; ?>
    </section>
  <?php endif; ?>

  <section class="p-contact l-content" id = "contact">
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
  
  <?php get_template_part('common-footer','common'); ?>

</main>

<?php get_footer(); ?>