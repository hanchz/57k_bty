<?php
$this->load->helper('url');
include ('top.php');
?>
<!DOCTYPE html>
<html lang="zh-CN">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <script src="https://cdn.bootcss.com/jquery/1.12.4/jquery.min.js"></script>

<!-- 最新版本的 Bootstrap 核心 CSS 文件 -->
<link rel="stylesheet" href="<?php echo base_url()?>bootstrap-3.3.7-dist/css/bootstrap.min.css">

<!-- 最新的 Bootstrap 核心 JavaScript 文件 -->
<script src="https://cdn.bootcss.com/bootstrap/3.3.7/js/bootstrap.min.js" integrity="sha384-Tc5IQib027qvyjSMfHjOMaLkfuWVxZxUPnCJA7l2mCWNIpG9mGCD8wGNIcPD7Txa" crossorigin="anonymous"></script>
<title>网络排行榜</title>
</head>
<style>

	
	.zj_down{border:1px solid #ff3a25; color:#ff3a25; height:30px; line-height:10px; vertical-align:middle; margin-top:10px;}
	.zj_di{ background:#FFF; margin:10px 10px; border-radius: 5px; padding:15px;  }
	.zj_overflow{color:#999;overflow:hidden;text-overflow:ellipsis; width:150px;height:20px;line-height:20px;}
</style>
<body>

<?php
//var_dump($gifts);
?>
<div class="container-fluid">
<div class="row">
<div class="col-md-12 col-sm-12 col-xs-12">
<table class="table" style="border-bottom:1px solid #e7eaf1;">
<tr><td style=" padding:5px 2px;">
<div class="col-md-3 col-sm-3 col-xs-3"  style=" margin-left:-10px;"><img src="<?php echo base_url()?>images/gamelogo.png" class="img-responsive"></div>
<div class="col-md-6 col-sm-6 col-xs-6"  style=" margin-left:-20px;">
	<div class="row">
    	<div class="col-md-12 col-sm-12 col-xs-12"><strong>战术大师: 新手礼包</strong></div>
    </div>
    <div class="row">
    <div class="col-md-12 col-sm-12 col-xs-12 zj_overflow"><small><nobr>金币*12W</nobr></small></div>
    </div>
    <div class="row">
    <div class="col-md-12 col-sm-12 col-xs-12" style="color:red"><small>剩余100个</small></div>
    </div>
</div>
<div class="col-md-3 col-sm-3 col-xs-3"><a class="btn btn-danger" style="margin-top:10px; width:80px; background:red;" href="#" role="button">领取</a></div>
</td></tr>

<tr><td style=" padding:5px 2px;">
<div class="col-md-3 col-sm-3 col-xs-3"  style=" margin-left:-10px;"><img src="<?php echo base_url()?>images/gamelogo.png" class="img-responsive"></div>
<div class="col-md-6 col-sm-6 col-xs-6"  style=" margin-left:-20px;">
	<div class="row">
    	<div class="col-md-12 col-sm-12 col-xs-12"><strong>战术大师: 新手礼包</strong></div>
    </div>
    <div class="row">
    <div class="col-md-12 col-sm-12 col-xs-12 zj_overflow"><small><nobr>金币*12W</nobr></small></div>
    </div>
    <div class="row">
    <div class="col-md-12 col-sm-12 col-xs-12" style="color:red"><small>剩余100个</small></div>
    </div>
</div>
<div class="col-md-3 col-sm-3 col-xs-3"><a class="btn btn-danger" style="margin-top:10px; width:80px; background:red;" href="#" role="button">领取</a></div>
</td></tr>

<tr><td style=" padding:5px 2px;">
<div class="col-md-3 col-sm-3 col-xs-3"  style=" margin-left:-10px;"><img src="<?php echo base_url()?>images/gamelogo.png" class="img-responsive"></div>
<div class="col-md-6 col-sm-6 col-xs-6"  style=" margin-left:-20px;">
	<div class="row">
    	<div class="col-md-12 col-sm-12 col-xs-12"><strong>战术大师: 新手礼包</strong></div>
    </div>
    <div class="row">
    <div class="col-md-12 col-sm-12 col-xs-12 zj_overflow" ><small><nobr>金币*12W</nobr></small></div>
    </div>
    <div class="row">
    <div class="col-md-12 col-sm-12 col-xs-12" style="color:red"><small>剩余100个</small></div>
    </div>
</div>
<div class="col-md-3 col-sm-3 col-xs-3"><a class="btn btn-danger" style="margin-top:10px; width:80px; background:red;" href="#" role="button">领取</a></div>
</td></tr>

<tr><td style=" padding:5px 2px;">
<div class="col-md-3 col-sm-3 col-xs-3"  style=" margin-left:-10px;"><img src="<?php echo base_url()?>images/gamelogo.png" class="img-responsive"></div>
<div class="col-md-6 col-sm-6 col-xs-6"  style=" margin-left:-20px;">
	<div class="row">
    	<div class="col-md-12 col-sm-12 col-xs-12"><strong>战术大师: 新手礼包</strong></div>
    </div>
    <div class="row">
    <div class="col-md-12 col-sm-12 col-xs-12 zj_overflow"><small><nobr>金币*12W</nobr></small></div>
    </div>
    <div class="row">
    <div class="col-md-12 col-sm-12 col-xs-12" style="color:red"><small>剩余100个</small></div>
    </div>
</div>
<div class="col-md-3 col-sm-3 col-xs-3"><a class="btn btn-danger" style="margin-top:10px; width:80px; background:red;" href="#" role="button">领取</a></div>
</td></tr>
<?php
if (count($gifts)>0){
    foreach ($gifts as $val)
    {
        $params = array();
        $params['id'] = $val['gameid'];
        $this->load->model('gifts_model');
        $gameinfo=$this->gifts_model->game_info($params);
        //var_dump($gameinfo);
        echo '
        <tr><td style=" padding:5px 2px;">
    <div class="col-md-3 col-sm-3 col-xs-3"  style=" margin-left:-10px;"><img src="'.$gameinfo['logo'].'" class="img-responsive"></div>
    <div class="col-md-6 col-sm-6 col-xs-6"  style=" margin-left:-20px;">
        <div class="row">
            <div class="col-md-12 col-sm-12 col-xs-12"><strong>'.$gameinfo['name'].':'.$val['giftsname'].'</strong></div>
        </div>
        <div class="row">
        <div class="col-md-12 col-sm-12 col-xs-12 zj_overflow"><small><nobr>'.$val['giftsinfo'].'</nobr></small></div>
        </div>
        <div class="row">
        <div class="col-md-12 col-sm-12 col-xs-12" style="color:red"><small>剩余'.$val['giftsnum'].'个</small></div>
        </div>
    </div>
    <div class="col-md-3 col-sm-3 col-xs-3"><a class="btn btn-danger" style="margin-top:10px; width:80px; background:red;" href="#" role="button">领取</a></div>
    </td></tr>
        ';

    }
}
?>

</table>
</div>
</div>
</div>

<div class="container-fluid" style=" background:#e7eaf1; position:fixed; bottom:0px; width:100%" >
	<div class="row">
    <div class="col-md-12 col-sm-12 col-xs-12" style="color:#999; text-align:center; margin-top:5px;">客服电话：18515635581</div>
    </div>
    <div class="row">
    <div class="col-md-12 col-sm-12 col-xs-12" style="color:#999;text-align:center; margin-top:5px;">客服QQ:2453458109</div>
    </div>
    <div class="row">
    <div class="col-md-12 col-sm-12 col-xs-12" style="color:#999;text-align:center; margin-top:5px;">京ICP设备号11003178号 57k手游网版权所有</div>
    </div>
<?php
include ('bottom.php');
?>

</div>


</body>
</html>
