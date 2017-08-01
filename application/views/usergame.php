<?php

include ('top.php');
?>
<body>
<?php

include ('sou.php');
?>
<?php 
       
	$params = array();
	$params['uid']=$uid;
		
    $usergame=$this->Gamelogin_model->Usergame_model($params);
	 //var_dump($usergame);
	//exit;
?>
<div class="container-fluid">
<div class="row">
<div class="col-md-12 col-sm-12 col-xs-12">
<table class="table">
<?php 

if(isset($usergame) && !empty($usergame)){
	//var_dump($usergame);
		
    foreach ($usergame as $val)
    {
		$paramsgame=array();
		$paramsgame['id']=$val['gameid'];
		$gameinfo=$this->Game_model->game_info($paramsgame);
		
		//var_dump($gameinfo);
		//exit;
		
		$params=array();
		$params['gametype']=$gameinfo['gametype'];
		//exit;
		$result = $this->Game_model->game_type($params);
		//var_dump($result);
		//exit;
?>
<tr><td style=" padding:5px 2px;">
<div class="col-md-3 col-sm-3 col-xs-3"  style=" margin-left:-10px;"><img src="<?php echo $gameinfo['logo']?>" class="img-responsive"></div>
<div class="col-md-6 col-sm-6 col-xs-6"  style=" margin-left:-20px;">
	<div class="row">
    	<div class="col-md-6 col-sm-6 col-xs-6"><strong><?php echo $gameinfo['name']?></strong></div>
        <div class="col-md-3 col-sm-3 col-xs-3"><button type="button" class="btn btn-default btn-xs disabled" style="color:#0CF; border:2px solid #0CF">礼包 X 3</button>        </div>
    </div>
    <div class="row">

    <div class="col-md-12 col-sm-12 col-xs-12" style="color:#999"><small><?php echo $result['gametype'].'|'.$gameinfo['downnum']?>次开始</small></div>
    </div>
    <div class="row">
    <div class="col-md-12 col-sm-12 col-xs-12 zj_overflow" style="color:#999;overflow: hidden;
white-space: nowrap;
text-overflow: ellipsis; width:200px;"><small><nobr><?php echo $gameinfo['about']?></nobr></small></div>
    </div>
</div>

<div class="col-md-3 col-sm-3 col-xs-3" style=" margin-left:-20px;"><a class="btn btn-default btn-lg zj_down" style="margin-top:10px;" href="game?gameid=<?php echo $gameinfo['id']?>" role="button">开始</a></div>
</td></tr>
<?php }}else{echo "暂无游戏";}?>
</table>
</div>
</div>
</div>

<?php
include ('bottom.php');
?>



</body>
</html>
