"# watch_movie_laravel_website" 
composer install 
mv .env.example .env 
php artisan cache:clear 
composer dump-autoload 
php artisan key:generate

php artisan config:clear
php artisan cache:clear
php artisan  migrate