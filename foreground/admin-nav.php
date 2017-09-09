<nav class="navbar navbar-inverse navbar-fixed-top">
    <div class="container-fluid">
        <!-- 商标及移动端适配 -->
        <div class="navbar-header">
            <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#navbar-collapse" aria-expanded="false">
            <!-- data-target 用来指定内容 -->
            <span class="sr-only">Toggle navigation</span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
            </button>
            <a href="#" class="navbar-brand">
                <img src="img/brand.png" alt="Impression" />
            </a>
            <p class="navbar-text visible-xs-inline-block lead"><strong>App 印象</strong></p>
        </div>
        <?php 
            $file = substr($_SERVER['PHP_SELF'] ,strrpos($_SERVER['PHP_SELF'] ,'/')+1 );
        ?>
        <!-- 导航栏内容 -->
        <div class="collapse navbar-collapse" id="navbar-collapse">
            <ul class="nav navbar-nav">
                <li <?php if ($file=="admin-user.php") echo "class=active" ?>><a href="admin-user.php"><i class="fa fa-users fa-fw"></i>用户管理</a></li>
                <li <?php if ($file=="admin-analyze.php") echo "class=active" ?>><a href="admin-analyze.php"><i class="fa fa-area-chart fa-fw"></i>分析管理</a></li>
                <li <?php if ($file=="admin-import.php") echo "class=active" ?>><a href="admin-import.php"><i class="fa fa-database fa-fw"></i>数据导入</a></li>
                <li <?php if ($file=="admin-profile.php") echo "class=active" ?>><a href="admin-profile.php"><i class="fa fa-cog fa-fw"></i>帐号设置</a></li>
            </ul>
            <ul class="nav navbar-nav navbar-right">
                <li class="dropdown">
                    <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false"><i class="fa fa-question-circle-o fa-fw"></i>帮助<span class="caret"></span></a>
                    <ul class="dropdown-menu">
                        <li><a href="#"><i class="fa fa-video-camera fa-fw"></i>观看教程</a></li>
                        <li role="separator" class="divider"></li>
                        <li><a href="#"><i class="fa fa-telegram fa-fw"></i>联系我们</a></li>
                    </ul>
                </li>
                <li class="dropdown">
                    <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">
                        <i class="fa fa-user-circle fa-fw"></i>admin<span class="caret"></span>
                    </a>
                    <ul class="dropdown-menu">
                        <li><a href="admin-profile.php">我的帐号</a></li>
                        <li role="separator" class="divider"></li>
                        <li><a href="login.php">退出</a></li>
                    </ul>
                </li>
            </ul>
        </div>
        <!-- end of navbar-collapse -->
    </div>
    <!-- end of container-fluid -->
</nav>