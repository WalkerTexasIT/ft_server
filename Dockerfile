FROM debian:buster

RUN apt-get update
RUN apt-get upgrade
RUN apt-get install -y nginx
RUN apt-get install -y php7.3-fpm
RUN apt-get install -y php7.3-mysql
RUN apt-get install -y mariadb-server

COPY /srcs/phpMyAdmin /var/www/phpMyAdmin
COPY /srcs/wordpress /var/www/wordpress

#RUN service mysql start | mariadb -u root

CMD service mysql start && echo "mysql started" && service php7.3-fpm start && echo "php-fpm started" && nginx -g "daemon off;"
