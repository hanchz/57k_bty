<?php

include ('top.php');
?>
<body>

<div class="container">
    <div class="row" style="padding:10px 0px; height:60px; border-bottom:1px solid #999;">
        <div class="col-md-4 col-sm-4 col-xs-4" style="padding-left:15px;"><a href="user"><div class="glyphicon glyphicon-menu-left btn-lg"></div></a></div>
        <div class="col-md-8 col-sm-8 col-xs-8" style="line-height:40px; vertical-align:middle;padding-left:40px;">
            我的礼包
        </div>
    </div>
</div>

<div class="container-fluid">
<div class="row">
<div class="col-md-12 col-sm-12 col-xs-12">
<table class="table" style="border-bottom:1px solid #e7eaf1;">
<?php
$params = array();
$params['uid']=$uid;
$result=$this->gifts_model->uesr_gifts_info_model($params);
//var_dump($result);
//exit;
if(isset($result) && !empty($result)){		
    foreach ($result as $val)
    {
		//var_dump($val);
		//exit;
        $params = array();
        $params['id'] = $val['giftsid'];
        $this->load->model('gifts_model');
		
		
		
		$giftsinfo=$this->gifts_model->giftsid_gameinfo_model($params);
        //var_dump($giftsinfo);
        //exit;
 		$gameid=$giftsinfo['gameid'];
		$params1['id']=$gameid;
        $gameinfo=$this->gifts_model->game_info($params1);
		//var_dump($gameinfo);
		//exit;
		echo '
        <tr><td style=" padding:5px 2px;">
    <div class="col-md-3 col-sm-3 col-xs-3"  style=" margin-left:-10px;"><img src="'.$gameinfo['logo'].'" class="img-responsive"></div>
    <div class="col-md-6 col-sm-6 col-xs-6"  style=" margin-left:-20px;">
        <div class="row">
            <div class="col-md-12 col-sm-12 col-xs-12" style="font-size:10px;"><strong>'.$gameinfo['name'].':'.$giftsinfo['giftsname'].'</strong></div>
        </div>
        <div class="row">
        <div class="col-md-12 col-sm-12 col-xs-12" style="color:red"><small>兑换码：'.$val["key"].'</small></div>
        </div>
        <div class="row">
        <div class="col-md-12 col-sm-12 col-xs-12 zj_of" style=" width:200px; color:#999;"><small><nobr>'.$giftsinfo['giftsinfo'].'</nobr></small></div>
        </div>
    </div>
    <div class="col-md-3 col-sm-3 col-xs-3" style="font-size:8px;margin-left:10px; text-align: center; margin-top:10px;">长按礼包码进行复制</div>
    </td></tr>
        ';

    }
}else {
	echo '<div class="row" style="text-align: center; line-height: 100px; vertical-align: middle">您还未领取游戏礼包</div>';
}
?>

</table>
</div>
</div>
</div>
<?php
if(empty($result)){	};	
?>
<div class="container-fluid">
	
	
</div>


<div style="margin-top: 50px;">
<?php
include ('bottom.php');
?>
</div>


</body>
</html>
