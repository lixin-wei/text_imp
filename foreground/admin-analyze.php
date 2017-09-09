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
        <link rel="stylesheet" href="sys/css/admin-analyze.css">
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
                        <!-- 子标题 -->
                        <div class="subhead">
                            <div class="subhead-app pull-left">
                                <img src="img/icon/wechat.png" alt="" class="icon pull-left hidden-xs">
                                <div class="list-item-text pull-left">
                                    <div class="appname">微信</div>
                                    <div class="platform-badge"><i class="fa fa-apple"></i>&nbspiOS</div>
                                </div>
                            </div>
                            <form class="range-filter-form pull-right">
                                <div class="btn-group" role="group">
                                    <button type="button" class="btn btn-default dropdown-toggle" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                    <span>按月展示</span>
                                    <span class="caret"></span>
                                    </button>
                                    <ul class="dropdown-menu">
                                        <li><a href="#"><span>按月展示</span></a></li>
                                        <li><a href="#"><span>按季度展示</span></a></li>
                                        <li><a href="#"><span>按年展示</span></a></li>
                                    </ul>
                                </div>
                                <!-- 弹出模态框 -->
                                <button class="btn btn-success" type="button" data-toggle="modal" data-target="#addword"><i class="fa fa-plus"></i></button>
                            </form>
                        </div>
                        <!-- 列表 -->
                        <div class="list-item">
                            <div class="list-item-keyword pull-left">朋友圈</div>
                            <button class="btn btn-danger pull-right" type="submit"><i class="fa fa-trash-o"></i></button>
                        </div>
                        <div class="list-item">
                            <div class="list-item-keyword pull-left">聊天</div>
                            <button class="btn btn-danger pull-right" type="submit"><i class="fa fa-trash-o"></i></button>
                        </div>
                        <div class="list-item">
                            <div class="list-item-keyword pull-left">群</div>
                            <button class="btn btn-danger pull-right" type="submit"><i class="fa fa-trash-o"></i></button>
                        </div>
                        <div class="list-item">
                            <div class="list-item-keyword pull-left">评论</div>
                            <button class="btn btn-danger pull-right" type="submit"><i class="fa fa-trash-o"></i></button>
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col-xs-12 form-container">
                        <!-- 子标题 -->
                        <div class="subhead">
                            <div class="subhead-app pull-left">
                                <img src="img/icon/weibo.png" alt="" class="icon pull-left hidden-xs">
                                <div class="list-item-text pull-left">
                                    <div class="appname">微博</div>
                                    <div class="platform-badge"><i class="fa fa-apple"></i>&nbspiOS</div>
                                </div>
                            </div>
                            <form class="range-filter-form pull-right">
                                <div class="btn-group" role="group">
                                    <button type="button" class="btn btn-default dropdown-toggle" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                    <span>按月展示</span>
                                    <span class="caret"></span>
                                    </button>
                                    <ul class="dropdown-menu">
                                        <li><a href="#"><span>按月展示</span></a></li>
                                        <li><a href="#"><span>按季度展示</span></a></li>
                                        <li><a href="#"><span>按年展示</span></a></li>
                                    </ul>
                                </div>
                                <!-- 弹出模态框 -->
                                <button class="btn btn-success" type="button" data-toggle="modal" data-target="#addword"><i class="fa fa-plus"></i></button>
                            </form>
                        </div>
                        <!-- 列表 -->
                        <div class="list-item">
                            <div class="list-item-keyword pull-left">广告太多</div>
                            <button class="btn btn-danger pull-right" type="submit"><i class="fa fa-trash-o"></i></button>
                        </div>
                        <div class="list-item">
                            <div class="list-item-keyword pull-left">很好用</div>
                            <button class="btn btn-danger pull-right" type="submit"><i class="fa fa-trash-o"></i></button>
                        </div>
                        <div class="list-item">
                            <div class="list-item-keyword pull-left">还不错</div>
                            <button class="btn btn-danger pull-right" type="submit"><i class="fa fa-trash-o"></i></button>
                        </div>
                        <div class="list-item">
                            <div class="list-item-keyword pull-left">还行吧</div>
                            <button class="btn btn-danger pull-right" type="submit"><i class="fa fa-trash-o"></i></button>
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col-xs-12 form-container">
                        <!-- 子标题 -->
                        <div class="subhead">
                            <div class="subhead-app pull-left">
                                <img src="img/icon/Neteasecloudmusic.png" alt="" class="icon pull-left hidden-xs">
                                <div class="list-item-text pull-left">
                                    <div class="appname">网页云音乐</div>
                                    <div class="platform-badge"><i class="fa fa-android"></i>&nbspAndroid</div>
                                </div>
                            </div>
                            <form class="range-filter-form pull-right">
                                <div class="btn-group" role="group">
                                    <button type="button" class="btn btn-default dropdown-toggle" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                    <span>按月展示</span>
                                    <span class="caret"></span>
                                    </button>
                                    <ul class="dropdown-menu">
                                        <li><a href="#"><span>按月展示</span></a></li>
                                        <li><a href="#"><span>按季度展示</span></a></li>
                                        <li><a href="#"><span>按年展示</span></a></li>
                                    </ul>
                                </div>
                                <!-- 弹出模态框 -->
                                <button class="btn btn-success" type="button" data-toggle="modal" data-target="#addword"><i class="fa fa-plus"></i></button>
                            </form>
                        </div>
                        <!-- 列表 -->
                        <div class="list-item">
                            <div class="list-item-keyword pull-left">很好用</div>
                            <button class="btn btn-danger pull-right" type="submit"><i class="fa fa-trash-o"></i></button>
                        </div>
                        <div class="list-item">
                            <div class="list-item-keyword pull-left">网易大法好</div>
                            <button class="btn btn-danger pull-right" type="submit"><i class="fa fa-trash-o"></i></button>
                        </div>
                        <div class="list-item">
                            <div class="list-item-keyword pull-left">很喜欢</div>
                            <button class="btn btn-danger pull-right" type="submit"><i class="fa fa-trash-o"></i></button>
                        </div>
                        <div class="list-item">
                            <div class="list-item-keyword pull-left">网易云</div>
                            <button class="btn btn-danger pull-right" type="submit"><i class="fa fa-trash-o"></i></button>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- 模态框 -->
        <div class="modal fade" id="addword" tabindex="-1" role="dialog" aria-labelledby="authorityModalLabel">
            <div class="modal-dialog" role="document">
                <div class="modal-content">
                    <div class="modal-header">
                        <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
                        <h4 class="modal-title" id="">添加新关注词</h4>
                    </div>
                    <div class="modal-body">
                        <form>
                            <div class="form-group">
                                <label for="word" class="control-label">关键词</label>
                                <input type="text" class="form-control" id="word">
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
        <!-- 自定义 -->
        <script type="text/javascript" src="sys/js/admin-analyze.js"></script>
    </body>
</html>