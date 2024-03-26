# お問い合わせフォーム
 
## 環境構築
 1.git clone git@github.com:coachtech-material/laravel-docker-template.git<br>
 2.docker-compose up -d --build<br>
 3.composer install<br>
 4..env作成、以下修正<br>
   DB_HOST=mysql<br>
   DB_DATABASE=laravel_db<br>
   DB_USERNAME=laravel_user<br>
   DB_PASSWORD=laravel_pass<br>
 5.マイグレーションファイル作成<br>
 php artisan make:migration create_contacts_table<br>
 php artisan make:migration create_categories_table<br>
リレーション、シーディングは実装が間に合わなかったため割愛。<br>

## 使用技術(実行環境)<br>
  Laravel 8.83.8<br>
  nginx 1.21.1<br>
  mysql 8.0.26<br>
  php<br>
  phpmyadmin<br>

## ER図<br>
< - - - 作成したER図の画像 - - - ><br>

## URL<br>
  開発環境：http://localhost/<br>
