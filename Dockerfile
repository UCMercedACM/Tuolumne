FROM php:7.4-cli

RUN apt-get update -y
RUN apt-get install -y openssl zip unzip git
RUN curl -sS https://getcomposer.org/installer | php -- --install-dir=/usr/local/bin --filename=composer
RUN apt-get update -y
RUN apt-get install -y libfreetype6-dev
RUN apt-get install -y libjpeg62-turbo-dev
RUN apt-get install -y libmcrypt-dev
RUN apt-get install -y libpng-dev
RUN apt-get install -y libpq-dev
RUN apt-get install -y zlib1g-dev
RUN apt-get install -y libxml2-dev
RUN apt-get install -y libzip-dev
RUN apt-get install -y libonig-dev
RUN apt-get install -y graphviz
RUN docker-php-ext-configure gd
RUN docker-php-ext-install -j$(nproc) gd
RUN docker-php-ext-install pdo_mysql
RUN docker-php-ext-install pdo_pgsql
RUN docker-php-ext-install mysqli
RUN docker-php-ext-install zip
RUN docker-php-source delete

WORKDIR /app

COPY . /app

RUN composer install

EXPOSE 4202

CMD ["php", "artisan", "serve", "--host=0.0.0.0", "--port=4202"]
