<?php

function get_db(): PDO
{
	static $pdo = null;

	if ($pdo instanceof PDO) {
		return $pdo;
	}

	$host = 'your_database_host';
	$dbname = 'your_database_name';
	$user = 'your_database_user';
	$password = 'your_database_password';

	$dsn = "mysql:host={$host};dbname={$dbname};charset=utf8mb4";

	$pdo = new PDO($dsn, $user, $password, [
		PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION,
		PDO::ATTR_DEFAULT_FETCH_MODE => PDO::FETCH_ASSOC,
		PDO::ATTR_EMULATE_PREPARES => false,
	]);

	return $pdo;
}