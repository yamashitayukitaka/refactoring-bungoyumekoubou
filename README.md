# 豊後夢工房（wazeka）

[豊後夢工房](https://bungoyumekoubou.jp/) 公開サイト用の WordPress テーマです。

- リポジトリ: [yamashitayukitaka/refactoring-bungoyumekoubou](https://github.com/yamashitayukitaka/refactoring-bungoyumekoubou)
- スタイル: FLOCSS + Dart Sass（`src/scss` → `dist/css/style.css`）
- 一部 JavaScript: Vite（`src/js` → `dist/js`）
- カスタムフィールド: ACF Pro の Local JSON（`acf-json/`）

## 必要環境

- WordPress（[Local](https://localwp.com/) など）
- [Advanced Custom Fields](https://www.advancedcustomfields.com/) Pro
- Node.js（`package.json` のビルド・Lint 用）
- Composer（`composer.json` の PHPCS 用。PHP の静的解析だけ行う場合は必須）

本番と同じ表示をローカルで確認するには、イベント（`xo_event`）、予約・フォーム系プラグインなどが必要なページがあります。プラグインが無い場合は該当ブロックが表示されません。

## セットアップ

1. テーマを `wp-content/themes/wazeka` に配置し、管理画面で有効化する。
2. テーマ直下で依存パッケージをインストールする。

```bash
npm install
composer install
```

3. スタイルと Vite 対象の JS をビルドする（初回および `src/scss` / `src/js` を変更したあと）。

```bash
npm run build
npm run build-vite
```

## npm scripts

`package.json` で定義されているコマンド一覧です。

| コマンド | 内容 |
| --- | --- |
| `npm run build` | `src/scss/style.scss` を `dist/css/style.css` にコンパイル（Dart Sass） |
| `npm run sass` | 上記を `--watch` で監視 |
| `npm run build-vite` | `src/js` を `dist/js` にバンドル（全エントリを順にビルド） |
| `npm run vite` | 上記を `--watch` で監視 |
| `npm run format` | Prettier で整形 |
| `npm run format:check` | Prettier のチェックのみ |
| `npm run lint:html` | Markuplint（`**/*.php`） |
| `npm run lint:scss` | Stylelint（`src/scss/**/*.scss`） |
| `npm run lint:scss:fix` | Stylelint の自動修正 |

### 依存パッケージ（概要）

| 種別 | パッケージ |
| --- | --- |
| dependencies | `sass` |
| devDependencies | `vite`, `prettier`, `stylelint`, `stylelint-config-standard-scss`, `markuplint`, `@markuplint/php-parser` |

## Composer（PHPCS）

PHP のコーディング規約チェックは [PHP_CodeSniffer](https://github.com/PHPCSStandards/PHP_CodeSniffer) を使います。設定はルートの `phpcs.xml.dist` です。

| 項目 | 内容 |
| --- | --- |
| 規約 | PSR-12（行長・改行コード・`functions.php` の side effect など一部ルールは除外） |
| インデント | スペース 2（`Generic.WhiteSpace.ScopeIndent`） |
| 対象 | テーマ直下（`vendor/`・`node_modules/`・`dist/` は除外） |

### コマンド

```bash
composer install          # 初回（require-dev に phpcs）
composer run lint:php     # 検査（composer.json の scripts）
# または
vendor/bin/phpcs
```

`composer.json` の `require-dev` は `squizlabs/php_codesniffer` のみです。自動修正は含めていないため、指摘は手で直します。

## ディレクトリ構成（開発で触るもの）

```
wazeka/
├── acf-json/          # ACF フィールドグループ（JSON 同期）
├── dist/
│   ├── css/style.css  # Sass の出力（本番 enqueue）
│   └── js/            # Vite の出力 + レガシー JS（Slick 等）
├── inc/               # PHP（setup, enqueue, CPT, ACF, query など）
├── src/
│   ├── scss/          # FLOCSS（style.scss がエントリ）
│   ├── js/
│   │   ├── common.js  # 全ページ（modules を import）
│   │   ├── modules/
│   │   └── pages/     # ページ別エントリ → dist/js/*.js
├── template-parts/
├── style.css          # WordPress テーマヘッダーのみ
├── composer.json      # PHPCS（require-dev）
├── phpcs.xml.dist     # PSR-12 などのルールセット
├── vite.config.mjs
└── build-vite.mjs
```

## スタイル（SCSS）

- エントリ: `src/scss/style.scss`
- レイヤー: `foundation` / `layout` / `vendor` / `object/project` / `object/component` / `object/utility`
- 出力: `dist/css/style.css`（`inc/enqueue.php` で全ページ読み込み）
- ブレークポイントは `foundation` の mixin（`mq(sp)` / `mq(tab)` など）を使う
- 表示切替は `object/utility/_utility.scss` の `u-none__pc` / `u-none__mobile`（例: `u-none__pc--sp`, `u-none__mobile--tab`）

## JavaScript

### Vite でビルドするもの

- `src/js/common.js` → `dist/js/common.js`（全ページ）
- `src/js/pages/*.js` → `dist/js/<ファイル名>.js`（例: `about.js`, `faq.js`, `recruit.js`）

エントリの追加は `src/js/pages/` に `.js` を置き、`npm run build-vite` を実行する。設定は `vite.config.mjs` / `build-vite.mjs`。

### その他

`dist/js/` には Slick 連携などのレガシースクリプト（`main.js`, `commonSlick.js` など）があり、`inc/enqueue.php` でページ条件ごとに読み込みます。ソースが `src/js` に無いファイルは、Vite ビルドでは更新されません。

Slick の CSS は CDN から条件付きで enqueue されます。

## PHP

`functions.php` は `inc/` を読み込むだけです。

| ファイル | 役割（例） |
| --- | --- |
| `setup.php` | テーマサポート・メニューなど |
| `enqueue.php` | CSS / JS の enqueue |
| `post-types.php` | カスタム投稿タイプ・タクソノミー登録 |
| `acf.php` | ACF オプションページ |
| `query.php` / `pagination.php` / `helpers.php` / `admin.php` | クエリ・ページネーション・共通処理 |

## カスタム投稿タイプ・タクソノミー

`inc/post-types.php` で登録しています。

| 投稿タイプ | 用途 |
| --- | --- |
| `works` | 施工事例 |
| `property` | 土地・物件（テンプレート `land.php` / `used.php` / `rental.php` など） |
| `blog` | ブログ |
| `staff` | スタッフ |

| タクソノミー | 関連 |
| --- | --- |
| `works-type`, `works-tag` | `works` |
| `property-category`, `property-area` | `property` |
| `department` | `staff` |

イベント投稿 `xo_event` はプラグイン側の投稿タイプです（テーマでは未登録）。

採用は固定ページ（`page-recruit.php`）です。

## ACF

フィールドグループは `acf-json/` にあります。テーマ有効化後、ACF 管理画面の「同期」で取り込みます。

オプションページ「サイト全体管理」（`theme-top-setting`）は `inc/acf.php` で登録しています。

固定ページはページテンプレート（`page-*.php`）でフィールドの出し分けをしています。全ページ分の JSON が揃っているわけではないため、未同期のグループがある場合は個別に確認してください。

## 開発の流れ（例）

1. `npm run sass` と `npm run vite` を別ターミナルで起動するか、保存後に `npm run build` / `npm run build-vite` を実行する。
2. SCSS 変更時は `npm run lint:scss`、PHP マークアップは `npm run lint:html`、PHP コーディング規約は `composer run lint:php` を必要に応じて実行する。
3. `dist/css/style.css` をコミットする運用の場合は、Sass ビルド後に差分を含める。

## ライセンス

`package.json` の `license` フィールドに従います（ISC）。テーマの `style.css` ヘッダーは GPL v2 以降です。
