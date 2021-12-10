<?php

require_once("includes/connection.php");

$username = 'tertiussc';
$password = 'password';

$query = $con->prepare("
                        SELECT * FROM users
                        WHERE username = ?
                        AND password = ?
");
$query->execute([$username, $password]);

$users = $query->fetchAll(PDO::FETCH_OBJ);

var_dump($users);