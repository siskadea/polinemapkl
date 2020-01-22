<?php
include_once 'konek.php';
$result = $mysqli->query("SELECT COUNT(waktu) FROM produksi");
$hasil = $result;
echo $hasil;
?>