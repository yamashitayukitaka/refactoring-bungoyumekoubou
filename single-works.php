<?php 
if ( ! defined( 'ABSPATH' ) ) exit;
get_header();
?>
<main class = "u-pt100">
  <section>
    <div class = "l-content--large u-mb50">
      <h2 class = "c-title--large u-mb20"><?php the_title(); ?></h2>
      <?php $worksTypes = get_the_terms(get_the_ID(),'works-type', 
        [
            'hide_empty' => false,
            'parent' =>0,
            'orderby'=>'id',
            'order'=>'ASC',
          ]
      );?>

      <?php $works_type = get_field('works-type'); ?>
      <?php if($works_type && $worksTypes && !is_wp_error($worksTypes)): ?>
        <div class = "c-id__wrap--top">
          <?php foreach($worksTypes as $worksType):?>
            <span class = "c-id u-mb15"><?php echo esc_html($worksType->name); ?></span>
          <?php endforeach;?>
        </div>
      <?php endif; ?>

      <?php $area = get_field('works-area'); ?>
        <?php if($area && (!empty($area['site']) || !empty($area['total-floor']))):?>
         
          <?php if (!empty($area['site'])):?>
            <dl class = "u-flex">
              <dt>敷地面積&nbsp;&nbsp;</dt>
              <dd><?php echo esc_html($area['site']);?></dd>
            </dl>
          <?php endif; ?>
          <?php if (!empty($area['total-floor'])):?> 
            <dl class = "u-flex">
              <dt>延床面積&nbsp;&nbsp;</dt>
              <dd><?php echo esc_html($area['total-floor']);?></dd>
            <dl>
          <?php endif; ?>
        <?php endif; ?>
    </div>
    <div class = "l-content--middle u-mb100">
      <?php $table = get_field('works-table'); ?>
      <?php if($table && (!empty($table['plan-of-feature']) || !empty($table['area']))):?>
        <table class = "c-table">
          <?php if (!empty($table['plan-of-feature'])):?>
          <tr class = "c-table__tr">
            <th class = "c-table__th">間取りの特徴</th>
            <td class = "c-table__td"><?php echo esc_html($table['plan-of-feature']);?></td>
          </tr>
          <?php endif; ?>
          <?php if (!empty($table['area'])):?>
          <tr class = "c-table__tr">
            <th class = "c-table__th">建築エリア</th>
            <td class = "c-table__td"><?php echo esc_html($table['area']);?></td>
          </tr>
          <?php endif; ?>
        </table>
      <?php endif; ?>
    </div>
  </section>

  <?php $outline = get_field('outline'); ?>
  <?php if($outline && (!empty($outline['ttl']) || !empty($outline['txt']))):?>
      <section class = "l-content--middle u-mb100">
        <h3 class = "c-title--sectionEn">
          OUTLINE
        </h3>
        <p class = "c-title--sectionSub u-mb30">
          概要
        </p>
        <?php if(!empty($outline['ttl'])):?>
        <p class = "c-title--middle"><?php echo esc_html($outline['ttl']);?></p>
        <?php endif; ?>
        <?php if(!empty($outline['txt'])):?>
        <p class = "c-txt--middleBold"><?php echo esc_html($outline['txt']);?></p>
        <?php endif; ?>
      </section>
  <?php endif; ?>

  <section class = "l-content--middle u-mb100">
    <?php get_template_part('hasThumbSlider-loop','hasThumbSlider');?>
  </section>

  <?php if (have_rows('flex-design')) : ?>
    <section class = "u-bg">
      <div class = "l-content--middle p-flex__outer">
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
  
  <?php if (have_rows('flex-facilities')) : ?>
    <section class = "l-content--middle p-flex__outer">
      <h3 class = "c-title--sectionEn">
        FACILITIES
      </h3>
      <p class = "c-title--sectionSub u-mb50">
        設備
      </p>
      <?php while (have_rows('flex-facilities')) : the_row(); ?>
        <?php get_template_part('flex-loop','flex'); ?>
      <?php endwhile; ?>
    </section>
  <?php endif; ?>


<div class = "u-mb100">
  <?php $voice = get_field('voice');?>
  <?php if ($voice && (!empty($voice['img']) || !empty($voice['txt']) || !empty($voice['address']) || !empty($voice['name']))) : ?>
      <section class = "u-bg p-works__voice">
        <div class = "l-content--middle">
          <h3 class = "c-title--sectionEn">
            VOICE
          </h3>
          <p class = "c-title--sectionSub u-mb50">
            お客様の声
          </p>
        

          <div class = "p-works__voice__nameWrap l-content u-mb50">
            <!--<div class = "p-works__voice__nameInner">-->
              <?php if(!empty($voice['address'])):?>
              <p class = "p-works__voice__bold"><?php echo esc_html($voice['address']);?></p>
              <?php endif; ?>
              <?php if(!empty($voice['name'])):?>
              <p class = "p-works__voice__bold"><?php echo esc_html($voice['name']);?></p>
              <?php endif; ?>
            <!--</div>-->
          </div>

          <div class = "p-works__voice__wrap l-content">
            <?php if(!empty($voice['img'])):?>
              <figure class = "p-works__voice__imgWrap">
                <img src = "<?php echo esc_url($voice['img']);?>">
              </figure>
            <?php endif; ?>
            
            <?php if(!empty($voice['txt'])):?>
              <p class = "p-works__voice__txt">
                <?php echo wp_kses_post($voice['txt']);?>
              </p>
            <?php endif; ?>
          </div>
        </div>
      </section>
  <?php endif; ?>

  <?php $qs = get_field('qs');?>
  <?php if($qs && (!empty($qs['img']) || !empty($qs['txt']))):?>
      <section class = "u-bg p-works__voice">

        <div class = "l-content--middle">
          <div class = "p-works__voice__wrap l-content">
            <?php if (!empty($qs['img'])):?>
              <figure class = "p-works__voice__imgWrap">
                <img src = "<?php echo esc_url($qs['img']);?>">
              </figure>
            <?php endif; ?>
            <?php if (!empty($qs['txt'])):?>
              <p class = "p-works__voice__txt">
                <?php echo wp_kses_post($qs['txt']);?>
              </p>
            <?php endif; ?>
          </div>
        </div>

      </section>
  <?php endif; ?>
</div>

  <section class="p-contact l-content">
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

</main>

<?php get_template_part('common-link','link'); ?>
<?php get_footer(); ?>