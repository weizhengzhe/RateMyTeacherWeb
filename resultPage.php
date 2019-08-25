<?php
    include_once 'includes/database.php' ;
    ?>




<!doctype html>
<html>
  <head>
      <title> Kids' Experience </title>
      <link href="style/main.css" rel="stylesheet" type="text/css" />
  </head>

  <header>
      <h1> Kids' Experience </h1> 

       <ul>
             <li id="homeButton"> Home </li> 

          
             <li id="activateSearch"> search </li>

             
             <li id="searchEngine">
<form id="searchBox" action="resultPage.php" method="POST">
  <input type="text" name="searchBox" placeholder="search">
  <br>
  <button type="submit" name="submit">search</button>
 </form>
              </li>
                </ul>
  </header>
  <body>









        <label for="addBox"> Your search results: </label> <br>
    <!--     <input type="text" id="addBox" name=""> </br> -->
    <textarea rows="1" cols="40" id="addBox"> </textarea><br>
<p id="bedwet">
 
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

</p>

<p id="breaking"> 
<br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br>
  </p>

  
<script src="scripts/searchResultPage.js"></script>

</body>

  </html>








  
       
