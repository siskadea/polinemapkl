<?php
include_once 'koneksi.php';

// $id_jarak = $_POST["id_jarak"];
$jarak = $_POST["jarak"];
// $jarak = "2";
// $id_sensor = "";
// $lokasi = "pindad";
// $keterangan = "mesin 2";


$simpan = $koneksi->query("INSERT INTO jarak SET  jarak='$jarak'");
if($simpan){
	echo $jarak;
    echo 'berhasil simpan';
}

?>