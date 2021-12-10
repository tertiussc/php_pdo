<?php


$con = new PDO('mysql:host=127.0.0.1;dbname=pdo_db','root','');

$id = 2;

$user = $con->prepare("
	INSERT INTO users(first_name, username, email, active, password)
	VALUES (:first, :usern, :email, :active, :pass )

	");

$userExcution = $user->execute([

	'first'  => 'Edwin',
	'usern'  => 'rico',
	'email'  => 'edwin@codingfaculty.com',
	'active' =>  1,
	'pass'   =>  'youcannotknowmypassword',

	]);











