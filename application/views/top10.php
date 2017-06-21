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
    .zj_overflow{overflow:hidden;text-overflow:ellipsis; width:100%;height:20px;line-height:20px;vertical-align:middle;color:#999;}

</style>
<body>

<?php //var_dump($top)?>
<div class="container-fluid">
<div class="row">
<div class="col-md-12 col-sm-12 col-xs-12">
<table class="table">
<tr><td style=" padding:5px 2px;">
<div class="col-md-1 col-sm-1 col-xs-1" style="line-height:60px; vertical-align:middle; color:red;">1.</div>
<div class="col-md-3 col-sm-3 col-xs-3"  style=" margin-left:-10px;"><img src="<?php echo base_url()?>images/gamelogo.png" class="img-responsive"></div>
<div class="col-md-6 col-sm-6 col-xs-6"  style=" margin-left:-20px;">
	<div class="row">
    	<div class="col-md-6 col-sm-6 col-xs-6"><strong>战术大师</strong></div>
        <div class="col-md-3 col-sm-3 col-xs-3"><button type="button" class="btn btn-default btn-xs disabled" style="color:#0CF; border:2px solid #0CF">礼包 X 3</button>        </div>
    </div>
    <div class="row">
    <div class="col-md-12 col-sm-12 col-xs-12" style="color:#999"><small>冒险|3423次下载</small></div>
    </div>
    <div class="row">
    <div class="col-md-12 col-sm-12 col-xs-12 zj_overflow"><small><nobr>一款大师傅dfffffdsfds电费.....</nobr></small></div>
    </div>
</div>
<div class="col-md-3 col-sm-3 col-xs-3" style=" margin-left:-20px;"><a class="btn btn-default btn-lg zj_down" style="margin-top:10px;" href="gameinfo" role="button">下载</a></div>
</td></tr>
<tr><td style=" padding:5px 2px;">
<div class="col-md-1 col-sm-1 col-xs-1" style="line-height:60px; vertical-align:middle; color:#F63;">2.</div>
<div class="col-md-3 col-sm-3 col-xs-3"  style=" margin-left:-10px;"><img src="<?php echo base_url()?>images/gamelogo.png" class="img-responsive"></div>
<div class="col-md-6 col-sm-6 col-xs-6"  style=" margin-left:-20px;">
	<div class="row">
    	<div class="col-md-6 col-sm-6 col-xs-6"><strong>战术大师</strong></div>
        <div class="col-md-3 col-sm-3 col-xs-3"><button type="button" class="btn btn-default btn-xs disabled" style="color:#0CF; border:2px solid #0CF">礼包 X 3</button>        </div>
    </div>
    <div class="row">
    <div class="col-md-12 col-sm-12 col-xs-12" style="color:#999"><small>冒险|3423次下载</small></div>
    </div>
    <div class="row">
    <div class="col-md-12 col-sm-12 col-xs-12 zj_overflow"><small><nobr>一款大师傅dfffffdsfds电费.....</nobr></small></div>
    </div>
</div>
<div class="col-md-3 col-sm-3 col-xs-3" style=" margin-left:-20px;"><a class="btn btn-default btn-lg zj_down" style="margin-top:10px;" href="gameinfo" role="button">下载</a></div>
</td></tr>

<tr><td style=" padding:5px 2px;">
<div class="col-md-1 col-sm-1 col-xs-1" style="line-height:60px; vertical-align:middle; color:#F93;">3.</div>
<div class="col-md-3 col-sm-3 col-xs-3"  style=" margin-left:-10px;"><img src="<?php echo base_url()?>images/gamelogo.png" class="img-responsive"></div>
<div class="col-md-6 col-sm-6 col-xs-6"  style=" margin-left:-20px;">
	<div class="row">
    	<div class="col-md-6 col-sm-6 col-xs-6"><strong>战术大师</strong></div>
        <div class="col-md-3 col-sm-3 col-xs-3"><button type="button" class="btn btn-default btn-xs disabled" style="color:#0CF; border:2px solid #0CF">礼包 X 3</button>        </div>
    </div>
    <div class="row">
    <div class="col-md-12 col-sm-12 col-xs-12" style="color:#999"><small>冒险|3423次下载</small></div>
    </div>
    <div class="row">
    <div class="col-md-12 col-sm-12 col-xs-12 zj_overflow"><small><nobr>一款大师傅dfffffdsfds电费.....</nobr></small></div>
    </div>
</div>
<div class="col-md-3 col-sm-3 col-xs-3" style=" margin-left:-20px;"><a class="btn btn-default btn-lg zj_down" style="margin-top:10px;" href="gameinfo" role="button">下载</a></div>
</td></tr>

<tr><td style=" padding:5px 2px;">
<div class="col-md-1 col-sm-1 col-xs-1" style="line-height:60px; vertical-align:middle;">4.</div>
<div class="col-md-3 col-sm-3 col-xs-3"  style=" margin-left:-10px;"><img src="<?php echo base_url()?>images/gamelogo.png" class="img-responsive"></div>
<div class="col-md-6 col-sm-6 col-xs-6"  style=" margin-left:-20px;">
	<div class="row">
    	<div class="col-md-6 col-sm-6 col-xs-6"><strong>战术大师</strong></div>
        <div class="col-md-3 col-sm-3 col-xs-3"><button type="button" class="btn btn-default btn-xs disabled" style="color:#0CF; border:2px solid #0CF">礼包 X 3</button>        </div>
    </div>
    <div class="row">
    <div class="col-md-12 col-sm-12 col-xs-12" style="color:#999"><small>冒险|3423次下载</small></div>
    </div>
    <div class="row">
    <div class="col-md-12 col-sm-12 col-xs-12 zj_overflow"><small><nobr>一款大师傅dfffffdsfds电费.....</nobr></small></div>
    </div>
</div>
<div class="col-md-3 col-sm-3 col-xs-3" style=" margin-left:-20px;"><a class="btn btn-default btn-lg zj_down" style="margin-top:10px;" href="gameinfo" role="button">下载</a></div>
</td></tr>

<tr><td style=" padding:5px 2px;">
<div class="col-md-1 col-sm-1 col-xs-1" style="line-height:60px; vertical-align:middle;">5.</div>
<div class="col-md-3 col-sm-3 col-xs-3"  style=" margin-left:-10px;"><img src="<?php echo base_url()?>images/gamelogo.png" class="img-responsive"></div>
<div class="col-md-6 col-sm-6 col-xs-6"  style=" margin-left:-20px;">
	<div class="row">
    	<div class="col-md-6 col-sm-6 col-xs-6"><strong>战术大师</strong></div>
        <div class="col-md-3 col-sm-3 col-xs-3"><button type="button" class="btn btn-default btn-xs disabled" style="color:#0CF; border:2px solid #0CF">礼包 X 3</button>        </div>
    </div>
    <div class="row">
    <div class="col-md-12 col-sm-12 col-xs-12" style="color:#999"><small>冒险|3423次下载</small></div>
    </div>
    <div class="row">
    <div class="col-md-12 col-sm-12 col-xs-12 zj_overflow"><small><nobr>一款大师傅dfffffdsfds电费.....</nobr></small></div>
    </div>
</div>
<div class="col-md-3 col-sm-3 col-xs-3" style=" margin-left:-20px;"><a class="btn btn-default btn-lg zj_down" style="margin-top:10px;" href="gameinfo" role="button">下载</a></div>
</td></tr>

<tr><td style=" padding:5px 2px;">
<div class="col-md-1 col-sm-1 col-xs-1" style="line-height:60px; vertical-align:middle;">6.</div>
<div class="col-md-3 col-sm-3 col-xs-3"  style=" margin-left:-10px;"><img src="<?php echo base_url()?>images/gamelogo.png" class="img-responsive"></div>
<div class="col-md-6 col-sm-6 col-xs-6"  style=" margin-left:-20px;">
	<div class="row">
    	<div class="col-md-6 col-sm-6 col-xs-6"><strong>战术大师</strong></div>
        <div class="col-md-3 col-sm-3 col-xs-3"><button type="button" class="btn btn-default btn-xs disabled" style="color:#0CF; border:2px solid #0CF">礼包 X 3</button>        </div>
    </div>
    <div class="row">
    <div class="col-md-12 col-sm-12 col-xs-12" style="color:#999"><small>冒险|3423次下载</small></div>
    </div>
    <div class="row">
    <div class="col-md-12 col-sm-12 col-xs-12 zj_overflow"><small><nobr>一款大师傅dfffffdsfds电费.....</nobr></small></div>
    </div>
</div>
<div class="col-md-3 col-sm-3 col-xs-3" style=" margin-left:-20px;"><a class="btn btn-default btn-lg zj_down" style="margin-top:10px;" href="gameinfo" role="button">下载</a></div>
</td></tr>

<tr><td style=" padding:5px 2px;">
<div class="col-md-1 col-sm-1 col-xs-1" style="line-height:60px; vertical-align:middle;">7.</div>
<div class="col-md-3 col-sm-3 col-xs-3"  style=" margin-left:-10px;"><img src="<?php echo base_url()?>images/gamelogo.png" class="img-responsive"></div>
<div class="col-md-6 col-sm-6 col-xs-6"  style=" margin-left:-20px;">
	<div class="row">
    	<div class="col-md-6 col-sm-6 col-xs-6"><strong>战术大师</strong></div>
        <div class="col-md-3 col-sm-3 col-xs-3"><button type="button" class="btn btn-default btn-xs disabled" style="color:#0CF; border:2px solid #0CF">礼包 X 3</button>        </div>
    </div>
    <div class="row">
    <div class="col-md-12 col-sm-12 col-xs-12" style="color:#999"><small>冒险|3423次下载</small></div>
    </div>
    <div class="row">
    <div class="col-md-12 col-sm-12 col-xs-12 zj_overflow"><small><nobr>一款大师傅dfffffdsfds电费.....</nobr></small></div>
    </div>
</div>
<div class="col-md-3 col-sm-3 col-xs-3" style=" margin-left:-20px;"><a class="btn btn-default btn-lg zj_down" style="margin-top:10px;" href="gameinfo" role="button">下载</a></div>
</td></tr>

<tr><td style=" padding:5px 2px;">
<div class="col-md-1 col-sm-1 col-xs-1" style="line-height:60px; vertical-align:middle;">8.</div>
<div class="col-md-3 col-sm-3 col-xs-3"  style=" margin-left:-10px;"><img src="<?php echo base_url()?>images/gamelogo.png" class="img-responsive"></div>
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
    	<div class="col-md-6 col-sm-6 col-xs-6"><strong>战术大师</strong></div>
    	<div class="col-md-6 col-sm-6 col-xs-6"><strong>'.$result['name'].'</strong></div>
        <div class="col-md-3 col-sm-3 col-xs-3"><button type="button" class="btn btn-default btn-xs disabled" style="color:#0CF; border:2px solid #0CF">礼包 X 3</button>        </div>
    </div>
    <div class="row">
    <div class="col-md-12 col-sm-12 col-xs-12" style="color:#999"><small>冒险|3423次下载</small></div>
    <div class="col-md-12 col-sm-12 col-xs-12" style="color:#999"><small>'.$result['gametype'].'|'.$result['downnum'].'次下载</small></div>
    </div>
    <div class="row">
    <div class="col-md-12 col-sm-12 col-xs-12 zj_overflow"><small><nobr>一款大师傅dfffffdsfds电费.....</nobr></small></div>
    <div class="col-md-12 col-sm-12 col-xs-12 zj_overflow"><small><nobr>'.$result['about'].'</nobr></small></div>
    </div>
</div>
<div class="col-md-3 col-sm-3 col-xs-3" style=" margin-left:-20px;"><a class="btn btn-default btn-lg zj_down" style="margin-top:10px;" href="gameinfo" role="button">下载</a></div>
</td></tr>
<div class="col-md-3 col-sm-3 col-xs-3" style=" margin-left:-20px;"><a class="btn btn-default btn-lg zj_down" style="margin-top:10px;" href="game?gameid='.$result['id'].'" role="button">下载</a></div>
</td></tr>';
    }

