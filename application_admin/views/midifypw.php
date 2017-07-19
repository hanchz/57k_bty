<?php

include ('top.php');
?>
<?php 
if (isset($resultcpw) && !empty($resultcpw)) {
//var_dump($resultcpw);
//echo $resultcpw;
	if($resultcpw=="-1")
	{
	echo '<script language="javascript">alert("旧密码错误请重新输入");
     window.history.back(-1); 
    </script>';	
	}
}

?>
<body>

<div class="container">
    <div class="row" style="padding:10px 0px; height:60px; border-bottom:1px solid #999;">
        <div class="col-md-4 col-sm-4 col-xs-4" style="padding-left:15px;"><a href="user"><div class="glyphicon glyphicon-menu-left btn-lg"></div></a></div>
        <div class="col-md-8 col-sm-8 col-xs-8" style="line-height:40px; vertical-align:middle;padding-left:40px;">
            修改密码
        </div>
    </div>
</div>

<div class="container-fluid">
<div class="row">
<div class="col-md-12 col-sm-12 col-xs-12">
<table class="table" style="border-bottom:1px solid #e7eaf1;">
<form action=""  method="post" name="form"> 
<input type="hidden" name="username" value="<?php echo $username?>">
<tr><td style=" padding:5px 2px; ">
<div class="col-md-4 col-sm-4 col-xs-4" style="color:#000; height: 50px; line-height: 50px; vertical-align: middle;">旧密码 </div>
                <div class="col-md-8 col-sm-8 col-xs-8" >
    <input type="text" class="form-control input-group-sm zj_input" id="oldpw" name="oldpw" placeholder="旧密码 " style=" color:#333;">
    </div>
</td></tr>
        <tr><td style=" padding:5px 2px; ">
                <div class="col-md-4 col-sm-4 col-xs-4" style="color:#000; height: 50px; line-height: 50px; vertical-align: middle;">新密码 </div>
                <div class="col-md-8 col-sm-8 col-xs-8" >
    <input type="text" class="form-control input-group-sm zj_input" id="newpw" name="newpw" placeholder="新密码" style=" color:#333;">
    </div>
        </td></tr>

    <tr><td style=" padding:5px 2px; ">
             <div class="col-md-4 col-sm-4 col-xs-4" style="color:#000; height: 50px; line-height: 50px; vertical-align: middle;">确认新密码 </div>
                <div class="col-md-8 col-sm-8 col-xs-8" >
    <input type="text" class="form-control input-group-sm zj_input" id="newpw1" name="newpw1" placeholder="确认密码" style=" color:#333;">
    </div>
        </td></tr>
        
            <tr><td style=" padding:5px 2px; ">
        <input type="submit" class="btn btn-default btn-lg btn-block zj_btn" name="submit" onclick="checkreg()" value="确认修改" style="width:100%; background:red; margin-left:0px; margin-top: 20px; color:#FFF;">
        </td></tr>
</form>
</table>
</div>
</div>
</div>

<?php
include ('bottom.php');
?>

<script language="JavaScript">
    function checkreg()
    {
        var oldpw=document.getElementById("oldpw").value;
        var newpw=document.getElementById("newpw").value;
        var newpw1=document.getElementById("newpw1").value;
        //alert(username);
        if (oldpw=="")
        {
            alert("请输入您的旧密码!");
            //form.username.focus();
            return false;
        }
		if (newpw=="")
        {
            alert("请输入您的新密码!");
            //form.username.focus();
            return false;
        }
		if (newpw1=="")
        {
            alert("请您确认新密码!");
            //form.username.focus();
            return false;
        }
        if (newpw.length<6 || newpw.length>15)
        {
            alert("密码长度限制在6-15位!");
            //form.password.focus();
            return false;
        }
        if(newpw!=newpw1)
        {
            alert("两次输入的密码不同!")
            //form.password.focus();
            return false;
        }
        document.form.action="midifypw/cpw";
        document.form.submit();
    }

</script>

</body>
</html>
