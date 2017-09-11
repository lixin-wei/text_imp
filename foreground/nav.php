<nav class="navbar navbar-default navbar-fixed-top">
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
            <p class="navbar-text visible-xs-inline-block lead"><strong>TEXT 印象</strong></p>
        </div>

        <?php 
            $file = substr($_SERVER['PHP_SELF'] ,strrpos($_SERVER['PHP_SELF'] ,'/')+1 );
        ?>
        <!-- 导航栏内容 -->
        <div class="collapse navbar-collapse" id="navbar-collapse">
            <ul class="nav navbar-nav">
                <li <?php if ($file=="index.php") echo "class=active" ?> >
                    <a href="index.php"><i class="fa fa-wpexplorer fa-fw"></i>首页</a>
                </li>
                <li <?php if ($file=="sentiment.php" || $file=="words.php" || $file=="version.php" || $file=="rating.php") echo "class=active" ?>>
                    <a href="sentiment.php"><i class="fa fa-area-chart fa-fw"></i>统计</a>
                </li>
                <li <?php if ($file=="review.php") echo "class=active" ?>>
                    <a href="review.php"><i class="fa fa-comments fa-fw"></i>评论</a>
                </li>
                <li <?php if ($file=="setting.php") echo "class=active" ?>>
                    <a href="setting.php"><i class="fa fa-cog fa-fw"></i>设置</a>
                </li>
            </ul>
            <ul class="nav navbar-nav navbar-right">
                <li class="dropdown">
                    <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false"><i class="fa fa-question-circle-o fa-fw"></i>帮助<span class="caret"></span>
                    </a>
                    <ul class="dropdown-menu">
                        <li><a href="#"><i class="fa fa-video-camera fa-fw"></i>观看教程</a></li>
                        <li role="separator" class="divider"></li>
                        <li><a href="#"><i class="fa fa-telegram fa-fw"></i>联系我们</a></li>
                    </ul>
                </li>
                <li class="dropdown">
                    <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">
                        <i class="fa fa-user-circle fa-fw"></i><?php echo $_SESSION['user_name']; ?><span class="caret"></span>
                    </a>
                    <ul class="dropdown-menu">
                        <li><a href="#">我的帐号</a></li>
                        <li role="separator" class="divider"></li>
                        <li><a href="action/logout-action.php">退出</a></li>
                    </ul>
                </li>
            </ul>
        </div>
        <!-- end of navbar-collapse -->
    </div>
    <!-- end of container-fluid -->
</nav>
