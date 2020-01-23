<?php
include_once '../koneksi.php';
$id =  $_POST["id_sensor"];
$lokasi = $_POST["lokasi"];
$keterangan = $_POST["keterangan"];
$query = "UPDATE sensor SET lokasi='$lokasi', keterangan='$keterangan' WHERE id_sensor=$id";  
if(mysqli_query($koneksi,$query)) {
    header("location: ../mesin.php");
} else {
    echo "Gagal";
}
?>