<?php
/**
 * Template Name: contact
 *
 * @package Wazeka
 */

get_header();
?>
<main>
  <div class="c-pageMv u-mb100">
    <div class="c-pageMv__heading">
      <h1 class="c-pageMv__heading__title">
        お問い合わせ
      </h1>
      <p class="c-pageMv__heading__subTitle">
        CONTACT
      </p>
    </div>
    <?php $mv = get_field( 'main-visual' ); ?>
    <?php if ( $mv ) : ?>
    <figure class="c-pageMv__visual" style="background-image: url('<?php echo esc_url( $mv ); ?>');"></figure>
    <?php endif; ?>
  </div>
  <section class="l-content">
    <div class="c-title__head">
      <h2 class="c-title--sectionLine">
        CONTACT
      </h2>
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
</main>
<?php
get_footer();
?>