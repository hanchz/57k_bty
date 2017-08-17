<?php



include ('top.php');
?>
<body>



<div class="container">
    <div class="row" style="padding:10px 0px; height:60px; border-bottom:1px solid #999;">
        <div class="col-md-4 col-sm-4 col-xs-4" style="padding-left:15px;"><a href="user"><div class="glyphicon glyphicon-menu-left btn-lg"></div></a></div>
        <div class="col-md-8 col-sm-8 col-xs-8" style="line-height:40px; vertical-align:middle;padding-left:40px;">
            修改成功
        </div>
    </div>
</div>
<div class="container">
<div class="row" style="margin-top: 20%;">
	<div class="col-md-3 col-sm-3 col-xs-3"></div>
<div class="col-md-6 col-sm-6 col-xs-6">
	<img src="<?php echo base_url()?>/images/bindokicon.png" class="img-responsive">
</div>
	<div class="col-md-3 col-sm-3 col-xs-3"></div>
	</div>
	<div class="row" style="margin-top: 10%;">
	<div class="col-md-12 col-sm-12 col-xs-12"></div>
	<div style="text-align: center;">
	您已修改成功
		</div>
	</div>

 <div class="col-md-1 col-sm-1 col-xs-1"></div>
  <div class="col-md-10 col-sm-10 col-xs-10" style="margin-top: 20%;"><a class="btn btn-danger zj_btn" style=" width:100%; background:red; margin-left:0px; margin-top: 20px; color: #FFF;"  role="button" href="login_user">完成</a></div>
  
 <div class="col-md-1 col-sm-1 col-xs-1"></div>
	</div>
	</div>
</div>
<?php
include ('bottom.php');
?>



</body>
</html>
