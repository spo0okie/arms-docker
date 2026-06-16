<?php
// Подключение приложения к контейнеру БД (см. docker-compose.yml: сервис arms-db).
// Монтируется в контейнер как config/db-local.php и переопределяет образный config/db.php
// (там host=127.0.0.1). Хост = имя сервиса в compose-сети, креды = MYSQL_USER/MYSQL_PASSWORD.
return [
	'dsn' => 'mysql:host=arms-db;dbname=arms',
	'username' => 'arms-user',
	'password' => 'arms-password',
];
