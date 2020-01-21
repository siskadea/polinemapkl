<?php
include_once '../koneksi.php';
session_start();
$error='';
if(!empty($_POST["uname"]) || !empty($_POST["pass"])){
    $username=$_POST["uname"];
    $password=$_POST["pass"];

    $query="SELECT*from lat_user where uname='$username' and pass='$password'";
    $result=mysqli_query($koneksi,$query);

    if(mysqli_num_rows($result)==1){
        $row=mysqli_fetch_assoc($result);
        $level=$row["level"];

        if($level==1){
            $_SESSION["uname"]=$username;
            $_SESSION["level"]=$level;
            header("Location: ../index1.php");
        }else{
            $_SESSION["uname"]=$username;
            $_SESSION["level"]=$level;
            header("Location: ../indexUser.php");
        }
    }else{
        $error=urlencode("Levelnya Salah!");
        header("Location: ../index.php?pesan=$error");
    }
    mysqli_close($koneksi);
}else{
    echo "<script>alert('Username & Password Anda Salah!')</script>";
    $error=urlencode("username atau password kosong!");
    header("Location: ../index.php?pesan=$error");
    die();
}
?>