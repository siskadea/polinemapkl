<?php
include '../koneksi.php';
$nama = $_POST["nama"];
$uname = $_POST["uname"];
$pass = $_POST["pass"];
$level = $_POST["level"];
$query = "INSERT INTO lat_user (nama, uname, pass, level) VALUES ('$nama', '$uname', '$pass', '$level')";
if(mysqli_query($koneksi,$query)) {
    header("location: ../userpass.php");
} else {
    echo "Gagal";
}
?>