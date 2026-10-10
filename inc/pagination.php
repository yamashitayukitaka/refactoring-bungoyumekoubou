<?php
/**
 * 一覧のページ送りリンクを表示する.
 *
 * @package Wazeka
 */

if ( ! defined( 'ABSPATH' ) ) {
  exit;
}

/**
 * 施工事例などの一覧で、2 ページ目以降へ進むリンクを HTML で出力する.
 *
 * @param WP_Query $query 一覧の記事を取ってきたクエリオブジェクト.
 * @return void
 */
function wazeka_query_pagination( $query ) {
  if ( ! $query instanceof WP_Query || $query->max_num_pages <= 1 ) {
    return;
  }

  $big = 999999999;
$links = paginate_links(
    array(
    'base'    => str_replace( $big, '%#%', esc_url( get_pagenum_link( $big ) ) ),
    'format'  => '?paged=%#%',
    'current' => max( 1, (int) get_query_var( 'paged' ) ),
    'total'   => $query->max_num_pages,
    'echo'    => false,
    )
);
  if ( $links === null || $links === '' ) {
    return;
  }
  echo '<nav class="c-pagination">' . $links . '</nav>';
}
