<h3> laravel::::::: 10.0 ************************ php -v ::::::::::::::::::::: 8.0 <h3>




composer install

cp .env.example .env

php artisan key:generate

php artisan storage:link

php artisan migrate:fresh

php artisan db:seed

-----***-------

php artisan  make:controller Dashboard/ProvidersController --resource --model=Providers
php artisan make:migration add_sections_id_to_providers_table --table=providers

-----***-------



login page : <http://127.0.0.1:8000/admin/login>
email : admin@admin.com
password : 123456


/// Dashboard


