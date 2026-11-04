<?php
/**
 * パンくずリスト用 PHP（inc/breadcrumb.php）.
 *
 *
 * 【呼び出し】
 * header.php → template-parts/breadcrumb.php → wazeka_the_breadcrumb()
 *
 * @package Wazeka
 */

// WordPress が読み込んでいるか確認。直アクセスされたらここで終了（テーマの定番）.
if ( ! defined( 'ABSPATH' ) ) {
  exit;
}

/**
 * パンくず HTML を組み立ててその場で echo する.
 *
 * Header 内で呼ぶため、タイトルは get_the_title() 単体ではなく
 * get_queried_object_id() を渡す（メインループ前でも正しい ID が取れる）.
 *
 * @return void トップページなどでは何も出力しない.
 */
function wazeka_the_breadcrumb() {
  // is_front_page: サイトトップ。is_home: ブログ投稿一覧がトップのとき。どちらもパンくず不要.
  if ( is_front_page() || is_home() ) {
    return;
  }

  // $breadcrumb に HTML を .= で末尾追加していく（1本の長い文字列になる）.
  $breadcrumb  = '<nav class="c-breadcrumb" aria-label="パンくずリスト">'; // nav = ナビ landmark。aria-label = 読み上げ用の名前.
  $breadcrumb .= '<ol class="c-breadcrumb__list" itemscope itemtype="https://schema.org/BreadcrumbList">'; // ol = 順序付きリスト。itemscope = 構造化データ用.

  // ----- 第1階層：ホーム（どのページでも共通） -----
  $position    = 1; // schema.org 用「何番目の階層か」。ホームは 1.
  $breadcrumb .= '<li class="c-breadcrumb__item" itemprop="itemListElement" itemscope itemtype="https://schema.org/ListItem">'; // 1階層 = 1つの li.
  $breadcrumb .= '<a href="' . esc_url( home_url( '/' ) ) . '" itemprop="item" class="c-breadcrumb__link"><span itemprop="name">ホーム</span></a>'; // home_url('/') = サイトトップ URL。esc_url = URL を安全に.
  $breadcrumb .= '<meta itemprop="position" content="' . $position . '" />'; // 検索エンジン向け「この階層は1番目」.
  $breadcrumb .= '</li>'; // li 閉じ.

  // ----- ページの種類ごとに 2 階層目以降を追加 -----
  if ( is_single() ) {
    // is_single: 投稿1件の詳細（works / property / blog など）.

    $post_type = get_post_type( get_queried_object_id() ); // 例: 'works'。get_queried_object_id() = 今表示中の投稿 ID.

    if ( 'post' !== $post_type ) {
      // 通常の「投稿」以外のカスタム投稿なら、一覧（アーカイブ）へのリンクを挟む.

      $post_type_obj = get_post_type_object( $post_type ); // CPT の設定（ラベル・has_archive など）.
      if ( $post_type_obj && $post_type_obj->has_archive ) {
        $archive_link = get_post_type_archive_link( $post_type ); // 例: /works/ の URL.
        if ( $archive_link ) {
          ++$position; // 2 階層目.
          $breadcrumb .= '<li class="c-breadcrumb__item" itemprop="itemListElement" itemscope itemtype="https://schema.org/ListItem">';
          $breadcrumb .= '<a href="' . esc_url( $archive_link ) . '" itemprop="item" class="c-breadcrumb__link"><span itemprop="name">' . esc_html( $post_type_obj->label ) . '</span></a>'; // label 例: 施工事例。esc_html = 文字をエスケープ.
          $breadcrumb .= '<meta itemprop="position" content="' . $position . '" />';
          $breadcrumb .= '</li>';
        }
      }
    }

    ++$position; // 最後の階層（今の記事）.
    $breadcrumb .= '<li class="c-breadcrumb__item" itemprop="itemListElement" itemscope itemtype="https://schema.org/ListItem" aria-current="page">'; // aria-current = 現在地.
    $breadcrumb .= '<span itemprop="name" class="c-breadcrumb__current">' . esc_html( get_the_title( get_queried_object_id() ) ) . '</span>'; // a ではなく span（自分自身へのリンクは付けない）.
    $breadcrumb .= '<meta itemprop="position" content="' . $position . '" />';
    $breadcrumb .= '</li>';

  } elseif ( is_page() ) {
    // is_page: 固定ページ。親ページがあれば上から順にリンクを挟む.

    $page_id = get_queried_object_id(); // 今の固定ページ ID.
    if ( $page_id && wp_get_post_parent_id( $page_id ) ) {
      // 親がいる = 階層構造あり.

      $ancestors = array_reverse( get_post_ancestors( $page_id ) ); // 祖先 ID を「上→下」の順に並べ替え.
      foreach ( $ancestors as $ancestor ) {
        ++$position;
        $breadcrumb .= '<li class="c-breadcrumb__item" itemprop="itemListElement" itemscope itemtype="https://schema.org/ListItem">';
        $breadcrumb .= '<a href="' . esc_url( get_permalink( $ancestor ) ) . '" itemprop="item" class="c-breadcrumb__link"><span itemprop="name">' . esc_html( get_the_title( $ancestor ) ) . '</span></a>';
        $breadcrumb .= '<meta itemprop="position" content="' . $position . '" />';
        $breadcrumb .= '</li>';
      }
    }

    ++$position;
    $breadcrumb .= '<li class="c-breadcrumb__item" itemprop="itemListElement" itemscope itemtype="https://schema.org/ListItem" aria-current="page">';
    $breadcrumb .= '<span itemprop="name" class="c-breadcrumb__current">' . esc_html( get_the_title( $page_id ) ) . '</span>';
    $breadcrumb .= '<meta itemprop="position" content="' . $position . '" />';
    $breadcrumb .= '</li>';

  } elseif ( is_post_type_archive() ) {
    // is_post_type_archive: /works/ や /property/ など CPT 一覧.

    $post_type = get_query_var( 'post_type' ); // URL から post_type slug を取得.
    if ( is_array( $post_type ) ) {
      $post_type = (string) reset( $post_type ); // 配列のときは先頭1つだけ使う.
    }
    $archive_labels = array(
      'property' => '土地・物件情報', // archive-property.php の見出しに合わせた表示名.
      'works'    => '施工事例',
      'blog'     => 'ブログ',
      'staff'    => 'スタッフ',
    );
    $label          = $archive_labels[ $post_type ] ?? post_type_archive_title( '', false ); // 未定義 CPT は WP 標準タイトル.
    ++$position;
    $breadcrumb .= '<li class="c-breadcrumb__item" itemprop="itemListElement" itemscope itemtype="https://schema.org/ListItem" aria-current="page">';
    $breadcrumb .= '<span itemprop="name" class="c-breadcrumb__current">' . esc_html( $label ) . '</span>';
    $breadcrumb .= '<meta itemprop="position" content="' . $position . '" />';
    $breadcrumb .= '</li>';

  } elseif ( is_category() || is_tag() || is_tax() ) {
    // is_tax: works-tag / property-area など。is_category / is_tag は通常投稿用.

    $term = get_queried_object(); // 今のタクソノミー term（例: 杵築市）.
    if ( $term instanceof WP_Term ) {
      // タームに紐づく投稿タイプの一覧リンク（施工事例 / 土地・物件情報）.

      $tax = get_taxonomy( $term->taxonomy ); // タクソノミー設定.
      if ( $tax && ! empty( $tax->object_type[0] ) ) {
        $linked_post_type = $tax->object_type[0]; // 例: works-tag → works.
        $post_type_obj    = get_post_type_object( $linked_post_type );
        if ( $post_type_obj && $post_type_obj->has_archive ) {
          $archive_link = get_post_type_archive_link( $linked_post_type );
          if ( $archive_link ) {
            ++$position;
            $archive_labels = array(
              'property' => '土地・物件情報',
              'works'    => '施工事例',
              'blog'     => 'ブログ',
              'staff'    => 'スタッフ',
            );
            $archive_label  = $archive_labels[ $linked_post_type ] ?? $post_type_obj->label;
            $breadcrumb    .= '<li class="c-breadcrumb__item" itemprop="itemListElement" itemscope itemtype="https://schema.org/ListItem">';
            $breadcrumb    .= '<a href="' . esc_url( $archive_link ) . '" itemprop="item" class="c-breadcrumb__link"><span itemprop="name">' . esc_html( $archive_label ) . '</span></a>';
            $breadcrumb    .= '<meta itemprop="position" content="' . $position . '" />';
            $breadcrumb    .= '</li>';
          }
        }
      }

      // taxonomy-works-tag.php など: URL の ?works_type= / ?property_category= で「もう一段」絞り込んでいるとき.
      $filter_slug = ''; // クエリの slug 値.
      $filter_tax  = ''; // その slug を探すタクソノミー名.
      if ( 'works-tag' === $term->taxonomy ) {
        $filter_slug = sanitize_title( (string) get_query_var( 'works_type' ) ); // inc/query.php で登録した query_var.
        $filter_tax  = 'works-type'; // 施工種別（例: 店舗併用）.
      } elseif ( 'property-area' === $term->taxonomy ) {
        $filter_slug = sanitize_title( (string) get_query_var( 'property_category' ) );
        $filter_tax  = 'property-category';
      }

      if ( $filter_slug && $filter_tax ) {
        $filter_term = get_term_by( 'slug', $filter_slug, $filter_tax ); // slug から term オブジェクト取得.
        if ( $filter_term instanceof WP_Term ) {
          $filter_link = get_term_link( $filter_term ); // 例: works-type/店舗併用 の URL.
          if ( ! is_wp_error( $filter_link ) ) {
            ++$position;
            $breadcrumb .= '<li class="c-breadcrumb__item" itemprop="itemListElement" itemscope itemtype="https://schema.org/ListItem">';
            $breadcrumb .= '<a href="' . esc_url( $filter_link ) . '" itemprop="item" class="c-breadcrumb__link"><span itemprop="name">' . esc_html( $filter_term->name ) . '</span></a>';
            $breadcrumb .= '<meta itemprop="position" content="' . $position . '" />';
            $breadcrumb .= '</li>';
          }
        }
      }

      ++$position; // 最後: 今のターム名（例: 杵築市）.
      $breadcrumb .= '<li class="c-breadcrumb__item" itemprop="itemListElement" itemscope itemtype="https://schema.org/ListItem" aria-current="page">';
      $breadcrumb .= '<span itemprop="name" class="c-breadcrumb__current">' . esc_html( $term->name ) . '</span>';
      $breadcrumb .= '<meta itemprop="position" content="' . $position . '" />';
      $breadcrumb .= '</li>';
    }
  } elseif ( is_404() ) {
    // 404: 存在しない URL.

    ++$position;
    $breadcrumb .= '<li class="c-breadcrumb__item" itemprop="itemListElement" itemscope itemtype="https://schema.org/ListItem" aria-current="page">';
    $breadcrumb .= '<span itemprop="name" class="c-breadcrumb__current">お探しのページは見つかりませんでした</span>';
    $breadcrumb .= '<meta itemprop="position" content="' . $position . '" />';
    $breadcrumb .= '</li>';
  }
  // 上記のどれにも当てはまらないページは「ホーム」だけのパンくずになる.

  $breadcrumb .= '</ol>'; // リスト閉じ.
  $breadcrumb .= '</nav>'; // nav 閉じ.

  echo $breadcrumb; // phpcs:ignore WordPress.Security.EscapeOutput.OutputNotEscaped -- 各所で esc_url / esc_html 済み.
}
