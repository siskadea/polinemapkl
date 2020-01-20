<!DOCTYPE html>
<html>

<head>
    <title>MENAMPILKAN DATA DARI DATABASE SESUAI TANGGAL DENGAN PHP - WWW.MALASNGODING.COM</title>
</head>

<body>

    <center>

        <h2>MENAMPILKAN DATA DARI DATABASE SESUAI TANGGAL DENGAN PHP<br /><a href="https://www.malasngoding.com">WWW.MALASNGODING.COM</a></h2>


        <?php
        include 'koneksi.php';
        ?>

        <br /><br /><br />

        <form method="get">
            <label>PILIH TANGGAL</label>
            <input type="date" name="tanggal">
            <input type="submit" value="FILTER">
        </form>

        <br /> <br />

        <table border="1">
            <tr>
                <th>
                    Nama Sensor
                </th>
                <th>
                    Lokasi Sensor
                </th>
                <th>
                    Jumlah
                </th>
            </tr>
            <?php
            $no = 1;

            if (isset($_GET['tanggal'])) {
                $tgl = $_GET['tanggal'];
                $sql = mysqli_query($koneksi, "SELECT s.keterangan, s.lokasi, count(*) as jumlah 
                FROM produksi p INNER JOIN sensor s ON p.id_sensor = s.id_sensor where waktu='$tgl'");
            } else {
                $sql = mysqli_query($koneksi, "SELECT s.keterangan, s.lokasi, count(*) as jumlah 
                FROM produksi p INNER JOIN sensor s ON p.id_sensor = s.id_sensor");
            }

            while ($data = mysqli_fetch_array($sql)) {
            ?>
                <tr>
                    <td><?php echo $data['keterangan']; ?></td>
                    <td><?php echo $data['lokasi']; ?></td>
                    <td><?php echo $data['jumlah']; ?></td>
                </tr>
            <?php
            }
            ?>
        </table>

    </center>
</body>

</html>