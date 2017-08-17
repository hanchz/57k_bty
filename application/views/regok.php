<?php
session_start();
if (isset($_SESSION['username']) && !empty($_SESSION['username'])) {
    //echo "登录成功：".$_SESSION['username'];
    //var_dump($_SESSION['username']);

    //echo "<a href='indexx/logout'>点此退出</a>";
}else{
    //echo "你还没有登录，<a href='login.php'>请登录</a>";
}
$this->load->helper('url');
if(isset($error) && $error == 1)
{
    echo '<script language="JavaScript">alert("注册失败")</script>';
}

?>
<!DOCTYPE html>
<html lang="zh-CN">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <script src="https://cdn.bootcss.com/jquery/1.12.4/jquery.min.js"></script>

<!-- 最新版本的 Bootstrap 核心 CSS 文件 -->
<!--<link rel="stylesheet" href="https://cdn.bootcss.com/bootstrap/3.3.7/css/bootstrap.min.css" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">-->

<link rel="stylesheet" href="<?php //echo base_url();?>/bootstrap-3.3.7-dist/css/bootstrap.min.css">

<!-- 最新的 Bootstrap 核心 JavaScript 文件 -->
<script src="https://cdn.bootcss.com/bootstrap/3.3.7/js/bootstrap.min.js" integrity="sha384-Tc5IQib027qvyjSMfHjOMaLkfuWVxZxUPnCJA7l2mCWNIpG9mGCD8wGNIcPD7Txa" crossorigin="anonymous"></script>
	  <script src="<?php //echo base_url();?>/bootstrap-3.3.7-dist/gVerify.js"></script>
<title>注册</title>
</head>
<style>
.zj_input {  	border:0px;BACKGROUND-COLOR: transparent;COLOR: #ffffff;color:#fff; border:none; }
.zj_btn{
  width: 100%;
  height: 100%;
  text-align: center;
  padding: 6px 0;
  font-size: 12px;
  line-height: 1.428571429;
  border-radius: 15px;
  color:#F60;
}
	
	.zj_yzm_btn
	{
		text-align: center;
  padding: 6px 0;
  line-height: 1.428571429;
  border-radius: 5px;
  color:#F60;
	}	
.zj_nav33{width:50%;text-align:center; font-size: 1.5rem;font-weight: bold; }
a{ color:#FFF; border-bottom:1px solid #FFF;}
a:link,.listmain a:visited{color:#FFF; text-decoration:none;}
a:hover{color:#FFF;}
</style>
<body  style="background-size:100% 50%;   background: -webkit-linear-gradient(left top, #ff9c72 , #ff6529);
  background: -o-linear-gradient(bottom right, #ff9c72, #ff6529);
  background: -moz-linear-gradient(bottom right, #ff9c72, #ff6529);
  background: linear-gradient(to bottom right, #ff9c72 , #ff6529);  background-size:100% 100%; ">


<div class="container-fluid">

	<div class="row" style="text-align:center; margin-top:40px; ">
	<img src="<?php //echo base_url()?>/images/57kcom.png" class="img-responsive center-block">
	</div>


     <div class="row" style="color: #fff; font-size: 1.5rem; font-weight: bold;text-align:center; margin-top: 20px;">
     	恭喜您，注册成功！
     </div>  
     
     <div class="row" style="color: #fff; font-size: 1rem; font-weight: bold;text-align:center; margin-top: 90px;">
     	点击“完成”或3秒后自动跳转至“我的”界面
     </div> 
    
    <div class="row" style="margin-top:10px; margin-bottom: 150px;text-align:center; margin-left: 10% ">
        <input  class="btn btn-default btn-lg btn-block zj_btn" style="width: 85%;" value="完成" onClick="gouser()">
    </div>
  

</div>

<div class="row" style="margin-top: 150px;"></div>

<script language="javascript">
	function gouser()
	{
		window.location.href="user";
	}
	setInterval('gouser()','3000');
</script>


</body>
</html>
