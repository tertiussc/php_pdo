<?php


$con = new PDO('mysql:host=127.0.0.1;dbname=pdo_db','root','');

$update = $con->query("
	UPDATE users SET first_name = 'Janas'
	WHERE id = 4

	");


$delete = $con->query("
	DELETE FROM users

	");



echo $update->rowCount;










