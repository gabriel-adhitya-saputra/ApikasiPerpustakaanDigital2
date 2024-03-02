<?php
$host = "Localhost";
$user = "root";
$password = "";
$dbName = "Perpus3";

$conn = mysqli_connect($host, $user, $password, $dbName);

try {    
    //create PDO connection 
    $db = new PDO("mysql:host=$host;dbname=$dbName", $user, $password);
} catch(PDOException $e) {
    //show error
    die("Terjadi masalah: " . $e->getMessage());
}