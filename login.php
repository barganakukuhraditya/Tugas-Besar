<?php 
include "koneksi.php";
session_start();

if(isset($_POST['daftar'])){
    $username = $_POST['username'];
    $password = $_POST['password'];

    $insert = $conn->query("INSERT INTO user VALUE('','$username','$password')");
    if ($insert) {
        echo '<script>alert("anda berhasil login"); </script>';
    }
}else if(isset($_POST['masuk'])) {
    $username = $_POST['username'];
    $password = $_POST['password'];

    $data = $conn->query("SELECT * FROM user WHERE username='$username' AND password='$password'");
    $array = $data->fetch_array();
    $sum = $data->num_rows;
    if ($sum > 0){
        if ($array["role"] == "user"){
            $_SESSION["user"] = $array;
            header ("location: index1_user.php");
        }else if ($array["role"] == "admin"){
            $_SESSION["admin"] = $array;
            header ("location: admin.php");
        }
    }else {
        echo '<script>alert("username atau password anda tidak sesuai"); </script>';
    }
    }

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="login.css">
    <title>Document</title>
</head>
<body>
    <!-- <body bgcolor="#557B83"> -->
    <form action="" method="POST">
        <div class="form-container">
    <h1 align="center">LOGIN</h1>
    
    <form method="post" action="">
    
    <label>Username</label><br>
    <input type="text" name="username" placeholder="masukan username">
    <br>
    <br>
    <label>Password</label><br>
    <input type="password" name="password" placeholder="masukan password">
       <br>
       <br>
        <button name="masuk" type="submit" class="btn">login</button>
        <p class="sign-in">Belum punya akun?</p><a href="register.php" >Buat Akun</a> 
    </form>
    
    </div>
</body>
</html>