<tr><td style=" padding:5px 2px;">
<div class="col-md-1 col-sm-1 col-xs-1" style="line-height:60px; vertical-align:middle;">9.</div>
<div class="col-md-3 col-sm-3 col-xs-3"  style=" margin-left:-10px;"><img src="<?php echo base_url()?>images/gamelogo.png" class="img-responsive"></div>
<div class="col-md-6 col-sm-6 col-xs-6"  style=" margin-left:-20px;">
	<div class="row">
    	<div class="col-md-6 col-sm-6 col-xs-6"><strong>战术大师</strong></div>
        <div class="col-md-3 col-sm-3 col-xs-3"><button type="button" class="btn btn-default btn-xs disabled" style="color:#0CF; border:2px solid #0CF">礼包 X 3</button>        </div>
    </div>
    <div class="row">
    <div class="col-md-12 col-sm-12 col-xs-12" style="color:#999"><small>冒险|3423次下载</small></div>
    </div>
    <div class="row">
    <div class="col-md-12 col-sm-12 col-xs-12 zj_overflow"><small><nobr>一款大师傅dfffffdsfds电费.....</nobr></small></div>
    </div>
</div>
<div class="col-md-3 col-sm-3 col-xs-3" style=" margin-left:-20px;"><a class="btn btn-default btn-lg zj_down" style="margin-top:10px;" href="gameinfo" role="button">下载</a></div>
</td></tr>
}
?>

