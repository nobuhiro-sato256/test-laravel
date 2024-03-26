# お問い合わせフォーム
 
## 環境構築
 1.git clone git@github.com:coachtech-material/laravel-docker-template.git
 2.docker-compose up -d --build
 3.composer install
 4..env作成、以下修正
   DB_HOST=mysql
   DB_DATABASE=laravel_db
   DB_USERNAME=laravel_user
   DB_PASSWORD=laravel_pass
 5.マイグレーションファイル作成
  　　php artisan make:migration create_contacts_table
   php artisan make:migration create_categories_table
リレーション、シーディングは実装が間に合わなかったため割愛。

## 使用技術(実行環境)
  Laravel 8.83.8
  nginx 1.21.1
  mysql 8.0.26
  php
  phpmyadmin

## ER図
< - - - 作成したER図の画像 - - - >

## URL
  開発環境：http://localhost/
