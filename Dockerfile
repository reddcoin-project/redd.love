FROM php:apache
RUN a2enmod headers rewrite ssl proxy_http
RUN apt-get update && apt-get install -y git zip
RUN curl -sS https://getcomposer.org/installer | php -- --install-dir=/usr/local/bin --filename=composer
COPY . .
RUN composer install

RUN mv build/apache2/apache2.conf /etc/apache2/apache2.conf
RUN mv build/apache2/000-default.conf /etc/apache2/sites-available/000-default.conf
RUN mv build/entrypoint.sh /usr/local/bin
RUN chmod u+x /usr/local/bin/entrypoint.sh

RUN rm -R build

ENTRYPOINT [ "/usr/local/bin/entrypoint.sh" ]
