<?php
session_start();
if (isset($_SESSION['username']) && !empty($_SESSION['username'])) {
    //echo "登录成功：".$_SESSION['username'];
    //var_dump($_SESSION['uid']);
    $uid=$_SESSION['uid'];
    $username=$_SESSION['username'];
    //echo "<a href='indexx/logout'>点此退出</a>";
}else{
    //echo "你还没有登录，<a href='login.php'>请登录</a>";
}
$this->load->helper('url');
?>

<!DOCTYPE html>
<html lang="zh-CN">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">


<!-- 最新版本的 Bootstrap 核心 CSS 文件 -->
<link rel="stylesheet" href="https://cdn.bootcss.com/bootstrap/3.3.7/css/bootstrap.min.css" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">



<!-- 最新的 Bootstrap 核心 JavaScript 文件 -->
<script src="https://cdn.bootcss.com/bootstrap/3.3.7/js/bootstrap.min.js" integrity="sha384-Tc5IQib027qvyjSMfHjOMaLkfuWVxZxUPnCJA7l2mCWNIpG9mGCD8wGNIcPD7Txa" crossorigin="anonymous"></script>
<title>登录</title>
</head>
<style>

</style>

<body  style=" ">
<div class="container" style=" background-size:100% 50%;   background: -webkit-linear-gradient(left top, #ff9c72 , #ff6529); 
  background: -o-linear-gradient(bottom right, #ff9c72, #ff6529);
  background: -moz-linear-gradient(bottom right, #ff9c72, #ff6529);
  background: linear-gradient(to bottom right, #ff9c72 , #ff6529); " >
  <div style="width:100%; height:220px;">
          <figure style="width: 120px;height: 120px; padding:0 35%; padding-top:10%">  
                    <figcaption></figcaption>  
                    <img class="img-circle" src="http://m.57k.com/images/gamelogo.png" alt="头像" style="width:120px; height:120px;"/>  
         </figure>  
  </div>
  
  <h2 style=" width:100%; text-align:center; color:#FFF;"><?php echo $username?></h2>
<H6 style=" width:100%; text-align:center; color:#FFF;"><?php 
if (isset($_SESSION['username']) && !empty($_SESSION['username'])) {
    //echo "登录成功：".$_SESSION['username'];
    //var_dump($_SESSION['uid']);
    $uid=$_SESSION['uid'];
    $username=$_SESSION['username'];
    echo "<a href='indexx/logout'>点此退出</a>";
}
?></H6>
    
</div>


</body>
</html>
