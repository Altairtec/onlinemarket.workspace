<?php

return array(
	'db' => array(
		'driver' => 'pdo', 
		'dsn' => 'mysql:dbname=onlinemarket;host=localhost', 
		'username' => 'root', 
		'password' => '', 
		'driver_options' => array(
			PDO::MYSQL_ATTR_INIT_COMMAND => "SET NAMES 'UTF8'", 
			PDO::ATTR_ERRMODE => PDO::ERRMODE_WARNING
		),
	),
);