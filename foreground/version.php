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
        <!-- Bootstrap sortable table -->
        <link rel="stylesheet" type="text/css" href="lib/bootstrap-table/bootstrap-table.css">
        <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
        <!--[if lt IE 9]>
        <script src="//cdn.bootcss.com/html5shiv/3.7.2/html5shiv.min.js"></script>
        <script src="//cdn.bootcss.com/respond.js/1.4.2/respond.min.js"></script>
        <![endif]-->
        <!-- Custom Theme Style -->
        <link rel="stylesheet" type="text/css" href="sys/css/version.css">
    </head>
    <body>
        <?php require("foreground/nav.php") ?>  
    <!-- 侧边栏 -->
    <div class="" id="sidebar">
        <!-- 选择的app -->
        <div class="hidden-xs" id="app-picker">
            <!-- 侧边栏目 -->
            <div class="app-ap" title="wechat">
                <img src="img/icon/wechat.png">
                <div class="app-ap-details">
                    <div class="app-ap-title">微信</div>
                    <div class="app-ap-info">
                        <i class="fa fa-apple"></i>&nbspiOS
                    </div>
                </div>
                <i class="fa fa-caret-right app-ap-caret"></i>
            </div>
            <!-- 侧边隐藏的盒子 -->
            <div class="app-picker-slide">
                <!-- 盒子中的搜索栏 -->
                <div class="app-picker-slide-search">
                    <input type="search" class="form-control" placeholder="根据应用名称或商店名称筛选应用">
                    <i class="fa fa-search"></i>
                    <button type="button" class="btn"><a href="#">+</a></button>
                </div>
                 <div class="app-ap" title="wechat">
                            <img src="img/icon/wechat.png">
                            <div class="app-ap-details">
                                <div class="app-ap-title">微信</div>
                                <div class="app-ap-info">
                                    <i class="fa fa-apple"></i>&nbspiOS
                                </div>
                            </div>
                        </div>
                        <div class="app-ap" title="Neteasecloudmusic">
                            <img src="img/icon/Neteasecloudmusic.png">
                            <div class="app-ap-details">
                                <div class="app-ap-title">网易云音乐</div>
                                <div class="app-ap-info">
                                    <i class="fa fa-android"></i>&nbspAndroid
                                 </div>
                            </div>
                        </div>
                        <div class="app-ap" title="weibo">
                            <img src="img/icon/weibo.png">
                            <div class="app-ap-details">
                                <div class="app-ap-title">微博</div>
                                <div class="app-ap-info">
                                    <i class="fa fa-apple"></i>&nbspiOS
                                </div>
                            </div>
                        </div>
            </div>
        </div>
        <!-- 侧边栏导航 -->
        <?php require("foreground/left-nav.php") ?>  
    </div>
    <!-- 侧边栏结束 -->
    
    <!-- 主体部分 -->
    <div class="container-fluid content">
        <div class="app-title-bar">
            <div class="app-title-disclosure">版本</div>
            <div id="appbot-content-description">
                可视化展示针对不同版本的评论信息
            </div>
        </div>
        
        <!-- 屏幕缩小时菜单栏按钮 -->
        <div class="visible-xs">
            <div class="app-review-button ">
                <a  class="btn btn-default">
                    <i class="fa fa-filter"></i>
                    <span class="app-review-summary-txt">筛选</span>
                </a>
                <button class="btn btn-default visible-xs slidebar-in-button" id="slidebar-in">
                <i class=" visible-xs fa fa-angle-left "></i>
                </button>
            </div>
        </div>
        <!-- 搜索栏 -->
        <div class="app-review-bar">
            <!-- 搜索栏输入框 -->
            <div class="close-arss visible-xs">
                筛选
                <i class="fa fa-close close-arss-bottom"></i>
            </div>
            
            
            <div class=" app-review-search ">
                <i class="fa fa-search"></i>
                <input type="text" placeholder="关键词咨询" >
            </div>
            <!-- 搜索栏选择按钮 -->
            <div class="app-review-item-data ">
                <div id="reportrange" class="pull-right">
                    <i class="fa fa-calendar icon-txt"></i>
                    <span>17-04-25 - 17-05-24</span><b class="caret app-review-data-caret"></b>
                </div>
            </div>
            
            
            <div class="app-review-item ">
                <div class="dropdown">
                    <button class="btn btn-default dropdown-toggle" type="button" id="dropdownMenu1" data-toggle="dropdown" aria-haspopup="true" aria-expanded="true">
                    <i class="fa fa-globe icon-txt"></i>
                    <span class="button-input"> 国家</span>
                    
                    <span class="caret app-review-item-caret">
                        
                    </span>
                    </button>
                    <ul class="dropdown-menu" aria-labelledby="dropdownMenu1">
                        <li><a href="#">中国</a></li>
                        <li><a href="#">美国</a></li>
                        <li><a href="#">俄罗斯</a></li>
                        <li><a href="#">日本</a></li>
                    </ul>
                </div>
            </div>
            <div class="app-review-item ">
                <div class="dropdown">
                    <button class="btn btn-default dropdown-toggle" type="button" id="dropdownMenu1" data-toggle="dropdown" aria-haspopup="true" aria-expanded="true">
                    <i class="fa fa-bookmark icon-txt "></i>
                    <span class="button-input"> 版本</span>
                    
                    <span class="caret app-review-item-caret">
                    </span>
                    </button>
                    <ul class="dropdown-menu" aria-labelledby="dropdownMenu1">
                        <li><a href="#">6.5.7</a></li>
                        <li><a href="#">6.5.6</a></li>
                        <li><a href="#">6.5.5</a></li>
                        <li><a href="#">6.5.4</a></li>
                    </ul>
                </div>
            </div>
            <div class="app-review-item ">
                <div class="dropdown chose-star">
                    <button class="btn btn-default dropdown-toggle " type="button" id="dropdownMenu1" data-toggle="dropdown" aria-haspopup="true" aria-expanded="true">
                    
                    <span class="button-input"><i class="fa fa-star-o icon-txt"></i>所有评分</span>
                    
                    
                    <span class="caret app-review-item-caret">
                        
                    </span>
                    </button>
                    <ul class="dropdown-menu star-button" aria-labelledby="dropdownMenu1">
                        <li>
                            <a href="#">
                                所有评分
                            </a>
                        </li>
                        <li>
                            <a href="#">
                                <i class="fa fa-star"></i>
                                <i class="fa fa-star"></i>
                                <i class="fa fa-star"></i>
                                <i class="fa fa-star"></i>
                                <i class="fa fa-star"></i>
                            </a>
                        </li>
                        <li>
                            <a href="#">
                                <i class="fa fa-star"></i>
                                <i class="fa fa-star"></i>
                                <i class="fa fa-star"></i>
                                <i class="fa fa-star"></i>
                            </a>
                        </li>
                        <li>
                            <a href="#">
                                <i class="fa fa-star"></i>
                                <i class="fa fa-star"></i>
                                <i class="fa fa-star"></i>
                            </a>
                        </li>
                        <li>
                            <a href="#">
                                <i class="fa fa-star"></i>
                                <i class="fa fa-star"></i>
                            </a>
                        </li>
                        <li><a href="#">
                            <i class="fa fa-star"></i>
                        </a>
                    </li>
                    
                    <li><a href="#"></a></li>
                </ul>
            </div>
        </div>
        
        
        
        <div class="app-review-clear" ><a href="#">清除</a></div>
    </div>
    <div class="app-column">
        <!-- 图表显示部分 -->
        <div class="panel panel-default">
            <div class="panel-heading">
                版本变化
            </div>
            <div class=" app-column-table panel-body ">
                <!-- <img src="img/version.png" class="img-responsive"> -->
                <div id="version" class="echarts"></div>
            </div>
        </div>
        <!-- 各版本评分表格 -->
        <div class="panel panel-default app-column-rating">
            <div class="app-column-title panel-heading">
                各版本详解
            </div>
            <div class="  panel-body ">
                 <table class="app-column-table table">
                    <thead>
                        <tr >
                            <th class="app-column-table-item">版本</th>
                            <th class="hidden-xs text-center">平均评分</th>
                            <th class="hidden-xs text-center">情绪倾向</th>
                            <th class=" text-center">提及</th>
                            <th class="hidden-xs text-center">所有评论占比</th>
                            <th class="hidden-xs text-center">趋势</th>
                        </tr>
                    </thead>
                    <tbody>
                        <tr class="mypanel-table-row">
                            <td class="app-column-table-item">6.5.7</td>
                            <td class="hidden-xs tb-txt">3.9</td>
                            <td class="hidden-xs"><div class="row-bar"><div class="row-bar-green" id="bar-green-1"></div></div></td>
                            <td class="tb-txt">12628</td>
                            <td class="hidden-xs tb-txt">21.9%</td>
                            <td class="hidden-xs tb-txt"><div id="trend-1" class="echarts"></div></td>
                        </tr>
                         <tr class="mypanel-table-row">
                             <td class="app-column-table-item">6.5.6</td>
                            <td class="hidden-xs tb-txt">2.5</td>
                            <td class="hidden-xs"><div class="row-bar"><div class="row-bar-green" id="bar-green-2"></div></div></td>
                            <td class="tb-txt">5104</td>
                            <td class="hidden-xs tb-txt">56.6%</td>
                            <td class="hidden-xs tb-txt"><div id="trend-2" class="echarts"></div></td>
                        </tr>
                         <tr class="mypanel-table-row">
                            <td class="app-column-table-item">6.5.5</td>
                            <td class="hidden-xs tb-txt">3.4</td>
                            <td class="hidden-xs"><div class="row-bar"><div class="row-bar-green" id="bar-green-3"></div></div></td>
                            <td class="tb-txt">3356</td>
                            <td class="hidden-xs tb-txt">14.4%</td>
                            <td class="hidden-xs tb-txt"><div id="trend-3" class="echarts"></div></td>
                        </tr>
                         <tr class="mypanel-table-row">
                             <td class="app-column-table-item">6.5.4</td>
                            <td class="hidden-xs tb-txt">3.0</td>
                            <td class="hidden-xs"><div class="row-bar"><div class="row-bar-green" id="bar-green-4"></div></div></td>
                            <td class="tb-txt">2174</td>
                            <td class="hidden-xs tb-txt">9.3%</td>
                            <td class="hidden-xs tb-txt"><div id="trend-4" class="echarts"></div></td>

                        </tr>
                    </tbody>
                </table>
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
    <!-- bootstrap sortable table -->
    <script type="text/javascript" src="lib/bootstrap-table/bootstrap-table.js"></script>
    <script type="text/javascript" src="lib/bootstrap-table/bootstrap-table-zh-CN.js"></script>
    <!-- Echarts -->
    <script src="lib/echarts/echarts.min.js"></script>
    <!-- 自定义 -->
    <script type="text/javascript" src="sys/js/version.js"></script>
</body>
</html>