<!DOCTYPE html>
<html lang="zh-CN">
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <!-- 上述3个meta标签必须放在最前面，任何其他内容都必须跟随其后！ -->
        <title>App 印象</title>
        <!-- Bootstrap -->
        <link rel="stylesheet" href="lib/bootstrap/css/bootstrap.min.css">
        <!-- Font Awesome -->
        <link rel="stylesheet" href="lib/font-awesome/css/font-awesome.min.css">
        <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
        <!--[if lt IE 9]>
        <script src="//cdn.bootcss.com/html5shiv/3.7.2/html5shiv.min.js"></script>
        <script src="//cdn.bootcss.com/respond.js/1.4.2/respond.min.js"></script>
        <![endif]-->
        <!-- Custom Theme Style -->
        <link rel="stylesheet" href="sys/css/admin-user.css">
    </head>
    <body data-spy="scroll" data-target="#myScrollspy" data-offset="40">
        <?php require("foreground/admin-nav.php"); ?>
        <!-- 主体内容 -->
        <div class="container content">
            <!-- 快捷菜单 -->
            <nav class="col-md-3 col-sm-3 hidden-xs" id="myScrollspy">
                <ul class="nav nav-pills nav-stacked menu" data-spy="affix" data-offset-top="0">
                    <li class="menu-heading">快捷菜单</li>
                    <li><a href="#member">成员</a></li>
                    <li><a href="#authority">权限</a></li>
                    <li><a href="#group">群组</a></li>
                </ul>
            </nav>
            <!-- 右栏主体 -->
            <div class="col-xs-12 col-sm-9">
                <!-- 用户组成员 -->
                <?php require("foreground/admin-user-member.php"); ?>
                <!-- 用户组查看App -->
                <?php require("foreground/admin-user-authority.php"); ?>
                <!-- 所有用户组 -->
                <?php require("foreground/admin-user-group.php"); ?>
            </div>
        </div>
        <!-- jQuery (Bootstrap必需) -->
        <script src="lib/jquery/jquery-3.2.1.min.js"></script>
        <!-- Bootstrap -->
        <script src="lib/bootstrap/js/bootstrap.min.js"></script>
        <!-- Moment -->
        <!-- <script type="text/javascript" src="lib/momentjs/moment.min.js"></script> -->
        <!-- Date Range Picker -->
        <!-- <script type="text/javascript" src="lib/daterangepicker/daterangepicker.js"></script> -->
        <!-- bootstrap sortable table -->
        <!-- <script type="text/javascript" src="lib/bootstrap-table/bootstrap-table.js"></script> -->
        <!-- <script type="text/javascript" src="lib/bootstrap-table/bootstrap-table-zh-CN.js"></script> -->
        <!-- 自定义 -->
        <script type="text/javascript" src="sys/js/admin-user.js"></script>
    </body>
</html>