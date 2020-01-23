<?php
//filter.php  
include_once 'koneksi.php';
if (isset($_POST["date"], $_POST["keterangan"])) {
     switch ($_POST["shift"]) {
          case "":
               $output = '';
               $query = "  
               SELECT s.keterangan, s.lokasi, count(*) as jumlah 
               FROM produksi p INNER JOIN sensor s ON p.id_sensor = s.id_sensor 
               WHERE s.keterangan='" . $_POST["keterangan"] . "' 
               and date(waktu) = '" . $_POST["date"] . "'
               
          ";
               $result = mysqli_query($koneksi, $query);
               $output .= '  
               <table class="table table-bordered table-hover table-striped">
                    <tr>  
                    <th>Nama Mesin</th>           
                         <th>Lokasi</th>  
                        <th>Jumlah</th>    
                        
                    </tr>  
          ';
               if (mysqli_num_rows($result) > 0) {
                    while ($row = mysqli_fetch_array($result)) {
                         $output .= '  
                    <p>ini harian</p>
                         <tr>  
                         <td>' . $row["keterangan"] . '</td>       
                         <td>' . $row["lokasi"] . '</td>  
                              <td>' . $row["jumlah"] . '</td>  
                              
                              
                         </tr>  
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
          break;
          case "01":
               $output = '';
               $query = "  
               SELECT s.keterangan, s.lokasi, count(*) as jumlah 
               FROM produksi p INNER JOIN sensor s ON p.id_sensor = s.id_sensor 
               WHERE s.keterangan='" . $_POST["keterangan"] . "' 
               and date(waktu) = '" . $_POST["date"] . "'
               AND TIME(waktu)>='07:00:01' 
               and TIME(waktu)<='15:00:00' 
          ";
               $result = mysqli_query($koneksi, $query);
               $output .= '  
               <table class="table table-bordered table-hover table-striped">
                    <tr>  
                    <th>Nama Mesin</th>           
                         <th>Lokasi</th>  
                        <th>Jumlah</th>    
                        
                    </tr>  
          ';
               if (mysqli_num_rows($result) > 0) {
                    while ($row = mysqli_fetch_array($result)) {
                         $output .= '  
                    <p>pagi</p>
                         <tr>  
                         <td>' . $row["keterangan"] . '</td>       
                         <td>' . $row["lokasi"] . '</td>  
                              <td>' . $row["jumlah"] . '</td>  
                              
                              
                         </tr>  
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
               SELECT s.keterangan, s.lokasi, count(*) as jumlah 
               FROM produksi p INNER JOIN sensor s ON p.id_sensor = s.id_sensor 
               WHERE s.keterangan='" . $_POST["keterangan"] . "' 
               and date(waktu) = '" . $_POST["date"] . "'
               and TIME(waktu)>='15:00:01' 
               and TIME(waktu)<='23:00:00'
          ";
               $result = mysqli_query($koneksi, $query);
               $output .= '  
               <table class="table table-bordered table-hover table-striped">
                    <tr>  
                    <th>Nama Mesin</th>           
                    <th>Lokasi</th>  
                        <th>Jumlah</th>  
                        
                    </tr>  
          ';
               if (mysqli_num_rows($result) > 0) {
                    while ($row = mysqli_fetch_array($result)) {
                         $output .= ' 
                    <p>sore</p> 
                         <tr>  
                         <td>' . $row["keterangan"] . '</td>       
                         <td>' . $row["lokasi"] . '</td>  
                              <td>' . $row["jumlah"] . '</td>  
                              
                              
                         </tr>  
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
               SELECT s.keterangan, s.lokasi, count(*) as jumlah 
               FROM produksi p INNER JOIN sensor s ON p.id_sensor = s.id_sensor 
               WHERE s.keterangan='" . $_POST["keterangan"] . "'
               and waktu>='" . $_POST["date"] . " 23:00:01' 
               and '" . $_POST["date"] . " 07:00:00'

          ";
               $result = mysqli_query($koneksi, $query);
               $output .= '  
               <table class="table table-bordered table-hover table-striped">
                    <tr>  
                    <th>Nama Mesin</th>           
                         <th>Lokasi</th>  
                        <th>Jumlah</th>    
                        
                    </tr>  
          ';
               if (mysqli_num_rows($result) > 0) {
                    while ($row = mysqli_fetch_array($result)) {
                         $output .= ' 
                    <p>malam</p> 
                         <tr>  
                         <td>' . $row["keterangan"] . '</td>       
                         <td>' . $row["lokasi"] . '</td>  
                              <td>' . $row["jumlah"] . '</td>  
                              
                              
                         </tr>  
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
               echo 'salah';
     }
}
