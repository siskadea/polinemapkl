<?php
include_once 'koneksi.php';
?>

<html>
<head>
<title>Counter Arduino</title>
</head>
<body>
<style>
/* Style The Dropdown Button */
.dropbtn {
  background-color: #4CAF50;
  color: white;
  padding: 16px;
  font-size: 16px;
  border: none;
  cursor: pointer;
}

/* The container <div> - needed to position the dropdown content */
.dropdown {
  position: relative;
  display: inline-block;
}

/* Dropdown Content (Hidden by Default) */
.dropdown-content {
  display: none;
  position: absolute;
  background-color: #f9f9f9;
  min-width: 160px;
  box-shadow: 0px 8px 16px 0px rgba(0,0,0,0.2);
  z-index: 1;
}

/* Links inside the dropdown */
.dropdown-content a {
  color: black;
  padding: 12px 16px;
  text-decoration: none;
  display: block;
}

/* Change color of dropdown links on hover */
.dropdown-content a:hover {background-color: #f1f1f1}

/* Show the dropdown menu on hover */
.dropdown:hover .dropdown-content {
  display: block;
}

/* Change the background color of the dropdown button when the dropdown content is shown */
.dropdown:hover .dropbtn {
  /* background-color: #3e8e41; */
}
</style>

<div class="dropdown">
  <button class="dropbtn">Dropdown</button>
  <div class="dropdown-content">
    <a href="#">Link 1</a>
    <a href="#">Link 2</a>
    <a href="#">Link 3</a>
  </div>
</div>
<?php
    $result = $koneksi->query("SELECT p.id_produksi, p.waktu, s.lokasi, s.ket FROM produksi p INNER JOIN sensor s ON p.id_sensor=s.id_sensor ORDER BY waktu ASC");
?>
<table border=1>

    <tr>
    <td>ID Sensor</td>
    <td>Lokasi</td>
    <td>Waktu</td>
    <td>Jumlah</td>
    <td>Keterangan</td>
    </tr>
    <tr>
    <!-- <td>

    </td> -->
    </tr>
</table>
<!-- <button type="button">Click Me!</button> -->
<p>

        </p>
</body>
</html>