<?php  
 //filter.php  
 if(isset($_POST["from_date"], $_POST["to_date"]))  
 {  
      $connect = mysqli_connect("localhost", "root", "", "polinema_arduino");  
      $output = '';  
      $query = "  
          SELECT s.id_sensor, s.lokasi, s.keterangan, count(*) as jumlah FROM produksi p 
          INNER JOIN sensor s on p.id_sensor = s.id_sensor WHERE waktu  
          BETWEEN '".$_POST["from_date"]."' AND '".$_POST["to_date"]."'  
      ";  
      $result = mysqli_query($connect, $query);  
      $output .= '  
           <table class="table table-bordered">  
                <tr>  
                     <th width="5%">ID SENSOR</th>  
                     <th width="30%">LOKASI</th>  
                     <th width="43%">JUMLAH</th> 
                     <th width="10%">KETERANGAN</th>  
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