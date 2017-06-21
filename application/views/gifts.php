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
//var_dump($gifts);
?>
<div class="container-fluid">
<div class="row">
<div class="col-md-12 col-sm-12 col-xs-12">
<table class="table" style="border-bottom:1px solid #e7eaf1;">
<<<<<<< HEAD
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
=======
>>>>>>> fadb9f797bade8e95edfbbe15cc80ec609c4a592
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
