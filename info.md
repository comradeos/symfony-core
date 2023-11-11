### Часть 1
```
https://www.youtube.com/watch?v=ITOnpzkzlYM
```
### Часть 2
```
https://www.youtube.com/watch?v=tcU5XwlEeRU
```

### Попасть внутрь контейнера с PHP
```
docker exec -it php-container bash
```
### Создать проект symfony в текущей папке через composer
```
composer create-project symfony/skeleton .  
```
### Установка пакетов 
```
composer install
```
### Обновление пакетов
```
composer update
```
### Попасть внутрь контейнера с PHP
```
docker exec -it php-container bash
```
### Файл конфигурации .env (строка отвечающая за базу данных):
```
DATABASE_URL="mysql://root:root@mysql-service:3306/default?serverVersion=8&charset=utf8mb4"
```
```
DATABASE_URL="mysql://имя_пользователя:пароль@название_докер_сервиса:порт_внутри_контейнера/имя_базы_данных?serverVersion=8&charset=utf8mb4"
```
### Создание базы данных
```
docker exec -it php-container bash
```
```
php bin/console doctrine:database:create
```
### Попасть внутрь контейнера с NODE
```
docker exec -it node-container bash
```
```
yarn install
```
```
yarn dev
```

