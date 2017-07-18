<!-- BEGIN SIDEBAR -->
<div class="page-sidebar nav-collapse collapse">
    <!-- BEGIN SIDEBAR MENU -->
    <ul class="page-sidebar-menu">
        <li>
            <!-- BEGIN SIDEBAR TOGGLER BUTTON -->
            <div class="sidebar-toggler hidden-phone"></div>
            <!-- BEGIN SIDEBAR TOGGLER BUTTON -->
        </li>
        <li>
            <!-- BEGIN RESPONSIVE QUICK SEARCH FORM -->
<!--            <form class="sidebar-search">-->
<!--                <div class="input-box">-->
<!--                    <a href="javascript:;" class="remove"></a>-->
<!--                    <input type="text" placeholder="Search..." />-->
<!--                    <input type="button" class="submit" value=" " />-->
<!--                </div>-->
<!--            </form>-->
            <!-- END RESPONSIVE QUICK SEARCH FORM -->
        </li>
        <li class="start <?php if($this->router->class=='index') echo 'active' ; ?> ">
            <a href="/admin.php/index">
                <i class="icon-home"></i>
                <span class="title">MAIN</span>
                <?php if($this->router->class=='index') echo '<span class="selected"></span>' ; ?>
            </a>
        </li>
        <li class="last <?php if($this->router->class=='games') echo 'active' ; ?>">
            <a href="/admin.php/games">
                <i class="icon-bar-chart"></i>
                <span class="title">games<?php  ?></span>
                <?php if($this->router->class=='games') echo '<span class="selected"></span>' ; ?>
            </a>
        </li>
        <li class="last ">
            <a href="/admin.php/config">
                <i class="icon-bar-chart"></i>
                <span class="title">config</span>
            </a>
        </li>
    </ul>
    <!-- END SIDEBAR MENU -->
</div>
<!-- END SIDEBAR -->
