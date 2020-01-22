<?php
include_once 'koneksi.php';

$id_jarak = $_POST["id_jarak"];
$jarak = $_POST["jarak"];

// $id_sensor = "";
// $lokasi = "pindad";
// $keterangan = "mesin 2";


$simpan = $koneksi->query("INSERT INTO sensor SET id_jarak='$id_jarak', jarak='$jarak'");
if($simpan){
    echo 'berhasil simpan';
}

?>