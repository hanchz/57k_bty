<?php

include ('top.php');
?>
<body>
<?php

include ('sou_old.php');
?>
<?php
//var_dump($newscon);
//exit;
?>
<div class="container-fluid" style="margin-bottom: 50px;">
<div class="row">
<div class="col-md-12 col-sm-12 col-xs-12">
    <h3 style="width: 100%; text-align: center;"><?php echo $newscon['title'];?></h3>
    <div style="width: 100%; text-align: center; color: #CCCCCC; border-bottom: 1px solid #ccc; margin-bottom: 10px;"><?php echo substr($newscon['addtime'],0,11)."  浏览：".$newscon['downnum'];?>次</div>
    <p><?php echo $newscon['content'];?></p>
</div>
</div>
</div>

<?php
include ('bottom.php');
?>



</body>
</html>
