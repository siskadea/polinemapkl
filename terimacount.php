<?php
include_once 'koneksi.php';

// $id_jarak = $_POST["id_jarak"];
$hitung = $_POST["hitung"];
// $jarak = "2";
// $id_sensor = "";
// $lokasi = "pindad";
// $keterangan = "mesin 2";


$simpan = $koneksi->query("INSERT INTO hitung SET hitung='$hitung'");
if($simpan){
	echo $hitung;
    echo '  berhasil simpan';
}

?>