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
?>
<body>

<div class="container">
    <div class="row" style="padding:10px 0px; height:60px; border-bottom:1px solid #999;">
        <div class="col-md-4 col-sm-4 col-xs-4" style="padding-left:15px;"><a href="user"><div class="glyphicon glyphicon-menu-left btn-lg"></div></a></div>
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
                <div class="col-md-3 col-sm-3 col-xs-3" ></div>
                <div class="col-md-4 col-sm-4 col-xs-4" style="color:#999; height: 50px; line-height: 50px; vertical-align: middle; margin-left: 10px;">
                    <?php echo $username;?>
                </div>
        </td></tr>

    <tr><td style=" padding:5px 2px; ">
            <a href="midifypw"><div class="col-md-4 col-sm-4 col-xs-4" style="color:#000; height: 50px; line-height: 50px; vertical-align: middle;">密码修改 </div></a>
            <div class="col-md-7 col-sm-7 col-xs-7 " ></div>
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
