<?php


try {
    //code...
    $con = new PDO('mysql:host=127.0.0.1; dbname=php_pdo1', 'root', '');
} catch (PDOException $e) {
    die("For some reason the database connection failed");
}