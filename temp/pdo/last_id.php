<?php


$con = new PDO('mysql:host=127.0.0.1;dbname=pdo_db','root','');

$id = 2;

$con->query("
	INSERT INTO users(first_name, username, email, active, password)
	VALUES ('Mariass', 'maria198sss', 'maria1989sss@gmail.com', 1, '3041ssss989')

	");


$user_id = $con->lastInsertId();



$con->query("
	UPDATE users SET active = 0 WHERE id = $user_id


	");










