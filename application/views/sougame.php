<?php

include ('top.php');
?>
<body>
<?php

include ('sou.php');
?>
<div class="container-fluid">
<div class="row">
<div class="col-md-12 col-sm-12 col-xs-12">
<?php 
	if(isset($gametypeinfo) && !empty($gametypeinfo) || isset($gamename) && !empty($gamename)){	
	
	?>
<table class="table">
<?php 
if(isset($gamename) && !empty($gamename)){			
	foreach($gamename as $val){
/*	//echo $gamename['gameid'];
		

		$paramsgame=array();
		$paramsgame['id']=$gamename['gameid'];
		//exit;
		$gameinfo=$this->Game_model->game_info($paramsgame);
		//var_dump($gameinfo);
*/		
		$params=array();
		$params['gametype']=$val['gametype'];
		$result = $this->game_model->game_type($params);
		
		$params['id']=$val['id'];
		$giftsnum= $this->gifts_model->giftsidnum_model($params);
?>
<tr><td style=" padding:5px 2px;">
<div class="col-md-3 col-sm-3 col-xs-3"  style=" margin-left:-10px;"><a  href="game?gameid=<?php echo $val['gameid']?>"><img src="<?php echo $val['logo']?>" class="img-responsive"></a></div>
<div class="col-md-6 col-sm-6 col-xs-6"  style=" margin-left:-20px;">
	<div class="row">
    	<div class="col-md-6 col-sm-6 col-xs-6"><strong><?php echo $val['name']?></strong></div>
        <div class="col-md-3 col-sm-3 col-xs-3"><a href="gifts"><button type="button" class="btn btn-default btn-xs disabled" style="color:#0CF; border:2px solid #0CF">礼包 X <?php echo $giftsnum['num']?></button></a>        </div>
    </div>
    <div class="row">

    <div class="col-md-12 col-sm-12 col-xs-12" style="color:#999"><small><?php echo $result['gametype'].'|'.$val['downnum']?>次开始</small></div>
    </div>
    <div class="row">
    <div class="col-md-12 col-sm-12 col-xs-12 zj_overflow" style="color:#999;overflow: hidden;
white-space: nowrap;
text-overflow: ellipsis; width:200px;"><small><nobr><?php echo substr($val['about'],0,50);?></nobr></small></div>
    </div>
</div>

<div class="col-md-3 col-sm-3 col-xs-3" style=" margin-left:-20px;"><a class="btn btn-default btn-lg zj_down" style="margin-top:10px;" href="game?gameid=<?php echo $val['gameid']?>" role="button">开始</a></div>
</td></tr>
<?php }}?>
</table>


<table class="table">
<?php 
if(isset($gametypeinfo) && !empty($gametypeinfo)){			
	foreach($gametypeinfo as $val1){
/*	//echo $gamename['gameid'];
		

		$paramsgame=array();
		$paramsgame['id']=$gamename['gameid'];
		//exit;
		$gameinfo=$this->Game_model->game_info($paramsgame);
		//var_dump($gameinfo);
*/		
		$params=array();
		$params['gametype']=$val1['gametype'];
		$result = $this->game_model->game_type($params);
		
		
		$params['id']=$val1['id'];
		$giftsnum= $this->gifts_model->giftsidnum_model($params);
?>
<tr><td style=" padding:5px 2px;">
<div class="col-md-3 col-sm-3 col-xs-3"  style=" margin-left:-10px;"><a  href="game?gameid=<?php echo $val1['gameid']?>"><img src="<?php echo $val1['logo']?>" class="img-responsive"></a></div>
<div class="col-md-6 col-sm-6 col-xs-6"  style=" margin-left:-20px;">
	<div class="row">
    	<div class="col-md-6 col-sm-6 col-xs-6 zj_of" style=" width: 100px;"><strong><?php echo $val1['name']?></strong></div>
        <div class="col-md-3 col-sm-3 col-xs-3"><a href="gifts"><button type="button" class="btn btn-default btn-xs disabled" style="color:#0CF; border:2px solid #0CF">礼包 X <?php echo $giftsnum['num']?></button></a>        </div>
    </div>
    <div class="row">

    <div class="col-md-12 col-sm-12 col-xs-12" style="color:#999"><small><?php echo $result['gametype'].'|'.$val1['downnum']?>次开始</small></div>
    </div>
    <div class="row">
    <div class="col-md-12 col-sm-12 col-xs-12 zj_overflow" style="color:#999;overflow: hidden;
white-space: nowrap;
text-overflow: ellipsis; width:200px;"><small><nobr><?php echo substr($val1['about'],0,50);?></nobr></small></div>
    </div>
</div>

<div class="col-md-3 col-sm-3 col-xs-3" style=" margin-left:0px;"><a class="btn btn-default btn-lg zj_down" style="margin-top:10px;" href="game?gameid=<?php echo $val1['gameid']?>" role="button">开始</a></div>
</td></tr>
<?php }}?>
</table>
<?php }else{	echo '<div class="row" style="text-align: center; line-height: 100px; vertical-align: middle">暂无此游戏</div>';}?>
</div>
</div>
</div>

<?php
include ('bottom.php');
?>



</body>
</html>
