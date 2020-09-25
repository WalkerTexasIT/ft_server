FROM debian:buster

RUN apt-get update
RUN apt-get install -y nginx
RUN apt-get install -y php7.3-fpm
RUN apt-get install -y php7.3-mysql
RUN apt-get install -y mariadb-server
RUN apt-get install -y openssl

COPY /srcs/phpMyAdmin /var/www/phpMyAdmin
COPY /srcs/wordpress /var/www/wordpress
COPY /srcs/confignginx /etc/nginx/sites-available/
RUN ln -s /etc/nginx/sites-available/confignginx /etc/nginx/sites-enabled/
RUN unlink /etc/nginx/sites-enabled/default

COPY srcs/maria_conf .
RUN service mysql start && cat maria_conf | mariadb -u root


COPY ./srcs/ssl.conf /tmp
RUN openssl req -x509 -newkey rsa:2048 -nodes -config /tmp/ssl.conf -keyout /etc/nginx/nginx.key -out /etc/nginx/nginx.cert

CMD service mysql start && echo "mysql started" && service php7.3-fpm start && echo "php-fpm started" && nginx -g "daemon off;"
