<?php  
 //filter.php  
 include_once '../koneksi.php';
 if(isset($_POST["date"], $_POST["keterangan"]))  
 {  
      
      $output = '';  
      $query = "  
           SELECT s.keterangan, s.lokasi, count(*) as jumlah 
           FROM produksi p INNER JOIN sensor s ON p.id_sensor = s.id_sensor 
           WHERE s.keterangan='" . $_POST["keterangan"] . "' 
           and date(waktu) = '".$_POST["date"]."'
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