<?php  
 //filter.php  
 if(isset($_POST["from_date"], $_POST["to_date"]))  
 {  
      $connect = mysqli_connect("localhost", "root", "", "polinema_arduino");  
      $output = '';  
      $query = "  
           SELECT s.id_sensor, s.lokasi, s.keterangan, count(*) as jumlah 
           FROM produksi p INNER JOIN sensor s ON p.id_sensor = s.id_sensor 
           WHERE waktu BETWEEN '".$_POST["from_date"]."' AND '".$_POST["to_date"]."'  
      ";  
      $result = mysqli_query($connect, $query);  
      $output .= '  
           <table class="table table-hover table-striped">
                <thead> 
                <tr>
                    <th>Nama Mesin</th>
                    <th>Lokasi</th>  
                    <th>Jumlah</th>         
                </tr>    
                </thead>  
      ';  
      if(mysqli_num_rows($result) > 0)  
      {  
           while($row = mysqli_fetch_array($result))  
           {  
                $output .= '  
                     <tbody>
                     <tr>  
                        <td>'. $row["keterangan"] .'</td>
                        <td>'. $row["lokasi"] .'</td>  
                        <td>'. $row["jumlah"] .'</td>    
                          
                     </tr>  
                     </tbody>
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