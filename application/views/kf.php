<?php
session_start();
if (isset($_SESSION['username']) && !empty($_SESSION['username'])) {
    //echo "登录成功：".$_SESSION['username'];
    //var_dump($_SESSION['username']);

    //echo "<a href='indexx/logout'>点此退出</a>";
}else{
    //echo "你还没有登录，<a href='login.php'>请登录</a>";
}
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

    <link rel="stylesheet" href="/bootstrap-3.3.7-dist/css/bootstrap.min.css">

    <!-- 最新的 Bootstrap 核心 JavaScript 文件 -->
    <script src="https://cdn.bootcss.com/bootstrap/3.3.7/js/bootstrap.min.js" integrity="sha384-Tc5IQib027qvyjSMfHjOMaLkfuWVxZxUPnCJA7l2mCWNIpG9mGCD8wGNIcPD7Txa" crossorigin="anonymous"></script>
    <title>网络排行榜</title>
</head>
<style>

    .zj_down{border:1px solid #ff3a25; color:#ff3a25; height:30px; line-height:10px; vertical-align:middle; margin-top:10px;}
    .zj_di{ background:#FFF; margin:10px 10px; border-radius: 5px; padding:15px;  }
    .zj_nav33{width:33%;text-align:center;}
</style>
<body>
<?php

$new_arr = json_decode($kf, true);
//var_dump($new_arr[0][0]);
//echo count($new_arr[1][1]);
//exit;
//var_dump($new_arr[0]);  //今天开服信息
//var_dump($new_arr[1][1]);  //未来一周开服信息
//var_dump($new_arr[2]);  //之前一周开服信息
//exit;
//echo $new_arr[0][0];
//var_dump($new_arr[0][0][0]);
//echo $new_arr[0][0][0]['id'];
?>
<div class="container-fluid">

    <ul class="nav nav-tabs" role="tablist" >
        <li role="presentation" class="active zj_nav33"  id="tab1"><a href="#today" aria-controls="today" role="tab" data-toggle="tab">今日</a></li>
        <li role="presentation" class="zj_nav33"  id="tab2"><a href="#week" aria-controls="week" role="tab" data-toggle="tab">未来一周</a></li>
        <li role="presentation"  class="zj_nav33"  id="tab3"><a href="#end" aria-controls="end" role="tab" data-toggle="tab">已开服</a></li>
    </ul>
    <div class="tab-content">

        <div role="tabpanel" class="tab-pane active" id="today">

            <div class="row">
                <div class="col-md-12 col-sm-12 col-xs-12">
                    <table class="table" style="border-bottom:1px solid #e7eaf1;">

                        <?php
                        if(count($new_arr[0][0])>0) {
                            foreach ($new_arr[0][0] as $v1) {
                                //var_dump($v1);
                                //先调用Model
                                //$this->load->Model('kf_model');
                                //再调用方法
                                //$this->kf_model->game_info($args);
                                $params = array();
                                $params['id'] = $v1['gameid'];
                                $this->load->model('kf_model');
                                $result = $this->kf_model->game_info($params);

                                //$result = $this->game_model->game_info($params);
                                //$data['game']=$result;
                                //var_dump($result);
                                ?>
                                <tr>
                                    <td style=" padding:5px 2px;">
                                        <div class="col-md-3 col-sm-3 col-xs-3" style=" margin-left:-10px;"><img
                                                    src="<?php echo $result['logo'] ?>" class="img-responsive"></div>
                                        <div class="col-md-4 col-sm-4 col-xs-4" style=" margin-left:-20px;">
                                            <div class="row">
                                                <div class="col-md-12 col-sm-12 col-xs-12"><strong><?php echo $result['name']; ?></strong>
                                                </div>
                                            </div>
                                            <div class="row" style="margin-top:10px;">
                                                <div class="col-md-12 col-sm-12 col-xs-12" style="color:red;">
                                                    <small><?php echo substr($v1['opentime'],5,-3); ?></small>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-md-2 col-sm-2 col-xs-2" style=" margin-top:20px; color:#999;">
                                            S<?php echo $v1['serverid']; ?>服
                                        </div>
                                        <div class="col-md-3 col-sm-3 col-xs-3"><a class="btn btn-danger"
                                                                                   style="margin-top:10px; width:80px; background:red;"
                                                                                   href="game?gameid=<?php echo $v1['gameid'] ?>"
                                                                                   role="button">下载</a></div>
                                    </td>
                                </tr>
                                <?php
                            }
                        }
                        ?>
                    </table>
                </div>
            </div>
        </div>

        <div role="tabpanel" class="tab-pane" id="week">

            <div class="row">
                <div class="col-md-12 col-sm-12 col-xs-12">
                    <table class="table" style="border-bottom:1px solid #e7eaf1;">
                        <?php
                        if(count($new_arr[1][1])>0) {
                            foreach ($new_arr[1][1] as $v1) {
                                //var_dump($v1);
                                //exit;
                                //先调用Model
                                //$this->load->Model('kf_model');
                                //再调用方法
                                //$this->kf_model->game_info($args);
                                $params = array();
                                $params['id'] = $v1['gameid'];
                                $this->load->model('kf_model');
                                $result = $this->kf_model->game_info($params);

                                //$result = $this->game_model->game_info($params);
                                //$data['game']=$result;
                                //var_dump($result);
                                ?>
                                <tr>
                                    <td style=" padding:5px 2px;">
                                        <div class="col-md-3 col-sm-3 col-xs-3" style=" margin-left:-10px;"><img
                                                    src="<?php echo $result['logo'] ?>" class="img-responsive"></div>
                                        <div class="col-md-4 col-sm-4 col-xs-4" style=" margin-left:-20px;">
                                            <div class="row">
                                                <div class="col-md-12 col-sm-12 col-xs-12"><strong><?php echo $result['name']; ?></strong>
                                                </div>
                                            </div>
                                            <div class="row" style="margin-top:10px;">
                                                <div class="col-md-12 col-sm-12 col-xs-12" style="color:red;">
                                                    <small><?php echo substr($v1['opentime'],5,-3); ?></small>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-md-2 col-sm-2 col-xs-2" style=" margin-top:20px; color:#999;">
                                            S<?php echo $v1['serverid']; ?>服
                                        </div>
                                        <div class="col-md-3 col-sm-3 col-xs-3"><a class="btn btn-danger"
                                                                                   style="margin-top:10px; width:80px; background:red;"
                                                                                   href="game?gameid=<?php echo $v1['gameid'] ?>"
                                                                                   role="button">下载</a></div>
                                    </td>
                                </tr>
                                <?php
                            }
                        }
                        ?>
                    </table>
                </div>
            </div>
        </div>


        <div role="tabpanel" class="tab-pane" id="end">

            <div class="row">
                <div class="col-md-12 col-sm-12 col-xs-12">
                    <table class="table" style="border-bottom:1px solid #e7eaf1;">
                        <?php
                        if(count($new_arr[2][2])>0) {
                            foreach ($new_arr[2][2] as $v1) {
                                //var_dump($v1);
                                //exit;
                                //先调用Model
                                //$this->load->Model('kf_model');
                                //再调用方法
                                //$this->kf_model->game_info($args);
                                $params = array();
                                $params['id'] = $v1['gameid'];
                                $this->load->model('kf_model');
                                $result = $this->kf_model->game_info($params);

                                //$result = $this->game_model->game_info($params);
                                //$data['game']=$result;
                                //var_dump($result);
                                ?>
                                <tr>
                                    <td style=" padding:5px 2px;">
                                        <div class="col-md-3 col-sm-3 col-xs-3" style=" margin-left:-10px;"><img
                                                    src="<?php echo $result['logo'] ?>" class="img-responsive"></div>
                                        <div class="col-md-4 col-sm-4 col-xs-4" style=" margin-left:-20px;">
                                            <div class="row">
                                                <div class="col-md-12 col-sm-12 col-xs-12"><strong><?php echo $result['name']; ?></strong>
                                                </div>
                                            </div>
                                            <div class="row" style="margin-top:10px;">
                                                <div class="col-md-12 col-sm-12 col-xs-12" style="color:red;">
                                                    <small><?php echo substr($v1['opentime'],5,-3); ?></small>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-md-2 col-sm-2 col-xs-2" style=" margin-top:20px; color:#999;">
                                            S<?php echo $v1['serverid']; ?>服
                                        </div>
                                        <div class="col-md-3 col-sm-3 col-xs-3"><a class="btn btn-danger"
                                                                                   style="margin-top:10px; width:80px; background:red;"
                                                                                   href="game?gameid=<?php echo $v1['gameid'] ?>"
                                                                                   role="button">下载</a></div>
                                    </td>
                                </tr>
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

<?php
include ('bottom.php');
?>


<script language="javascript">
    /*function tab(id)
     {
     //alert(id);
     //document.getElementById('tab'+id).style.color="red";
     document.getElementById('tab'+id).style.borderBottom="1px solid red";

     }*/
</script>
</body>
</html>
