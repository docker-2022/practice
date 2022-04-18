FROM php:7-apache
RUN apt-get -y update
RUN apt-get -y install vim nano
RUN curl -sL https://deb.nodesource.com/setup_12.x | bash -
RUN apt-get install -y nodejs

RUN apt-get update && apt-get install -y git unzip

RUN docker-php-ext-install pdo_mysql
RUN a2enmod ssl rewrite
RUN curl -sS https://getcomposer.org/installer | php -- --install-dir=/usr/local/bin --filename=composer
RUN composer --version
ADD https://packages.zendframework.com/releases/ZendFramework-1.12.20/ZendFramework-1.12.20.tar.gz /usr/local/lib/php/

RUN apt-get install systemctl