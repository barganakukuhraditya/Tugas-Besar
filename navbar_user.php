<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
  <link rel="stylesheet" href="navbar.css">
  <style>
    h5 {
        color: white;
    }
  </style>
    <title>Document</title>
</head>
<body>
<nav class="navbar navbar-inverse">
  <div class="container-fluid">
    <div class="navbar-header">
      <a class="navbar-brand" href="#">Berita-in</a>
    </div>
    <ul class="nav navbar-nav">
      <!-- <li class="active"><a href="index1_user.php">Home</a></li> -->
      <li><a href="index1_user.php">Berita Terkini</a></li>
      <li><a href="index2_user.php">Sports</a></li>
      <li><a href="index3_user.php">Entertainment</a></li>
      <li><a href="index4_user.php">Teknologi</a></li>
    </ul>
    <ul class="nav navbar-nav navbar-right">
        <li>
            <h5>selamat datang
            <?php
    			@session_start();
    			include 'koneksi.php';
    			if($_SESSION["user"]){
    				$code = $_SESSION["user"]["username"];
    			}
    			$ambil = mysqli_query($conn,"SELECT * FROM user WHERE username= '$code'");
    			$ambil2 = $ambil->fetch_array();
    			echo $ambil2['username'];
    			  ?>
            </h5>
        </li>
      <li><a href="logout.php"><span class="glyphicon glyphicon-user"></span> Logout</a></li>
    </ul>
  </div>
</nav>
</body>
</html>