FROM node:12

# Arguments defined in docker-compose.yml
ARG user
ARG uid

#RUN apt-get update -y && apt-get install -y libonig-dev libmcrypt-dev openssl git curl zip unzip

# Clear cache
RUN apt-get clean && rm -rf /var/lib/apt/lists/*

# Install PHP extensions
#RUN docker-php-ext-install pdo_mysql



# Get latest Composer
#COPY --from=composer:latest /usr/bin/composer /usr/bin/composer

# Create system user to run Composer and Artisan Commands
RUN useradd -G www-data,root -u $uid -d /home/$user $user
RUN mkdir -p /home/$user && \
    chown -R $user:$user /home/$user

RUN mkdir /app
WORKDIR /app
RUN npm install
USER $user

EXPOSE 1234

# Run the specified command within the container.

