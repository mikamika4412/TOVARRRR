FROM arodax/php7.4-fpm

RUN apt-get update && \
	apt-get  install -y mysql-client && \
	docker-php-ext-install  pdo_mysql

WORKDIR "/application"