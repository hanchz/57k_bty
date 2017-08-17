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

    <ul class="nav nav-tabs" role="tablist" >
        <li role="presentation" class="active zj_nav33"  id="tab1"><a href="#today" aria-controls="today" role="tab" data-toggle="tab">手机注册</a></li>
        <li role="presentation" class="zj_nav33"  id="tab2"><a href="#week" aria-controls="week" role="tab" data-toggle="tab">用户名注册</a></li>
    </ul>

    <div class="tab-content">
        <div role="tabpanel" class="tab-pane active" id="today">
        


<div class="row" style="text-align:center; margin-top:40px;">
	<img src="<?php //echo base_url()?>/images/57kcom.png" class="img-responsive center-block">
</div>
    <form action="" onsubmit="//return checkreg()"  method="post" name="form" id="form"> <!--http://localhost:8080/test/index.php/reg/reg_user-->
	<div class="row" style="margin-top:50px; padding:0 50px; ">

    <ul class="list-unstyled" >

    <li style="height:35px;border-bottom:1px solid #FFF;margin-top:20px;">
    <div class="col-md-1 col-sm-1 col-xs-1" >
    <span class="glyphicon glyphicon-phone" style="color:#fff; margin-top:10px;"></span>
    </div>
    <div class="col-md-10 col-sm-10 col-xs-10" >
    <input type="number" class="form-control input-group-sm zj_input" id="tel" name="tel" placeholder="输入手机号">
    </div>
    </li>
    
    <li style="height:35px;border-bottom:1px solid #FFF; 	margin-top:20px;">
    <div class="col-md-1 col-sm-1 col-xs-1" >
    <span class="glyphicon glyphicon-lock" style="color:#fff; margin-top:10px;"></span>
    </div>
    <div class="col-md-10 col-sm-10 col-xs-10" >
    <input type="password" class="form-control input-group-sm zj_input" id="password" name="password" placeholder="输入密码">
    </div>
    </li>

        <li style="height:35px;border-bottom:1px solid #FFF; 	margin-top:20px;">
            <div class="col-md-1 col-sm-1 col-xs-1" >
                <span class="glyphicon glyphicon-lock" style="color:#fff; margin-top:10px;"></span>
            </div>
            <div class="col-md-10 col-sm-10 col-xs-10" >
                <input type="password" class="form-control input-group-sm zj_input" id="password1" name="password1" placeholder="确认密码">
            </div>
        </li>
        
       
    
    
    <li style="height:35px;border-bottom:1px solid #FFF;margin-top:20px;">
    <div class="col-md-1 col-sm-1 col-xs-1" >
    <span class="glyphicon glyphicon-barcode" style="color:#fff; margin-top:10px;"></span>
    </div>
    <!--<div class="row">
    <input type="number" class="form-control input-group-sm zj_input" id="telcode" name="telcode" placeholder="输入验证码">
    
    <input type="submit" class="btn" name="submit" onclick="alert('ok')" value="获取验证码">
		</div>-->
   
   		 <div class="col-md-10 col-sm-10 col-xs-10" >
                <div class="input-group">
                    <input type="text" class="form-control  zj_input" style=" width: 100%" id="telcode" name="telcode" placeholder="输入验证码" value="">
                    <span class="input-group-btn">
                        <button class="btn btn-default" type="button" onclick="getcode()" id="btn_code">获取验证码</button>
                    </span>
                </div><!-- /input-group -->
            </div><!-- /.col-lg-6 -->
   
    </li>
    
	</ul>
    
    <div class="row" style="margin-top:60px; ">
        <input  class="btn btn-default btn-lg btn-block zj_btn"   onclick="checkreg()" value="注册">
    </div>
    </form>
    <div class="row" style="margin-top:20px; color:#FFF;">
    	<div class="col-md-4 col-sm-4 col-xs-4"  style="float:left; width:auto">
        <a href="fpwd">忘记密码</a>
        </div>
        
        <div class="col-md-3 col-sm-3 col-xs-3"  style="float:right; width:auto">
        <a href="#" style="margin-left:25px;">注册</a>
        </div>
    </div>
    
		</div>
		</div>
		
		<div role="tabpanel" class="tab-pane" id="week"><!--tab222222222-->
		
		<div class="row" style="text-align:center; margin-top:40px;">
	<img src="<?php //echo base_url()?>/images/57kcom.png" class="img-responsive center-block">
