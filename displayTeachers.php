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
    .teaDemo {
        margin: 8px;
        padding:50px;
        background-color: orange;
        font-size: 22pt;
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
            <li><a href="about.html">评价互动</a></li>
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


<?php  
      


 $connect = mysqli_connect("localhost", "root", "", "sandt");  
 mysqli_set_charset($connect,'utf8');

 $userText= $_POST['searchBox'];


 if(isset($_POST["searchBox"]))  
 {  
      $output = '';  
      $query = "SELECT * FROM schoolandteacher WHERE school_name=N'$userText'"; 
      $result = mysqli_query($connect, $query);  
      

       
       $output = '<form action="displayTeacherRating.php" method="POST">';  


      if(mysqli_num_rows($result) > 0)  
      {  
           while($row = mysqli_fetch_array($result))  
           {  

              $displayButtonValue=$row["teacher_name"];

                $output .= '<button class="teaDemo" name="teachName" value="'.$row["teacherIdentifier"].'">'.$row["teacher_name"].'</button>';
               

           }  
      }  
      else  
      {  
           $output .= '<li>Country Not Found</li>';  
      }  
                    echo $output;  
 }  
 ?>  
</form>
</body>
</html>
