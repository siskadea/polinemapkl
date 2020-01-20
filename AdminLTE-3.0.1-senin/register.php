<!DOCTYPE html>
<?php
include_once 'koneksi.php';
date_default_timezone_set("Asia/Jakarta");
$today = date('Y-m-d');
// $query = "SELECT s.id_sensor, s.lokasi, s.keterangan, count(*) as jumlah 
//           FROM produksi p INNER JOIN sensor s ON p.id_sensor = s.id_sensor 
//           ORDER BY waktu desc";
// $result = mysqli_query($koneksi, $query);
?>
<html>

<head>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <title>DivmuPindad | Daftar Akun</title>
  <!-- Tell the browser to be responsive to screen width -->
  <meta name="viewport" content="width=device-width, initial-scale=1">

  <!-- Font Awesome -->
  <link rel="stylesheet" href="plugins/fontawesome-free/css/all.min.css">
  <!-- Ionicons -->
  <link rel="stylesheet" href="https://code.ionicframework.com/ionicons/2.0.1/css/ionicons.min.css">
  <!-- icheck bootstrap -->
  <link rel="stylesheet" href="plugins/icheck-bootstrap/icheck-bootstrap.min.css">
  <!-- Theme style -->
  <link rel="stylesheet" href="dist/css/adminlte.min.css">
  <!-- Google Font: Source Sans Pro -->
  <link href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,400i,700" rel="stylesheet">
</head>

<body class="login-page" style="background-image: url('dist/img/kl.png');">
  <div class="register-box">
    <style>
      .center {
        margin-left: auto;
        margin-right: auto;
        display: block;
        width: 100px
      }
    </style>
    <!-- <div class="register-logo">
    <a href="index1.php"><b>Admin</b>LTE</a>
  </div> -->

    <div class="card">
      <div class="card-body register-card-body">
        <div>
          <img class="center" src="dist/img/logo.png" />
        </div>
        <div class="login-logo">
          <strong>Divmu</strong>
        </div>

        <form action="proses/prosesRegister.php" method="post">
          <div class="input-group mb-3">
            <input type="text" class="form-control" placeholder="Nama Lengkap">
            <div class="input-group-append">
              <div class="input-group-text">
                <span class="fas fa-user"></span>
              </div>
            </div>
          </div>
          <div class="input-group mb-3">
            <input type="text" class="form-control" placeholder="Email">
            <div class="input-group-append">
              <div class="input-group-text">
                <span class="fas fa-envelope"></span>
              </div>
            </div>
          </div>
          <div class="input-group mb-3">
            <input type="password" class="form-control" placeholder="Password">
            <div class="input-group-append">
              <div class="input-group-text">
                <span class="fas fa-lock"></span>
              </div>
            </div>
          </div>
          <div class="input-group mb-3">
            <!-- <label>Level User</label><br> -->
            <select class="form-control" name="level">
              
                <?php
                $query = "select*from lat_user_lvl";
                $res = mysqli_query($koneksi, $query);
                if (mysqli_num_rows($res) > 0) {
                  while ($row = mysqli_fetch_assoc($res)) {
                    $id = $row['id'];
                    $level = $row['lvl_name'];
                    echo "<option value=$id>$level</option>";
                  }
                } else {
                  echo "<option>cannot find user level</option>";
                }
                mysqli_close($koneksi);
                //your php code goes from here
                ?>
              </select>
          </div>
          <div class="row">
            <div class="col-8">
              <a href="index.php" class="text-center">Sudah punya akun</a>
            </div>
            <!-- /.col -->
            <div class="col-4">
              <button type="submit" class="btn btn-info btn-block">Daftar</button>
            </div>
            <!-- /.col -->
          </div>
        </form>

      </div>
      <!-- /.form-box -->
    </div><!-- /.card -->
  </div>
  <!-- /.register-box -->

  <!-- jQuery -->
  <script src="plugins/jquery/jquery.min.js"></script>
  <!-- Bootstrap 4 -->
  <script src="plugins/bootstrap/js/bootstrap.bundle.min.js"></script>
  <!-- AdminLTE App -->
  <script src="dist/js/adminlte.min.js"></script>
</body>

</html>