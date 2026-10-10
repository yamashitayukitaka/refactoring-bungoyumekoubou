<?php
/**
 * テーマ全体で使う小さな処理をまとめたファイル.
 *
 * @package Wazeka
 */

if ( ! defined( 'ABSPATH' ) ) {
  exit;
}

/**
 * 一覧ページの見出しから「アーカイブ:」という文字を取り除く.
 *
 * @param string $title WordPress が作った一覧の見出し文字列.
 * @return string 「アーカイブ:」を除いた見出し.
 */
function wazeka_remove_archive_prefix( $title ) {
  return preg_replace( '/^アーカイブ: /', '', $title );
}
add_filter( 'get_the_archive_title', 'wazeka_remove_archive_prefix' );

/**
 * 一覧の見出しに含まれる HTML タグをすべて取り除き、文字だけにする.
 *
 * @param string $title 一覧の見出し文字列.
 * @return string HTML タグのない見出し.
 */
function wazeka_remove_archive_span_tag( $title ) {
  return strip_tags( $title );
}
add_filter( 'get_the_archive_title', 'wazeka_remove_archive_span_tag' );

/**
 * 記事一覧などに出す抜粋文の長さを 20 文字にそろえる.
 *
 * @param int $length WordPress 側のデフォルトの長さ（このテーマでは使わない）.
 * @return int 抜粋に使う文字数.
 */
function wazeka_custom_excerpt_length( $length ) {
  return 20;
}
add_filter( 'excerpt_length', 'wazeka_custom_excerpt_length' );

/**
 * 地図の埋め込み用に iframe だけ残し、それ以外の不要な HTML を取り除く.
 * iframe では src・width・height など表示に必要な属性だけを許可する.
 *
 * @param string $html 埋め込みコードなどの HTML 文字列.
 * @return string 表示してよい部分だけ残した HTML.
 */
function wazeka_kses_iframe( $html ) {
return wp_kses(
    $html,
    array(
      'iframe' => array(
        'src'             => true,
        'width'           => true,
        'height'          => true,
        'style'           => true,
        'allow'           => true,
        'allowfullscreen' => true,
        'loading'         => true,
        'referrerpolicy'  => true,
        'frameborder'     => true,
        'class'           => true,
      ),
      )
);
}

/**
 * カテゴリ・部署などのタームを、管理画面の「説明」欄の文字順で並べられるようにする.
 *
 * @param string|array $orderby 並べ替えの指定（WordPress 内部用）.
 * @param array        $args    get_terms() に渡した設定の配列.
 * @return string|array 説明欄で並べ替えるための指定に書き換えた値.
 */
function wazeka_taxonomy_orderby_description( $orderby, $args ) {

  if ( isset( $args['orderby'] ) && 'description' === $args['orderby'] ) {
      $orderby = 'tt.description';
  }
  return $orderby;
}
add_filter( 'get_terms_orderby', 'wazeka_taxonomy_orderby_description', 10, 2 );
