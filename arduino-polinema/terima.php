<?php
include_once 'koneksi.php';
date_default_timezone_set("Asia/Jakarta");

    $id_sensor      = $_POST['id_sensor'];
    $waktu          = date('Y-m-d H:i:s');

    $insert = $koneksi->query("INSERT INTO produksi SET id_sensor='$id_sensor', waktu='$waktu'");

    if ($insert) {
        echo "Sukses insert data";
    }
?>