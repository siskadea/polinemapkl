<?php
include '../koneksi.php';
// $id_sensor = $_POST["id_sensor"];
$lokasi = $_POST["lokasi"];
$keterangan = $_POST["keterangan"];
$query = "INSERT INTO sensor (lokasi, keterangan) VALUES ('$lokasi', '$keterangan')";
if(mysqli_query($koneksi,$query)) {
    header("location: ../mesin.php");
} else {
    echo "Gagal";
}
?>