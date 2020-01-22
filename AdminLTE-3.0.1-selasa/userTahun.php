<!DOCTYPE html>
<?php
include_once 'koneksi.php';
date_default_timezone_set("Asia/Jakarta");
$today = date('Y-m-d');
$query = "SELECT s.lokasi, s.keterangan, count(*) as jumlah 
          FROM produksi p INNER JOIN sensor s ON p.id_sensor = s.id_sensor 
          ORDER BY waktu desc";
$result = mysqli_query($koneksi, $query);
session_start();
$name = $_SESSION['uname'];
if (!isset($_SESSION['uname'])) {
    header("location: index.php");
}
?>
<html>

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>Tahunan</title>
    <!-- Tell the browser to be responsive to screen width -->
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- Font Awesome -->
    <link rel="stylesheet" href="plugins/fontawesome-free/css/all.min.css">
    <!-- Ionicons -->
    <link rel="stylesheet" href="https://code.ionicframework.com/ionicons/2.0.1/css/ionicons.min.css">
    <!-- Tempusdominus Bbootstrap 4 -->
    <link rel="stylesheet" href="plugins/tempusdominus-bootstrap-4/css/tempusdominus-bootstrap-4.min.css">
    <!-- iCheck -->
    <link rel="stylesheet" href="plugins/icheck-bootstrap/icheck-bootstrap.min.css">
    <!-- JQVMap -->
    <link rel="stylesheet" href="plugins/jqvmap/jqvmap.min.css">
    <!-- Theme style -->
    <link rel="stylesheet" href="dist/css/adminlte.min.css">
    <!-- overlayScrollbars -->
    <link rel="stylesheet" href="plugins/overlayScrollbars/css/OverlayScrollbars.min.css">
    <!-- Daterange picker -->
    <link rel="stylesheet" href="plugins/daterangepicker/daterangepicker.css">
    <!-- summernote -->
    <link rel="stylesheet" href="plugins/summernote/summernote-bs4.css">
    <!-- Google Font: Source Sans Pro -->
    <link href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,400i,700" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,400i,700" rel="stylesheet">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.1.0/jquery.min.js"></script>
    <script src="http://code.jquery.com/ui/1.10.3/jquery-ui.js"></script>
    <link rel="stylesheet" href="http://code.jquery.com/ui/1.11.4/themes/smoothness/jquery-ui.css">
</head>


