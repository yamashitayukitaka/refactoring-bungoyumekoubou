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

    <?php if(get_field('property-area')): ?>
      <?php foreach($terms as $term):?>
        <div class = "c-id__wrap--top u-mb50">
          <span class = "c-id"><?php echo esc_html($term->name); ?></span>
        </div>
      <?php endforeach;?>
    <?php endif; ?>

    <?php 
        $topInfoUsed = get_field('top-info-used');
        $topInfoUsedFloor = $topInfoUsed['floor'];
        $topInfoUsedSchool = $topInfoUsed['school'];
        $topInfoUsedCopy = $topInfoUsed['top-copy'];
        $topInfoUsedPrice = $topInfoUsed['price'];
      ?>

    <?php if($topInfoUsed):?>
      <div class = "p-property__dl__flex">
        <div class = "p-property__dl__wrap">

          <?php if($topInfoUsedFloor):?>
            <dl class = "p-property__dl">
              <dt class = "p-property__dl__txt">間取り</dt>
              <dd class = "p-property__dl__txt"><?php echo esc_html($topInfoUsedFloor);?></dd>
            </dl>
          <?php endif; ?>
          
          <?php if($topInfoUsedSchool):?>
            <dl class = "p-property__dl">
              <dt class = "p-property__dl__txt">校区</dt>
              <dd class = "p-property__dl__txt"><?php echo esc_html($topInfoUsedSchool);?></dd>
            </dl>
          <?php endif; ?>

        </div>
      </div>

      <?php if($topInfoUsedCopy):?>
        <p class = "p-property__copy u-center u-mb50"><?php echo esc_html($topInfoUsedCopy);?></p>
      <?php endif; ?>

      <?php if($topInfoUsedPrice):?>
        <p class = "p-property__price">
          <span class = "p-property__price__num"><?php echo esc_html($topInfoUsedPrice);?></span><span class = "p-property__price__unit"></span><span class = "p-property__price__tax"></span>
        </p>
      <?php endif; ?>

    <?php endif; ?>
  </section>

  <?php get_template_part('hasThumbSlider-loop','hasThumbSlider');?>
  
  <?php 
    $detail = get_field('detail');
    $price = $detail['price'];
    $name = $detail['name'];
    $traffic = $detail['traffic'];
    $address = $detail['address'];
    $floor = $detail['floor'];
    $totalFloor = $detail['totalFloor'];
    $siteArea = $detail['siteArea'];
    $age = $detail['age'];
    $elementary = $detail['elementary'];
    $juniorHigh = $detail['junior-high'];
    $point = $detail['point'];
    $ground = $detail['ground'];
    $purpose = $detail['purpose'];
    $health = $detail['health'];
    $FloorAreaRatio = $detail['floor-area-ratio'];
    $urban = $detail['urban'];
    $contactPath = $detail['contact-path'];
    $structure = $detail['structure'];
    $transaction = $detail['transaction'];
    $commission = $detail['commission'];
    $delivery = $detail['delivery'];
    $facility = $detail['facility'];
    $remarks= $detail['remarks'];
    $contact = $detail['contact'];
  ?>
   
  <?php if($detail):?>
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
        <dl class = "p-property__dl__info">
          <dt class = "p-property__dt__item--lg">販売価格</dt>
          <dd class = "p-property__dt__value--lg"><?php echo wp_kses_post($price); ?></dd>
        </dl>
        <dl class = "p-property__dl__info">
          <dt class = "p-property__dt__item--lg">物件名</dt>
          <dd class = "p-property__dt__value--lg"><?php echo esc_html($name);?></dd>
        </dl>
        <dl class = "p-property__dl__info">
          <dt class = "p-property__dt__item--lg">交通</dt>
          <dd class = "p-property__dt__value--lg"><?php echo esc_html($traffic);?></dd>
        </dl>
        <dl class = "p-property__dl__info">
          <dt class = "p-property__dt__item--lg">所在地</dt>
          <dd class = "p-property__dt__value--lg"><?php echo esc_html($address);?></dd>
        </dl>
        <dl class = "p-property__dl__info--half"> 
          <dt class = "p-property__dt__item--sm">間取り</dt>
          <dd class = "p-property__dt__value--sm"><?php echo esc_html($floor);?></dd>
        </dl>
        <dl class = "p-property__dl__info--half">
          <dt class = "p-property__dt__item--sm">延床面積</dt>
          <dd class = "p-property__dt__value--sm"><?php echo esc_html($totalFloor);?></dd>
        </dl>
        <dl class = "p-property__dl__info--half"> 
          <dt class = "p-property__dt__item--sm">敷地面積</dt>
          <dd class = "p-property__dt__value--sm"><?php echo esc_html($siteArea);?></dd>
        </dl>
        <dl class = "p-property__dl__info--half"> 
          <dt class = "p-property__dt__item--sm">築年数</dt>
          <dd class = "p-property__dt__value--sm"><?php echo esc_html($age);?></dd>
        </dl>
        <dl class = "p-property__dl__info--half">
          <dt class = "p-property__dt__item--sm">小学校区</dt>
          <dd class = "p-property__dt__value--sm"><?php echo esc_html($elementary);?></dd>
        </dl>
        <dl class = "p-property__dl__info--half">
          <dt class = "p-property__dt__item--sm">中学校区</dt>
          <dd class = "p-property__dt__value--sm"><?php echo esc_html($juniorHigh);?></dd>
        </dl>
        <dl class = "p-property__dl__info">
          <dt class = "p-property__dt__item--lg">POINT</dt>
          <dd class = "p-property__dt__value--lg"><?php echo wp_kses_post($point); ?></dd>
        </dl>
      </div>

      <div class = "p-property__dl__infoWrap u-mb50">
        <dl class = "p-property__dl__info--half"> 
          <dt class = "p-property__dt__item--sm">地目</dt>
          <dd class = "p-property__dt__value--sm"><?php echo esc_html($ground);?></dd>
        </dl>
        <dl class = "p-property__dl__info--half"> 
          <dt class = "p-property__dt__item--sm">用途地域</dt>
          <dd class = "p-property__dt__value--sm"><?php echo esc_html($purpose);?></dd>
        </dl>
        <dl class = "p-property__dl__info--half">
          <dt class = "p-property__dt__item--sm">健ぺい率</dt>
          <dd class = "p-property__dt__value--sm"><?php echo esc_html($health);?></dd>
        </dl>
        <dl class = "p-property__dl__info--half">
          <dt class = "p-property__dt__item--sm">容積率</dt>
          <dd class = "p-property__dt__value--sm"><?php echo esc_html($FloorAreaRatio);?></dd>
        </dl>
        <dl class = "p-property__dl__info--half">
          <dt class = "p-property__dt__item--sm">都市計画</dt>
          <dd class = "p-property__dt__value--sm"><?php echo esc_html($urban);?></dd>
        </dl>
        <dl class = "p-property__dl__info--half">
          <dt class = "p-property__dt__item--sm">接道</dt>
          <dd class = "p-property__dt__value--sm"><?php echo esc_html($contactPath);?></dd>
        </dl>
        <dl class = "p-property__dl__info--half">
          <dt class = "p-property__dt__item--sm">構造・階数</dt>
          <dd class = "p-property__dt__value--sm"><?php echo esc_html($structure);?></dd>
        </dl>
        <dl class = "p-property__dl__info--half">
          <dt class = "p-property__dt__item--sm">取引形態</dt>
          <dd class = "p-property__dt__value--sm"><?php echo esc_html($transaction);?></dd>
        </dl>
        <dl class = "p-property__dl__info--half">
          <dt class = "p-property__dt__item--sm">仲介手数料</dt>
          <dd class = "p-property__dt__value--sm"><?php echo esc_html($commission);?></dd>
        </dl>
        <dl class = "p-property__dl__info--half">
          <dt class = "p-property__dt__item--sm">引き渡し</dt>
          <dd class = "p-property__dt__value--sm"><?php echo esc_html($delivery);?></dd>
        </dl>
        <dl class = "p-property__dl__info">
          <dt class = "p-property__dt__item--lg">設備</dt>
          <dd class = "p-property__dt__value--lg"><?php echo wp_kses_post($facility); ?></dd>
        </dl>
        <dl class = "p-property__dl__info">
          <dt class = "p-property__dt__item--lg">備考</dt>
          <dd class = "p-property__dt__value--lg"><?php echo wp_kses_post($remarks); ?></dd>
        </dl>
        <dl class = "p-property__dl__info">
          <dt class = "p-property__dt__item--lg">お問い合せ先</dt>
          <dd class = "p-property__dt__value--lg"><?php echo esc_html($contact);?></dd>
        </dl>
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