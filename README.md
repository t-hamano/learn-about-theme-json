# WordPress の theme.json について知ろう

## 概要

このリポジトリは、オンラインイベント「WordPress の theme.json について知ろう」の内容を実践するための環境です。
以下テーマ・プラグインが含まれています。

### テーマ

- Classic Theme Example: クラシックテーマの雛形です。
- Block Theme Example: ブロックテーマの雛形です。

### プラグイン

- Learn about theme.json: カスタマイズのためのフック等を記述するプラグインです。

## 環境構築

### 初期設定

- `npm install`: npm ライブラリのインストール
- `composer install`: composer ライブラリのインストール
- `composer set`: phpcs ルールセットの適用

### ローカル環境の起動

`@wordpress/env` パッケージを使用する事をお勧めします。`npm run wp-env start` を実行すると、`http://localhost:8888` でローカルサイトにアクセス出来ます。クラシックテーマ・ブロックテーマがインストールされており、Learn about theme.json プラグインが有効化されているはずです。

それ以外のローカル環境を使用する場合は、以下のディレクトリをご自身の WordPress 環境に追加して下さい。

- `themes/block-theme-example`: テーマ (ブロックテーマ)
- `themes/classic-theme-example`: テーマ (クラシックテーマ)
- `plugins/learn-about-theme-json`: プラグイン
