<?php
$this->load->helper('url');
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
<link rel="stylesheet" href="/bootstrap-3.3.7-dist/css/bootstrap.min.css">

<!-- 最新的 Bootstrap 核心 JavaScript 文件 -->
<script src="https://cdn.bootcss.com/bootstrap/3.3.7/js/bootstrap.min.js" integrity="sha384-Tc5IQib027qvyjSMfHjOMaLkfuWVxZxUPnCJA7l2mCWNIpG9mGCD8wGNIcPD7Txa" crossorigin="anonymous"></script>
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

a{ color:#FFF; border-bottom:1px solid #FFF;}
a:link,.listmain a:visited{color:#FFF; text-decoration:none;}
a:hover{color:#FFF;}
</style>
<body  style="background:url(/images/login_bg.jpg) no-repeat; background-size:100% 100%; ">
<div class="container" >
	<div class="row" style="margin-top:220px; padding:0 50px; ">

    <ul class="list-unstyled" >
  	<li style="height:35px;border-bottom:1px solid #FFF;">
    <div class="col-md-1 col-sm-1 col-xs-1" >
    <span class="glyphicon glyphicon-user" style="color:#fff; margin-top:10px;"></span>
    </div>
    <div class="col-md-10 col-sm-10 col-xs-10" >
    <input type="text" class="form-control input-group-sm zj_input" id="username" placeholder="输入用户名">
    </div>
    </li>
    
    <li style="height:35px;border-bottom:1px solid #FFF;margin-top:20px;">
    <div class="col-md-1 col-sm-1 col-xs-1" >
    <span class="glyphicon glyphicon-phone" style="color:#fff; margin-top:10px;"></span>
    </div>
    <div class="col-md-10 col-sm-10 col-xs-10" >
    <input type="number" class="form-control input-group-sm zj_input" id="tel" placeholder="输入手机号">
    </div>
    </li>
    
    <li style="height:35px;border-bottom:1px solid #FFF; 	margin-top:20px;">
    <div class="col-md-1 col-sm-1 col-xs-1" >
    <span class="glyphicon glyphicon-lock" style="color:#fff; margin-top:10px;"></span>
    </div>
    <div class="col-md-10 col-sm-10 col-xs-10" >
    <input type="password" class="form-control input-group-sm zj_input" id="password" placeholder="输入密码">
    </div>
    </li>
    
	</ul>
    
    <div class="row" style="margin-top:60px;">
      <button type="button" class="btn btn-default btn-lg btn-block zj_btn">登录</button>
    </div>
    
    <div class="row" style="margin-top:20px; color:#FFF;">
    	<div class="col-md-4 col-sm-4 col-xs-4"  style="float:left;">
        <a href="#">忘记密码</a>
        </div>
        
        <div class="col-md-3 col-sm-3 col-xs-3"  style="float:right; ">
        <a href="#" style="margin-left:25px;">注册</a>
        </div>
    </div>
    
    
  </div>  
  <div class="row" style="margin-top:100%;"></div>
</div>


</body>
</html>
