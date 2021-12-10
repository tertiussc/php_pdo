<?php


$con = new PDO('mysql:host=127.0.0.1;dbname=pdo_db','root','');


$users = $con->query("
	SELECT * FROM users

	");


echo $users->rowCount();










