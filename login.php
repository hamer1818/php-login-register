<?php
    require_once("db.php");
    $email = $_POST["email"];
    $_password = $_POST["password"];
    $result       = mysqli_query($conn,"SELECT email, pass FROM users WHERE email = '$email' and pass = '$_password' ");
    if(mysqli_num_rows($result) > 0){
        echo "<script>alert('Giriş Başarılı')</script>";
        echo "email: " . $email . " - password: " . $_password . "<br>";
        echo "10 saniye sonra anasayfaya yönlendirileceksiniz";
        header("Refresh: 10; url=index.php");
    }else{
        echo "<script>alert('Giriş Başarısız')</script>";
        header("Refresh: 0; url=index.php");
    }
    mysqli_close($conn);
?>