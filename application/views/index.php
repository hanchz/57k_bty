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
<title>无标题文档</title>
</head>
<style>
	
	.zj_down{border:1px solid #ff3a25; color:#ff3a25}
	.zj_di{ background:#FFF; margin:10px 10px; border-radius: 10px; padding:10px;  }
</style>
<body>

    111
    <div class="container">
        <div class="row" style="padding:10px 0px;">        
            	<div class="col-md-2 col-sm-2 col-xs-2"><img src="<?php echo base_url()?>images/57klogo.jpg" class="img-responsive" style="margin-left:10px;" ></div>
            	<div class="col-md-8 col-sm-8 col-xs-8">
                     	<form action="" method="get">
                	 <div class="input-group">
                     <span class="input-group-btn">
      			     <img src="<?php echo base_url()?>images/sou.png" class="btn btn-default" style="border-bottom-left-radius:75px; border-top-left-radius:75px; background:#e8e8e8;">
                     	
                     </span>
               		 <input type="text" class="form-control" id="name" placeholder="s" style="background:#e8e8e8; border-bottom-right-radius:75px; border-top-right-radius:75px;">
                     
                	 </div>
                     </form>
                </div>                
            	<div class="col-md-2 col-sm-2 col-xs-2"><a href="login_user"><img src="<?php echo base_url()?>images/user.jpg" class="img-responsive" style="margin-left:-10px;"></a></div>
        </div>
    </div>  

    <!--幻灯-->
    <div id="carousel-example-generic" class="carousel slide" data-ride="carousel">
  <!-- Indicators -->
  <ol class="carousel-indicators">
    <li data-target="#carousel-example-generic" data-slide-to="0" class="active"></li>
    <li data-target="#carousel-example-generic" data-slide-to="1"></li>
  </ol>

  <!-- Wrapper for slides -->
  <div class="carousel-inner" role="listbox">
    <div class="item active">
      <img src="<?php echo base_url()?>images/huandeng.jpg" alt="...">
      <div class="carousel-caption">
      </div>
    </div>
    <div class="item">
      <img src="<?php echo base_url()?>images/huandeng.jpg" alt="...">
      <div class="carousel-caption">
      </div>
    </div>
  </div>

  <!-- Controls -->
  <a class="left carousel-control" href="#carousel-example-generic" role="button" data-slide="prev">
    <span class="glyphicon glyphicon-chevron-left" aria-hidden="true"></span>
    <span class="sr-only">Previous</span>
  </a>
  <a class="right carousel-control" href="#carousel-example-generic" role="button" data-slide="next">
    <span class="glyphicon glyphicon-chevron-right" aria-hidden="true"></span>
    <span class="sr-only">Next</span>
  </a>
</div>

  
<div class="container-fluid" >
    <div class="row">
		 <!--<img src="<?php echo base_url()?>images/dh.jpg" usemap="#Map" class="img-responsive" >
         <map name="Map">
           <area shape="rect" coords="66,14,222,190" href="#1">
           <area shape="rect" coords="339,19,472,185" href="#2">
           <area shape="rect" coords="618,20,729,182" href="#3">
           <area shape="rect" coords="894,16,1030,189" href="#4">
         </map>-->
         <div class="col-md-3 col-sm-3 col-xs-3"><a href="top10"><img src="<?php echo base_url()?>images/rebang.jpg" class="img-responsive" ></a></div>
         <div class="col-md-3 col-sm-3 col-xs-3"><a href="kf"><img src="<?php echo base_url()?>images/kaifubiao.jpg" class="img-responsive" ></a></div>
         <div class="col-md-3 col-sm-3 col-xs-3"><a href="gifts"><img src="<?php echo base_url()?>images/libao.jpg" class="img-responsive" ></a></div>
         <div class="col-md-3 col-sm-3 col-xs-3"><a href="newslist"><img src="<?php echo base_url()?>images/zixun.jpg" class="img-responsive" ></a></div>
  </div>
  </div>

<div class="container-fluid" style=" height:10px; background:#e7eaf1;" ></div>

<div class="container-fluid" >
	<div class="row">
  	<div class="col-md-4" style="margin-top:5px;"><strong>精品推荐</strong></div>
 	</div>
</div>

<div class="container-fluid" style="margin-bottom:10px;" >
	<div class="row">
  		<div class="col-md-3 col-sm-3 col-xs-3">
    		<div class="row"><div class="col-md-12 col-sm-12 col-xs-12"><img src="<?php echo base_url()?>images/gamelogo.png" class="img-responsive"></div></div>
    		<div class="row"><div class="col-md-12 col-sm-12 col-xs-12">战术大师</div></div>
    		<div class="row"><div class="col-md-12 col-sm-12 col-xs-12"><small style="color:#929191">冒险 200.6M</small></div></div>
    		<div class="row"><div class="col-md-12 col-sm-12 col-xs-12"><a class="btn btn-default btn-lg btn-block zj_down" href="gameinfo" role="button">下载</a></div></div>
    	</div>
        
        <div class="col-md-3 col-sm-3 col-xs-3">
    		<div class="row"><div class="col-md-12 col-sm-12 col-xs-12"><img src="<?php echo base_url()?>images/gamelogo.png" class="img-responsive"></div></div>
    		<div class="row"><div class="col-md-12 col-sm-12 col-xs-12">战术大师</div></div>
    		<div class="row"><div class="col-md-12 col-sm-12 col-xs-12"><small style="color:#929191">冒险 200.6M</small></div></div>
    		<div class="row"><div class="col-md-12 col-sm-12 col-xs-12"><a class="btn btn-default btn-lg btn-block zj_down" href="gameinfo" role="button">下载</a></div></div>
    	</div>
        
        <div class="col-md-3 col-sm-3 col-xs-3">
    		<div class="row"><div class="col-md-12 col-sm-12 col-xs-12"><img src="<?php echo base_url()?>images/gamelogo.png" class="img-responsive"></div></div>
    		<div class="row"><div class="col-md-12 col-sm-12 col-xs-12">战术大师</div></div>
    		<div class="row"><div class="col-md-12 col-sm-12 col-xs-12"><small style="color:#929191">冒险 200.6M</small></div></div>
    		<div class="row"><div class="col-md-12 col-sm-12 col-xs-12"><a class="btn btn-default btn-lg btn-block zj_down" href="gameinfo" role="button">下载</a></div></div>
    	</div>
        
       <div class="col-md-3 col-sm-3 col-xs-3">
    		<div class="row"><div class="col-md-12 col-sm-12 col-xs-12"><img src="<?php echo base_url()?>images/gamelogo.png" class="img-responsive"></div></div>
    		<div class="row"><div class="col-md-12 col-sm-12 col-xs-12">战术大师</div></div>
    		<div class="row"><div class="col-md-12 col-sm-12 col-xs-12"><small style="color:#929191">冒险 200.6M</small></div></div>
    		<div class="row"><div class="col-md-12 col-sm-12 col-xs-12"><a class="btn btn-default btn-lg btn-block zj_down" href="gameinfo" role="button">下载</a></div></div>
    	</div>
 	</div>
</div>

<div class="container-fluid" style=" height:10px; background:#e7eaf1;" ></div>


<div class="container-fluid" style="background:url(<?php echo base_url()?>images/rq_bg.jpg) no-repeat; background-size:100% 100%;" >
<div class="row" style=" text-align:center; padding:5px 0px; color:#FFF"><div class="col-md-12 col-sm-12 col-xs-12" ><strong>&nbsp;</strong></div></div>
	<div class="row">
  		<div class="col-md-3 col-sm-3 col-xs-3 zj_di" style="margin-left:30px">
    		<div class="row"><div class="col-md-12 col-sm-12 col-xs-12"><img src="<?php echo base_url()?>images/gamelogo.png" class="img-responsive"></div></div>
    		<div class="row"><div class="col-md-12 col-sm-12 col-xs-12">战术大师</div></div>
    		<div class="row"><div class="col-md-12 col-sm-12 col-xs-12"><small style="color:#929191">冒险 200.6M</small></div></div>
    		<div class="row"><div class="col-md-12 col-sm-12 col-xs-12"><a class="btn btn-default btn-lg btn-block zj_down" href="gameinfo" role="button">下载</a></div></div>
    	</div>
        
        <div class="col-md-3 col-sm-3 col-xs-3 zj_di">
    		<div class="row"><div class="col-md-12 col-sm-12 col-xs-12"><img src="<?php echo base_url()?>images/gamelogo.png" class="img-responsive"></div></div>
    		<div class="row"><div class="col-md-12 col-sm-12 col-xs-12">战术大师</div></div>
    		<div class="row"><div class="col-md-12 col-sm-12 col-xs-12"><small style="color:#929191">冒险 200.6M</small></div></div>
    		<div class="row"><div class="col-md-12 col-sm-12 col-xs-12"><a class="btn btn-default btn-lg btn-block zj_down" href="gameinfo" role="button">下载</a></div></div>
    	</div>
        
        <div class="col-md-3 col-sm-3 col-xs-3 zj_di">
    		<div class="row"><div class="col-md-12 col-sm-12 col-xs-12"><img src="<?php echo base_url()?>images/gamelogo.png" class="img-responsive"></div></div>
    		<div class="row"><div class="col-md-12 col-sm-12 col-xs-12">战术大师</div></div>
    		<div class="row"><div class="col-md-12 col-sm-12 col-xs-12"><small style="color:#929191">冒险 200.6M</small></div></div>
    		<div class="row"><div class="col-md-12 col-sm-12 col-xs-12"><a class="btn btn-default btn-lg btn-block zj_down" href="gameinfo" role="button">下载</a></div></div>
    	</div>
 	</div>

</div>

<div class="container-fluid">
<div class="row">
<div class="col-md-12 col-sm-12 col-xs-12">
<table class="table">
<tr><td style=" padding:5px 2px;">
<div class="col-md-3 col-sm-3 col-xs-3"><img src="<?php echo base_url()?>images/gamelogo.png" class="img-responsive"></div>
<div class="col-md-6 col-sm-6 col-xs-6">
	<div class="row">
    	<div class="col-md-6 col-sm-6 col-xs-6"><strong>战术大师</strong></div>
        <div class="col-md-6 col-sm-6 col-xs-6"><button type="button" class="btn btn-default btn-xs disabled" style="color:#0CF; border:2px solid #0CF">礼包 X 3</button>        </div>
    </div>
    <div class="row">
    <div class="col-md-12 col-sm-12 col-xs-12" style="color:#999"><small>冒险|3423次下载</small></div>
    </div>
    <div class="row">
    <div class="col-md-12 col-sm-12 col-xs-12" style="color:#999"><small><nobr>一款大师傅dfffffdsfdsfdsfsfsdfsf电费.....</nobr></small></div>
    </div>
</div>
<div class="col-md-3 col-sm-3 col-xs-3"><a class="btn btn-default btn-lg zj_down" style="margin-top:10px;" href="gameinfo" role="button">下载</a></div>
</td></tr>
<tr><td style=" padding:5px 2px;">
<div class="col-md-3 col-sm-3 col-xs-3"><img src="<?php echo base_url()?>images/gamelogo.png" class="img-responsive"></div>
<div class="col-md-6 col-sm-6 col-xs-6">
	<div class="row">
    	<div class="col-md-6 col-sm-6 col-xs-6"><strong>战术大师</strong></div>
        <div class="col-md-6 col-sm-6 col-xs-6"><button type="button" class="btn btn-default btn-xs disabled" style="color:#0CF; border:2px solid #0CF">礼包 X 3</button>        </div>
    </div>
    <div class="row">
    <div class="col-md-12 col-sm-12 col-xs-12" style="color:#999"><small>冒险|3423次下载</small></div>
    </div>
    <div class="row">
    <div class="col-md-12 col-sm-12 col-xs-12" style="color:#999"><small><nobr>一款大师傅dfffffdsfdsfdsfsfsdfsf电费.....</nobr></small></div>
    </div>
</div>
<div class="col-md-3 col-sm-3 col-xs-3"><a class="btn btn-default btn-lg zj_down" style="margin-top:10px;" href="gameinfo" role="button">下载</a></div>
</td></tr>

<tr><td style=" padding:5px 2px;">
<div class="col-md-3 col-sm-3 col-xs-3"><img src="<?php echo base_url()?>images/gamelogo.png" class="img-responsive"></div>
<div class="col-md-6 col-sm-6 col-xs-6">
	<div class="row">
    	<div class="col-md-6 col-sm-6 col-xs-6"><strong>战术大师</strong></div>
        <div class="col-md-6 col-sm-6 col-xs-6"><button type="button" class="btn btn-default btn-xs disabled" style="color:#0CF; border:2px solid #0CF">礼包 X 3</button>        </div>
    </div>
    <div class="row">
    <div class="col-md-12 col-sm-12 col-xs-12" style="color:#999"><small>冒险|3423次下载</small></div>
    </div>
    <div class="row">
    <div class="col-md-12 col-sm-12 col-xs-12" style="color:#999"><small><nobr>一款大师傅dfffffdsfdsfdsfsfsdfsf电费.....</nobr></small></div>
    </div>
</div>
<div class="col-md-3 col-sm-3 col-xs-3"><a class="btn btn-default btn-lg zj_down" style="margin-top:10px;" href="gameinfo" role="button">下载</a></div>
</td></tr>

<tr><td style=" padding:5px 2px;">
<div class="col-md-3 col-sm-3 col-xs-3"><img src="<?php echo base_url()?>images/gamelogo.png" class="img-responsive"></div>
<div class="col-md-6 col-sm-6 col-xs-6">
	<div class="row">
    	<div class="col-md-6 col-sm-6 col-xs-6"><strong>战术大师</strong></div>
        <div class="col-md-6 col-sm-6 col-xs-6"><button type="button" class="btn btn-default btn-xs disabled" style="color:#0CF; border:2px solid #0CF">礼包 X 3</button>        </div>
    </div>
    <div class="row">
    <div class="col-md-12 col-sm-12 col-xs-12" style="color:#999"><small>冒险|3423次下载</small></div>
    </div>
    <div class="row">
    <div class="col-md-12 col-sm-12 col-xs-12" style="color:#999"><small><nobr>一款大师傅dfffffdsfdsfdsfsfsdfsf电费.....</nobr></small></div>
    </div>
</div>
<div class="col-md-3 col-sm-3 col-xs-3"><a class="btn btn-default btn-lg zj_down" style="margin-top:10px;" href="gameinfo" role="button">下载</a></div>
</td></tr>

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
    <div class="col-md-2 col-sm-2 col-xs-2" style="color:#999; margin-right:10px;"><a class="btn btn-default btn-lg zj_down" style="margin-top:10px;" href="#" role="button">卡牌</a></div>
    <div class="col-md-2 col-sm-2 col-xs-2" style="color:#999; margin-right:10px;"><a class="btn btn-default btn-lg zj_down" style="margin-top:10px;" href="#" role="button">卡牌</a></div>
        <div class="col-md-2 col-sm-2 col-xs-2" style="color:#999; margin-right:10px;"><a class="btn btn-default btn-lg zj_down" style="margin-top:10px;" href="#" role="button">卡牌</a></div>    
        <div class="col-md-2 col-sm-2 col-xs-2" style="color:#999; margin-right:10px;"><a class="btn btn-default btn-lg zj_down" style="margin-top:10px;" href="#" role="button">卡牌</a></div>   
        <div class="col-md-2 col-sm-2 col-xs-2" style="color:#999; margin-right:10px;"><a class="btn btn-default btn-lg zj_down" style="margin-top:10px;" href="#" role="button">卡牌</a></div>
    </div>
    <div class="row" style="margin-bottom:20px;">
    <div class="col-md-2 col-sm-2 col-xs-2" style="color:#999; margin-right:10px;"><a class="btn btn-default btn-lg zj_down" style="margin-top:10px;" href="#" role="button">卡牌</a></div>
    <div class="col-md-2 col-sm-2 col-xs-2" style="color:#999; margin-right:10px;"><a class="btn btn-default btn-lg zj_down" style="margin-top:10px;" href="#" role="button">卡牌</a></div>
        <div class="col-md-2 col-sm-2 col-xs-2" style="color:#999; margin-right:10px;"><a class="btn btn-default btn-lg zj_down" style="margin-top:10px;" href="#" role="button">卡牌</a></div>    
        <div class="col-md-2 col-sm-2 col-xs-2" style="color:#999; margin-right:10px;"><a class="btn btn-default btn-lg zj_down" style="margin-top:10px;" href="#" role="button">卡牌</a></div>   
        <div class="col-md-2 col-sm-2 col-xs-2" style="color:#999; margin-right:10px;"><a class="btn btn-default btn-lg zj_down" style="margin-top:10px;" href="#" role="button">卡牌</a></div>
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

</div>


</body>
</html>
