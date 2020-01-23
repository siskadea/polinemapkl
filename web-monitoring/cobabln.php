<?php
include_once 'koneksi.php';
$myDate = date("Y-m-d", strtotime( date( "Y-m-d", strtotime( date("Y-m-d") ) ) . "+1 month" ) );
echo $result = $koneksi->query( 'SELECT * FROM produksi WHERE waktu BETWEEN NOW AND "' . $myDate . '"' );
$result = $koneksi->query( 'SELECT * FROM produksi WHERE waktu = "' . $myDate . '"' );
$data2 = $result->fetch_row();
echo $data2[0];
echo date('Y-m-d', strtotime('+1 month'));
?>