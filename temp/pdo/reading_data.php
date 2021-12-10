<?php


$con = new PDO('mysql:host=127.0.0.1;dbname=pdo_db','root','');


$user = $con->query("
		
		SELECT * FROM users
		WHERE id = 1

	");

// $user = $user->fetch(PDO::FETCH_OBJ);


// echo $user->first_name;


$user = $user->fetch();


var_dump($user);


