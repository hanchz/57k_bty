<?php

include ('top.php');
?>
<body>
<?php

include ('sou.php');
?>
<?php
//var_dump($news);
//exit;
?>
<div class="container-fluid">
<div class="row">
<div class="col-md-12 col-sm-12 col-xs-12">
<table class="table" style="border-bottom:1px solid #e7eaf1;">

<?php
if(isset($news) && !empty($news)){		
    foreach ($news as $val)
    {
        $params = array();
        $params['id'] = $val['gameid'];
       // $this->load->model('news_model');
        $gameinfo=$this->game_model->game_info($params);

        //var_dump($gameinfo);

        echo '<tr><td style=" padding:5px 2px;">
<div class="col-md-2 col-sm-2 col-xs-2" style="color:#999"><img src="'.$gameinfo['logo'].'" style="height: 60px;"> </div>
<div class="col-md-8 col-sm-8 col-xs-8 zj_overflow" ><a href="newscon?id='.$val['id'].'"><nobr>'.$val['title'].'</nobr></a></div>
<div class="col-md-8 col-sm-8 col-xs-8" style="color:#999; margin-top: 15px;"><small>'.substr($val['addtime'],5,5).'</small></div>
</td></tr>';

    }
}
?>

</table>
</div>
</div>
</div>

<?php
include ('bottom.php');
?>



</body>
</html>
