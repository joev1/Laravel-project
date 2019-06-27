FROM ubuntu:18.04
WORKDIR /var/www/laravel
RUN apt update && \
    apt upgrade -y && \
    apt install -y php-fpm php-mysql curl nginx && \
    curl -sS https://getcomposer.org/installer | php -- --install-dir=/usr/local/bin --filename=composer
COPY entrypoint.sh /usr/local/bin
RUN chmod 777 /usr/local/bin/entrypoint.sh \
    && ln -s /usr/local/bin/entrypoint.sh /
ENTRYPOINT ["entrypoint.sh"]
ADD /conf/vhost.conf /etc/nginx/conf.d/default.conf