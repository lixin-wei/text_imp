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
        <link rel="stylesheet" href="sys/css/admin-import.css">
    </head>
    <body>
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
                <!-- 导航栏内容 -->
                <?php require("foreground/admin-nav.php") ?>
                <!-- end of navbar-collapse -->
            </div>
            <!-- end of container-fluid -->
        </nav>
        <!-- 主体内容 -->
        <div class="container content">
            <!-- 右栏主体 -->
            <div class="col-xs-12 col-sm-12">
                <div class="row">
                    <div class="col-xs-12 form-container">
                        <div class="subhead">文件导入</div>
                        <!-- The data encoding type, enctype, MUST be specified as below -->
                        <form class="form" enctype="multipart/form-data" action="action/uploadfile-action.php" method="POST">
                            <div class="form-group">
                                <!-- MAX_FILE_SIZE must precede the file input field -->
                                <input type="hidden" name="MAX_FILE_SIZE" value="300000000" />
                                <input name="upfile" type="file" />
                                <p class="help-block">仅支持.xlsx格式</p>
                            </div>
                            <button class="btn btn-default" type="submit" value="Send File">上传</button>
                        </form>
                    </div>
                </div>
                <div class="row">
                    <div class="col-xs-12 form-container">
                        <div class="subhead">在线导入</div>
                        <form class="form">
                            <div class="form-group">
                                <label>网址</label>
                                <input type="text" class="form-control" placeholder="">
                            </div>
                            <div class="form-group">
                                <label>帐号</label>
                                <input type="text" class="form-control" placeholder="">
                            </div>
                            <div class="form-group">
                                <label>密码</label>
                                <input type="password" class="form-control" placeholder="">
                            </div>
                            <button class="btn btn-default" type="submit">保存</button>
                        </form>
                    </div>
                </div>
            </div>
        </div>
        <!-- jQuery (Bootstrap必需) -->
        <script src="lib/jquery/jquery-3.2.1.min.js"></script>
        <!-- Bootstrap -->
        <script src="lib/bootstrap/js/bootstrap.min.js"></script>
        <!-- 自定义 -->
        <!-- <script type="text/javascript" src="sys/js/admin-user.js"></script> -->
    </body>
</html>