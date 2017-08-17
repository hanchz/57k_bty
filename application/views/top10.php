<?php

include ('top.php');
?>
<body>
<?php

include ('sou.php');
?>
<?php //var_dump($top)?>
<div class="container-fluid" style="margin-bottom: 50px;">
<div class="row">
<div class="col-md-12 col-sm-12 col-xs-12">
<table class="table">
<?php
if(isset($top) && !empty($top)){	
    foreach ($top as $val)
    {
        if($val['id']=='1')
        {$color='red';}
        elseif($val['id']=='2')
        {$color='#F63';}
        elseif($val['id']=='3')
        {$color='#F93';}else{$color='';};
        $params = array();
        $params['id'] = $val['gameid'];
        $result = $this->top_model->game_info($params);
		
		
		$params=array();
		$params['gametype']=$result['gametype'];
		$r = $this->game_model->game_type($params);
		
		$params['id']=$val['id'];
		$giftsnum= $this->gifts_model->giftsidnum_model($params);
		
        //var_dump($result);
        echo '<tr><td style=" padding:5px 2px;">
<div class="col-md-1 col-sm-1 col-xs-1" style="line-height:60px; vertical-align:middle; color:'.$color.';">'.$val['id'].'</div>
<div class="col-md-3 col-sm-3 col-xs-3"  style=" margin-left:-10px;"><a href="game?gameid='.$result['gameid'].'"><img src="'.$result['logo'].'" class="img-responsive"></a></div>
<div class="col-md-6 col-sm-6 col-xs-6"  style=" margin-left:-20px;">
	<div class="row">
    	<div class="col-md-6 col-sm-6 col-xs-6 zj_of" style="width:100px;"><strong>'.$result['name'].'</strong></div>
        <div class="col-md-3 col-sm-3 col-xs-3" style=" float:left; margin-left:-25px;"><a href="gifts"><button type="button" class="btn btn-default btn-xs disabled" style="color:#0CF; border:2px solid #0CF">礼包 X '.$giftsnum['num'].'</button></a></div>
    </div>
    <div class="row">

    <div class="col-md-12 col-sm-12 col-xs-12" style="color:#999"><small>'.$r['gametype'].'|'.$result['downnum'].'次开始</small></div>
    </div>
    <div class="row">
    <div class="col-md-12 col-sm-12 col-xs-12 zj_overflow" style="color:#999;overflow: hidden;
white-space: nowrap;
text-overflow: ellipsis; width:200px;"><small><nobr>'.substr($result['about'],0,50).'</nobr></small></div>
    </div>
</div>

<div class="col-md-3 col-sm-3 col-xs-3" style=" margin-left:-20px;"><a class="btn btn-default btn-lg zj_down" style="margin-top:10px;" href="game?gameid='.$result['gameid'].'" role="button">开始</a></div>
</td></tr>';
    }

}
?>

</table>
</div>
</div>
</div>

<?php
include ('bottom.php');
?>



</body>
</html>
