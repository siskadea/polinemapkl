<?php
include_once 'koneksi.php';

$id_sensor = $_POST["id_sensor"];
$waktu = date('Y-m-d H:i:s');


$simpan = $koneksi->query("INSERT INTO produksi SET id_sensor='$id_sensor', waktu='$waktu'");
if($simpan){
    echo 'berhasil simpan';
}

?>