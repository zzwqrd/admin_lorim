<h3> laravel::::::: 10.0 ************************ php -v ::::::::::::::::::::: 8.0 <h3>




composer install

cp .env.example .env

php artisan key:generate

php artisan storage:link

php artisan migrate:fresh

php artisan db:seed

-----***-------

php artisan  make:controller Dashboard/ArticlesController
php artisan make:migration add_address_description_table --table=orders
php artisan  make:controller Dashboard/OrderController --resource --model=Rate

-----***-------



login page : <http://127.0.0.1:8000/admin/login>
email : admin@admin.com
password : 123456


/// Dashboard

 php artisan config:cache

 php artisan config:cache
php artisan route:clear
php artisan view:clear  
php artisan cache:clear 
php artisan clear:data 
