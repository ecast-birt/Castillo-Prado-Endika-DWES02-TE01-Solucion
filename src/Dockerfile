FROM php:8.3

WORKDIR /app

COPY . /app

RUN composer install --no-dev --optimize-autoloader

CMD php -S 0.0.0.0:$PORT -t /app/public /app/router.php