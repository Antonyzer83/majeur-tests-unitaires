FROM php:8.0.2-fpm

# Install system dependencies
RUN apt-get update && apt-get install -y git unzip

# Install PHP extensions
RUN docker-php-ext-install pdo_mysql

# Get latest Composer
COPY --from=composer:latest /usr/bin/composer /usr/bin/composer

# Install node and use yarn instead of npm (problem on 24/02/2022)
RUN curl -sL https://deb.nodesource.com/setup_14.x | bash -
RUN apt update
RUN apt install -y nodejs
RUN npm install -g yarn

# Set working directory
WORKDIR /var/www
