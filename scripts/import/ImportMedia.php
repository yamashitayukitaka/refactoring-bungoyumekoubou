<?php
/**
 * JSON の画像ファイル名をメディアライブラリの attachment と突合する（管理画面一括アップロード前提）.
 *
 * @package Wazeka
 */

if ( ! defined( 'ABSPATH' ) ) {
  exit;
}

/**
 * field map 上の定義が ACF image 型かどうか。
 *
 * @param mixed $field_definition
 * @return bool
 */
function wazeka_import_acf_is_image_definition( $field_definition ) {
  return is_array( $field_definition )
    && ! empty( $field_definition['type'] )
    && 'image' === $field_definition['type'];
}

/**
 * JSON に書くメディアファイル名（import_id__role.ext）かどうか。
 *
 * @param string $value
 * @return bool
 */
function wazeka_import_media_is_import_filename( $value ) {
  $value = str_replace( '\\', '/', trim( (string) $value ) );
  $basename = wp_basename( $value );

  return (bool) preg_match( '/^.+__.+\.(jpe?g|png|gif|webp)$/i', $basename );
}

/**
 * 画像フィールド JSON 値の形をチェックする。
 *
 * @param mixed  $value
 * @param string $label
 * @return string|null
 */
function wazeka_import_acf_validate_image_value( $value, $label ) {
  if ( is_int( $value ) || ( is_string( $value ) && '' !== $value && ctype_digit( $value ) ) ) {
    return null;
  }

  if ( ! is_string( $value ) ) {
    return $label . ': 画像の値の形が正しくありません。';
  }

  $trimmed = trim( $value );
  if ( '' === $trimmed ) {
    return $label . ': 画像の値が空です。';
  }

  if ( wazeka_import_media_is_import_filename( $trimmed ) ) {
    return null;
  }

  return $label . ': 画像は attachment ID または import 用ファイル名（例: works-9__thumb.jpg）である必要があります。';
}

/**
 * _wp_attached_file の末尾が一致する attachment を探す。
 *
 * @param string $filename works-9__thumb.jpg など.
 * @return int|null
 */
function wazeka_import_media_find_attachment_by_filename( $filename ) {
  $filename = sanitize_file_name( wp_basename( (string) $filename ) );
  if ( '' === $filename ) {
    return null;
  }

  global $wpdb;

  // phpcs:ignore WordPress.DB.DirectDatabaseQuery.DirectQuery, WordPress.DB.DirectDatabaseQuery.NoCaching
  $attachment_id = $wpdb->get_var(
      $wpdb->prepare(
        "SELECT post_id FROM {$wpdb->postmeta} WHERE meta_key = %s AND meta_value LIKE %s ORDER BY post_id DESC LIMIT 1",
        '_wp_attached_file',
        '%' . $wpdb->esc_like( $filename )
      )
  );

  if ( ! $attachment_id ) {
    return null;
  }

  $post = get_post( (int) $attachment_id );
  if ( ! $post || 'attachment' !== $post->post_type ) {
    return null;
  }

  return (int) $attachment_id;
}

/**
 * 画像フィールド用 JSON 値を attachment ID に変換する。
 *
 * @param mixed  $value
 * @param int    $post_id 未使用（互換のため残す）.
 * @param string $context_label
 * @return int|null
 */
function wazeka_import_acf_prepare_image_value( $value, $post_id, $context_label ) {
  unset( $post_id );

  if ( is_int( $value ) ) {
    return $value;
  }

  if ( is_string( $value ) && '' !== $value && ctype_digit( $value ) ) {
    return (int) $value;
  }

  if ( ! is_string( $value ) || '' === trim( $value ) ) {
    return null;
  }

  $filename = sanitize_file_name( wp_basename( trim( $value ) ) );
  $found    = wazeka_import_media_find_attachment_by_filename( $filename );

  if ( null !== $found ) {
    return $found;
  }

  WP_CLI::warning(
    $context_label . ': メディアに「' . $filename . '」がありません。Downloads/works-media から管理画面でアップロードしてください。'
  );

  return null;
}
