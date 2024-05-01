## Laravel Sailの起動コマンド
./vendor/bin/sail up -d

## ローカルページアクセス
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
