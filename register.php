<?php
include 'koneksi.php';
session_start();

?>  
<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <link rel="stylesheet" href="register.css">
    <title>Register</title>
</head>

<div class="form-container">
<h1 align="center">REGISTRASI</h1>
<form method="post" action="" enctype="multipart/form-data">
<label>Username</label><br>

<input type="text" name="username" placeholder="masukan username" >
<br>
<br>

<label>Password</label><br>
<input type="password" name="password" placeholder="masukan password" required>
<br>
<br>

<button name="submit" type="submit" class="btn">Simpan</button>
<br>
<br>

<p class="sign-up">Sudah punya akun?</p><a href="login.php">Login</a>
</form>

<?php
if (isset($_POST['submit'])) {
    $username = $_POST['username'];
    $password = $_POST['password'];
    $role = 'user';
}

@$tambah = mysqli_query($conn,"INSERT INTO `user`( `username`, `password`,`role`) VALUES ('$username','$password','$role')");
 if ($tambah) {
 //               echo  '<script>alert("tambah data berhasil ")</script>';
 //           echo '<script>window.location="login.php"</script>';
 }
 else {
 //   echo "pesan gagal";

 }

  ?>

</body>
</html>