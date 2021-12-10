<?php


$con = new PDO('mysql:host=127.0.0.1;dbname=pdo_db','root','');



$user = $con->prepare("
	SELECT * FROM users
	WHERE first_name = :first_name

	");

$userExcution = $user->execute([

	'first_names' => $_GET['first_name'],

	]);


if($userExcution) {

$user = $user->fetchAll(PDO::FETCH_OBJ);

var_dump($user);


}









