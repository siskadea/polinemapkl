<?php  
 //filter.php  
 if(isset($_GET["date"]))  
 {  
      $connect = mysqli_connect("localhost", "root", "", "polinema_arduino");  
      $output = '';  
      $query = "  
           SELECT s.id_sensor, s.lokasi, s.keterangan, count(*) as jumlah 
           FROM produksi p INNER JOIN sensor s ON p.id_sensor = s.id_sensor 
           WHERE waktu = '".$_GET["date"]."'
      ";  
      $result = mysqli_query($connect, $query);  
      $output .= '  
           <table class="table table-bordered table-hover table-striped">
                <tr>  
                    <th>ID SENSOR</th>  
                    <th>LOKASI</th>  
                    <th>JUMLAH</th>  
                    <th>KETERANGAN</th>       
                </tr>  
      ';  
      if(mysqli_num_rows($result) > 0)  
      {  
           while($row = mysqli_fetch_array($result))  
           {  
                $output .= '  
                     <tr>  
                          <td>'. $row["id_sensor"] .'</td>  
                          <td>'. $row["lokasi"] .'</td>  
                          <td>'. $row["jumlah"] .'</td>  
                          <td>'. $row["keterangan"] .'</td>  
                          
                     </tr>  
                ';  
           }  
      }  
      else  
      {  
           $output .= '  
                <tr>  
                     <td colspan="5">No Order Found</td>  
                </tr>  
           ';  
      }  
      $output .= '</table>';  
      echo $output;  
 }  
 ?>