<?php
    $servername         = "localhost";
    $username           = "root";
    $password           = "";
    $dbname             = "kayit";
try {
    $conn               = mysqli_connect($servername, $username, $password, $dbname);
    $databaseCreate     =   mysqli_query($conn,"CREATE DATABASE IF NOT EXISTS $dbname");
    $useDB              =   mysqli_query($conn,"USE $dbname");
    $tableCreate        =   mysqli_query($conn,"CREATE TABLE IF NOT EXISTS users (id INT(6) UNSIGNED AUTO_INCREMENT PRIMARY KEY, email VARCHAR(30) NOT NULL, pass VARCHAR(30) NOT NULL)");
} catch (Exception $e) {
    echo "Connection failed: " . $e->getMessage();
}
?>