<?php
$koneksi = new mysqli(
	"localhost",
	"root",
	"",
	"polinema_arduino");

if ($koneksi->connect_errno) {
    echo "Failed to connect to MySQL: " . $koneksi->connect_error;
    exit();
  }
  
?>