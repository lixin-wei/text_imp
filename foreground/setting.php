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
        <!-- Data Range Picker -->
        <link rel="stylesheet" type="text/css" href="lib/daterangepicker/daterangepicker.css">
        <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
        <!--[if lt IE 9]>
        <script src="//cdn.bootcss.com/html5shiv/3.7.2/html5shiv.min.js"></script>
        <script src="//cdn.bootcss.com/respond.js/1.4.2/respond.min.js"></script>
        <![endif]-->
        <!-- Custom Theme Style -->
        <link rel="stylesheet" href="sys/css/setting.css">
    </head>
    <body data-spy="scroll" data-target="#myScrollspy" data-offset="40">
        <?php require("foreground/nav.php") ?>
        <div class="container content">
            <!-- 快捷菜单 -->
            <nav class="col-md-3 col-sm-3 hidden-xs" id="myScrollspy">
                <ul class="nav nav-pills nav-stacked menu" data-spy="affix" data-offset-top="">
                    <li class="menu-heading">快捷菜单</li>
                    <li><a href="#profile">个人信息</a></li>
                    <li><a href="#app">关注应用</a></li>
                    <li><a href="#keyword">关键词管理</a></li>
                </ul>
            </nav>
            <!-- 右栏主体 -->
            <div class="col-xs-12 col-sm-9">
                <div class="row">
                    <div class="col-xs-12 form-container">
                        <div id="profile" class="offset-box"></div>
                        <div class="subhead">帐号</div>
                        <form class="form">
                            <div class="form-group">
                                <label>用户名</label>
                                <input type="email" class="form-control" placeholder="">
                            </div>
                            <div class="form-group">
                                <label>电子邮箱</label>
                                <input type="email" class="form-control" placeholder="">
                            </div>
                            <div class="form-group">
                                <label>密码</label>
                                <input type="password" class="form-control" placeholder="" value="0000000000">
                            </div>
                            <button class="btn btn-default" type="submit">提交</button>
                        </form>
                    </div>
                </div>
                <div class="row">
                    <div class="col-xs-12 form-container">
                        <div id="app" class="offset-box"></div>
                        <!-- <div class="subhead">关注应用</div>
                        <form class="form" role="search">
                            <input type="text" class="form-control pull-left" placeholder="搜索要添加的应用">
                            <button type="submit" class="btn btn-success pull-right"><i class="fa fa-plus"></i></button>
                        </form> -->
                        <!-- 子标题 -->
                        <div class="subhead">
                            <span class="subhead-title">关注应用</span>
                            <form class="user-filter-form pull-right">
                                <!-- 弹出模态框 - 添加新应用-->
                                <button class="btn btn-success" type="button" data-toggle="modal" data-target="#addapp"><i class="fa fa-plus"></i></button>
                            </form>
                        </div>
                        <!-- 列表 -->                        
                        <div class="list-item">
                            <img src="img/icon/wechat.png" alt="" class="icon pull-left hidden-xs">
                            <div class="list-item-text pull-left">
                                <div class="appname">微信</div>
                                <div class="platform-badge"><i class="fa fa-apple"></i> iOS</div>
                            </div>
                            <button class="btn btn-danger pull-right" type="submit"><i class="fa fa-trash-o"></i></button>
                        </div>
                        <div class="list-item">
                            <img src="img/icon/Neteasecloudmusic.png" alt="" class="icon pull-left hidden-xs">
                            <div class="list-item-text pull-left">
                                <div class="appname">网易云音乐</div>
                                <div class="platform-badge"><i class="fa fa-android"></i> Android</div>
                            </div>
                            <button class="btn btn-danger pull-right" type="submit"><i class="fa fa-trash-o"></i></button>
                        </div>
                        <div class="list-item">
                            <img src="img/icon/weibo.png" alt="" class="icon pull-left hidden-xs">
                            <div class="list-item-text pull-left">
                                <div class="appname">微博</div>
                                <div class="platform-badge"><i class="fa fa-apple"></i> iOS</div>
                            </div>
                            <button class="btn btn-danger pull-right" type="submit"><i class="fa fa-trash-o"></i></button>
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col-xs-12 form-container">
                        <div id="keyword" class="offset-box"></div>
                        <!-- 子标题 -->
                        <div class="subhead">
                            <span class="subhead-title">关键词管理</span>
                            <form class="user-filter-form pull-right">
                                <!-- 弹出模块框 - 添加关键词 -->
                                <button class="btn btn-success" type="button" data-toggle="modal" data-target="#addkeyword"><i class="fa fa-plus"></i></button>
                            </form>
                        </div>
                        <!-- 列表 -->
                        <div class="list-item">
                            <div class="list-item-keyword pull-left">收款</div>
                            <button class="btn btn-danger pull-right" type="submit"><i class="fa fa-trash-o"></i></button>
                        </div>
                        <div class="list-item">
                            <div class="list-item-keyword pull-left">视频</div>
                            <button class="btn btn-danger pull-right" type="submit"><i class="fa fa-trash-o"></i></button>
                        </div>
                        <div class="list-item">
                            <div class="list-item-keyword pull-left">还不错</div>
                            <button class="btn btn-danger pull-right" type="submit"><i class="fa fa-trash-o"></i></button>
                        </div>
                        <div class="list-item">
                            <div class="list-item-keyword pull-left">功能</div>
                            <button class="btn btn-danger pull-right" type="submit"><i class="fa fa-trash-o"></i></button>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- 弹出模态框 -->
        <!-- 添加关注应用 -->
        <div class="modal fade" id="addapp" tabindex="-1" role="dialog" aria-labelledby="addappModalLabel">
            <div class="modal-dialog" role="document">
                <div class="modal-content">
                    <div class="modal-header">
                        <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
                        <h4 class="modal-title" id="">添加新关注应用</h4>
                    </div>
                    <div class="modal-body">
                        <form>
                            <div class="form-group">
                                <label for="app-platform" class="control-label">商店</label>
                                <div class="dropdown">
                                    <button class="btn btn-default dropdown-toggle" id="dropdownMenu1" type="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="true">
                                    <i class="fa fa-adn"></i><span>请选择商店</span>&nbsp<span class="caret"></span>
                                    </button>
                                    <ul class="dropdown-menu" aria-labelledby="dropdownMenu1">
                                        <li><a href="#"><i class="fa fa-apple"></i><span>iOS</span></a></li>
                                        <li><a href="#"><i class="fa fa-android"></i><span>Android</span></a></li>
                                    </ul>
                                </div>
                            </div>
                            <div class="form-group">
                                <label for="app-name" class="control-label">应用名</label>
                                <input type="text" class="form-control" id="app-name">
                            </div>
                        </form>
                    </div>
                    <div class="modal-footer">
                        <button type="button" class="btn btn-default" data-dismiss="modal">取消</button>
                        <button type="button" class="btn btn-primary">添加</button>
                    </div>
                </div>
            </div>
        </div>
        <!-- 添加新用户组 -->
        <div class="modal fade" id="addkeyword" tabindex="-1" role="dialog" aria-labelledby="addkeywordModalLabel">
            <div class="modal-dialog" role="document">
                <div class="modal-content">
                    <div class="modal-header">
                        <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
                        <h4 class="modal-title" id="">添加关注分词</h4>
                    </div>
                    <div class="modal-body">
                        <form>
                            <div class="form-group">
                                <label for="keyword" class="control-label">关键词</label>
                                <input type="text" class="form-control" id="keyword">
                            </div>
                        </form>
                    </div>
                    <div class="modal-footer">
                        <button type="button" class="btn btn-default" data-dismiss="modal">取消</button>
                        <button type="button" class="btn btn-primary">添加</button>
                    </div>
                </div>
            </div>
        </div>
        <!-- jQuery (Bootstrap必需) -->
        <script src="lib/jquery/jquery-3.2.1.min.js"></script>
        <!-- Bootstrap -->
        <script src="lib/bootstrap/js/bootstrap.min.js"></script>
        <!-- Moment -->
        <script type="text/javascript" src="lib/momentjs/moment.min.js"></script>
        <!-- Date Range Picker -->
        <script type="text/javascript" src="lib/daterangepicker/daterangepicker.js"></script>
        <!-- 自定义 -->
        <script type="text/javascript" src="sys/js/setting.js"></script>
    </body>
</html>