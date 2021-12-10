<?php

require_once("includes/connection.php");

$users = $con->query("
        SELECT * FROM users
        WHERE id=1
");
$user = $users->fetch(PDO::FETCH_ASSOC);

echo $user["username"];


