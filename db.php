<?php
try {
    $servername = "localhost";
    $username   = "root";
    $password   = "";
    $dbname     = "kayit";

    $conn   = mysqli_connect($servername, $username, $password, $dbname);

} catch (Exception $e) {
    echo "Connection failed: " . $e->getMessage();
}

?>