<div class="container">
    <div class="row" style="padding:10px 0px;">
        <div class="col-md-2 col-sm-2 col-xs-2"><img src="/images/57klogo.jpg" class="img-responsive" style="margin-left:10px;" ></div>
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

