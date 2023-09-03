#dont forget to install 
sudo apt-get install php-imagick
composer install
# copy .env.example to .env
cp .env.example .env
# generate security key , link storage file
php artisan key:generate
php artisan storage:link
# after connect your database via .env file
php artisan migrate:fresh
php artisan db:seed



login page : <http://127.0.0.1:8000/admin/login>
email : admin@admin.com
password : 123456
