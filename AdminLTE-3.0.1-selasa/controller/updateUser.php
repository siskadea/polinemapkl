<?php
include_once '../koneksi.php';
$id =  $_POST["id_user"];
$nama = $_POST["nama"];
$uname = $_POST["uname"];
$pass = $_POST["pass"];
$level = $_POST["level"];
$query = "UPDATE lat_user SET nama='$nama', uname='$uname', pass='$pass', level='$level' WHERE id_user=$id";  
if(mysqli_query($koneksi,$query)) {
    header("location: ../userpass.php");
} else {
    echo "Gagal";
}
?>