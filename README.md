# test-contactform
## 環境構築  
Dockerビルド  
1.git clone git@github.com:usersugita/test-contactform.git  
2.docker-composer up -d --build  
＊MYSQLは、OSによって起動しない場合がありますのでそれぞれのPCに合わせて docker-compose.yml ファイルを編集してください。  

Laravel環境構築  
1.docker-compose exec php bash  
2.composer install  
3..env.example ファイルから.envを作成し、環境変数を変更  
4.php artisan key:generate
5.php artisan migrate  
6.php artisan db:seed  

  
## 使用技術  
・PHP 7.4.9  
・Laravel 8.83.27  
・Mysql 8.0.26
## ER図
## URL
