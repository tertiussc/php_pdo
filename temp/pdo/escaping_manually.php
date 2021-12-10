<?php


$con = new PDO('mysql:host=127.0.0.1;dbname=pdo_db','root','');

$first_name = $con->quote($_GET['first_name']);

die($first_name);

$user = $con->query("
	SELECT * FROM users
	WHERE first_name = $first_name


	");




var_dump($user->fetch(PDO::FETCH_OBJ));


