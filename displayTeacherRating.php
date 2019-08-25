<!DOCTYPE html>
<html>
<head>

<meta charset="utf-8">
    <meta name="viewport" content="width=device-width">
    <meta name="description" content="Affordable and professional web design">
    <meta name="keywords" content="web design, affordable web design, professional web design">
    <meta name="author" content="Zhengzhe Wei">
    <title>ShiZhe | Welcome</title>
    <link rel="stylesheet" href="./css/style.css">


        <style type="text/css">
    .commentBox {
        margin: 8px;
        padding:30px;
        margin-left: 250px;
        background-color: orange;
        font-size: 14pt;
        border-radius: 10px;
    }

    .commentInputArea{
        margin: 8px;
        margin-bottom: 1px;
        padding:30px;
        background-color: pink;
        font-size: 13pt;
        border-radius: 15px;
        min-width:400px;
        max-height: 1px;
    }

    .commentSubmitButton{
         margin-top: 0px;
         margin-left: 10px;
        padding:7.5px;
        background-color:gray;
        font-size: 10pt;
        border-radius: 5px;
        color:white;
    }


.elementToFadeInAndOut {
     margin: 8px;
        padding:30px;
        
        background-color: orange;
        font-size: 14pt;
        border-radius: 10px;
    -webkit-animation: fadeinout 0.5s linear forwards;
    animation: fadeinout 0.5s linear forwards;
}

@-webkit-keyframes fadeinout {
  0% {margin-left: 0}
  0% {margin-top: 0}

  0% { opacity: 0; }
  
  70% { opacity: 0.5; }

80% {margin-left: 220px;}  
60% {margin-top: 20px;}  

  100% { opacity: 1;} 

  100% {margin-left: 250px;}
  100% {margin-top: 0px;}

  
}









    </style>
</head>



<body>
    <header>
      <div class="container">
        <div id="branding">
          <h1><span class="highlight">师</span>哲</h1>
        </div>
        <nav>
          <ul>
            <li class="current"><a href="index.html">名师空间</a></li>
            <li><a href="rating.html">评价互动</a></li>
            <li><a href="services.html">招聘信息</a></li>
            <li><a href="services.html">求职信息</a></li>
             <li><a href="services.html">私人订制</a></li>
          </ul>
        </nav>
      </div>
    </header>

    <section id="newsletter">
      <div class="container">
        <h1>您自由的选择，匿名或登录</h1>
        <form>
          <input type="text" placeholder="用户名">
          <input type="text" placeholder="密码">
          <button type="submit" class="button_1">登录</button>
          <button type="submit" class="button_1">注册</button>
        </form>

      </div>

</section>

<form action="includes/sighup.php" method="POST">
  <input type="text" name="commentInput" class="commentInputArea" placeholder="您的评论">
  <br>
  <button type="submit" class="commentSubmitButton" value="<?php  
      


 $connect = mysqli_connect("localhost", "root", "", "sandt");  
 mysqli_set_charset($connect,'utf8');

 $userText= $_POST['teachName'];
  echo $userText; ?>" name="submit">提交</button>
</form>

<?php  
      


 $connect = mysqli_connect("localhost", "root", "", "sandt");  
 mysqli_set_charset($connect,'utf8');

 $userText= $_POST['teachName'];


 if(isset($_POST["teachName"]))  
 {  
      $output = '';  
      $query = "SELECT * FROM teacherIndividualComment WHERE teacherIdentifier=N'$userText' ORDER BY teacher_id DESC"; 
      $result = mysqli_query($connect, $query);  
      

       
       $output ='';  


      if(mysqli_num_rows($result) > 0)  
      {  
           while($row = mysqli_fetch_array($result))  
           {  

              $displayButtonValue=$row["teacher_comment"];

                $output .= '<div class="elementToFadeInAndOut">'.$row["teacher_comment"].'</div>';
              
           }  
      }  
      else  
      {  
           $output .= '<li>Country Not Found</li>';  
                 }  
                    echo $output;  
 }  
 ?>  


</body>
</html>
