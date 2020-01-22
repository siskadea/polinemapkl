<?php
include_once 'konek.php';

date_default_timezone_set("Asia/Jakarta");

$result = $mysqli->query("SELECT p.id_produksi, p.waktu, s.lokasi, s.ket FROM produksi p INNER JOIN sensor s ON p.id_sensor=s.id_sensor ORDER BY waktu ASC");
$hari = date('Y-m-d');
$jumlah = $mysqli->query("SELECT count(*) FROM produksi WHERE waktu>='2020-01-09 03:08:07' and waktu<='2020-01-09 03:08:11'");
$jml_tmp = [];

if($result && $result -> num_rows ){
    $output = [];

    foreach($result as $row){
        $output [] =[
            'content' => "Kode Sensor : ".$row['id_sensor'],
            'time' => $row['waktu'],
            'id_sensor' => $row['id_sensor']
        ];
    }
    
}
echo $jumlah;
    echo $output;
?>