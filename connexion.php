<?php

try {
	$dsn = 'mysql:dbname=cinama;host=127.0.0.1';
	$username = 'bara';
	$password = 'karimbara';

	$pdo = new PDO("mysql:host=localhost;dbname=cinema;chartset=utf8", $username, $password);
} catch (Exception $e) {
	echo $e->getMessage();
}
