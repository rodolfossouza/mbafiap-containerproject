FROM wyveo/nginx-php-fpm

USER root

COPY . /tmp/src

RUN rm -rf /etc/nginx/nginx.conf && \
    mkdir /etc/nginx/html && \
    mkdir /etc/nginx/snippets && \
    mkdir /etc/nginx/php && \
    chown -R 1001 /tmp/src && \
    chmod -R g+w /tmp/src && \
    chmod -R 777 /etc/nginx/php && \
    mv /tmp/src/nginx.conf /etc/nginx && \
    mv /tmp/src/fastcgi-php.conf /etc/nginx/snippets && \
    mv /tmp/src/htmlsite/site.html /etc/nginx/html && \
    mv /tmp/src/htmlsite/action_page.php /etc/nginx/php && \
    echo "<?php phpinfo(); ?>" >> /etc/nginx/php/info.php

EXPOSE 8089/tcp