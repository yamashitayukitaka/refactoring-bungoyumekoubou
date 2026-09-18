# refactor: いろはいえをBEMへ移行し、商品ラインナップをc-lineUp化

## 概要

- いろはいえページを FLOCSS / BEM・PCファーストの SCSS へ移行し、レガシークラスを `p-irohaie` および共通 `c-*` へ吸収した
- トップ・各商品ページで横断利用していた商品ラインナップを `c-lineUp` コンポーネントへ切り出した
- `scss.mdc` に命名・レガシー統合・Modifier・`u-mb`・横断 Component の指針を追加し、Stylelint で FLOCSS/BEM のキャメルケースを許可した

## 方針

- 見た目・レスポンシブ挙動は維持し、可読性・保守性・予測性のためのリファクタに限定する
- ページ固有は `p-irohaie`、横断部品は `c-*`（サイト固有でもページ横断なら Component 可）
- レガシーは BEM 側へスタイルを移してから HTML のレガシークラスを削除する（他ページ共有は影響確認後）
- ページ固有 Element は役割が分かる語を優先し、`content` など曖昧な汎用語は新規で使わない
- Modifier は Element とセットで付与し、差分のみを書く（1クラス化のための `@extend` は使わない）
- 下余白だけの差分は `u-mb` で扱う（`c-*`、または同一ページで同クラスの余白差がある場合）

## 確認

- [ ] `/irohaie` の表示がリファクタ前と同等か（MV / about / point / features / contact / 施工事例）
- [ ] PC / タブレット / SP で表示・非表示と余白が崩れていないか
- [ ] point 内 CTA（`c-button--orange`）の通常時・hover が見た目どおりか
- [ ] `c-title--orangeLine` のマーカー表現が irohaie で問題ないか（他ページの `marker` 併用も確認）
- [ ] top / heig / rireve / irohaie の `c-lineUp` が同等に表示されるか
- [ ] `npm run build` 後の `dist/css/style.css` が想定どおりか
