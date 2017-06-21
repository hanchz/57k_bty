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
	.zj_overflow{overflow:hidden;text-overflow:ellipsis; width:70%;height:20px;line-height:20px;vertical-align:middle;}
</style>
<body>

<?php
//var_dump($news)
?>
<div class="container-fluid">
<div class="row">
<div class="col-md-12 col-sm-12 col-xs-12">
<table class="table" style="border-bottom:1px solid #e7eaf1;">
<tr><td style=" padding:5px 2px;">
<div class="col-md-8 col-sm-8 col-xs-8 zj_overflow" ><nobr>新闻标题新闻dsssssssss标题新题新闻标题</nobr></div>
<div class="col-md-3 col-sm-3 col-xs-3" style="color:#999"><small>2015-05-12</small></div>
</td></tr>
<tr><td style=" padding:5px 2px;">
<div class="col-md-8 col-sm-8 col-xs-8 zj_overflow" ><nobr>新闻标题新闻dsssssssss标题新题新闻标题</nobr></div>
<div class="col-md-3 col-sm-3 col-xs-3" style="color:#999"><small>2015-05-12</small></div>
</td></tr>
<tr><td style=" padding:5px 2px;">
<div class="col-md-8 col-sm-8 col-xs-8 zj_overflow" ><nobr>新闻标题新闻dsssssssss标题新题新闻标题</nobr></div>
<div class="col-md-3 col-sm-3 col-xs-3" style="color:#999"><small>2015-05-12</small></div>
</td></tr>
<tr><td style=" padding:5px 2px;">
<div class="col-md-8 col-sm-8 col-xs-8 zj_overflow" ><nobr>新闻标题新闻dsssssssss标题新题新闻标题</nobr></div>
<div class="col-md-3 col-sm-3 col-xs-3" style="color:#999"><small>2015-05-12</small></div>
</td></tr>
<tr><td style=" padding:5px 2px;">
<div class="col-md-8 col-sm-8 col-xs-8 zj_overflow" ><nobr>新闻标题新闻dsssssssss标题新题新闻标题</nobr></div>
<div class="col-md-3 col-sm-3 col-xs-3" style="color:#999"><small>2015-05-12</small></div>
</td></tr>
<?php
if(count($news)>0){
    foreach ($news as $val)
    {
        echo '<tr><td style=" padding:5px 2px;">
<div class="col-md-8 col-sm-8 col-xs-8 zj_overflow" ><nobr>'.$val['title'].'</nobr></div>
<div class="col-md-3 col-sm-3 col-xs-3" style="color:#999"><small>'.substr($val['addtime'],5,5).'</small></div>
</td></tr>';

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
