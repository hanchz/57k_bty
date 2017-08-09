<?php



include ('top.php');
?>
<body>



<div class="container">
    <div class="row" style="padding:10px 0px; height:60px; border-bottom:1px solid #999;">
        <div class="col-md-4 col-sm-4 col-xs-4" style="padding-left:15px;"><a href="user"><div class="glyphicon glyphicon-menu-left btn-lg"></div></a></div>
        <div class="col-md-8 col-sm-8 col-xs-8" style="line-height:40px; vertical-align:middle;padding-left:40px;">
            充值
        </div>
    </div>
</div>

<?php       //游戏内直接发起支付
if(isset($orderid) && !empty($orderid))
{
	$params=array();
	$params['id']=$gameid;
	$result=$this->game_model->game_info($params);
	//var_dump($result);
	//exit;
?>
<form name="form" method="post" action="Heepay" id="form">
    <input type="hidden" name="orderid" id="orderid" value="<?php echo $orderid;?>" />
    <input type="hidden" name="money" id="money" value="<?php echo $money;?>" />
    <input type="hidden" name="goodsid" id="goodsid" value="<?php echo $goodsid;?>" />
    <input type="hidden" name="gameid" id="gameid" value="<?php echo $gameid;?>" />
    <input type="hidden" name="uid" id="uid" value="<?php echo $uid;?>" />
    <input type="hidden" name="goodsname" id="goodsname" value="<?php echo $goodsname;?>" />

<input type="hidden" class="form-control input-group-sm zj_input" style=" border:1px; color: #0f0f0f;"  id="serverid" name="serverid" value="<?php echo $serverid?>" disabled="disabled" >

    <div class="container-fluid" style="margin-top:10px;" >
        <div class="row">
            <div class="col-md-4 col-sm-4 col-xs-4" style="padding-top:5px;" >请确认游戏：
            </div>
            <div class="col-md-5 col-sm-5 col-xs-5" style="margin-left:-20px;" >
                <input type="text" class="form-control input-group-sm zj_input" style=" border:1px; color: #0f0f0f;" id="name" name="name"  value="<?php echo $result['name']?>" disabled="disabled" >
            </div>
            <div class="col-md-3 col-sm-3 col-xs-3" >

            </div>

        </div>

       <!-- <div class="row" style="margin-top:10px;">
            <div class="col-md-4 col-sm-4 col-xs-4" style="padding-top:5px;" >请确认服务器：
            </div>
            <div class="col-md-5 col-sm-5 col-xs-5" style="margin-left:-20px;" >
                <input type="text" class="form-control input-group-sm zj_input" style=" border:1px; color: #0f0f0f;"  id="serverid" name="serverid" value="<?php echo $serverid?>" disabled="disabled" >
            </div>
            <div class="col-md-3 col-sm-3 col-xs-3" >
            </div>

        </div>-->

        <div class="row" style="margin-top:10px;">
            <div class="col-md-4 col-sm-4 col-xs-4" style="padding-top:5px;" >请确认账号：
            </div>
            <div class="col-md-5 col-sm-5 col-xs-5" style="margin-left:-20px;" >
                <input type="text" class="form-control input-group-sm zj_input" style=" border:1px; color: #0f0f0f;" id="username" name="username" value="<?php echo $uid?>" disabled="disabled" >
            </div>

        </div>



    </div>


<?php }else{ //普通支付页面?>
<div class="container-fluid" style="margin-top:10px;" >
	<div class="row">
    	 <div class="col-md-4 col-sm-4 col-xs-4" style="padding-top:5px;" >请选择游戏：
   		 </div>
    	 <div class="col-md-5 col-sm-5 col-xs-5" style="margin-left:-20px;" >
   		 <input type="text" class="form-control input-group-sm zj_input" style=" border:1px; color: #0f0f0f;" id="name" name="name" placeholder="请选择游戏">
   		 </div>
         <div class="col-md-3 col-sm-3 col-xs-3" >
         <a class="btn btn-danger" style=" width:90px; background:red;" href="#" role="button">选择游戏</a>
         </div>
         
 	</div>
    
    <div class="row" style="margin-top:10px;">
    	 <div class="col-md-4 col-sm-4 col-xs-4" style="padding-top:5px;" >请选择服务器：
   		 </div>
    	 <div class="col-md-5 col-sm-5 col-xs-5" style="margin-left:-20px;" >
   		 <input type="text" class="form-control input-group-sm zj_input" style=" border:1px; color: #0f0f0f;"  id="serverid" name="serverid" placeholder="请选择服务器">
   		 </div>
         <div class="col-md-3 col-sm-3 col-xs-3" >
         <a class="btn btn-danger" style=" width:90px; background:red;" href="#" role="button">选择区服</a>
         </div>
         
 	</div>
    
    <div class="row" style="margin-top:10px;">
    	 <div class="col-md-4 col-sm-4 col-xs-4" style="padding-top:5px;" >您要充值的账号：
   		 </div>
    	 <div class="col-md-5 col-sm-5 col-xs-5" style="margin-left:-20px;" >
   		 <input type="text" class="form-control input-group-sm zj_input" style=" border:1px; color: #0f0f0f;" id="username" name="username" placeholder="">
   		 </div>
         
 	</div>
    
    
    
</div>

<?php }?>

