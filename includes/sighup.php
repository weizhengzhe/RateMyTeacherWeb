<?php
  $dbServername = "localhost";
$dbUsername = "root";
$dbPassword = "";
$dbName= "sandt";

$conn= mysqli_connect($dbServername, $dbUsername ,$dbPassword, $dbName); 
   
  $userText= $_POST['commentInput'];
  $teacherID= $_POST['submit'];

   $sql = "INSERT INTO users (userText) VALUES ('$userText');"; 
   mysqli_query($conn,$sql);

   



 $sql = "INSERT INTO teacherindividualcomment (teacherIdentifier,teacher_comment) VALUES (N'$teacherID', N'$userText');";
  mysqli_query($conn,$sql);
?>


<form  action="../displayTeacherRating.php" id="form1" method="POST">

<input type="text" name="teachName" value="<?php
  $dbServername = "localhost";
$dbUsername = "root";
$dbPassword = "";
$dbName= "sandt";

$conn= mysqli_connect($dbServername, $dbUsername ,$dbPassword, $dbName); 
   
  $userText= $_POST['commentInput'];
  $teacherID= $_POST['submit'];
echo $teacherID; ?>"></text></form>


  <?php
echo "<script type=\"text/javascript\"> 
                window.onload=function(){
                    document.forms['form1'].submit();
                }
       </script>";
?>





