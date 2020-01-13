<html>
<?php
include_once 'koneksi.php';
date_default_timezone_set("Asia/Jakarta");
$today = date('Y-m-d');
$yesterday = date('Y-m-d');

$result = $koneksi->query("SELECT p.id_produksi, p.waktu, s.lokasi, s.ket FROM produksi p INNER JOIN sensor s ON p.id_sensor=s.id_sensor ORDER BY waktu ASC");

$shift1 = $koneksi->query("SELECT count(*) FROM produksi WHERE TIME(waktu)>='07:00:01' and TIME(waktu)<='15:00:00' AND DATE(waktu)='$today'");
$data1 = $shift1->fetch_row();
echo $data1[0];
// var_dump($jumlah);
//echo $jumlah;
?>
<br>
<p>siang</p>
<?php
$shift2 = $koneksi->query("SELECT count(*) FROM produksi WHERE TIME(waktu)>='15:00:01' and TIME(waktu)<='23:00:00' AND DATE(waktu)='$today'");
$data2 = $shift2->fetch_row();
echo $data2[0];
?>
<br>
<p> malam </p>
<?php
// $shift3 = $koneksi->query("SELECT count(*) FROM produksi WHERE DATE_FORMAT(waktu)>='%Y-%m-%d 23:00:01' and DATE_FORMAT(waktu)<='%Y-%m-%d 07:00:00'");
// // $data3 = $shift3->fetch_row();
// echo $shift3;
?>
<br>

<?php
$shift = $koneksi->query("SELECT count(*) FROM produksi WHERE waktu>='$today 23:00:01' and '$today 07:00:00'");
$dataa = $shift->fetch_row();
echo $dataa[0];
?>
<br>
<p>harian</p>
<?php
$harian = $koneksi->query("SELECT count(*) FROM produksi WHERE DATE(waktu)='$today'");
$data4 = $harian->fetch_row();
echo $data4[0];
?>
<br>
<p></p>
<?php
$bulanan = $koneksi->query("SELECT count(*) FROM produksi WHERE MONTH(waktu) = MONTH(CURRENT_DATE())");
$data5 = $bulanan->fetch_row();
echo $data5[0];
?>
<br>

<?php
$tahunan = $koneksi->query("SELECT count(*) FROM produksi WHERE YEAR(waktu) = YEAR(CURRENT_DATE())");
$data6 = $tahunan->fetch_row();
echo $data6[0];
?>
<!-- SELECT p.id_produksi, p.waktu, s.id_sensor, s.lokasi, s.keterangan, COUNT(*) as jumlah FROM produksi p INNER JOIN sensor s ON p.id_sensor=s.id_sensor WHERE waktu>='Y-m-d 03:08:07' and waktu<='2020-01-09 03:08:11' ORDER BY waktu ASC; -->
<table border="1">
    <tr>
        <td>Pagi</td>
        <td>Siang</td>
        <td>Malam</td>
        <td>Harian</td>
        <td>Bulanan</td>
        <td>Tahunan</td>
    </tr>
    <tr>
        <td>
            <?php
            $shift1 = $koneksi->query("SELECT count(*) FROM produksi WHERE TIME(waktu)>='07:00:01' and TIME(waktu)<='15:00:00' AND DATE(waktu)='$today'");
            $data1 = $shift1->fetch_row();
            echo $data1[0];
        ?>
        </td>
        <td>
            <?php
            $shift2 = $koneksi->query("SELECT count(*) FROM produksi WHERE TIME(waktu)>='15:00:01' and TIME(waktu)<='23:00:00' AND DATE(waktu)='$today'");
            $data2 = $shift2->fetch_row();
            echo $data2[0];
            ?>
        </td>
        <td>
            <?php
            $shift = $koneksi->query("SELECT count(*) FROM produksi WHERE waktu>='$today 23:00:01' and '$today 07:00:00'");
            $dataa = $shift->fetch_row();
            echo $dataa[0];
            ?>
        </td>
        <td>
            <?php
            $harian = $koneksi->query("SELECT count(*) FROM produksi WHERE DATE(waktu)='$today'");
            $data4 = $harian->fetch_row();
            echo $data4[0];
            ?>
        </td>
        <td>
            <?php
            $bulanan = $koneksi->query("SELECT count(*) FROM produksi WHERE MONTH(waktu) = MONTH(CURRENT_DATE())");
            $data5 = $bulanan->fetch_row();
            echo $data5[0];
            ?>
        </td>
        <td>
            <?php
            $tahunan = $koneksi->query("SELECT count(*) FROM produksi WHERE YEAR(waktu) = YEAR(CURRENT_DATE())");
            $data6 = $tahunan->fetch_row();
            echo $data6[0];
            ?>
        </td>
    </tr>
</table>


</html>