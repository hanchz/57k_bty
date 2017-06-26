<?php
include ('top.php');
<<<<<<< HEAD
=======
$this->load->library('session');
//$username=$_SESSION['username'];
//echo $username;
>>>>>>> 5088077b4dacfcbbf00d26db7b4098f914154877
?>
<body>

    
    <div class="container">
        <div class="row" style="padding:10px 0px;">        
            	<div class="col-md-2 col-sm-2 col-xs-2"><img src="/images/57klogo.jpg" class="img-responsive" style="margin-left:10px;" ></div>
            	<div class="col-md-8 col-sm-8 col-xs-8">
                     	<form action="" method="get">
                	 <div class="input-group">
                     <span class="input-group-btn">
<<<<<<< HEAD
=======

>>>>>>> 5088077b4dacfcbbf00d26db7b4098f914154877
      			     <img src="/images/sou.png" class="btn btn-default" style="border-bottom-left-radius:75px; border-top-left-radius:75px; background:#e8e8e8;">
                     	
                     </span>
               		 <input type="text" class="form-control" id="name" placeholder="s" style="background:#e8e8e8; border-bottom-right-radius:75px; border-top-right-radius:75px;">
                     
                	 </div>
                     </form>
                </div>                
<<<<<<< HEAD
=======

>>>>>>> 5088077b4dacfcbbf00d26db7b4098f914154877
            	<div class="col-md-2 col-sm-2 col-xs-2"><a href="login_user"><img src="/images/user.jpg" class="img-responsive" style="margin-left:-10px;"></a></div>
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
      <?php
      //var_dump($kv);
      //exit;
      foreach($kv as $key => $k)
      {
          if($key == 0)
          {
                echo '
                <div class="item active">
                   <a href="'.$k['url'].'"><img src="'.$k['pic'].'" alt="..."></a>
                  <div class="carousel-caption">
                  </div>
                </div>
                ';
          }
          else
          {
              echo '
                <div class="item">
                  <a href="'.$k['url'].'"><img src="'.$k['pic'].'" alt="..."></a> 
                  <div class="carousel-caption">
                  </div>
                </div>
                ';
          }
      }
?>


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
<<<<<<< HEAD
=======

>>>>>>> 5088077b4dacfcbbf00d26db7b4098f914154877
</div>
  
<div class="container-fluid" >
    <div class="row">
<<<<<<< HEAD
		 <!--<img src="/images/dh.jpg" usemap="#Map" class="img-responsive" >
         <map name="Map">
           <area shape="rect" coords="66,14,222,190" href="#1">
           <area shape="rect" coords="339,19,472,185" href="#2">
           <area shape="rect" coords="618,20,729,182" href="#3">
           <area shape="rect" coords="894,16,1030,189" href="#4">
         </map>-->
=======


>>>>>>> 5088077b4dacfcbbf00d26db7b4098f914154877
         <div class="col-md-3 col-sm-3 col-xs-3"><a href="top10"><img src="/images/rebang.jpg" class="img-responsive" ></a></div>
         <div class="col-md-3 col-sm-3 col-xs-3"><a href="kf"><img src="/images/kaifubiao.jpg" class="img-responsive" ></a></div>
         <div class="col-md-3 col-sm-3 col-xs-3"><a href="gifts"><img src="/images/libao.jpg" class="img-responsive" ></a></div>
         <div class="col-md-3 col-sm-3 col-xs-3"><a href="newslist"><img src="/images/zixun.jpg" class="img-responsive" ></a></div>
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
        <?php
        foreach ($game_jp as $key=>$v)
        {
            echo '<div class="col-md-3 col-sm-3 col-xs-3">
    		<div class="row"><div class="col-md-12 col-sm-12 col-xs-12"><img src="'.$v['logo'].'" class="img-responsive"></div></div>
    		<div class="row"><div class="col-md-12 col-sm-12 col-xs-12">'.$v['name'].'</div></div>
    		<div class="row"><div class="col-md-12 col-sm-12 col-xs-12"><small style="color:#929191">'.$v['gametype'].$v['size'].'M</small></div></div>
    		<div class="row"><div class="col-md-12 col-sm-12 col-xs-12"><a class="btn btn-default btn-lg btn-block zj_down" href="game?gameid='.$v['id'].'" role="button">下载</a></div></div>
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
<<<<<<< HEAD
=======


>>>>>>> 5088077b4dacfcbbf00d26db7b4098f914154877
            echo '<div class="col-md-3 col-sm-3 col-xs-3 zj_di" style="margin-left:20px">
    		<div class="row"><div class="col-md-12 col-sm-12 col-xs-12"><img src="'.$v['logo'].'" class="img-responsive"></div></div>
    		<div class="row"><div class="col-md-12 col-sm-12 col-xs-12">'.$v['name'].'</div></div>
    		<div class="row"><div class="col-md-12 col-sm-12 col-xs-12"><small style="color:#929191">'.$v['gametype'].$v['size'].'M</small></div></div>
    		<div class="row"><div class="col-md-12 col-sm-12 col-xs-12"><a class="btn btn-default btn-lg btn-block zj_down" href="game?gameid='.$v['id'].'" role="button">下载</a></div></div>
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
        echo '<tr><td style=" padding:5px 2px;">
<div class="col-md-3 col-sm-3 col-xs-3"><img src="'.$v['logo'].'" class="img-responsive"></div>
<div class="col-md-6 col-sm-6 col-xs-6">
	<div class="row">
    	<div class="col-md-6 col-sm-6 col-xs-6"><strong>'.$v['name'].'</strong></div>
        <div class="col-md-6 col-sm-6 col-xs-6"><button type="button" class="btn btn-default btn-xs disabled" style="color:#0CF; border:2px solid #0CF">礼包 X 3</button>        </div>
    </div>
    <div class="row">
    <div class="col-md-12 col-sm-12 col-xs-12" style="color:#999"><small>'.$v['gametype'].'|'.$v['downnum'].'次下载</small></div>
    </div>
    <div class="row">
    <div class="col-md-12 col-sm-12 col-xs-12" style="color:#999;overflow: hidden;
white-space: nowrap;
text-overflow: ellipsis; width:200px;"><small><nobr>'.substr($v['about'],0,154).'</nobr></small></div>
    </div>
</div>
<div class="col-md-3 col-sm-3 col-xs-3"><a class="btn btn-default btn-lg zj_down" style="margin-top:10px;" href="game?gameid='.$v['id'].'" role="button">下载</a></div>
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
