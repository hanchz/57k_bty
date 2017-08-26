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
	echo '<script language="javascript">window.location.href="login_user";</script>';

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
<title>用户中心</title>
</head>
<style>

</style>

<body  style=" ">


<!--<div class="container">
    <div class="row" style="padding:10px 0px;">
        <div class="col-md-2 col-sm-2 col-xs-2"><a href="indexx"><img src="/images/57klogo.jpg" class="img-responsive" style="margin-left:10px;" ></a></div>
        <div class="col-md-8 col-sm-8 col-xs-8">
            <form action="" method="get">
                <div class="input-group">
                     <span class="input-group-btn">

      			     <img src="/images/sou.png" class="btn btn-default" style="border-bottom-left-radius:75px; border-top-left-radius:75px; background:#e8e8e8;">

                     </span>
                    <input type="text" class="form-control" id="name" placeholder="" style="background:#e8e8e8; border-bottom-right-radius:75px; border-top-right-radius:75px;">

                </div>
            </form>
        </div>
        <?php
        if (isset($uid) && !empty($uid)) {
            ?>
            <div class="col-md-2 col-sm-2 col-xs-2"><a href="user"><img src="/images/user.jpg" class="img-responsive" style="margin-left:-10px;"></a></div>

            <?php

        }else{
            ?>
            <div class="col-md-2 col-sm-2 col-xs-2"><a href="login_user"><img src="/images/user.jpg" class="img-responsive" style="margin-left:-10px;"></a></div>
            <?php
        }
        ?>
    </div>
</div>-->

<?php

include ('sou_old.php');
?>

<div class="container" style=" background-size:100% 50%;   background: -webkit-linear-gradient(left top, #ff9c72 , #ff6529); 
  background: -o-linear-gradient(bottom right, #ff9c72, #ff6529);
  background: -moz-linear-gradient(bottom right, #ff9c72, #ff6529);
  background: linear-gradient(to bottom right, #ff9c72 , #ff6529); " >
  <div style="width:100%; height:150px;">
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



<div>
    <a href="usergame" ><img src="/images/cz.jpg" style=" width: 50%; float:left;" ></a>
    <a href="user_info"><img src="/images/gr.jpg"  style=" width: 50%; float:left;"></a>
    <a href="user_safe"> <img src="/images/aq.jpg" style=" width: 50%; float:left;" ></a>
    <a href="user_gifts"> <img src="/images/lb.jpg"  style=" width: 50%; float:left;"></a>
</div>


</body>
</html>
