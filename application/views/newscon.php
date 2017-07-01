<?php

include ('top.php');
?>
<body>
<?php

include ('sou.php');
?>
<?php
//var_dump($newscon);
//exit;
?>
<div class="container-fluid">
<div class="row">
<div class="col-md-12 col-sm-12 col-xs-12">
    <h3 style="width: 100%; text-align: center;"><?php echo $newscon['title'];?></h3>
    <p><?php echo $newscon['content'];?></p>
</div>
</div>
</div>

<?php
include ('bottom.php');
?>



</body>
</html>
