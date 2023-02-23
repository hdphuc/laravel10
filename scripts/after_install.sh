cd /var/www/smartptech.top
composer install --no-dev
npm install
php artisan optimize
php artisan migrate
php artisan optimize
npm run build