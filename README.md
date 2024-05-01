## Laravel Sailの起動コマンド
./vendor/bin/sail up -d

## ローカルページへアクセス
http://localhost

## エイリアスの登録
alias sail="./vendor/bin/sail"

## コンテナの起動（-dでバックグラウンドで起動）
sail up
sail up -d

## コンテナへの接続
sail shell

## MySQLへの接続
sail mysql

## コンテナから出る
exit

## php artisan 〇〇を使う方法
alias sail="./vendor/bin/sail"
sail php artisan 〇〇

## 日本語対応（.env内の下記の設定を行う）
APP_LOCALE=ja
APP_FALLBACK_LOCALE=ja
APP_FAKER_LOCALE=ja_JP
