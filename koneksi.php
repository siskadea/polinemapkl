<?php
$koneksi = new mysqli(
	"localhost",
	"root",
	"",
	"arduino_polinema");

if ($koneksi->connect_errno) {
    echo "Failed to connect to MySQL: " . $koneksi->connect_error;
    exit();
  }
  
?>