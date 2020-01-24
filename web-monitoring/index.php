<!DOCTYPE html>
<?php
include_once 'koneksi.php';
date_default_timezone_set("Asia/Jakarta");
$today = date('Y-m-d');
session_start();
if(isset($_SESSION['uname']) AND isset($_SESSION['level'])){
    if($_SESSION['level']=='1'){
        header("Location: index1.php");
    }else if($_SESSION['level']=='2'){
        header("Location: indexUser.php");
    }
}
if(isset($_GET['pesan'])){
    $mess="<p>{$_GET['pesan']}</p>";
}else{
    $mess="";
}
?>
<html>

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>SIMPRO | Login</title>
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
    <div class="login-box">
        <style>
            .center {
                margin-left: auto;
                margin-right: auto;
                display: block;
                width: 100px
            }
        </style>
        <!-- /.login-logo -->
        <div class="card">
            <div class="card-body login-card-body">


                <div>
                    <img class="center" src="dist/img/logo.png" />
                </div>
                <!-- <img src="dist/img/logo.png" alt="logo" width="150px" align> -->
                <div class="login-logo">
                    <strong>SIMPRO</strong>
                </div>
                <!-- <p class="login-box-msg">Sign in to start your session</p> -->

                <form action="proses/prosesLogin.php" method="post">
                    <div class="input-group mb-3">
                        <input type="text" class="form-control" placeholder="Username" name="uname" id="uname">
                        <div class="input-group-append">
                            <div class="input-group-text">
                                <span class="fas fa-user"></span>
                            </div>
                        </div>
                    </div>
                    <div class="input-group mb-3">
                        <input type="password" class="form-control" placeholder="Password" name="pass" id="pass">
                        <div class="input-group-append">
                            <div class="input-group-text">
                                <span class="fas fa-lock"></span>
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col">
                        <button type="submit" class="btn btn-info btn-block">Masuk</button>
                        </div>
                        <p><?php echo $mess; ?></p> 
                        <!-- /.col -->
                    </div>
                </form>

                <div class="social-auth-links text-center mb-3">

                </div>
                <!-- /.social-auth-links -->

                <!-- <p class="mb-1">
        <a href="forgot-password.html">I forgot my password</a>
      </p> -->

            </div>
            <!-- /.login-card-body -->
        </div>
    </div>
    <!-- /.login-box -->

    <!-- jQuery -->
    <script src="plugins/jquery/jquery.min.js"></script>
    <!-- Bootstrap 4 -->
    <script src="plugins/bootstrap/js/bootstrap.bundle.min.js"></script>
    <!-- AdminLTE App -->
    <script src="dist/js/adminlte.min.js"></script>

</body>

</html>