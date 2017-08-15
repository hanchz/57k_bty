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
    		<div class="row"><div class="col-md-12 col-sm-12 col-xs-12"><a href="game?gameid='.$v['gameid'].'"><img src="'.$v['logo'].'" class="img-responsive"></a></div></div>
    		<div class="row"><div class="col-md-12 col-sm-12 col-xs-12 zj_fs" style=" width:100%;">'.$v['name'].'</div></div>
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
    		<div class="row"><div class="col-md-12 col-sm-12 col-xs-12"><a href="game?gameid='.$v['gameid'].'"><img src="'.$v['logo'].'" class="img-responsive"></a></div></div>
    		<div class="row"><div class="col-md-12 col-sm-12 col-xs-12 zj_of" style=" width:100px;">'.$v['name'].'</div></div>
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
<div class="col-md-3 col-sm-3 col-xs-3"><a href="game?gameid='.$v['gameid'].'"><img src="'.$v['logo'].'" class="img-responsive"></a></div>
<div class="col-md-6 col-sm-6 col-xs-6">
	<div class="row">
    	<div class="col-md-7 col-sm-7 col-xs-7 zj_of" style=" width:100px; margin-left:-10px;" ><strong>'.$v['name'].'</strong></div>
        <div class="col-md-6 col-sm-6 col-xs-6" style=" float:left; margin-left:-20px;"><a href="gifts"><button type="button" class="btn btn-default btn-xs disabled" style="color:#0CF; border:2px solid #0CF">礼包 X '.$giftsnum['num'].'</button></a>        </div>
    </div>
    <div class="row">
    <div class="col-md-12 col-sm-12 col-xs-12" style="color:#999;margin-left:-10px;"><small>'.$result['gametype'].'|'.$v['downnum'].'次开始</small></div>
    </div>
    <div class="row">
    <div class="col-md-12 col-sm-12 col-xs-12" style="color:#999;overflow: hidden;
white-space: nowrap;
text-overflow: ellipsis; width:200px;margin-left:-10px;"><small><nobr>'.substr($v['about'],0,50).'</nobr></small></div>
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
<div class="container-fluid" style=" background:#e7eaf1; float: left;bottom:0px; width:100%; margin-top:50px;" >
    <div class="row">
        <div class="col-md-12 col-sm-12 col-xs-12" style="text-align:center; margin-top:2px;"><a href="indexx">首页&nbsp;</a>|&nbsp;<span id="app">57k游戏APP</span>&nbsp;|<a href="gifts">&nbsp;礼包</a></div>
    </div>
    <div class="row" style="margin-top:2px;">
        <div class="col-md-12 col-sm-12 col-xs-12" style="color:#999;text-align:center; margin-top:2px;">客服QQ:2453458109</div>
    </div>
    <div class="row">
        <div class="col-md-12 col-sm-12 col-xs-12" style="color:#999;text-align:center; margin-top:2px;">57k手游网版权所有</div>
    </div>

<script type="text/javascript">
//判断访问终端   方法
var browser={
    versions:function(){
        var u = navigator.userAgent, app = navigator.appVersion;
        return {
            trident: u.indexOf('Trident') > -1, //IE内核
            presto: u.indexOf('Presto') > -1, //opera内核
            webKit: u.indexOf('AppleWebKit') > -1, //苹果、谷歌内核
            gecko: u.indexOf('Gecko') > -1 && u.indexOf('KHTML') == -1,//火狐内核
            mobile: !!u.match(/AppleWebKit.*Mobile.*/), //是否为移动终端
            ios: !!u.match(/\(i[^;]+;( U;)? CPU.+Mac OS X/), //ios终端
            android: u.indexOf('Android') > -1 || u.indexOf('Adr') > -1, //android终端
            iPhone: u.indexOf('iPhone') > -1 , //是否为iPhone或者QQHD浏览器
            iPad: u.indexOf('iPad') > -1, //是否iPad
            webApp: u.indexOf('Safari') == -1, //是否web应该程序，没有头部与底部
            weixin: u.indexOf('MicroMessenger') > -1, //是否微信 （2015-01-22新增）
            qq: u.match(/\sQQ/i) == " qq" //是否QQ
        };
    }(),
    language:(navigator.browserLanguage || navigator.language).toLowerCase()
}
//使用
//判断是否IE内核
/*if(browser.versions.trident){ alert("is IE"); }
//判断是否webKit内核
if(browser.versions.webKit){ alert("is webKit"); }
//判断是否移动端
if(browser.versions.mobile){ alert("移动端"); }
//判断是否安卓
if(browser.versions.android){ alert("安卓");}	
//判断是否ios
if(browser.versions.ios){ alert("ios")}	*/
if(browser.versions.android){ 
document.getElementById("app").innerHTML='<a href="http://wap.57k.com/">57k游戏APP</a>';
}	
if(browser.versions.ios){ 
document.getElementById("app").innerHTML='<a href="http://le890.com/">57k游戏APP</a>';
}

	
</script>

</body>
</html>
