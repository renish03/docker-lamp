FROM php:7.0-apache
COPY demo.apache.conf /usr/local/apache2/conf/demo.apache.conf

RUN docker-php-ext-install mysqli
RUN pecl install redis && docker-php-ext-enable redis
RUN echo "Include /usr/local/apache2/conf/demo.apache.conf" \
    >> /usr/local/apache2/conf/httpd.conf
##CMD ["/usr/local/apache2/bin/apache2ctl", "-D", "FOREGROUND"]
