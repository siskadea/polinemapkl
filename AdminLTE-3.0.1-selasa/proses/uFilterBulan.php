<?php
include_once '../koneksi.php';
if (isset($_POST["month"], $_POST["year"], $_POST["keterangan"])) {
      switch($_POST["shift"]){
            case "":
            $output = '';
            $query = "  
                  SELECT s.id_sensor, s.lokasi, s.keterangan, count(*) as jumlah 
                  FROM produksi p INNER JOIN sensor s ON p.id_sensor = s.id_sensor 
                  WHERE s.keterangan='" . $_POST["keterangan"] . "' 
                  and month(waktu) = '" . $_POST["month"] . "' 
                  AND year(waktu) = '" . $_POST["year"] . "' 
                  ";
            $result = mysqli_query($koneksi, $query);
            $output .= '  
                  <table class="table table-bordered table-hover table-striped">
                        <thead>
                        <tr>  
                              <th width=30%>Nama Mesin</th>           
                              <th>Lokasi</th>  
                              <th>Jumlah</th>  
                        </tr>  
                        </thead>
                  ';
            if (mysqli_num_rows($result) > 0) {
                  while ($row = mysqli_fetch_array($result)) {
                        $output .= '  
                              <tbody> 
                              <tr>  
                                    <td>' . $row["keterangan"] . '</td>  
                                    <td>' . $row["lokasi"] . '</td>  
                                    <td>' . $row["jumlah"] . '</td>  
                                    
                                    
                              </tr>
                              </tbody>  
                        ';
                  }
            } else {
                  $output .= '  
                        <tr>  
                              <td colspan="5">No Order Found</td>  
                        </tr>  
                  ';
            }
            $output .= '</table>';
            echo $output;

            break;
            case "01":
            $output = '';
            $query = "  
                  SELECT s.id_sensor, s.lokasi, s.keterangan, count(*) as jumlah 
                  FROM produksi p INNER JOIN sensor s ON p.id_sensor = s.id_sensor 
                  WHERE s.keterangan='" . $_POST["keterangan"] . "' 
                  and month(waktu) = '" . $_POST["month"] . "' 
                  AND year(waktu) = '" . $_POST["year"] . "' 
                  AND TIME(waktu)>='07:00:00'
                  AND TIME(waktu)<='15:00:00' 
                  ";
            $result = mysqli_query($koneksi, $query);
            $output .= '  
                  <table class="table table-bordered table-hover table-striped">
                        <thead>
                        <tr>  
                              <th width=30%>Nama Mesin</th>           
                              <th>Lokasi</th>  
                              <th>Jumlah</th>  
                        </tr>  
                        </thead>
                  ';
            if (mysqli_num_rows($result) > 0) {
                  while ($row = mysqli_fetch_array($result)) {
                        $output .= '  
                              <tbody> 
                              <tr>  
                                    <td>' . $row["keterangan"] . '</td>  
                                    <td>' . $row["lokasi"] . '</td>  
                                    <td>' . $row["jumlah"] . '</td>  
                                    
                                    
                              </tr>
                              </tbody>  
                        ';
                  }
            } else {
                  $output .= '  
                        <tr>  
                              <td colspan="5">No Order Found</td>  
                        </tr>  
                  ';
            }
            $output .= '</table>';
            echo $output;

            break;
            case "02":
                  $output = '';
            $query = "  
                  SELECT s.id_sensor, s.lokasi, s.keterangan, count(*) as jumlah 
                  FROM produksi p INNER JOIN sensor s ON p.id_sensor = s.id_sensor 
                  WHERE s.keterangan='" . $_POST["keterangan"] . "' 
                  and month(waktu) = '" . $_POST["month"] . "' 
                  AND year(waktu) = '" . $_POST["year"] . "' 
                  AND TIME(waktu)>='15:00:01'
                  AND TIME(waktu)<='23:00:00' 
                  ";
            $result = mysqli_query($koneksi, $query);
            $output .= '  
                  <table class="table table-bordered table-hover table-striped">
                        <thead>
                        <tr>  
                              <th width=30%>Nama Mesin</th>           
                              <th>Lokasi</th>  
                              <th>Jumlah</th>  
                        </tr>  
                        </thead>
                  ';
            if (mysqli_num_rows($result) > 0) {
                  while ($row = mysqli_fetch_array($result)) {
                        $output .= '  
                              <tbody> 
                              <tr>  
                                    <td>' . $row["keterangan"] . '</td>  
                                    <td>' . $row["lokasi"] . '</td>  
                                    <td>' . $row["jumlah"] . '</td>  
                                    
                                    
                              </tr>
                              </tbody>  
                        ';
                  }
            } else {
                  $output .= '  
                        <tr>  
                              <td colspan="5">No Order Found</td>  
                        </tr>  
                  ';
            }
            $output .= '</table>';
            echo $output;
            break;
            case "03":
                  $output = '';
            $query = "  
                  SELECT s.id_sensor, s.lokasi, s.keterangan, count(*) as jumlah 
                  FROM produksi p INNER JOIN sensor s ON p.id_sensor = s.id_sensor 
                  WHERE s.keterangan='" . $_POST["keterangan"] . "' 
                  and month(waktu) = '" . $_POST["month"] . "' 
                  AND year(waktu) = '" . $_POST["year"] . "' 
                  AND TIME(waktu)>='23:00:01'
                  AND TIME(waktu)<='15:00:00' 
                  ";
            $result = mysqli_query($koneksi, $query);
            $output .= '  
                  <table class="table table-bordered table-hover table-striped">
                        <thead>
                        <tr>  
                              <th width=30%>Nama Mesin</th>           
                              <th>Lokasi</th>  
                              <th>Jumlah</th>  
                        </tr>  
                        </thead>
                  ';
            if (mysqli_num_rows($result) > 0) {
                  while ($row = mysqli_fetch_array($result)) {
                        $output .= '  
                              <tbody> 
                              <tr>  
                                    <td>' . $row["keterangan"] . '</td>  
                                    <td>' . $row["lokasi"] . '</td>  
                                    <td>' . $row["jumlah"] . '</td>  
                                    
                                    
                              </tr>
                              </tbody>  
                        ';
                  }
            } else {
                  $output .= '  
                        <tr>  
                              <td colspan="5">No Order Found</td>  
                        </tr>  
                  ';
            }
            $output .= '</table>';
            echo $output;
            break;
            default:

      }


}