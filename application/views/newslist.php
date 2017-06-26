<?php
<<<<<<< HEAD
include ('top.php');
?>
<body>
=======

include ('top.php');
?>
<body>

>>>>>>> 5088077b4dacfcbbf00d26db7b4098f914154877
<?php
//var_dump($news)
?>
<div class="container-fluid">
<div class="row">
<div class="col-md-12 col-sm-12 col-xs-12">
<table class="table" style="border-bottom:1px solid #e7eaf1;">
<<<<<<< HEAD
=======

>>>>>>> 5088077b4dacfcbbf00d26db7b4098f914154877
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

<?php
include ('bottom.php');
?>



</body>
</html>
