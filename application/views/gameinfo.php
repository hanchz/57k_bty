<?php
include ('top.php');
?>
<body>
<div class="container-fluid">
<div class="row">
<div class="col-md-12 col-sm-12 col-xs-12">
<table class="table">
<tr><td style=" padding:5px 2px;">
<div class="col-md-3 col-sm-3 col-xs-3"  style=" margin-left:-10px;"><img src="<?php echo $game['logo']?>" class="img-responsive"></div>
<div class="col-md-6 col-sm-6 col-xs-6"  style=" margin-left:-20px;">
	<div class="row" style="margin-top:10px;">
    	<div class="col-md-6 col-sm-6 col-xs-6"><strong><?php echo $game['name']?></strong></div>
    </div>
    <div class="row">
    <div class="col-md-12 col-sm-12 col-xs-12" style="color:#999"><small><?php echo $game['gametype'].'|'.$game['size']?>M</small></div>
    </div>
</div>
</td></tr>
</table>
</div>
</div>


<div class="row">
<div class="col-md-5 col-sm-5 col-xs-5"><a class="btn btn-default zj_down" style=" width:170px; margin-left:10px;" href="<?php echo $game['url']?>" role="button">普通下载</a></div>

<div class="col-md-5 col-sm-5 col-xs-5"><a class="btn btn-danger" style=" width:170px; background:red; margin-left:20px;" href="<?php echo $game['url']?>" role="button">高速下载</a></div>
</div>

</div>

<div class="roll" id="roll">
    <a href="javascript:void(0);" class="btn_left" style="display:none;"></a>
    <a href="javascript:void(0);" class="btn_right" style="display:none;"></a>
    <div class="wrap">
        <ul>
            <?php
            //var_dump($game['pic']);
            $new_arr = json_decode($game['pic'], true);
            //echo $n=count($new_arr);
            foreach ($new_arr as $val)
            {
                echo '<li><img src="'.$val.'"/></li>';
            }
            ?>
        </ul>
    </div>
</div>

<div class="container-fluid" >
	<div class="row">
  	<div class="col-md-4" style="margin-top:5px;"><strong>游戏介绍</strong></div>
 	</div>
    <div class="row">
  	<div class="col-md-12 col-sm-12 col-xs-12" style="color:#999"><small><?php echo $game['about']?></small></div>
 	</div>
    
    
    
</div>


<?php
include ('bottom.php');
?>


</body>
</html>
