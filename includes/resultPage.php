<?php
  $dbServername = "localhost";
$dbUsername = "root";
$dbPassword = "";
$dbName= "loginsystem";

$conn= mysqli_connect($dbServername, $dbUsername ,$dbPassword, $dbName); 
   
  $userText= $_POST['searchBox'];







 
     $sql= "SELECT * FROM users Where userText LIKE '%{$userText}%'";
     $result = mysqli_query($conn,$sql);
     $resultCheck= mysqli_num_rows($result);
        if($resultCheck >0 ){
          while($row= mysqli_fetch_assoc($result)){
            echo $row['userText'] . "<br>";
          }
        }

     
   ?> 




  
       
