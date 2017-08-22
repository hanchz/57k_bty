<?php



include ('top.php');
?>
<body>



<div class="container">
    <div class="row" style="padding:10px 0px; height:60px; border-bottom:1px solid #999;">
        <div class="col-md-4 col-sm-4 col-xs-4" style="padding-left:15px;"><a href="user"><div class="glyphicon glyphicon-menu-left btn-lg"></div></a></div>
        <div class="col-md-8 col-sm-8 col-xs-8" style="line-height:40px; vertical-align:middle;padding-left:40px;">
            绑定手机
        </div>
    </div>
</div>


<div class="container-fluid" style=" background:#e7eaf1; height: 30px; line-height: 30px;vertical-align: middle;" >
用户名：<?php echo $username?></div>

<div class="container">
<div class="row">


        
    <ul class="list-unstyled" >
    <li style="height:35px;margin-top:20px; border-bottom: 1px solid #ccc;">
    <div class="col-md-1 col-sm-1 col-xs-1" >
    <span class="glyphicon glyphicon-phone" style="color:#000; margin-top:10px;"></span>
    </div>
    <div class="col-md-10 col-sm-10 col-xs-10" >
    <input type="number" class="form-control input-group-sm zj_input" style="color: black;" id="tel" name="tel" placeholder="请输入要绑定的手机号">
    </div>
    </li>
    
    <li style="height:35px;margin-top:20px; border-bottom: 1px solid #ccc;">
    <div class="col-md-1 col-sm-1 col-xs-1" >
    <span class="glyphicon glyphicon-barcode" style="color:#000; margin-top:10px;"></span>
    </div>
   	<div class="col-md-10 col-sm-10 col-xs-10" >
	<div class="input-group">
	<input type="text" class="form-control  zj_input" style=" width: 100%; color: black;" id="telcode" name="telcode" placeholder="输入验证码" value="">
	<span class="input-group-btn">
		<button class="btn btn-default" type="button"  id="btn_code">获取验证码</button>
	</span>
	</div><!-- /input-group -->
     </div><!-- /.col-lg-6 -->
   
    </li>
    
    <li style="height:35px;margin-top:20px; border-bottom: 1px solid #ccc;">
    <div class="col-md-1 col-sm-1 col-xs-1" >
    <span class="glyphicon glyphicon-lock" style="color:#000; margin-top:10px;"></span>
    </div>
    <div class="col-md-10 col-sm-10 col-xs-10" >
    <input type="password" class="form-control input-group-sm zj_input" style="color: black;" id="password" name="password" placeholder="请输入密码">
    </div>
   
    </li>
    
	</ul>
        

	</div>
<div class="row" style="margin-top: 30px;">
 <div class="col-md-1 col-sm-1 col-xs-1"></div>
  <div class="col-md-10 col-sm-10 col-xs-10"><a class="btn btn-danger zj_btn" style=" width:100%; background:red; margin-left:0px; margin-top: 20px; color: #FFF;" onClick="bind()" role="button">绑定</a></div>
  
 <div class="col-md-1 col-sm-1 col-xs-1"></div>
</div>

</div>
<?php
include ('bottom.php');
	

?>

<script language="javascript">
function bind()
	{
		var username='<?php echo $username;?>';
		var uid='<?php echo $uid?>';
		var tel=document.getElementById('tel').value;
		var telcode=document.getElementById('telcode').value;
		var password=document.getElementById("password").value;
		//
		if(telcode=='')
		{
		  alert('请输入验证码！'); 
          return false; 
		}
		if(password=='')
		{
		  alert('请输入密码！'); 
          return false; 
		}
		if(validatemobile(tel))
		{
			//检查验证码是否正确，
		  var url='http://www.h5.com/index.php/get_code/reg_code';
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
					//document.getElementById("form").action="reg/reg_user";
					//document.getElementById("form").submit();
					//document.form.action="reg/reg_user";
					 //document.form.submit();
					//正确以后提交绑定申请
					alert(data);
					
					//通过后，跳转x下一个页面
					window.location.href="bindok?tel="+tel;
				}
			});
			
		}
		
		
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
	
	
//获取手机验证码
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
			
			//验证手机号是否被绑定
			
			var url1="checkmobile";
			$.get(
            url,
            {mobile:tel},
            function(data){
				if(data==0)
					{
						time(this);
						var url='http://www.h5.com/index.php/get_code';
						//http://www.h5.com/index.php/get_code
					$.get(
						url,
						{tel:tel},
						function(data){

						});
					}else{
						
						alert("此手机号已绑定");
					}
				
            });
			
		/*	
			time(this);
			var url='http://www.h5.com/index.php/get_code';
			//http://www.h5.com/index.php/get_code
		$.get(
            url,
            {tel:tel},
            function(data){

            });
			
			*/
		}/*else{alert("请检查手机号");}*/
	}
	
</script>

</body>
</html>
