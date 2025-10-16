# ===============================
# Stage 1 — Base image
# ===============================
FROM php:8.4-fpm

# Install system dependencies
RUN apt-get update && apt-get install -y \
    nginx \
    git \
    unzip \
    curl \
    vim \
    libpng-dev \
    libjpeg-dev \
    libfreetype6-dev \
    libonig-dev \
    libxml2-dev \
    zip \
    sqlite3 \
    libsqlite3-dev \
    && docker-php-ext-install pdo_mysql pdo_sqlite gd mbstring exif pcntl bcmath opcache \
    && apt-get clean && rm -rf /var/lib/apt/lists/*

# ===============================
# Stage 2 — Configuration
# ===============================

# Copy custom PHP configuration
COPY php.ini /usr/local/etc/php/php.ini

# Copy Nginx configuration
COPY nginx/conf.d/default.conf /etc/nginx/conf.d/default.conf

# Copy project source code
COPY src /var/www/html

# Set working directory
WORKDIR /var/www/html

# Set proper permissions
RUN chown -R www-data:www-data /var/www/html && chmod -R 755 /var/www/html

# ===============================
# Stage 3 — Supervisor Setup
# ===============================
# Use supervisord to run both Nginx and PHP-FPM in one container
RUN apt-get update && apt-get install -y supervisor && mkdir -p /var/log/supervisor

# Copy supervisor config
COPY --chown=root:root ./supervisord.conf /etc/supervisor/conf.d/supervisord.conf

# ===============================
# Stage 4 — Final setup
# ===============================

EXPOSE 80

CMD ["/usr/bin/supervisord", "-c", "/etc/supervisor/conf.d/supervisord.conf"]
