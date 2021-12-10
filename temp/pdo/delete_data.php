<?php


$con = new PDO('mysql:host=127.0.0.1;dbname=pdo_db','root','');

$id = 2;

$user = $con->prepare("
	DELETE FROM users
	WHERE id = :id

	");

$userExcution = $user->execute([

	'id' => $id,

	]);











