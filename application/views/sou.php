<div class="container">
    <div class="row" style="padding:10px 0px;">
        <div class="col-md-2 col-sm-2 col-xs-2"><a href="indexx"><img src="/images/57klogo.jpg" class="img-responsive" style="margin-left:10px;" ></a></div>
        <div class="col-md-8 col-sm-8 col-xs-8">
            <form action="" method="get">
                <div class="input-group">
                     <span class="input-group-btn">

      			     <img src="/images/sou.png" class="btn btn-default" style="border-bottom-left-radius:75px; border-top-left-radius:75px; background:#e8e8e8;">

                     </span>
                    <input type="text" class="form-control" id="name" placeholder="" style="background:#e8e8e8; border-bottom-right-radius:75px; border-top-right-radius:75px;">

                </div>
            </form>
        </div>
        <?php
        if (isset($uid) && !empty($uid)) {
            ?>
            <div class="col-md-2 col-sm-2 col-xs-2"><a href="user"><img src="/images/user.jpg" class="img-responsive" style="margin-left:-10px;"></a></div>

            <?php

        }else{
            ?>
            <div class="col-md-2 col-sm-2 col-xs-2"><a href="login_user"><img src="/images/user.jpg" class="img-responsive" style="margin-left:-10px;"></a></div>
            <?php
        }
        ?>
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

</div>

<div class="container-fluid" >
    <div class="row">


        <div class="col-md-3 col-sm-3 col-xs-3"><a href="top10"><img src="/images/rebang.jpg" class="img-responsive" ></a></div>
        <div class="col-md-3 col-sm-3 col-xs-3"><a href="kf"><img src="/images/kaifubiao.jpg" class="img-responsive" ></a></div>
        <div class="col-md-3 col-sm-3 col-xs-3"><a href="gifts"><img src="/images/libao.jpg" class="img-responsive" ></a></div>
        <div class="col-md-3 col-sm-3 col-xs-3"><a href="newslist"><img src="/images/zixun.jpg" class="img-responsive" ></a></div>
    </div>
</div>