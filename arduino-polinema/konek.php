<?php
$koneksi = new mysqli(
define('HOST', 'localhost'),
define('USER', 'root'),
define('PASSWORD', ''),
define('DATABASE' , 'polinema_arduino')
);

$mysqli = new mysqli(HOST,USER,PASSWORD, DATABASE);
?>