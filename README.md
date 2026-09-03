# 豊後夢工房（wazeka）

[豊後夢工房](https://bungoyumekoubou.jp/) の WordPress テーマです。このリポジトリが、その公開サイトに対応するテーマです。

FLOCSS で SCSS を分け、Dart Sass で `dist/css` にコンパイルします。カスタムフィールドは ACF の Local JSON（`acf-json`）でテーマと一緒に管理します。

## 必要環境

- WordPress（[Local](https://localwp.com/) など）
- [Advanced Custom Fields](https://www.advancedcustomfields.com/)（Pro）
- Node.js（Dart Sass のビルド用）
- カスタム投稿タイプは [Custom Post Type UI](https://ja.wordpress.org/plugins/custom-post-type-ui/) で登録している（テーマの `register_post_type` へ移す予定）

予約・フォーム・イベントカレンダーなど、本番と同様のプラグインが無いページは一部の表示が欠けます。

## セットアップ

テーマを `wp-content/themes/wazeka` に置き、有効化します。

```bash
npm install
npm run build
```

SCSS を編集するときは、監視用に次を実行します。

```bash
npm run sass
```

| コマンド | 内容 |
|---|---|
| `npm run build` | `src/style.scss` を `dist/css/style.css` に1回コンパイルする |
| `npm run sass` | 同じ出力先を監視し、保存のたびにコンパイルする |

`node_modules` は Git に含めていません。

## スタイル

- ソース: `src/`（FLOCSS。`foundation` / `layout` / `object` / `vendor`）
- コンパイル結果: `dist/css/style.css`（`functions.php` が enqueue する）
- テーマ直下の `style.css` は WordPress 用のテーマヘッダーだけです

次の CSS は旧担当のレガシーで、FLOCSS の対象外です。全ページで読み込んでいます。

- `src/ichikawa.css`
- `src/tamura.css`
- `src/test.css`（会社概要・採用ページのみ）

## ACF

フィールドグループは `acf-json/` にあります。テーマ有効化後、ACF の同期から読み込みます。

| グループ | 位置 |
|---|---|
| 会社概要 | ページテンプレート `page-about.php`（テンプレート名 `about`） |
| お問い合わせ | ページテンプレート `page-contact.php`（テンプレート名 `contact`） |
| スタッフ | 投稿タイプ `staff` |
| 店舗情報 | オプション「サイト全体管理」（`theme-top-setting`） |

固定ページ側で、該当テンプレートが選ばれている必要があります。ページ ID では位置を指定していません。全ページ分のフィールドはまだ入れていません。

## カスタム投稿タイプ

`functions.php` では未登録です。CPT UI で次を登録してください。

| 投稿タイプ | 主な用途 |
|---|---|
| `works` | 施工事例 |
| `property` | 不動産（土地・中古・賃貸は投稿テンプレート `land.php` / `used.php` / `rental.php`） |
| `staff` | スタッフ |
| `blog` | ブログ |
| `xo_event` | イベント |

タクソノミーの例: `works-type` / `works-tag`、`property-category` / `property-area`、`area` / `event-type`

採用は固定ページ（`page-recruit.php`）です。CPT 用の archive / single テンプレートは置いていません。
