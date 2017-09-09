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
        <!-- <link rel="stylesheet" type="text/css" href="lib/daterangepicker/daterangepicker.css"> -->
        <!-- Bootstrap sortable table -->
        <!-- <link rel="stylesheet" type="text/css" href="lib/bootstrap-table/bootstrap-table.css"> -->
        <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
        <!--[if lt IE 9]>
        <script src="//cdn.bootcss.com/html5shiv/3.7.2/html5shiv.min.js"></script>
        <script src="//cdn.bootcss.com/respond.js/1.4.2/respond.min.js"></script>
        <![endif]-->
        <!-- Custom Theme Style -->
        <link rel="stylesheet" href="sys/css/rating.css">
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
    <!-- 主体 -->
    <div class="container-fluid content">
        <div class="app-title">
            <div class="app-title-disclosure ">评分</div>
            <div id="appbot-content-description">
                展现评分变化
                
            </div>
        </div>
        <!-- 国家选项-->
        <div class="app-review-bar ">
            <div class="row app-review-country col-xs-5">
                
                <div class="dropdown">
                    <button class="btn btn-default dropdown-toggle" type="button" id="dropdownMenu1" data-toggle="dropdown" aria-haspopup="true" aria-expanded="true">
                    <div>
                        <i class="fa fa-globe"></i><span class="button-input">国家</span>
                    </div>
                    <span class="caret">
                        
                    </span>
                    </button>
                    <ul class="dropdown-menu" aria-labelledby="dropdownMenu1">
                        <li><a href="#">美国</a></li>
                        <li><a href="#">中国</a></li>
                        <li><a href="#">日本</a></li>
                        
                    </ul>
                </div>
                
                
            </div>
            <button class="btn btn-default visible-xs slidebar-in-button" id="slidebar-in">
            <i class=" visible-xs fa fa-angle-left"></i>
            </button>
        </div>
        <!-- 总评分栏 -->
        <div class="app-review-stats">
            <div class="app-review-count col-xs-6 col-sm-3">
                <span class="app-review-lable">总评分人次</span>
                <br>
                <span class="app-review-num">746,46</span>
            </div>
            <div class="app-review-rating-avg col-xs-6 col-sm-3">
                <span class="app-review-lable">平均评分</span>
                <br>
                <svg viewBox="0 0 70 13" version="1.1"  >
                    <defs>
                    <clipPath id="stars-on-clip">
                    <rect class="stat-animate" x="0" y="0" width="78.04556637704152%" height="100%">
                    
                    </rect>
                    </clipPath>
                    <polygon id="star" points="6.6573956 10.5494435 2.5428988 12.663119 3.2816742 8.09683836 0 4.83688104 4.5710851 4.12843989 6.6573956 0 8.7437061 4.12843989 13.3147912 4.83688104 10.033117 8.09683836 10.7718924 12.663119">
                        
                    </polygon>
                    </defs>
                    <g id="stars-off" fill="#E1E6EA">
                        <use xmlns:xlink="http://www.w3.org/1999/xlink" xlink:href="#star" x="0" y="0">
                        
                        </use>
                        <use xmlns:xlink="http://www.w3.org/1999/xlink" xlink:href="#star" x="14" y="0">
                        
                        </use>
                        <use xmlns:xlink="http://www.w3.org/1999/xlink" xlink:href="#star" x="28" y="0">
                        
                        </use>
                        <use xmlns:xlink="http://www.w3.org/1999/xlink" xlink:href="#star" x="42" y="0">
                        
                        </use>
                        <use xmlns:xlink="http://www.w3.org/1999/xlink" xlink:href="#star" x="56" y="0">
                        
                        </use>
                    </g>
                    <g id="stars-on" fill="#F3B636" clip-path="url(#stars-on-clip)">
                        <use xmlns:xlink="http://www.w3.org/1999/xlink" xlink:href="#star" x="0" y="0">
                        
                        </use>
                        <use xmlns:xlink="http://www.w3.org/1999/xlink" xlink:href="#star" x="14" y="0">
                        
                        </use>
                        <use xmlns:xlink="http://www.w3.org/1999/xlink" xlink:href="#star" x="28" y="0">
                        
                        </use>
                        <use xmlns:xlink="http://www.w3.org/1999/xlink" xlink:href="#star" x="42" y="0">
                        
                        </use>
                        <use xmlns:xlink="http://www.w3.org/1999/xlink" xlink:href="#star" x="56" y="0">
                        
                        </use>
                    </g>
                </svg>
                <span class="app-review-avg">3.9</span>
            </div>
            <div class="app-review-rating-breakdown">
                <!-- <img src="img/rating.png"  class="img-responsive" alt=""> -->
                <div id="rating-breakdown" class="echarts"></div>
            </div>
        </div>
        <!-- 当前版本评分栏 -->
        <div class="app-review-stats">
            <div class="app-review-count col-xs-3">
                <span class="app-review-lable">当前版本评分人次</span>
                <br>
                <span class="app-review-num">48,523</span>
            </div>
            <div class="app-review-rating-avg col-xs-3">
                <span class="app-review-lable">平均评分</span>
                <br>
                <svg viewBox="0 0 70 13" version="1.1">
                    <defs>
                    <clipPath id="stars-on-clip">
                    <rect class="stat-animate" x="0" y="0" width="78.04556637704152%" height="100%">
                    
                    </rect>
                    </clipPath>
                    <polygon id="star" points="6.6573956 10.5494435 2.5428988 12.663119 3.2816742 8.09683836 0 4.83688104 4.5710851 4.12843989 6.6573956 0 8.7437061 4.12843989 13.3147912 4.83688104 10.033117 8.09683836 10.7718924 12.663119">
                        
                    </polygon>
                    </defs>
                    <g id="stars-off" fill="#E1E6EA">
                        <use xmlns:xlink="http://www.w3.org/1999/xlink" xlink:href="#star" x="0" y="0">
                        
                        </use>
                        <use xmlns:xlink="http://www.w3.org/1999/xlink" xlink:href="#star" x="14" y="0">
                        
                        </use>
                        <use xmlns:xlink="http://www.w3.org/1999/xlink" xlink:href="#star" x="28" y="0">
                        
                        </use>
                        <use xmlns:xlink="http://www.w3.org/1999/xlink" xlink:href="#star" x="42" y="0">
                        
                        </use>
                        <use xmlns:xlink="http://www.w3.org/1999/xlink" xlink:href="#star" x="56" y="0">
                        
                        </use>
                    </g>
                    <g id="stars-on" fill="#F3B636" clip-path="url(#stars-on-clip)">
                        <use xmlns:xlink="http://www.w3.org/1999/xlink" xlink:href="#star" x="0" y="0">
                        
                        </use>
                        <use xmlns:xlink="http://www.w3.org/1999/xlink" xlink:href="#star" x="14" y="0">
                        
                        </use>
                        <use xmlns:xlink="http://www.w3.org/1999/xlink" xlink:href="#star" x="28" y="0">
                        
                        </use>
                        <use xmlns:xlink="http://www.w3.org/1999/xlink" xlink:href="#star" x="42" y="0">
                        
                        </use>
                        <use xmlns:xlink="http://www.w3.org/1999/xlink" xlink:href="#star" x="56" y="0">
                        
                        </use>
                    </g>
                </svg>
                <span class="app-review-avg">3.9</span>
            </div>
            <div class="app-review-rating-breakdown">
                <!-- <img src="img/rating.png"  class="img-responsive" alt=""> -->
                <div id="current-rating-breakdown" class="echarts"></div>
            </div>
        </div>
        
        <div class="content-mypanel panel panel-default app-rating-over-time">
            <div class="content-mypanel-heading panel-heading app-rating-over-time-bar">
                <div class="content-mypanel-title panel-title app-rating-over-time-title">
                    
                    <div class=" panel-title app-rating-over-time-button">
                        <span>评分变化
                            <i  class="fa fa-question-circle tooltip-test" data-toggle="tooltip"
                            title="每天应用的评分概况。所有获得的数据如下图所示。">
                            </i>
                        </span>
                        <div></div>
                        <a class="active" href="#" data-target="#interstingwords">
                            平均评分
                        </a>
                        <a  href="#" data-target="#interstingwords">
                            评分数
                        </a>
                        <a href="#" data-target="#popularwords">
                            星级数
                        </a>
                        <div>
                            <button type="button" class="btn btn-default button-export ">
                            <i class="fa fa-share-square-o"></i>导出</button>
                        </div>
                        
                    </div>
                    <!-- <div class="btn-group app-rot-button " role="group" aria-label="...">
                        
                        <button type="button" class="btn btn-default button">评分数</button>
                        <button type="button" class="btn btn-default button">星级数</button>
                    </div> -->
                    
                    
                </div>
            </div>
            <div class="content-mypanel-body panel-body">
                <!-- <img src="img/rating2.png" class="img-responsive" alt=""> -->
                <div id="rating" class="echarts"></div>                
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
        <!-- Echarts -->
        <script src="lib/echarts/echarts.min.js"></script>
        <!-- 自定义 -->
        <script type="text/javascript" src="sys/js/rating.js"></script>
    </body>
</html>