<?php

include ('top.php');
?>
<body>
<?php

include ('sou.php');
?>
<?php //var_dump($top)?>
<div class="container-fluid">
<div class="row">
<div class="col-md-12 col-sm-12 col-xs-12">
<table class="table">
<?php
if(count($top)>0){
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
        //var_dump($result);
        echo '<tr><td style=" padding:5px 2px;">
<div class="col-md-1 col-sm-1 col-xs-1" style="line-height:60px; vertical-align:middle; color:'.$color.';">'.$val['id'].'</div>
<div class="col-md-3 col-sm-3 col-xs-3"  style=" margin-left:-10px;"><img src="'.$result['logo'].'" class="img-responsive"></div>
<div class="col-md-6 col-sm-6 col-xs-6"  style=" margin-left:-20px;">
	<div class="row">
    	<div class="col-md-6 col-sm-6 col-xs-6"><strong>'.$result['name'].'</strong></div>
        <div class="col-md-3 col-sm-3 col-xs-3"><button type="button" class="btn btn-default btn-xs disabled" style="color:#0CF; border:2px solid #0CF">礼包 X 3</button>        </div>
    </div>
    <div class="row">

    <div class="col-md-12 col-sm-12 col-xs-12" style="color:#999"><small>'.$result['gametype'].'|'.$result['downnum'].'次开始</small></div>
    </div>
    <div class="row">
    <div class="col-md-12 col-sm-12 col-xs-12 zj_overflow" style="color:#999;overflow: hidden;
white-space: nowrap;
text-overflow: ellipsis; width:200px;"><small><nobr>'.$result['about'].'</nobr></small></div>
    </div>
</div>

<div class="col-md-3 col-sm-3 col-xs-3" style=" margin-left:-20px;"><a class="btn btn-default btn-lg zj_down" style="margin-top:10px;" href="game?gameid='.$result['id'].'" role="button">开始</a></div>
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
