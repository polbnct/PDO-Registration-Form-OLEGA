<?php  

$host = "localhost";
$user = "root";
$password = "";
$dbname = "olega";
$dsn = "mysql:host={$host};dbname={$dbname}";
$pdo = new PDO($dsn, $user, $password);

?>