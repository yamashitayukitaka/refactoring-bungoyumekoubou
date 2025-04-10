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
    <figure class="c-pageMv__img__wrap" style="background-image: url('<?php echo $mv; ?>');"></figure>
  </div>


  <!-- トップタイトル概要 -->
  <section class="l_content_middle_80 support-title u-mb100 illustration_set">
    <figure class="illustration_2">
      <img src="<?php echo esc_url(IMG_URL . '/family_img.webp'); ?>" alt="">
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
    for ($i = 0; $i < count($qas); $i++) {
      $question = $qas[$i]['question'];
      $answer = $qas[$i]['answer'];
    ?>
      <button class="accordion">
        <span class="accordion-number">
          <?php echo sprintf("%02d", ($i + 1)); ?>
        </span>
        <?php echo $question; ?>
      </button>
      <div class="panel">
        <p>
          <?php echo $answer; ?>
        </p>
      </div>
    <?php } ?>
  </section>

  <?php include get_template_directory() . '/common.php' ?>

</main>
<?php get_footer(); ?>