</div>
    <form action="" onsubmit="//return checkreg()"  method="post" name="form1" id="form1"> <!--http://localhost:8080/test/index.php/reg/reg_user-->
	<div class="row" style="margin-top:50px; padding:0 50px; ">

    <ul class="list-unstyled" >
  	<li style="height:35px;border-bottom:1px solid #FFF;margin-top:20px;">
    <div class="col-md-1 col-sm-1 col-xs-1" >
    <span class="glyphicon glyphicon-user" style="color:#fff; margin-top:10px;"></span>
    </div>
    <div class="col-md-10 col-sm-10 col-xs-10" >
    <input type="text" class="form-control input-group-sm zj_input" id="username" name="username" placeholder="输入用户名">
    </div>
    </li>
    
    <li style="height:35px;border-bottom:1px solid #FFF; 	margin-top:20px;">
    <div class="col-md-1 col-sm-1 col-xs-1" >
    <span class="glyphicon glyphicon-lock" style="color:#fff; margin-top:10px;"></span>
    </div>
    <div class="col-md-10 col-sm-10 col-xs-10" >
    <input type="password" class="form-control input-group-sm zj_input" id="password2" name="password2" placeholder="输入密码">
    </div>
    </li>

        <li style="height:35px;border-bottom:1px solid #FFF; 	margin-top:20px;">
            <div class="col-md-1 col-sm-1 col-xs-1" >
                <span class="glyphicon glyphicon-lock" style="color:#fff; margin-top:10px;"></span>
            </div>
            <div class="col-md-10 col-sm-10 col-xs-10" >
                <input type="password" class="form-control input-group-sm zj_input" id="password3" name="password3" placeholder="确认密码">
            </div>
        </li>
        
       
    
    
    <li style="height:35px;border-bottom:1px solid #FFF;margin-top:20px;">
    <div class="col-md-1 col-sm-1 col-xs-1" >
    <span class="glyphicon glyphicon-barcode" style="color:#fff; margin-top:10px;"></span>
    </div>
    <!--<div class="row">
    <input type="number" class="form-control input-group-sm zj_input" id="telcode" name="telcode" placeholder="输入验证码">
    
    <input type="submit" class="btn" name="submit" onclick="alert('ok')" value="获取验证码">
		</div>-->
   
  		 
  		 
   		 <div class="col-md-10 col-sm-10 col-xs-10" >
                <div class="input-group">
                    <input type="text" class="form-control  zj_input" style=" width: 100%" id="code_input" name="code_input" placeholder="输入验证码" value="">
                    <span class="input-group-btn" id="v_container">
                        <!--<button class="btn btn-default" type="button"  id="my_button">验证</button>-->
                    </span>
                </div><!-- /input-group -->
            </div><!-- /.col-lg-6 -->
   
    </li>
    
	</ul>
    
    <div class="row" style="margin-top:60px; ">
        <input  class="btn btn-default btn-lg btn-block zj_btn"   id="my_button" value="注册">
    </div>
    </form>
    <div class="row" style="margin-top:20px; color:#FFF;">
    	<div class="col-md-4 col-sm-4 col-xs-4"  style="float:left; width:auto">
        <a href="fpwd">忘记密码</a>
        </div>
        
        <div class="col-md-3 col-sm-3 col-xs-3"  style="float:right; width:auto">
        <a href="#" style="margin-left:25px;">注册</a>
        </div>
    </div>
		
		
		
		
		
		</div><!--tab22222222222222-->
		
  </div>  
  
	</div>  
  <div class="row" style="margin-top:100%;"></div>
