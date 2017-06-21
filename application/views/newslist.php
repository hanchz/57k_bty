<?php
<<<<<<< HEAD
$this->load->helper('url');
=======
>>>>>>> fadb9f797bade8e95edfbbe15cc80ec609c4a592
include ('top.php');
?>
<body>
<<<<<<< HEAD

=======
>>>>>>> fadb9f797bade8e95edfbbe15cc80ec609c4a592
<?php
//var_dump($news)
?>
<div class="container-fluid">
<div class="row">
<div class="col-md-12 col-sm-12 col-xs-12">
<table class="table" style="border-bottom:1px solid #e7eaf1;">
<<<<<<< HEAD
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
=======
>>>>>>> fadb9f797bade8e95edfbbe15cc80ec609c4a592
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

<<<<<<< HEAD
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
=======
>>>>>>> fadb9f797bade8e95edfbbe15cc80ec609c4a592
<?php
include ('bottom.php');
?>



</body>
</html>
