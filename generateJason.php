<?php

function get_data(){
$dbServername = "localhost";
$dbUsername = "root";
$dbPassword = "";
$dbName= "sandt";

$conn= mysqli_connect($dbServername, $dbUsername ,$dbPassword, $dbName); 
 mysqli_set_charset($conn,'utf8');
 

 $userText= $_POST['searchBox'];
 echo $userText;


$query= "SELECT * FROM schoolandteacher WHERE school_name=N'$userText'";


     $result = mysqli_query($conn,$query);
     $employee_data = array();
     while ($row = mysqli_fetch_array($result)){
              $employee_data[]= array(
              
  				'teacher_name' => $row["teacher_name"],


              );

     }

return json_encode($employee_data);
}
$file_name = 'teacherList.json';


     	if(file_put_contents($file_name, get_data())){
     		echo file_name. 'file created';
     	}
     	else{

     		echo 'There is some error ';
     	}



header('Location: ../expo.php');
