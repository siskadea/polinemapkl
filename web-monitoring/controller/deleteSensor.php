<?php
    include_once '../koneksi.php';
    $id = $_GET["id"];
    $query = "DELETE FROM sensor WHERE id_sensor=$id";
    if(mysqli_query($koneksi, $query)){
        header("location: ../mesin.php");
    }else{
        echo "Gagal";
    }
?>