<?php

$host = '127.0.0.1';
$db = 'dylan_php';
$charset = 'utf8mb4';

$dsn = "mysql:host=$host;dbname=$db;charset=$charset";
$user = "dbuser";
$pass = "jeff";

$options[PDO::ATTR_ERRMODE] = PDO::ERRMODE_EXCEPTION;
$options[PDO::ATTR_DEFAULT_FETCH_MODE] = PDO::FETCH_ASSOC;
$options[PDO::ATTR_EMULATE_PREPARES] = false;

$pdo = null;
try {
	$pdo = new PDO($dsn, $user, $pass, $options);
} catch (PDOException $ex) {
	throw new PDOException($ex->getMessage(), $ex->getCode());
};
