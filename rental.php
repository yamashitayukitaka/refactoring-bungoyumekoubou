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
    <?php if(get_field('property-area')): ?>
      <?php foreach($terms as $term):?>
        <div class = "c-id__wrap--top u-mb50">
          <span class = "c-id"><?php echo esc_html($term->name); ?></span>
        </div>
      <?php endforeach;?>
    <?php endif; ?>

    <?php 
        $top = get_field('top');
        $price = $top['price'];
        $management = $top['management'];
        $security = $top['security'];
        $copy = $top['copy'];
      ?>

    
      <div class = "p-property__dl__flex">
        <div class = "p-property__dl__wrap">
          <?php if ($management):?>
            <dl class = "p-property__dl">
              <dt class = "p-property__dl__txt">管理費・共済費:</dt>
              <dd class = "p-property__dl__txt"><?php echo esc_html($management);?></dd>
            </dl>
          <?php endif; ?>
          <?php if ($security):?>
            <dl class = "p-property__dl">
              <dt class = "p-property__dl__txt">敷金:</dt>
              <dd class = "p-property__dl__txt"><?php echo esc_html($security);?></dd>
            </dl>
          <?php endif; ?>
        </div>
      </div>
      <?php if ($copy):?>
        <p class = "p-property__copy u-center u-mb50"><?php echo esc_html($copy);?></p>
      <?php endif; ?>
      <?php if ($price):?>
        <p class = "p-property__price">
          <span class = "p-property__price__num"><?php echo esc_html($price);?></span><span class = "p-property__price__unit"></span><span class = "p-property__price__tax"></span>
        </p>
      <?php endif; ?>
  </section>

  
  <?php get_template_part('hasThumbSlider-loop','hasThumbSlider');?>
 
  <?php 
    $detail = get_field('detail');
    $name = $detail['name'];
    $traffic = $detail['traffic'];
    $address = $detail['address'];
    $document = $detail['document'];
    $mutual = $detail['mutual'];
    $security = $detail['security'];
    $key = $detail['key'];
    $renewal = $detail['renewal'];
    $insurance = $detail['insurance'];
    $deposit = $detail['deposit'];
    $brokerage = $detail['brokerage'];
    $floor = $detail['floor'];
    $total = $detail['total'];
    $site = $detail['site'];
    $age = $detail['age'];
    $parking = $detail['parking'];
    $move = $detail['move'];
    $structure = $detail['structure'];
    $transaction = $detail['transaction'];
    $elementary = $detail['elementary'];
    $juniorHigh = $detail['juniorHigh'];
    $facility = $detail['facility'];
    $point = $detail['point'];
    $remarks = $detail['remarks'];
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
          <dt class = "p-property__dt__item--sm">資料</dt>
          <dd class = "p-property__dt__value--sm"><?php echo esc_html($document);?></dd>
        </dl>
        <dl class = "p-property__dl__info--half">
          <dt class = "p-property__dt__item--sm">共済費</dt>
          <dd class = "p-property__dt__value--sm"><?php echo esc_html($mutual);?></dd>
        </dl>
        <dl class = "p-property__dl__info--half"> 
          <dt class = "p-property__dt__item--sm">敷金</dt>
          <dd class = "p-property__dt__value--sm"><?php echo esc_html($security);?></dd>
        </dl>
        <dl class = "p-property__dl__info--half">
          <dt class = "p-property__dt__item--sm">礼金</dt>
          <dd class = "p-property__dt__value--sm"><?php echo esc_html($key);?></dd>
        </dl>
        <dl class = "p-property__dl__info--half"> 
          <dt class = "p-property__dt__item--sm">更新料</dt>
          <dd class = "p-property__dt__value--sm"><?php echo esc_html($renewal);?></dd>
        </dl>
        <dl class = "p-property__dl__info--half">
          <dt class = "p-property__dt__item--sm">保険料</dt>
          <dd class = "p-property__dt__value--sm"><?php echo esc_html($insurance);?></dd>
        </dl>
        <dl class = "p-property__dl__info--half"> 
          <dt class = "p-property__dt__item--sm">保証金</dt>
          <dd class = "p-property__dt__value--sm"><?php echo esc_html($deposit);?></dd>
        </dl>
        <dl class = "p-property__dl__info--half">
          <dt class = "p-property__dt__item--sm">仲介手数料</dt>
          <dd class = "p-property__dt__value--sm"><?php echo esc_html($brokerage);?></dd>
        </dl>
        <dl class = "p-property__dl__info--half">
          <dt class = "p-property__dt__item--sm">間取り</dt>
          <dd class = "p-property__dt__value--sm"><?php echo esc_html($floor);?></dd>
        </dl>
        <dl class = "p-property__dl__info--half">
          <dt class = "p-property__dt__item--sm">延床面積</dt>
          <dd class = "p-property__dt__value--sm"><?php echo esc_html($total);?></dd>
        </dl>
        <dl class = "p-property__dl__info--half">
          <dt class = "p-property__dt__item--sm">敷地面積</dt>
          <dd class = "p-property__dt__value--sm"><?php echo esc_html($site);?></dd>
        </dl>
        <dl class = "p-property__dl__info--half">
          <dt class = "p-property__dt__item--sm">築年数</dt>
          <dd class = "p-property__dt__value--sm"><?php echo esc_html($age);?></dd>
        </dl>
        <dl class = "p-property__dl__info--half">
          <dt class = "p-property__dt__item--sm">駐車場</dt>
          <dd class = "p-property__dt__value--sm"><?php echo esc_html($parking);?></dd>
        </dl>
        <dl class = "p-property__dl__info--half">
          <dt class = "p-property__dt__item--sm">入居</dt>
          <dd class = "p-property__dt__value--sm"><?php echo esc_html($move);?></dd>
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
          <dt class = "p-property__dt__item--sm">小学校区</dt>
          <dd class = "p-property__dt__value--sm"><?php echo esc_html($elementary);?></dd>
        </dl>
        <dl class = "p-property__dl__info--half">
          <dt class = "p-property__dt__item--sm">中学校区</dt>
          <dd class = "p-property__dt__value--sm"><?php echo esc_html($juniorHigh);?></dd>
        </dl>
        <dl class = "p-property__dl__info">
          <dt class = "p-property__dt__item--lg">設備</dt>
          <dd class = "p-property__dt__value--lg"><?php echo wp_kses_post($facility); ?></dd>
        </dl>
        <dl class = "p-property__dl__info">
          <dt class = "p-property__dt__item--lg">POINT</dt>
          <dd class = "p-property__dt__value--lg"><?php echo wp_kses_post($point); ?></dd>
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