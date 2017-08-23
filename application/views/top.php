<?php
session_start();
//$_SESSION['username'] ='jian03j1';
//$_SESSION['uid'] ='2986257';
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
<html lang="zh-CN"><head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <!--<meta name="viewport" content="width=device-width, initial-scale=1">-->   <!--原-->
	<meta name="viewport" content="width=device-width, initial-scale=1.0, minimum-scale=1.0, maximum-scale=1.0, user-scalable=no">  <!--禁用缩放-->
    <script src="https://cdn.bootcss.com/jquery/1.12.4/jquery.min.js"></script>

    <!-- 最新版本的 Bootstrap 核心 CSS 文件 -->
    <link rel="stylesheet" href="https://cdn.bootcss.com/bootstrap/3.3.7/css/bootstrap.min.css" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">


    <!-- 最新的 Bootstrap 核心 JavaScript 文件 -->
    <script src="https://cdn.bootcss.com/bootstrap/3.3.7/js/bootstrap.min.js" integrity="sha384-Tc5IQib027qvyjSMfHjOMaLkfuWVxZxUPnCJA7l2mCWNIpG9mGCD8wGNIcPD7Txa" crossorigin="anonymous"></script>
    <title>57k游戏平台</title>
</head>

<style>

    .zj_down{border:1px solid #ff3a25; color:#ff3a25; text-align:center; font-size:9px;}
    .zj_di{ background:#FFF; margin:5px 5px; border-radius: 10px; padding:5px;  }

    .roll { width: 100%; height: auto; margin: 10px auto 0; position: relative; }
    .roll .wrap { width: 100%; height: 333px; margin: 0 auto; position: relative; overflow: hidden; }
    .roll ul { position: absolute; top: 0; left: 0; }
    .roll li { float: left; width: 200px; height: 333px; text-align: center; list-style:none; margin:5px; }
    .roll li img{ width:200px; height:333px;}

    .zj_overflow1{color:#999;overflow:hidden;text-overflow:ellipsis; width:150px;height:20px;line-height:20px;}
    .zj_overflow{overflow:hidden;text-overflow:ellipsis; width:70%;height:20px;line-height:20px;vertical-align:middle;}


    .zj_nav33{width:33%;text-align:center;}

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
	
	    /*.jindutiao{ width:60%; background: #ccc; height:5px; margin-left: -20px; margin-top: 5px; padding: 0 0;};*/

	
	.tanchukuang{ width:80%; height:50%; position:absolute; top:25%; left:10%;-webkit-border-radius: 10px; border-radius: 10px; z-index:999999999999999999;}
		.tck-top{ width:100%; height:20%; float:left;background: -webkit-linear-gradient(left top, #ff9c72 , #F00);
  background: -o-linear-gradient(bottom right, #ff9c72, #F00);
  background: -moz-linear-gradient(bottom right, #ff9c72, #F00);
  background: linear-gradient(to bottom right, #ff9c72 , #F00);  background-size:100% 100%; border-radius:10px 10px 0 0; text-align:center; line-height:60px; vertical-align:middle; font-size:25px; color:#FFF; font-weight: bold; }
  		.tck-con{width:100%; height:auto; float:left; padding:5% 5%; background:#FFF;border-radius: 0 0 10px 10px;}
			.tck-con p{ margin-bottom:10%; float:left;}
			
	.zhezhao{ width:100%; height:150%; position:absolute;top:0; left:0;filter:alpha(Opacity=80);-moz-opacity:0.5;opacity: 0.5; background:black; z-index:99999999;}		
    /*a{ color:#FFF; border-bottom:1px solid #FFF;}
    a:link,.listmain a:visited{color:#FFF; text-decoration:none;}
    a:hover{color:#FFF;}*/
	.zj_of{white-space:nowrap; overflow:hidden; text-overflow:ellipsis;  }
	.zj_fs{font-size: 0.13rem;}
	.zj_fz{font-size: 0.2rem;}
</style>