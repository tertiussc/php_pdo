<?php
require_once("includes/connection.php");

$query = $con->query("
                    SELECT * FROM users
");

$users = $query->fetchAll(PDO::FETCH_ASSOC);

foreach ($users as $user) {
    echo $user["username"] . "<br>";
}