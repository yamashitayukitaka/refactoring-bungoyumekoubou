<?php
// Template Name: faq
if (!defined('ABSPATH')) exit;
get_header();
?>
<main class="p-faq">
  <div class="c-pageMv u-mb100">
    <div class="c-pageMv__heading">
      <h2 class="c-pageMv__heading__title">
        よくあるご質問
      </h2>
      <p class="c-pageMv__heading__subTitle">
        Q & A
      </p>
    </div>
    <?php $mv = get_field('mv-faq-img'); ?>
    <?php if ($mv) : ?>
      <figure class="c-pageMv__visual" style="background-image: url('<?php echo esc_url($mv); ?>');"></figure>
    <?php endif; ?>
  </div>

  <section class="p-faq__overview">
    <div class="c-title__head">
      <h3 class="c-title--sectionLine u-mb40">よくあるご質問</h3>
      <p class="c-title--orangeLine">
        <span class="marker">
          お客様からよくいただく<br>
          <span class="u-orange">ご質問</span>とその<span class="u-orange">回答</span>をまとめています
        </span>
      </p>
    </div>
    <p class="p-faq__lead l-content--middle">
      もし、こちらに掲載されていない質問がございましたら、<br class="u-none__mobile--sp">
      お気軽にお問い合わせください。
    </p>
  </section>

  <?php
  $qas = get_field('faq_questions_answers');
  if ($qas) :
  ?>
    <section class="p-faq__list">
      <ul class="c-accordion">
        <?php foreach ($qas as $i => $qa) :
          if (empty($qa['question']) || empty($qa['answer'])) {
            continue;
          }
        ?>
          <li class="c-accordion__item">
            <button type="button" class="c-accordion__trigger js-accordion">
              <span class="c-accordion__number">
                <?php echo sprintf('%02d', ($i + 1)); ?>
              </span>
              <?php echo esc_html($qa['question']); ?>
            </button>
            <div class="c-accordion__panel">
              <p class="c-accordion__body">
                <?php echo wp_kses_post($qa['answer']); ?>
              </p>
            </div>
          </li>
        <?php endforeach; ?>
      </ul>
    </section>
  <?php endif; ?>

  <?php get_template_part('template-parts/common'); ?>

</main>
<?php get_footer(); ?>
