<?php
include_once 'koneksi.php';
$today = date('Y-m-d');

$result = $koneksi->query("SELECT p.id_produksi, p.waktu, s.lokasi, s.ket FROM produksi p INNER JOIN sensor s ON p.id_sensor=s.id_sensor ORDER BY waktu ASC");
$jumlah = $koneksi->query("SELECT count(*) FROM produksi WHERE TIME(waktu)>='03:08:07' and TIME(waktu)<='13:08:11' AND DATE(waktu)='$today'");
$data = $jumlah->fetch_row();
echo $data[0];
// var_dump($jumlah);
//echo $jumlah;
?>


<!-- SELECT p.id_produksi, p.waktu, s.id_sensor, s.lokasi, s.keterangan, COUNT(*) as jumlah FROM produksi p INNER JOIN sensor s ON p.id_sensor=s.id_sensor WHERE waktu>='Y-m-d 03:08:07' and waktu<='2020-01-09 03:08:11' ORDER BY waktu ASC; -->