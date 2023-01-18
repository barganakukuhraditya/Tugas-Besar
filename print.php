<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-GLhlTQ8iRABdZLl6O3oVMWSktQOp6b7In1Zl3/Jr59b6EGGoI1aFkw7cmDA6j6gD" crossorigin="anonymous">
<link rel="stylesheet" href="print.css">

<body bgcolor="#D8E3E7">
  <table border="1" width="52%" align="center" style="border-collapse: collapse;">
    <tr style="height: 30px; vertical-align: top;">
      <td style="padding: 10px;">
        SELAMAT DATANG
        <b style="text-transform: uppercase; color: #132C33; text-decoration: underline; ">
          <?php
          @session_start();
          include 'koneksi.php';
          if ($_SESSION["admin"]) {
            $code = $_SESSION["admin"]["username"];
          }
          $ambil = mysqli_query($conn, "SELECT * FROM user WHERE username= '$code'");
          $ambil2 = $ambil->fetch_array();
          echo $ambil2['username'];
          ?>

        </b>
      </td>
    </tr>
  </table>
  <br>
  
  <table class="table table-bordered table-hover">
    <thead>
      <tr class="bg-info">
        <th class="text-center" width="1%">NO</th>
        <th width="15%">Id</th>
        <th width="15%">Password</th>
        <th width="15%">Keterangan</th>
        <th width="15%"></th>
      </tr>
    </thead>

    <?php
    include "koneksi.php";
    $data = mysqli_query($conn, "SELECT * from user WHERE id");
    while ($d = mysqli_fetch_array($data)) {
    ?>
      <tr>

        <td><?php echo $d['id']; ?></td>
        <td><?php echo $d['username']; ?></td>
        <td><?php echo $d['password']; ?></td>
        <td><?php echo $d['role']; ?></td>



        
        </td>

      </tr>

    <?php } ?>



  </table>
<button onclick="window.print()">Cetak Halaman Ini</button>
</body>