<body class="hold-transition sidebar-mini layout-fixed">
    <div class="wrapper">

        <!-- Navbar -->
        <nav class="main-header navbar navbar-expand navbar-info navbar-dark">
            <!-- Left navbar links -->
            <ul class="navbar-nav">
                <li class="nav-item">
                    <a class="nav-link" data-widget="pushmenu" href="#"><i class="fas fa-bars"></i></a>
                </li>
                <li class="nav-item d-none d-sm-inline-block">
                    <a href="indexUser.php" class="nav-link">Home</a>
                </li>

            </ul>

            <!-- SEARCH FORM -->
            <form class="form-inline ml-3">
                <div class="input-group input-group-sm">
                    <input class="form-control form-control-navbar" type="search" placeholder="Search"
                        aria-label="Search">
                    <div class="input-group-append">
                        <button class="btn btn-navbar" type="submit">
                            <i class="fas fa-search"></i>
                        </button>
                    </div>
                </div>
            </form>

            <!-- Right navbar links -->
            <ul class="navbar-nav ml-auto">
                <li class="nav-item dropdown no-arrow">
                    <a class="nav-link dropdown-toggle" href="#" id="userDropdown" role="button" data-toggle="dropdown"
                        aria-haspopup="true" aria-expanded="false">
                        <span class="mr-2 d-none d-lg-inline text-gray-600 small"><?php echo $name?></span>
                        <img class="img-profile rounded-circle" src="dist/img/gb2.jpg" height="23px">
                    </a>
                    <!-- Dropdown - User Information -->
                    <div class="dropdown-menu dropdown-menu-right shadow animated--grow-in"
                        aria-labelledby="userDropdown">

                        <a class="dropdown-item" href="#" data-toggle="modal" data-target="#logoutModal">
                            <i class="fas fa-sign-out-alt fa-sm fa-fw mr-2 text-gray-400"></i>
                            Logout
                        </a>
                    </div>
                </li>
            </ul>
        </nav>
        <!-- /.navbar -->

        <!-- Main Sidebar Container -->
        <aside class="main-sidebar sidebar-light-info elevation-4">
            <!-- Brand Logo -->
            <a href="indexUser.php" class="brand-link">
                <img src="dist/img/logooh.png" alt="AdminLTE Logo" class="brand-image img-circle elevation-3"
                    style="opacity: .8">
                <span class="brand-text font-weight-dark">PindadDivmu</span>
            </a>

            <!-- Sidebar -->
            <div class="sidebar">

                <!-- Sidebar Menu -->
                <nav class="mt-2">
                    <ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu"
                        data-accordion="false">
                        <li class="nav-item has-treeview">
                            <a href="indexUser.php" class="nav-link">
                                <i class="nav-icon fas fa-tachometer-alt"></i>
                                <p>
                                    Dashboard</p>
                            </a>
                        </li>
                        <li class="nav-item has-treeview">
                            <a href="userShift.php" class="nav-link  active">
                                <i class="nav-icon fas fa-book"></i>
                                <p>Laporan</p>
                            </a>
                        </li>
                        <li class="nav-item has-treeview">
                            <a href="userMesin.php" class="nav-link">
                                <i class="fas fa-circle nav-icon"></i>
                                <p>Mesin</p>
                            </a>
                        </li>
                    </ul>
                </nav>
                <!-- /.sidebar-menu -->
            </div>
            <!-- /.sidebar -->
        </aside>

        <!-- Content Wrapper. Contains page content -->
        <div class="content-wrapper">
            <!-- Content Header (Page header) -->
            <div class="content-header">
                <div class="container-fluid">
                    <div class="row mb-2">
                        <div class="col-sm-6">
                            <h1 class="m-0 text-gray">Tahunan</h1>
                        </div><!-- /.col -->
                        <div class="col-sm-6">
                            <ol class="breadcrumb float-sm-right">
                                <li class="breadcrumb-item"><a href="#">Home</a></li>
                                <li class="breadcrumb-item active">Tahunan</li>
                            </ol>
                        </div><!-- /.col -->
                    </div><!-- /.row -->
                </div><!-- /.container-fluid -->
            </div>
            <!-- /.content-header -->

            <!-- Main content -->
            <section class="content">
                <div class="dropdown show">
                    <a class="btn btn-info dropdown-toggle" href="#" role="button" id="dropdownMenuLink"
                        data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                        Laporan Per
                    </a>
                    <div class="dropdown-menu" aria-labelledby="dropdownMenuLink">
                        <a class="dropdown-item" href="userHari.php">Harian</a>
                        <a class="dropdown-item" href="userBulan.php">Bulanan</a>
                        <a class="dropdown-item" href="userTahun.php">Tahunan</a>
                    </div>
                </div>
                <br>
                <div class="table-responsive">
                            <table class="table-responsive">
                                <tr>
                                    <td width=43%>
                                        <div class="combobox">
                                            <select name='year' id='year' class='form-control'>";
                                                <?php
                                    $qry = "SELECT waktu FROM produksi GROUP BY year(waktu)";
                                    $result2 = mysqli_query($koneksi, $qry);
                                    if (mysqli_num_rows($result2) > 0) {
                                        while ($t = mysqli_fetch_array($result2)) {
                                            $data = explode('-', $t['waktu']);
                                            $tahun = $data[0];
                                            echo "<option value='$tahun'>$tahun</option>";
                                        }
                                    }
                                    ?>
                                                }
                                            </select>
                                        </div>
                                    </td>
                                    <td width=42%>
                                        <div class="combobox col-md-12">
                                            <select name='keterangan' id='keterangan' class="form-control">";
                                                <?php
                                    $qry = "SELECT keterangan FROM sensor";
                                    $result2 = mysqli_query($koneksi, $qry);
                                    if (mysqli_num_rows($result2) > 0) {
                                        while ($ket = mysqli_fetch_array($result2)) {
                                            $data = explode('-', $ket['keterangan']);
                                            $keterangan = $data[0];
                                            echo "<option value='$keterangan'>$keterangan</option>";
                                        }
                                    }
                                    ?>
                                                }
                                            </select>
                                        </div>
                                    </td>
                                    <td>
                                        <div class="col-md-3">
                                            <input type="button" name="filter" id="filter" value="Filter"
                                                class="btn btn-info" />
                                        </div>
                                    </td>
                                </tr>
                            </table>
                            <div style="clear:both"></div>
                            <br />
                            <div id="order_table">
                                <table class="table table-bordered table-hover table-striped">
                                    <thead>
                                        <tr>
                                            <th width=30%>Nama Mesin</th>
                                            <th>Lokasi</th>
                                            <th>Jumlah</th>
                                        </tr>
                                    </thead>
                                    <?php
                                    while ($row = mysqli_fetch_array($result)) {
                                    ?>
                                    <tbody>
                                        <tr>
                                            <td><?php echo $row["keterangan"]; ?></td>
                                            <td><?php echo $row["lokasi"]; ?></td>
                                            <td><?php echo $row["jumlah"]; ?></td>
                                        </tr>
                                    </tbody>
                                    <?php
                                    }
                                    ?>
                                </table>
                            </div>
            </section>
            <!-- /.content -->
        </div>
        <!-- /.content-wrapper -->
        <footer class="main-footer">
            <strong>Copyright &copy; 2020 <a href="polinema.ac.id">Polinema</a>.</strong>
            All rights reserved.
            <!-- <div class="float-right d-none d-sm-inline-block">
      <b>Version</b> 3.0.1
    </div> -->
        </footer>

        <!-- Control Sidebar -->
        <aside class="control-sidebar control-sidebar-light">
            <!-- Control sidebar content goes here -->
        </aside>
        <!-- /.control-sidebar -->
    </div>
    <!-- ./wrapper -->

    <!-- Logout Modal-->
    <div class="modal fade" id="logoutModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel"
        aria-hidden="true">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="exampleModalLabel">Yakin untuk keluar?</h5>
                    <button class="close" type="button" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">×</span>
                    </button>
                </div>
                <div class="modal-body">Pilih "Logout" untuk keluar.</div>
                <div class="modal-footer">
                    <button class="btn btn-info" type="button" data-dismiss="modal">Cancel</button>
                    <a class="btn btn-danger" href="proses/prosesLogout.php">Logout</a>
                </div>
            </div>
        </div>
    </div>

    <!-- jQuery -->
    <script src="plugins/jquery/jquery.min.js"></script>
    <!-- jQuery UI 1.11.4 -->
    <script src="plugins/jquery-ui/jquery-ui.min.js"></script>
    <!-- Resolve conflict in jQuery UI tooltip with Bootstrap tooltip -->
    <script>
    $.widget.bridge('uibutton', $.ui.button)
    </script>
    <!-- Bootstrap 4 -->
    <script src="plugins/bootstrap/js/bootstrap.bundle.min.js"></script>
    <!-- ChartJS -->
    <script src="plugins/chart.js/Chart.min.js"></script>
    <!-- Sparkline -->
    <script src="plugins/sparklines/sparkline.js"></script>
    <!-- JQVMap -->
    <script src="plugins/jqvmap/jquery.vmap.min.js"></script>
    <script src="plugins/jqvmap/maps/jquery.vmap.usa.js"></script>
    <!-- jQuery Knob Chart -->
    <script src="plugins/jquery-knob/jquery.knob.min.js"></script>
    <!-- daterangepicker -->
    <script src="plugins/moment/moment.min.js"></script>
    <script src="plugins/daterangepicker/daterangepicker.js"></script>
    <!-- Tempusdominus Bootstrap 4 -->
    <script src="plugins/tempusdominus-bootstrap-4/js/tempusdominus-bootstrap-4.min.js"></script>
    <!-- Summernote -->
    <script src="plugins/summernote/summernote-bs4.min.js"></script>
    <!-- overlayScrollbars -->
    <script src="plugins/overlayScrollbars/js/jquery.overlayScrollbars.min.js"></script>
    <!-- AdminLTE App -->
    <script src="dist/js/adminlte.js"></script>
    <!-- AdminLTE dashboard demo (This is only for demo purposes) -->
    <script src="dist/js/pages/dashboard.js"></script>
    <!-- AdminLTE for demo purposes -->
    <script src="dist/js/demo.js"></script>
</body>


</html>
<script>
$(document).ready(function() {
    $.datepicker.setDefaults({
        dateFormat: 'yy-mm-dd'
    });
    $(function() {
        $("#year").datepicker();
    });
    $('#filter').click(function() {
        var year = $('#year').val();
        var keterangan = document.getElementById("keterangan").value;
        if (year != '' && keterangan != '') {
            $.ajax({
                url: "proses/filterTahun.php",
                method: "POST",
                data: {
                    year: year,
                    keterangan: keterangan
                },
                success: function(data) {
                    $('#order_table').html(data);
                }
            });
        } else {
            alert("Please Select Date");
        }
    });
});
</script>