<?php
/**
 * URL やクエリで使える変数名を追加する.
 *
 * @package Wazeka
 */

if ( ! defined( 'ABSPATH' ) ) {
  exit;
}

/**
 * 施工事例・物件・イベントなど、テーマ用の URL パラメータ名を WordPress に登録する.
 *
 * @param string[] $vars これまで登録されていたクエリ変数名の一覧.
 * @return string[] テーマ用の名前を足したあとの一覧.
 */
function wazeka_query_vars( $vars ) {
  $vars[] = 'works_type';
  $vars[] = 'property_category';
  $vars[] = 'event_area';
  return $vars;
}
add_filter( 'query_vars', 'wazeka_query_vars' );
