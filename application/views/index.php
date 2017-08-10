<?php

include ('top.php');
?>
<body>


<?php

include ('sou.php');
?>


<div class="container-fluid" style=" height:10px; background:#e7eaf1;" ></div>

<div class="container-fluid" >
	<div class="row">
  	<div class="col-md-4" style="margin-top:5px;"><strong>精品推荐</strong></div>
 	</div>
</div>

<div class="container-fluid" style="margin-bottom:10px;" >
	<div class="row">
        <?php
        foreach ($game_jp as $key=>$v)
        {
		//通过gametype找到typename
		$params=array();
		$params['gametype']=$v['gametype'];
		$result = $this->game_model->game_type($params);
			
            echo '<div class="col-md-3 col-sm-3 col-xs-3">
    		<div class="row"><div class="col-md-12 col-sm-12 col-xs-12"><img src="'.$v['logo'].'" class="img-responsive"></div></div>
    		<div class="row"><div class="col-md-12 col-sm-12 col-xs-12">'.$v['name'].'</div></div>
    		<div class="row"><div class="col-md-12 col-sm-12 col-xs-12"><small style="color:#929191">'.$result['gametype'].'</small></div></div>
    		<div class="row"><div class="col-md-12 col-sm-12 col-xs-12"><a class="btn btn-default btn-lg btn-block zj_down" href="game?gameid='.$v['gameid'].'" role="button">开始</a></div></div>
    	</div>';
        }

        ?>
        
        
        
 	</div>
</div>

<div class="container-fluid" style=" height:10px; background:#e7eaf1;" ></div>


<div class="container-fluid" style="background:url(/images/rq_bg.jpg) no-repeat; background-size:100% 100%;" >
<div class="row" style=" text-align:center; padding:5px 0px; color:#FFF"><div class="col-md-12 col-sm-12 col-xs-12" ><strong>&nbsp;</strong></div></div>
	<div class="row">
        <?php
        foreach ($game_rq as $key=>$v)
        {

		//通过gametype找到typename
		$params=array();
		$params['gametype']=$v['gametype'];
		$result = $this->game_model->game_type($params);

            echo '<div class="col-md-3 col-sm-3 col-xs-3 zj_di" style="margin-left:20px">
    		<div class="row"><div class="col-md-12 col-sm-12 col-xs-12"><img src="'.$v['logo'].'" class="img-responsive"></div></div>
    		<div class="row"><div class="col-md-12 col-sm-12 col-xs-12">'.$v['name'].'</div></div>
    		<div class="row"><div class="col-md-12 col-sm-12 col-xs-12"><small style="color:#929191">'.$result['gametype'].'</small></div></div>
    		<div class="row"><div class="col-md-12 col-sm-12 col-xs-12"><a class="btn btn-default btn-lg btn-block zj_down" href="game?gameid='.$v['gameid'].'" role="button">开始</a></div></div>
    	</div>';
        }

        ?>


 	</div>

</div>

<div class="container-fluid">
<div class="row">
<div class="col-md-12 col-sm-12 col-xs-12">
<table class="table">

    <?php
    foreach ($game as $key=>$v)
    {
		//var_dump($game);
		//echo $v['id'];
		//通过gametype找到typename
		$params=array();
		$params['gametype']=$v['gametype'];
		$result = $this->game_model->game_type($params);
		//通过id找到礼包的种类数量
		$params['id']=$v['id'];
		$giftsnum= $this->gifts_model->giftsidnum_model($params);
		//var_dump($giftsnum);
        echo '<tr><td style=" padding:5px 2px;">
<div class="col-md-3 col-sm-3 col-xs-3"><img src="'.$v['logo'].'" class="img-responsive"></div>
<div class="col-md-6 col-sm-6 col-xs-6">
	<div class="row">
    	<div class="col-md-7 col-sm-7 col-xs-7" ><strong>'.$v['name'].'</strong></div>
        <div class="col-md-6 col-sm-6 col-xs-6" style=" float:left; margin-left:-20px;"><a href="gifts"><button type="button" class="btn btn-default btn-xs disabled" style="color:#0CF; border:2px solid #0CF">礼包 X '.$giftsnum['num'].'</button></a>        </div>
    </div>
    <div class="row">
    <div class="col-md-12 col-sm-12 col-xs-12" style="color:#999"><small>'.$result['gametype'].'|'.$v['downnum'].'次开始</small></div>
    </div>
    <div class="row">
    <div class="col-md-12 col-sm-12 col-xs-12" style="color:#999;overflow: hidden;
white-space: nowrap;
text-overflow: ellipsis; width:200px;"><small><nobr>'.substr($v['about'],0,154).'</nobr></small></div>
    </div>
</div>
<div class="col-md-3 col-sm-3 col-xs-3"><a class="btn btn-default btn-lg zj_down" style="margin-top:10px;" href="game?gameid='.$v['gameid'].'" role="button">开始</a></div>
</td></tr>';
    }
    ?>




</table>
</div>
</div>
</div>

<div class="container-fluid" style=" height:10px; background:#e7eaf1;" ></div>

<div class="container-fluid" >
	<div class="row">
  	<div class="col-md-4" style="margin-top:5px;"><strong>分类精选</strong></div>
 	</div>
    
    <div class="row">
    <?php 
		//var_dump($gametypelist);
		foreach($gametypelist as $gtl){?>
		<div class="col-md-2 col-sm-2 col-xs-2" style="color:#999; margin-right:8px;" ><a class="btn btn-default btn-lg zj_down" style="margin-top:10px;" href="sou?gametype=<?php echo $gtl['id']?>" role="button"><?php echo $gtl['gametype']?></a></div>
		<?php
		}
		?>
    </div>
    
</div>
<div style="margin-top:100px;">
<?php
include ('bottom.php');
?>
</div>

</body>
</html>