<tr><td style=" padding:5px 2px;">
<div class="col-md-1 col-sm-1 col-xs-1" style="line-height:60px; vertical-align:middle;">10.</div>
<div class="col-md-3 col-sm-3 col-xs-3"  style=" margin-left:-10px;"><img src="<?php echo base_url()?>images/gamelogo.png" class="img-responsive"></div>
<div class="col-md-6 col-sm-6 col-xs-6"  style=" margin-left:-20px;">
	<div class="row">
    	<div class="col-md-6 col-sm-6 col-xs-6"><strong>战术大师</strong></div>
        <div class="col-md-3 col-sm-3 col-xs-3"><button type="button" class="btn btn-default btn-xs disabled" style="color:#0CF; border:2px solid #0CF">礼包 X 3</button>        </div>
    </div>
    <div class="row">
    <div class="col-md-12 col-sm-12 col-xs-12" style="color:#999"><small>冒险|3423次下载</small></div>
    </div>
    <div class="row">
    <div class="col-md-12 col-sm-12 col-xs-12 zj_overflow"><small><nobr>一款大师傅dfffffdsfds电费.....</nobr></small></div>
    </div>
</div>
<div class="col-md-3 col-sm-3 col-xs-3" style=" margin-left:-20px;"><a class="btn btn-default btn-lg zj_down" style="margin-top:10px;" href="gameinfo" role="button">下载</a></div>
</td></tr>
</table>
</div>
</div>
</div>

<div class="container-fluid" style=" background:#e7eaf1;" >
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
