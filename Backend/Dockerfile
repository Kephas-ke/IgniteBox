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
    supervisor \
    && docker-php-ext-configure gd --with-freetype --with-jpeg \
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

# Create directory for Supervisor logs
RUN mkdir -p /var/log/supervisor

# Copy supervisor configuration
COPY supervisord.conf /etc/supervisor/conf.d/supervisord.conf

# ===============================
# Stage 4 — Final setup
# ===============================

# Expose ports:
# - 80 for Nginx (web)
# - 9000 for PHP-FPM (internal)
EXPOSE 80 9000

# Start Supervisor (runs both Nginx and PHP-FPM)
CMD ["/usr/bin/supervisord", "-c", "/etc/supervisor/conf.d/supervisord.conf"]
