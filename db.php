<?php
try {

    $VeritabaniBaglantisi   = new mysqli("localhost", "login", "123456", "login");

} catch (PDOException $Hata) {
    echo "<pre>";
    echo $Hata->getMessage();    //bu alanı kapatın çünkü site hata yaparsa kullanıcılar hata değerini görmesin
    echo "</pre>";
    die();
}


?>