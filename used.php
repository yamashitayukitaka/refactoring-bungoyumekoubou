<?php 

// Template Name: 建売住宅・中古物件
// Template Post Type: property

if ( ! defined( 'ABSPATH' ) ) exit;
get_header();
?>

<?php $post_id = get_the_ID();?>
<?php $terms = wp_get_post_terms($post_id, 'property-area');?>

<main>
  <h2 class = "c-title--section u-mb50">
    建売住宅・中古物件
  </h2>
  <section class = "l-content--middle">
    <h3 class = "p-event__ttl u-mb50">
      【<?php the_title(); ?>】
    </h3>
    
    <?php if(has_post_thumbnail() ): ?>
      <figure class = "c-thumbnail">
        <?php the_post_thumbnail(); ?>
      </figure>
    <?php endif; ?>
  </section>

  <section class = "l-content--middle u-mb100">

    <?php $property_area = get_field('property-area'); ?>
    <?php if($property_area): ?>
      <?php foreach($terms as $term):?>
        <div class = "c-id__wrap--top u-mb50">
          <span class = "c-id"><?php echo esc_html($term->name); ?></span>
        </div>
      <?php endforeach;?>
    <?php endif; ?>

    <?php $topInfoUsed = get_field('top-info-used'); ?>
    <?php if($topInfoUsed && (!empty($topInfoUsed['floor']) || !empty($topInfoUsed['school']) || !empty($topInfoUsed['top-copy']) || !empty($topInfoUsed['price']))):?>
      <div class = "p-property__dl__flex">
        <div class = "p-property__dl__wrap">

          <?php if(!empty($topInfoUsed['floor'])):?>
            <dl class = "p-property__dl">
              <dt class = "p-property__dl__txt">間取り</dt>
              <dd class = "p-property__dl__txt"><?php echo esc_html($topInfoUsed['floor']);?></dd>
            </dl>
          <?php endif; ?>
          
          <?php if(!empty($topInfoUsed['school'])):?>
            <dl class = "p-property__dl">
              <dt class = "p-property__dl__txt">校区</dt>
              <dd class = "p-property__dl__txt"><?php echo esc_html($topInfoUsed['school']);?></dd>
            </dl>
          <?php endif; ?>

        </div>
      </div>

      <?php if(!empty($topInfoUsed['top-copy'])):?>
        <p class = "p-property__copy u-center u-mb50"><?php echo esc_html($topInfoUsed['top-copy']);?></p>
      <?php endif; ?>

      <?php if(!empty($topInfoUsed['price'])):?>
        <p class = "p-property__price">
          <span class = "p-property__price__num"><?php echo esc_html($topInfoUsed['price']);?></span><span class = "p-property__price__unit"></span><span class = "p-property__price__tax"></span>
        </p>
      <?php endif; ?>

    <?php endif; ?>
  </section>

  <?php get_template_part('hasThumbSlider-loop','hasThumbSlider');?>
  
  <?php $detail = get_field('detail'); ?>
  <?php if($detail && (!empty($detail['price']) || !empty($detail['name']) || !empty($detail['traffic']) || !empty($detail['address']) || !empty($detail['floor']) || !empty($detail['totalFloor']) || !empty($detail['siteArea']) || !empty($detail['age']) || !empty($detail['elementary']) || !empty($detail['junior-high']) || !empty($detail['point']) || !empty($detail['ground']) || !empty($detail['purpose']) || !empty($detail['health']) || !empty($detail['floor-area-ratio']) || !empty($detail['urban']) || !empty($detail['contact-path']) || !empty($detail['structure']) || !empty($detail['transaction']) || !empty($detail['commission']) || !empty($detail['delivery']) || !empty($detail['facility']) || !empty($detail['remarks']) || !empty($detail['contact']))):?>
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
        <?php if (!empty($detail['price'])):?>
        <dl class = "p-property__dl__info">
          <dt class = "p-property__dt__item--lg">販売価格</dt>
          <dd class = "p-property__dt__value--lg"><?php echo wp_kses_post($detail['price']); ?></dd>
        </dl>
        <?php endif; ?>
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
        <?php if (!empty($detail['floor'])):?>
        <dl class = "p-property__dl__info--half"> 
          <dt class = "p-property__dt__item--sm">間取り</dt>
          <dd class = "p-property__dt__value--sm"><?php echo esc_html($detail['floor']);?></dd>
        </dl>
        <?php endif; ?>
        <?php if (!empty($detail['totalFloor'])):?>
        <dl class = "p-property__dl__info--half">
          <dt class = "p-property__dt__item--sm">延床面積</dt>
          <dd class = "p-property__dt__value--sm"><?php echo esc_html($detail['totalFloor']);?></dd>
        </dl>
        <?php endif; ?>
        <?php if (!empty($detail['siteArea'])):?>
        <dl class = "p-property__dl__info--half"> 
          <dt class = "p-property__dt__item--sm">敷地面積</dt>
          <dd class = "p-property__dt__value--sm"><?php echo esc_html($detail['siteArea']);?></dd>
        </dl>
        <?php endif; ?>
        <?php if (!empty($detail['age'])):?>
        <dl class = "p-property__dl__info--half"> 
          <dt class = "p-property__dt__item--sm">築年数</dt>
          <dd class = "p-property__dt__value--sm"><?php echo esc_html($detail['age']);?></dd>
        </dl>
        <?php endif; ?>
        <?php if (!empty($detail['elementary'])):?>
        <dl class = "p-property__dl__info--half">
          <dt class = "p-property__dt__item--sm">小学校区</dt>
          <dd class = "p-property__dt__value--sm"><?php echo esc_html($detail['elementary']);?></dd>
        </dl>
        <?php endif; ?>
        <?php if (!empty($detail['junior-high'])):?>
        <dl class = "p-property__dl__info--half">
          <dt class = "p-property__dt__item--sm">中学校区</dt>
          <dd class = "p-property__dt__value--sm"><?php echo esc_html($detail['junior-high']);?></dd>
        </dl>
        <?php endif; ?>
        <?php if (!empty($detail['point'])):?>
        <dl class = "p-property__dl__info">
          <dt class = "p-property__dt__item--lg">POINT</dt>
          <dd class = "p-property__dt__value--lg"><?php echo wp_kses_post($detail['point']); ?></dd>
        </dl>
        <?php endif; ?>
      </div>

      <div class = "p-property__dl__infoWrap u-mb50">
        <?php if (!empty($detail['ground'])):?>
        <dl class = "p-property__dl__info--half"> 
          <dt class = "p-property__dt__item--sm">地目</dt>
          <dd class = "p-property__dt__value--sm"><?php echo esc_html($detail['ground']);?></dd>
        </dl>
        <?php endif; ?>
        <?php if (!empty($detail['purpose'])):?>
        <dl class = "p-property__dl__info--half"> 
          <dt class = "p-property__dt__item--sm">用途地域</dt>
          <dd class = "p-property__dt__value--sm"><?php echo esc_html($detail['purpose']);?></dd>
        </dl>
        <?php endif; ?>
        <?php if (!empty($detail['health'])):?>
        <dl class = "p-property__dl__info--half">
          <dt class = "p-property__dt__item--sm">健ぺい率</dt>
          <dd class = "p-property__dt__value--sm"><?php echo esc_html($detail['health']);?></dd>
        </dl>
        <?php endif; ?>
        <?php if (!empty($detail['floor-area-ratio'])):?>
        <dl class = "p-property__dl__info--half">
          <dt class = "p-property__dt__item--sm">容積率</dt>
          <dd class = "p-property__dt__value--sm"><?php echo esc_html($detail['floor-area-ratio']);?></dd>
        </dl>
        <?php endif; ?>
        <?php if (!empty($detail['urban'])):?>
        <dl class = "p-property__dl__info--half">
          <dt class = "p-property__dt__item--sm">都市計画</dt>
          <dd class = "p-property__dt__value--sm"><?php echo esc_html($detail['urban']);?></dd>
        </dl>
        <?php endif; ?>
        <?php if (!empty($detail['contact-path'])):?>
        <dl class = "p-property__dl__info--half">
          <dt class = "p-property__dt__item--sm">接道</dt>
          <dd class = "p-property__dt__value--sm"><?php echo esc_html($detail['contact-path']);?></dd>
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
        <?php if (!empty($detail['commission'])):?>
        <dl class = "p-property__dl__info--half">
          <dt class = "p-property__dt__item--sm">仲介手数料</dt>
          <dd class = "p-property__dt__value--sm"><?php echo esc_html($detail['commission']);?></dd>
        </dl>
        <?php endif; ?>
        <?php if (!empty($detail['delivery'])):?>
        <dl class = "p-property__dl__info--half">
          <dt class = "p-property__dt__item--sm">引き渡し</dt>
          <dd class = "p-property__dt__value--sm"><?php echo esc_html($detail['delivery']);?></dd>
        </dl>
        <?php endif; ?>
        <?php if (!empty($detail['facility'])):?>
        <dl class = "p-property__dl__info">
          <dt class = "p-property__dt__item--lg">設備</dt>
          <dd class = "p-property__dt__value--lg"><?php echo wp_kses_post($detail['facility']); ?></dd>
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
    <?php endif; ?>

    <div class = "u-center">
      <a href = "#contact" class = "c-button--page">お問い合わせ</a>
    </div>

  </section>

  <?php if (have_rows('flex-design')) : // 柔軟なコンテンツフィールドの名前 ?>
    <section class = "u-bg u-mb100 p-works__design">
      <div class = "l-content--middle">
        <h3 class = "c-title--sectionEn">
        DESIGN
        </h3>
        <p class = "c-title--sectionSub u-mb50">
          デザイン
        </p>
        <?php while (have_rows('flex-design')) : the_row(); ?>
          <?php get_template_part('flex-loop','flex'); ?>
        <?php endwhile; ?>
      </div>
    </section>
 <?php endif; ?>

  <section class = "l-content--middle u-mb100">
    <?php if (have_rows('flex-facilities')) : // 柔軟なコンテンツフィールドの名前 ?>
      <h3 class = "c-title--sectionEn">
        FACILITIES
      </h3>
      <p class = "c-title--sectionSub">
        設備
      </p>
      <?php while (have_rows('flex-facilities')) : the_row(); ?>
        <?php get_template_part('flex-loop','flex'); ?>
      <?php endwhile; ?>
    <?php endif; ?>
  </section>

  <?php $map = get_field('mhtml'); ?>
    <?php if($map):?>
    <section class = "l-content--middle u-mb100">
      <h3 class = "c-title--sectionEn">
        ACCESS MAP
      </h3>
      <p class = "c-title--sectionSub u-mb50">
        アクセス
      </p>
      <div class = "p-property__iframe__wrap">
        <?php echo $map; ?>
      </div>
    </section>
  <?php endif; ?>

  <?php get_template_part('infomation-loop','infomation'); ?>

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