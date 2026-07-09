FROM richarvey/nginx-php-fpm:latest

# Set ambient environment variables
ENV GEN_CONTAINER_ERRORS=1
ENV ERRORS=1

# Copy project files
COPY . /var/www/html

# Set working directory
WORKDIR /var/www/html

# Install dependencies
RUN composer install --no-dev --optimize-autoloader

# Set permissions
RUN chown -R www-data:www-data /var/www/html/storage /var/www/html/bootstrap/cache

# Setup document root for Laravel
ENV WEBROOT /var/www/html/public

# Copy custom nginx configuration for routing
COPY nginx.conf /etc/nginx/sites-available/default.conf

# Enable auto migrations on container startup
ENV RUN_MIGRATIONS=1