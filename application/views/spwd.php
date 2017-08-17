<?php


include ('top.php');
$username=$_POST['username'];
?>
<body>



<div class="container">
    <div class="row" style="padding:10px 0px; height:60px; border-bottom:1px solid #999;">
        <div class="col-md-4 col-sm-4 col-xs-4" style="padding-left:15px;"><a href="user"><div class="glyphicon glyphicon-menu-left btn-lg"></div></a></div>
        <div class="col-md-8 col-sm-8 col-xs-8" style="line-height:40px; vertical-align:middle;padding-left:40px;">
            找回密码
        </div>
    </div>
</div>



<div class="container">
<div class="row">


        
    <ul class="list-unstyled" >
    
     <li style="height:35px;border-bottom:1px solid #000; 	margin-top:20px;">
    <div class="col-md-1 col-sm-1 col-xs-1" >
    <span class="glyphicon glyphicon-lock" style="color:#000; margin-top:10px;"></span>
    </div>
    <div class="col-md-10 col-sm-10 col-xs-10" >
    <input type="password" class="form-control input-group-sm zj_input" style=" color:#000" id="password" name="password" placeholder="输入新密码">
    </div>
    </li>

        <li style="height:35px;border-bottom:1px solid #000; 	margin-top:20px;">
            <div class="col-md-1 col-sm-1 col-xs-1" >
                <span class="glyphicon glyphicon-lock" style="color:#000; margin-top:10px;"></span>
            </div>
            <div class="col-md-10 col-sm-10 col-xs-10" >
                <input type="password" class="form-control input-group-sm zj_input" style=" color:#000" id="password1" name="password1" placeholder="确认新密码">
            </div>
        </li>
        
<input type="hidden" name="username" value="<?php echo $username?>">
    
	</ul>
        

	</div>
<div class="row" style="margin-top: 30px;">
 <div class="col-md-1 col-sm-1 col-xs-1"></div>
  <div class="col-md-10 col-sm-10 col-xs-10"><a class="btn btn-danger zj_btn" style=" width:100%; background:red; margin-left:0px; margin-top: 20px; color: #fff;" onClick="spwd()" role="button">下一步</a></div>
  
 <div class="col-md-1 col-sm-1 col-xs-1"></div>
</div>

</div>
<?php
include ('bottom.php');
?>

<script language="javascript">
function spwd()
	{
		var username='<?php echo $username?>';
		var password=document.getElementById('password').value;
		var password1=document.getElementById('password1').value;
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
	
	
		//XXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXX
	alert("ok");
					//返回手机号是否正确，
					
					//通过后，跳转x下一个页面
					window.location.href="spwdok";
		
		
		
	}


	
</script>

</body>
</html>
