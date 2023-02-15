<?php

    require_once("db.php");
    $email = $_POST['email'];
    $password = $_POST['password'];

    $uyeSorgu       = $VeritabaniBaglantisi->query("INSERT INTO uyeler (email,password) VALUES ($email,$password)");
    $uyeSorgu->close();


    if ($uyeSorgu) {
        echo "Kayıt Başarılı";
    } else {
        echo "Kayıt Başarısız";
        // 15 san sonra index.php ye yönlendir
        header("Refresh: 15; url=index.php");

    }



    
?>