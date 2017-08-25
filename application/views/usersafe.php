<?php

include ('top.php');
?>
<?php 
if (isset($resultcpw) && !empty($resultcpw)) {
//var_dump($resultcpw);
//echo $resultcpw;
	if($resultcpw=="1")
	{
	echo '<script language="javascript">alert("修改成功");
     window.location.href="user";
    </script>';	
	}
}

if (isset($error) && !empty($error)) {
	if($error=="1")
	{
	echo '<script language="javascript">alert("已绑定手机号");
     window.history.back();
    </script>';	
	}
}


    function post_url($url)
    {
        //初始化
        $ch = curl_init();
        //$url="http://my.57k.com/api/login.php";
        //设置选项，包括URL
        curl_setopt($ch, CURLOPT_URL, "$url");
        curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1);
        curl_setopt($ch, CURLOPT_HEADER, 0);
        //执行并获取HTML文档内容
        $output = curl_exec($ch);
        //释放curl句柄
        curl_close($ch);
        //打印获得的数据
        //print_r($output);
        return $output;
    }

$url='http://www.hs.com/index.php/Apps/user_mobile?username='.$username;
$usermobile=post_url($url);

//echo "===".$usermobile."+===";


?>
<body>



<div class="container">
    <div class="row" style="padding:10px 0px; height:60px; border-bottom:1px solid #999;">
        <div class="col-md-4 col-sm-4 col-xs-4" style="padding-left:15px;"><a href="/index.php/user"><div class="glyphicon glyphicon-menu-left btn-lg"></div></a></div>
        <div class="col-md-8 col-sm-8 col-xs-8" style="line-height:40px; vertical-align:middle; padding-left:40px;">
		账号安全
        </div>
    </div>
</div>

<div class="container-fluid">
<div class="row">
<div class="col-md-12 col-sm-12 col-xs-12">
<table class="table" style="border-bottom:1px solid #e7eaf1;">


        <tr><td style=" padding:5px 2px; ">
                <div class="col-md-4 col-sm-4 col-xs-4" style="color:#000; height: 50px; line-height: 50px; vertical-align: middle;">账号 </div>
                <div class="col-md-5 col-sm-5 col-xs-5" style="margin-top: 20px;" ></div>
                <div class="col-md-3 col-sm-3 col-xs-3" style="color:#999; height: 50px; line-height: 50px; vertical-align: middle; ">
                    <?php echo $username;?>
                </div>
        </td></tr>

    <tr><td style=" padding:5px 2px;">
            <a href=""><div class="col-md-4 col-sm-4 col-xs-4" style="color:#000; height: 50px; line-height: 50px; vertical-align: middle;">密码修改 </div></a>
            <div class="col-md-5 col-sm-5 col-xs-5" style="margin-top: 20px;" >**************</div>
            <div class="col-md-3 col-sm-3 col-xs-3" style="margin-top: 10px;"><a class="btn  zj_down" href="midifypw" role="button">修改密码</a></div>
        </td></tr>
        
       <tr><td style=" padding:5px 2px; ">
          
          
           <div class="col-md-4 col-sm-4 col-xs-4" style="color:#000; height: 50px; line-height: 50px; vertical-align: middle;" >绑定手机</div>
           
            <!--<a href="bind_mobile"><div class="col-md-4 col-sm-4 col-xs-4" style="color:#000; height: 50px; line-height: 50px; vertical-align: middle;">绑定手机 </div></a>-->
         <?php  
		   
		   if($usermobile!=0){?>
          
            <div class="col-md-5 col-sm-5 col-xs-5" style="margin-top: 20px;" ><?php echo substr_replace($usermobile,'****',3,4);?></div>
            <div class="col-md-3 col-sm-3 col-xs-3" style="margin-top: 10px;"><a class="btn  zj_down" href="/index.php/user_safe/is_bindphone?username=<?php echo $username;?>" role="button">更改绑定</a></div>
           
           <?php }else{?>
            
            <div class="col-md-5 col-sm-5 col-xs-5" style="margin-top: 20px;" >暂未绑定手机</div>
            <div class="col-md-3 col-sm-3 col-xs-3" style="margin-top: 10px;"><a class="btn  zj_down" href="/index.php/user_safe/is_bindphone?username=<?php echo $username;?>" role="button">绑定手机</a></div>
            <?php }?>
       </td></tr> 

</table>
</div>
</div>
</div>

<?php
include ('bottom.php');
?>


</body>
</html>
