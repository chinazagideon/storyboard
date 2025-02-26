@ECHO OFF
docker-compose build
docker-compose exec php docker-php-ext-install pdo pdo_mysql mbstring
docker-compose up