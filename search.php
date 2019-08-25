 <?php  
      


 $connect = mysqli_connect("localhost", "root", "", "sandt");  
 mysqli_set_charset($connect,'utf8');
 if(isset($_POST["query"]))  
 {  
      $output = '';  
      $query = "SELECT DISTINCT school_name FROM schoolandteacher WHERE school_name LIKE N'%".$_POST["query"]."%'";  
      $result = mysqli_query($connect, $query);  
      

      $output = '<ul>';  
      if(mysqli_num_rows($result) > 0)  
      {  
           while($row = mysqli_fetch_array($result))  
           {  

                $output .= '<li>'.$row["school_name"].'</li>';  
               

           }  
      }  
      else  
      {  
           $output .= '<li>Country Not Found</li>';  
      }  
      $output .= '</ul>';  
      echo $output;  
 }  
 ?>  