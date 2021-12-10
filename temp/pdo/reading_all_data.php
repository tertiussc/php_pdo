<?php


$con = new PDO('mysql:host=127.0.0.1;dbname=pdo_db','root','');


$user = $con->query("
		
		SELECT * FROM users

	");

$users = $user->fetchAll(PDO::FETCH_OBJ);


foreach ($users as $user) {

	echo $user->username . "<br>";
}


