<?php


$con = new PDO('mysql:host=127.0.0.1;dbname=pdo_db','root','');

$first_name = "Jose";
$id = 1;

$user = $con->prepare("
	UPDATE users SET first_name = :first_name
	WHERE id = :id

	");

$userExcution = $user->execute([

	'first_name' => $first_name,
	'id' => $id,

	]);











