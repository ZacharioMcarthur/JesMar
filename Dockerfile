FROM richarvey/php-apache-heroku:latest
COPY . /var/www/app
ENV WEBROOT /var/www/app/public
ENV APP_ENV production
RUN composer install --no-dev --optimize-autoloader