<?php


$con = new PDO('mysql:host=127.0.0.1;dbname=pdo_db','root','');

$first_name = 'Edwins';

$password = 123;



$user = $con->prepare("
	SELECT * FROM users
	WHERE first_name = ?
	AND password = ?

	");

$userExcution = $user->execute([$first_name, $password]);


$user = $user->fetchAll(PDO::FETCH_OBJ);

var_dump($user);


