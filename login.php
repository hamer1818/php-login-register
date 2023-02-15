<?php
    require_once("db.php");

    $email = $_POST["email"];
    $_password = $_POST["password"];

    $uyeSorgu       = $VeritabaniBaglantisi->query("SELECT email, password FROM uyeler WHERE email = $email , password = $_password ");
    $eslesenUyeSayisi = $uyeSorgu->num_rows;

    $veritabaniEmail    = $veritabanindanGelenUye["email"];
    $veritabaniPassword = $veritabanindanGelenUye["password"];

    $uyeSorgu->close();


    if ($eslesenUyeSayisi>0) {
        echo $veritabaniEmail;
        echo "<br>";
        echo $veritabaniPassword;
    } else {
        header("Refresh: 15; url=index.php");
    }



    
?>