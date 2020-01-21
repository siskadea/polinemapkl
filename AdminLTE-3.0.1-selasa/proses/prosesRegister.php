<?php
include_once '../koneksi.php';
$uname=$_POST["uname"];
$pass=$_POST["pass"];
$level=$_POST["level"];


$query= "insert into lat_user(uname,pass,level) values ('$uname','$pass','$level')";

if(mysqli_query($koneksi,$query)){
    header("location: ../index.php");
}else{
    echo "gagal";
}
?>