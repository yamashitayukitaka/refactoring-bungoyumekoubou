<?php
if (!defined('ABSPATH')) exit;
get_header();
?>
<main>
  <div class="c-pageMv u-mb100">
    <div class="c-pageMv__ttl__wrap">
      <h2 class="c-pageMv__ttl">
        よくあるご質問
      </h2>
      <p class="c-pageMv__subTtl">
        Q & A
      </p>
    </div>
    <?php $mv = get_field('mv-faq-img'); ?>
    <?php if ($mv) : ?>
      <figure class="c-pageMv__img__wrap" style="background-image: url('<?php echo esc_url($mv); ?>');"></figure>
    <?php endif; ?>
  </div>


  <!-- トップタイトル概要 -->
  <section class="l_content_middle_80 support-title u-mb100 illustration_set">
    <figure class="illustration_2">
      <img src="<?php echo esc_url(IMG_URL . '/illustration/family_img.webp'); ?>" alt="">
    </figure>
    <figure class="illustration_3">
      <img src="<?php echo esc_url(IMG_URL . '/illustration/yume_img9.webp'); ?>" alt="">
    </figure>
    <figure class="illustration_4">
      <img src="<?php echo esc_url(IMG_URL . '/illustration/house.webp'); ?>" alt="">
    </figure>
    <div class="c-title__wrap--sectionLine">
      <h3 class="c-title--sectionLine u-mb40">
        よくあるご質問
      </h3>
      <div>
        <div>
          <p class="c-title--orangeLine "><span class="marker">
              お客様からよくいただく<br>
              <span class="u-orange">ご質問</span>とその<span class="u-orange">回答</span>をまとめています</span>

          </p>
        </div>
      </div>
    </div>
  </section>


  <p class="l-content--middle u-mb100 flow-desc">
    もし、こちらに掲載されていない質問がございましたら、<br class="pc_tab">
    お気軽にお問い合わせください。
  </p>

  <section class="faq u-mb200">
    <?php
    $qas = get_field('faq_questions_answers');
    if ($qas) :
      foreach ($qas as $i => $qa) :
        if (empty($qa['question']) && empty($qa['answer'])) {
          continue;
        }
    ?>
      <button class="accordion">
        <span class="accordion-number">
          <?php echo sprintf("%02d", ($i + 1)); ?>
        </span>
        <?php if (!empty($qa['question'])) : ?>
        <?php echo esc_html($qa['question']); ?>
        <?php endif; ?>
      </button>
      <div class="panel">
        <p>
          <?php if (!empty($qa['answer'])) : ?>
          <?php echo wp_kses_post($qa['answer']); ?>
          <?php endif; ?>
        </p>
      </div>
    <?php
      endforeach;
    endif;
    ?>
  </section>

  <?php get_template_part('template-parts/common'); ?>

</main>
<?php get_footer(); ?>