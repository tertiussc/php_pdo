<?php

require_once("includes/connection.php");


$query = $con->prepare("
            SELECT * FROM users
            WHERE first_name = :fn
");
$query->execute([
    'fn' => $_GET['first_name'],
]);

$users = $query->fetchAll(PDO::FETCH_OBJ);

var_dump($users);

