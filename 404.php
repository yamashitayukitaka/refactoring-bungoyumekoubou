<?php
/**
 * 404 Not Found template.
 *
 * @package Wazeka
 */

if ( ! defined( 'ABSPATH' ) ) {
  exit;
}

get_header();
?>
<main class="p-404">
  <div class="l-content--middle u-pt100 u-mb100">
    <div class="p-404__inner">
      <h1 class="p-404__title">404 NOT FOUND</h1>
      <p class="p-404__subtitle">お探しのページは見つかりませんでした</p>

      <div class="p-404__lead">
        <p>申し訳ございません。指定されたページは削除されたか、移動した可能性がございます。</p>
        <p>URLにお間違いがないか再度ご確認ください。</p>
      </div>

      <div class="p-404__action u-center u-mb40">
        <a href="<?php echo esc_url( home_url( '/' ) ); ?>" class="c-button--outline">トップページへ戻る</a>
      </div>
    </div>
  </div>
</main>
<?php
get_footer();
