<?php
$this->load->helper('url');
?>
<!DOCTYPE html>
<html lang="zh-CN">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <script src="https://cdn.bootcss.com/jquery/1.12.4/jquery.min.js"></script>

<!-- 最新版本的 Bootstrap 核心 CSS 文件 -->
<link rel="stylesheet" href="https://cdn.bootcss.com/bootstrap/3.3.7/css/bootstrap.min.css" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">

<!-- 最新的 Bootstrap 核心 JavaScript 文件 -->
<script src="https://cdn.bootcss.com/bootstrap/3.3.7/js/bootstrap.min.js" integrity="sha384-Tc5IQib027qvyjSMfHjOMaLkfuWVxZxUPnCJA7l2mCWNIpG9mGCD8wGNIcPD7Txa" crossorigin="anonymous"></script>

<script type="text/javascript" src="<?php echo base_url()?>bootstrap-3.3.7-dist/move.js"></script>

<title>无标题文档</title>
</head>
<style>

	.zj_down{border:1px solid #ff3a25; color:#ff3a25}
	.zj_di{ background:#FFF; margin:10px 10px; border-radius: 10px; padding:15px;  }
	
	
	.roll { width: 100%; height: auto; margin: 10px auto 0; position: relative; }
.roll .wrap { width: 100%; height: 333px; margin: 0 auto; position: relative; overflow: hidden; }
.roll ul { position: absolute; top: 0; left: 0; }
.roll li { float: left; width: 200px; height: 333px; text-align: center; list-style:none; margin:5px; }
.roll li img{ width:200px; height:333px;}
</style>
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


<div class="container-fluid" style=" background:#e7eaf1;position:fixed; bottom:0px; width:100%" >
	<div class="row">
    <div class="col-md-12 col-sm-12 col-xs-12" style="color:#999; text-align:center; margin-top:5px;">客服电话：18515635581</div>
    </div>
    <div class="row">
    <div class="col-md-12 col-sm-12 col-xs-12" style="color:#999;text-align:center; margin-top:5px;">客服QQ:2453458109</div>
    </div>
    <div class="row">
    <div class="col-md-12 col-sm-12 col-xs-12" style="color:#999;text-align:center; margin-top:5px;">京ICP设备号11003178号 57k手游网版权所有</div>
    </div>

</div>


</body>
</html>