<div class="container-fluid" style="margin-bottom:10px;" >

	
</div>

<div class="container-fluid" style=" height:10px; background:#e7eaf1;" ></div>




<div class="container-fluid">
<div class="row">
  	<div class="col-md-4" style="margin-top:5px;"><strong>充值金额：单位（元）</strong></div>

    <?php       //游戏内直接发起支付
    if(isset($orderid) && !empty($orderid))
    {
    ?>

        <div class="row" style="margin-top:10px;">
            <div class="col-md-10 col-sm-10 col-xs-10" style=" margin-left:8%;" >
                <input type="text" class="form-control input-group-sm zj_input" style="border:1px solid red; text-align:center; color: #0f0f0f;" id="money" name="money" value="<?php echo $money?>" disabled="disabled">
            </div>
        </div>

    <?php }else{?>

  <div class="row" style="margin-left:10%; margin-top:10px;">  
    <div class="col-md-3 col-sm-3 col-xs-3" >
         <a class="btn btn-danger" style=" width:90px; background:red; " href="#" role="button">50</a>
         </div>
    <div class="col-md-3 col-sm-3 col-xs-3" >
         <a class="btn btn-danger" style=" width:90px; background:red; " href="#" role="button">100</a>
         </div>
         
    <div class="col-md-3 col-sm-3 col-xs-3" >
         <a class="btn btn-danger" style=" width:90px; background:red; " href="#" role="button">500</a>
         </div>  
  </div>   
 <div class="row" style="margin-top:10px;">
 	     <div class="col-md-10 col-sm-10 col-xs-10" style=" margin-left:8%;" >
   		 <input type="text" class="form-control input-group-sm zj_input" style="border:1px solid red; text-align:center; color: #0f0f0f" id="money" name="money" placeholder="自定义金额请输入0-50000之间的整数">
   		 </div>
 </div>
    <?php }?>
    
  <div class="row" style="margin-top: 20px;">
  	<div class="col-md-10 col-sm-10 col-xs-10" style=" margin-left:8%; border-bottom: 1px solid #ccc;" >
	  <strong>请选择充值方式</strong>
	  </div>
  </div>  
  
  <div class="row" style=" padding-top: 20px;">
 	 <div class="col-md-1 col-sm-1 col-xs-1">
	  </div>
 	 <div class="col-md-10 col-sm-10 col-xs-10">
  	<img src="/images/wxpay_icon.jpg" class="img-responsive" ></div>
	</div>
 
  <div class="row" style="margin-top:30px;">
  <div class="col-md-10 col-sm-10 col-xs-10" style=" margin-left:8%;">
         <!--<a class="btn btn-danger" style=" width:100%; background:red; " href="#" role="button">确认充值</a>-->
      <input type="submit" class="btn btn-danger" name="submit"  style=" width:100%; background:red; " value="确认充值"><!--onclick="checkreg()"-->
         </div> 
  </div>
</form>
              
</div>
</div>


	</div>

<?php
include ('bottom.php');
?>



</body>
</html>
