<?php
include_once 'koneksi.php';

$id_sensor = $_POST["id_sensor"];
$lokasi = $_POST["lokasi"];
$keterangan = $_POST["keterangan"];
// $id_sensor = "";
// $lokasi = "pindad";
// $keterangan = "mesin 2";


$simpan = $koneksi->query("INSERT INTO sensor SET id_sensor='$id_sensor', lokasi='$lokasi', keterangan='$keterangan'");
if($simpan){
    echo 'berhasil simpan';
}

?>