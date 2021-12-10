<?php 


try {

$con = new PDO('mysql:host=127.0.0.1;dbname=pdo_dbs','root','');



} catch (PDOException $e) {

die("For some reason the database connection failed");


}







 ?>