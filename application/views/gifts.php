<?php

include ('top.php');
?>
<body>
<?php

include ('sou.php');
?>
<?php
//var_dump($gifts);
?>
<div class="container-fluid" style="margin-bottom: 50px;">
<div class="row">
<div class="col-md-12 col-sm-12 col-xs-12">
<table class="table" style="border-bottom:1px solid #e7eaf1;">
<?php
if(isset($gifts) && !empty($gifts)){	
    foreach ($gifts as $val)
    {
        $params = array();
        $params['id'] = $val['gameid'];
        $this->load->model('gifts_model');
        $gameinfo=$this->gifts_model->game_info($params);
        //var_dump($gameinfo);
		$params2 = array();
		$params2['id'] = $val['id'];
        $giftsnum=$this->gifts_model->gifts_num_model($params2);
		//var_dump($giftsnum);
        ?>
		 <tr><td style=" padding:5px 2px;">
    <div class="col-md-3 col-sm-3 col-xs-3"  style=" margin-left:-10px;"><img src="<?php echo $gameinfo['logo']?>" class="img-responsive"></div>
    <div class="col-md-6 col-sm-6 col-xs-6"  style=" margin-left:-20px;">
        <div class="row">
            <div class="col-md-12 col-sm-12 col-xs-12"><strong><?php echo $gameinfo['name'].':'.$val['giftsname']?></strong></div>
        </div>
        <div class="row">
        <div class="col-md-12 col-sm-12 col-xs-12 zj_overflow" style="color:#999;overflow: hidden;
white-space: nowrap;
text-overflow: ellipsis; width:200px;"><small><nobr><?php echo substr($val['giftsinfo'],0,50);?></nobr></small></div>
        </div>
        <div class="row">
        <div class="col-md-12 col-sm-12 col-xs-12" style="color:red"><small>剩余<?php echo $giftsnum['count(giftsid)']?>个</small></div>
        </div>
    </div>
    
    <?php if (isset($_SESSION['uid']) && !empty($_SESSION['uid'])) {?>
    <div class="col-md-3 col-sm-3 col-xs-3"><a class="btn btn-danger" style="margin-top:10px; width:80px; background:red; margin-left: 15px;" role="button"  onClick="tc(<?php echo $val["id"].','.$uid?>)">领取</a></div>
    <?php }else{?>
    <div class="col-md-3 col-sm-3 col-xs-3"><a class="btn btn-danger" style="margin-top:10px; width:80px; background:red; margin-left: 15px;"  role="button" onClick="loginurl()">领取</a></div>
    <?php }?>
    </td></tr>
		
		<?php

    }
}
?>
</table>
</div>
</div>
</div>




<div class="tanchukuang" id="tck" style="display:none;">
	<div class="tck-top">领取礼包</div>
	<div class="tck-con">
    	<p style="width:100%">礼包内容：<span style="color:#999; width:100%" id="gifts_info"> 佛挡杀佛萨法撒旦法撒飞洒发达省份萨芬</span></p>
        
    	<p>礼包码：<div style="color:red; background:#ccc; width:70%; height:10%; float:left; text-align:center;" id="key"> </div></p>
        
        <div class="row" style="text-align: center;">
    	<p style="margin-top:20px; width:auto; color:red; ">请长按礼包码复制</p>
	    </div>
        
        <div style="margin-top:0px; width:100%; height:80px; float: left; text-align: center;"><a class="btn btn-danger" style="margin-top:20px; width:80px; background:red;"  role="button" onClick="tc_cls()" >关闭</a></div>
    </div>
    
    
</div>

<div class="zhezhao" id="zhezhao" style="display:none;"></div>

<?php
include ('bottom.php');
?>
<script type="text/javascript" src="http://libs.baidu.com/jquery/1.11.1/jquery.min.js"></script>
<script language="javascript">
    function tc(id,uid)
    {
		//alert(id);
		//alert(uid);
		var url='get_gifts';
		$.get(
            url,
            {uid:uid,id:id},
            function(data){
				//alert(data);
            $("#key").html(data);
            });
			
		$.get(
            url+'/gifts_info',
            {id:id},
            function(dataa){
            $("#gifts_info").html(dataa);
            })	
document.getElementById("tck").style.display="block";
document.getElementById("zhezhao").style.display="block";
    }
	
	function tc_cls()
	{
document.getElementById("tck").style.display="none";
document.getElementById("zhezhao").style.display="none";
	}

var get_url=window.location.href;
function loginurl()
	{
		alert('请先登录');window.location.href='login_user?geturl='+get_url;
	}

</script>

</body>
</html>
