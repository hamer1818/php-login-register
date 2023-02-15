<?php
    require_once("db.php");
    $email = $_POST['email'];
    $password = $_POST['password'];
    $result = mysqli_query($conn, "SELECT * FROM users WHERE email = '$email'");
    if (mysqli_num_rows($result) > 0) {
        echo "<script>alert('Bu email adresi zaten kayıtlı')</script>";
        header("Refresh: 0; url=index.php");
        exit;
    }else{

        $result = mysqli_query($conn, "INSERT INTO users (email ,pass) VALUES ('$email','$password')");
        if ($result) {
            echo "<script>alert('Kayıt Başarılı')</script>";
            header("Refresh: 0; url=index.php");
        } else {
            echo "<script>alert('Kayıt Başarısız')</script>";
            header("Refresh: 0; url=index.php");
    
        }
    }
    mysqli_close($conn);
?>