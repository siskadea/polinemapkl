<?php
    include_once '../koneksi.php';
    $id = $_GET["id"];
    $query = "DELETE FROM lat_user WHERE id_user=$id";
    if(mysqli_query($koneksi, $query)){
        header("location: ../userpass.php");
    }else{
        echo "Gagal";
    }
?>