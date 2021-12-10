<?php
/**
 * Database Connection
 * Create a PDO object to connect to a database
 * Takes 3 param between single quotes
 * #1 Database information database type and host e.g. mysql:host=localhost and the database name e.g. dbname=myDatabase
 * #2 Username
 * #3 password
 */
$con = new PDO('mysql:host=127.0.0.1; dbname=php_pdo', 'root', '');

