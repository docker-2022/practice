#!/bin/bash -x

#composer install --no-suggest --no-interaction --no-scripts --no-progress --prefer-dist

if [ ! -e /var/www/html/backend/db.lock ]; then
  php artisan migrate
  #php artisan migrate:fresh
  #php artisan passport:install
  #php artisan db:seed --class=LiveDatabaseTableSeeder
  #php artisan copy:on-boarding-data
  #php artisan db:seed --class=TrainingStreamColumnFullStreamToActiveStreamTableColumnSeeder
  #touch /var/www/randstad-onboarding/db.lock
fi

docker-php-entrypoint apache2-foreground
