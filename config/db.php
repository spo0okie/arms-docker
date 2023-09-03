<?php
//host=host.docker.internal - означает БД на локалхосте запускающем докер в windows
//host=172.17.0.1 - означает БД на локалхосте запускающем докер в linux
return [
	'dsn' => 'mysql:host=host.docker.internal;dbname=arms', 'username' => 'root',    'password' => '',
];
