<?php 
if ( ! defined( 'ABSPATH' ) ) exit;
get_header();
?>
<section class = "p-top__contact l-content u-mb150">
  <h3 class = "c-title--section">ENTRY</h3>
  <p class = "c-title--sectionSub u-mb100">
    エントリーフォーム
  </p>
  <div class = "p-top__contact__wrap">
    <div class = "p-top__contact__wrapInner">
      <?php echo do_shortcode('[mwform_formkey key="1820"]');?>
    </div>
  </div>
</section>
<?php get_footer(); ?>