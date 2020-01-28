<?php
$koneksi = new mysqli(
	"localhost",
	"polinema_siskaasri",
	"Polinema_2020",
	"polinema2020_arduino");

if ($koneksi->connect_errno) {
    echo "Failed to connect to MySQL: " . $koneksi->connect_error;
    exit();
  }
  
?>