# 1. Start from the official PHP + Apache image
FROM php:8.1-apache

# 2. Copy your entire site into Apache’s web root
COPY . /var/www/html

# 3. Enable Apache’s URL rewriting (if you need clean URLs)
RUN a2enmod rewrite

# 4. Install any PHP extensions you need; e.g. MySQLi
RUN docker-php-ext-install mysqli

# 5. Fix file permissions so Apache can read/write
RUN chown -R www-data:www-data /var/www/html

# 6. Expose port 80 (Render will map it for you)
EXPOSE 80

# 7. (Optional) If you need a custom command, override Apache’s default:
#    CMD ["apache2-foreground"]