</div>
<script language="javascript">
		var wait=60;
function time(o) {
	//alert("ok");
	var btn_code=document.getElementById("btn_code");
        if (wait == 0) {
            o.removeAttribute("disabled");            
            btn_code.innerHTML="获取验证码";
            wait = 60;
        } else {
            o.setAttribute("disabled", true);
            btn_code.innerHTML="重新发送(" + wait + ")";
            wait--;
            setTimeout(function() {
                time(o)
            },
            1000)
        }
    }
	
	document.getElementById("btn_code").onclick=function()
	{

		var tel=document.getElementById("tel").value;
		var btn_code=document.getElementById("btn_code");
		//alert(tel);
		if(validatemobile(tel))
		{
			time(this);
			var url='get_code';
		$.get(
            url,
            {tel:tel},
            function(data){

            });
			
			
		}else{alert("请检查手机号");}
	}
	
		
//验证手机号是否正确	
function validatemobile(mobile) 
   { 
       if(mobile.length==0) 
       { 
          alert('请输入手机号码！'); 
          return false; 
       }     
       if(mobile.length!=11) 
       { 
           alert('请输入有效的手机号码！'); 
           return false; 
       } 
        
       var myreg = /^(((13[0-9]{1})|(15[0-9]{1})|(18[0-9]{1}))+\d{8})$/; 
       if(!myreg.test(mobile)) 
       { 
           alert('请输入有效的手机号码！'); 
           return false; 
       }else{return true;} 
   } 
</script>
<script language="JavaScript">
    function checkreg()
    {
        var password=document.getElementById("password").value;
        var password1=document.getElementById("password1").value;
		var tel=document.getElementById("tel").value;
		var telcode=document.getElementById("telcode").value;
        //alert(telcode);
        if (password=="")
        {
            alert("请输入密码!");
            //form.password.focus();
            return false;
        }
        if (password.length<6 || password.length>15)
        {
            alert("密码长度限制在6-15位!");
            //form.password.focus();
            return false;
        }
        if(password!=password1)
        {
            alert("两次输入的密码不同!")
            //form.password.focus();
            return false;
        }
		
		
		if(validatemobile(tel))
		{
			//alert(telcode);
			//exit;
			var url='get_code/reg_code';
		$.get(
            url,
            {tel:tel,code:telcode},
            function(data){
				if(data=='error')
				{
					alert("请确认手机号");
					return false;
				}else if(data=='codeerror')
				{
					alert("验证码错误");
					return false;
				}else if(data=='timeout')
				{
					alert("验证码已超时");
					return false;
				}else if(data=="ok"){
					document.getElementById("form").action="reg/reg_user";
					document.getElementById("form").submit();
					//document.form.action="reg/reg_user";
					 //document.form.submit();
				}
			});
			
		}
		
       
    }
	


</script>

<script>
		var verifyCode = new GVerify("v_container");

		document.getElementById("my_button").onclick = function(){
			var res = verifyCode.validate(document.getElementById("code_input").value);
			if(res){
				//alert("验证正确");
				var username=document.getElementById("username").value;
				var password2=document.getElementById("password2").value;
				var password3=document.getElementById("password3").value;
				
		if (username=="")
        {
            alert("请输入您的用户名!"); 
            //form.username.focus();
            return false;
        }
        if (username.length<4 || username.length>15)
        {
            alert("用户名长度限制在4-15位!");
            //form.username.focus();
            return false;
        }
		if (password2=="")
        {
            alert("请输入密码!");
            //form.password.focus();
            return false;
        }
        if (password2.length<6 || password2.length>15)
        {
            alert("密码长度限制在6-15位!");
            //form.password.focus();
            return false;
        }
        if(password2!=password3)
        {
            alert("两次输入的密码不同!")
            //form.password.focus();
            return false;
        }
				
			document.getElementById("form1").action="reg/reg_user";
			document.getElementById("form1").submit();	
			}else{
				alert("验证码错误");
			}
		}
	</script>
</body>
</html>
