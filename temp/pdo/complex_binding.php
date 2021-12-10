<?php


$con = new PDO('mysql:host=127.0.0.1;dbname=pdo_db','root','');

$first_name = $_GET['first_name'];



$user = $con->prepare("
	SELECT * FROM users
	WHERE first_name LIKE :first_name


	");


$user->bindValue(':first_name', "$first_name%");



$user->execute();


$user = $user->fetchAll(PDO::FETCH_OBJ);

var_dump($user);


