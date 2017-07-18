<?php
include ('top.php');
?>
<style>

    .zj_down{border:1px solid #ff3a25; color:#ff3a25}
    .zj_di{ background:#FFF; margin:10px 10px; border-radius: 10px; padding:15px;  }

    .zj_nav33{width:50%;}


    .roll { width: 100%; height: auto; margin: 5px auto 0; position: relative; }
    .roll .wrap { width: 100%; height: 333px; margin: 0 auto; position: relative; overflow: hidden; }
    .roll ul { position: absolute; top: 0; left: 0; }
    .roll li { float: left; width: 200px; height: 333px; text-align: center; list-style:none; margin:5px; }
    .roll li img{ width:200px; height:333px;}
    .jindutiao{ width:60%; background: #ccc; height:5px; margin-left: -20px; margin-top: 5px; padding: 0 0;};
</style>
<body>
<div class="container">
    <div class="row" style="padding:10px 0px; height:60px; border-bottom:1px solid #999;">
        <div class="col-md-4 col-sm-4 col-xs-4" style="padding-left:15px;"><a href="indexx"><div class="glyphicon glyphicon-menu-left btn-lg"></div></a></div>
        <div class="col-md-8 col-sm-8 col-xs-8" style="line-height:40px; vertical-align:middle; padding-left:40px;">
            <?php echo $game['name']?>
        </div>
    </div>
</div>


<div class="container-fluid">
    <div class="row" style="border-bottom: 1px solid #CCCCCC;">
        <div class="col-md-7 col-sm-7 col-xs-7">
            <table class="table">
                <tr><td style=" padding:5px 2px;">
                        <div class="col-md-7 col-sm-7 col-xs-7"  style=" margin-left:-10px;"><img src="<?php echo $game['logo']?>" class="img-responsive"></div>
                        <div class="col-md-6 col-sm-6 col-xs-6"  style=" margin-left:-20px;">
                            <div class="row" style="margin-top:10px;">
                                <div class="col-md-7 col-sm-7 col-xs-7"><strong><?php echo $game['name']?></strong></div>
                            </div>
                            <div class="row">
                                <div class="col-md-12 col-sm-12 col-xs-12" style="color:#999"><small><?php echo $game['gametype'].'|'.$game['size']?>M</small></div>
                            </div>
                        </div>
                    </td></tr>
            </table>
        </div>
        <div class="col-md-5 col-sm-5 col-xs-5"><a class="btn btn-danger" style=" width:90px; background:red; margin-left:20px; margin-top: 20px;" href="<?php echo $game['url']?>" role="button">进入游戏</a></div>


    </div>


    <div class="row">
    </div>

</div>

<div class="container-fluid">

    <ul class="nav nav-tabs" role="tablist" >
        <li role="presentation" class="active zj_nav33"  id="tab1"><a href="#today" aria-controls="today" role="tab" data-toggle="tab">游戏详情</a></li>
        <li role="presentation" class="zj_nav33"  id="tab2"><a href="#week" aria-controls="week" role="tab" data-toggle="tab">独家礼包</a></li>
    </ul>

    <div class="tab-content">
        <div role="tabpanel" class="tab-pane active" id="today">
            <div class="roll" id="roll">
                <a href="javascript:void(0);" class="btn_left" style="display:none;"></a>
                <a href="javascript:void(0);" class="btn_right" style="display:none;"></a>
                <div class="wrap">
                    <ul>
                        <?php
                        //var_dump($game['pic']);
                        //exit;
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
                <div class="col-md-12 col-sm-12 col-xs-12"><a class="btn btn-danger" style=" width:100%; background:red; margin-left:0px; margin-top: 20px;" href="<?php echo $game['url']?>" role="button">进入游戏</a></div>

                <?php

                if (isset($_SESSION['uid']) && !empty($_SESSION['uid'])) {
                    //测试游戏
                    //$uid="111";
                    $serverid=1;
                    $time=time();
                    $key="e2SExYMWng9fMVQS";
                    $gameid="91284";
                    $sign = strtolower(md5($uid.$serverid.$time.$gameid.$key));

                    ?>
                    <div class="col-md-12 col-sm-12 col-xs-12"><a class="btn btn-danger" style=" width:100%; background:red; margin-left:0px; margin-top: 20px;" href="http://api.egret-labs.org/v2/game/22694/91284?uid=<?php echo $uid?>&serverid=<?php echo $serverid?>&time=<?php echo $time?>&gameid=<?php echo $gameid?>&sign=<?php echo $sign;?>" role="button">测试游戏</a></div>
                <?php }?>


            </div>
        </div>
        <div role="tabpanel" class="tab-pane" id="week">
            <div class="container-fluid">
                <div class="row">
                    <div class="col-md-12 col-sm-12 col-xs-12">
                        <table class="table" style="border-bottom:1px solid #e7eaf1;">
                            <?php
                            $params = array();
                            $params['id'] = $game['id'];
                            //var_dump($game);
                            // $this->load->model('news_model');
                            $giftsinfo=$this->gifts_model->gifts_info_model($params);
                            $giftsnum=$this->gifts_model->gifts_num_model($params);
                            //var_dump($giftsnum);
                            //exit;
                            if (count($giftsinfo)>0){
                                foreach ($giftsinfo as $val)
                                {
                                    ?>
                                    <tr><td style=" padding:5px 2px;">

                                            <div class="col-md-10 col-sm-10 col-xs-10"  style=" margin-left:-20px;">
                                                <div class="row">
                                                    <div class="col-md-12 col-sm-12 col-xs-12"><strong><?php echo $game['name'].':'.$val['giftsname']?></strong></div>
                                                </div>

                                                <div class="row">
                                                    <div class="col-md-12 col-sm-12 col-xs-12" style="color:red">

                                                        <small  class="col-md-3 col-sm-3 col-xs-3" style="margin-left: -10px;">剩余</small>
                                                        <div class="jindutiao col-md-4 col-sm-4 col-xs-4">
                                                            <div style=" width:<?php echo $giftsnum["count(giftsid)"]/$val['giftsnum']*100?>%; background: red; height:5px;  float:left;"> &nbsp;</div>
                                                        </div>
                                                        <small  class="col-md-3 col-sm-3 col-xs-3"  style="width:auto;"><?php echo $giftsnum["count(giftsid)"]?>个</small>
                                                    </div>
                                                </div>

                                                <div class="row">
                                                    <div class="col-md-12 col-sm-12 col-xs-12 zj_overflow"><small><nobr><?php echo $val['giftsinfo']?></nobr></small></div>
                                                </div>
                                            </div>

                                            <?php
                                            if (isset($_SESSION['uid']) && !empty($_SESSION['uid'])) {
                                                ?>
                                                <div class="col-md-2 col-sm-2 col-xs-2"><a class="btn btn-danger" style="margin-top:10px; width:80px; background:red; margin-left:-10px;"  onClick="tc(<?php echo $val["gameid"].','.$uid?>)" role="button">领取</a></div>  <!--href="get_gifts?id=<?php echo $val["gameid"]?>&uid=<?php echo $uid?>"-->


                                                <?php
                                            }else{
                                                ?>
                                                <div class="col-md-2 col-sm-2 col-xs-2"><a class="btn btn-danger" style="margin-top:10px; width:80px; background:red; margin-left:-10px;" href="#" onClick="alert(' 请先登录')" role="button">领取</a></div>

                                                <?php
                                            }?>
                                        </td></tr>
                                    <?php


                                }
                            }
                            ?>



                        </table>
                    </div>
                </div>
            </div>

        </div>

    </div>
</div>
<div style="margin-top:80px;">
    <?php
    include ('bottom.php');
    ?>
</div>

<div class="tanchukuang" id="tck" style="display:none;">
    <div class="tck-top">领取礼包</div>
    <div class="tck-con">
        <p style="width:100%">礼包内容：<span style="color:#999; width:100%" id="gifts_info"> 佛挡杀佛萨法撒旦法撒飞洒发达省份萨芬</span></p>

        <p>礼包码：<div style="color:red; background:#ccc; width:70%; height:10%; float:left; text-align:center;" id="key"> </div></p>

        <p style="margin-top:20px; width:200px; margin-left:-55px; color:red;">请长按礼包码复制</p>

        <div style="margin-top:10px; width:100px; height:100px;"><a class="btn btn-danger" style="margin-top:20px; width:80px; background:red; margin-left:100px;" href="#" role="button" onClick="tc_cls()" >关闭</a></div>
    </div>


</div>

<div class="zhezhao" id="zhezhao" style="display:none;"></div>


<script type="text/javascript" src="bootstrap-3.3.7-dist/move.js"></script>
<script type="text/javascript" src="http://www.webxgame.com/js/jquery.min.js"></script>
<script language="javascript">
    function tc(id,uid)
    {
        //alert(id);
        //alert(uid);
        //exit;
        var url='get_gifts';
        $.get(
            url,
            {uid:uid,id:id},
            function(data){
                //alert(data);
                $("#key").html(data);
            });

        $.get(
            url+'/gifts_info',
            {id:id},
            function(dataa){
                $("#gifts_info").html(dataa);
            })
        document.getElementById("tck").style.display="block";
        document.getElementById("zhezhao").style.display="block";
    }

    function tc_cls()
    {
        document.getElementById("tck").style.display="none";
        document.getElementById("zhezhao").style.display="none";
    }


</script>


</body>
</html>
