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
        <link rel="stylesheet" href="sys/css/sentiment.css">
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
        <div class="content container-fluid">
            <h1 id="content-title">情绪</h1>
            <div id="content-phase">
                <span>可视化展示用户评论的情绪分析结果与趋势。</span>
            </div>
            <div class="visible-xs">
                <div class="content-miniinputs">
                    <button class="btn btn-default content-miniinputs-filter">                    
                        <i class="fa fa-filter ">&nbsp筛选</i>  
                    </button> 
                    <button class="btn btn-default" id="slidebar-in">
                        <i class=" visible-xs fa fa-angle-left"></i>
                    </button>
                </div>                
            </div>  
            <div class="content-inputs">
                <div class="content-inputs-head visible-xs">
                    <h1>筛选<i class="fa fa-times filter-dismis"></i></h1>
                </div>
                <div class="content-inputs-col content-inputs-search">
                   <input type="search" class="form-control" placeholder="关键字搜索">                    
                   <i class="fa fa-search"></i>
                </div> 
                <div class="btn-group content-inputs-col" id="col-date" value="最后一年">
                   <button type="button" class="btn btn-default dropdown-toggle" data-toggle="dropdown">
                       <i class="fa fa-calendar input-icon"></i>
                       <span class="inputs-option"></span>
                        <span class="caret input-caret"></span>
                   </button>
                </div>
                <div class="btn-group content-inputs-col" id="col-country" value="中国">
                   <button type="button" class="btn btn-default dropdown-toggle" data-toggle="dropdown">
                   <i class="fa fa-globe input-icon"></i>
                   <span class="inputs-option">中国</span>
                    <span class="caret input-caret"></span>
                   </button>
                   <ul class="dropdown-menu" role="menuitem">
                      <li><a href="#">中国</a></li>
                      <li><a href="#">美国</a></li>
                      <li><a href="#">日本</a></li>
                   </ul>
                </div>
                <div class="btn-group content-inputs-col" id="col-version" value="所有版本">
                   <button type="button" class="btn btn-default dropdown-toggle" data-toggle="dropdown">
                   <i class="fa fa-bookmark input-icon"></i>
                   <span class="inputs-option">所有版本</span>
                    <span class="caret input-caret"></span>
                   </button>
                   <ul class="dropdown-menu" role="menuitem">
                      <li><a href="#">所有版本</a></li>
                      <li><a href="#">6.5.7</a></li>
                      <li><a href="#">6.5.6</a></li>
                      <li><a href="#">6.5.5</a></li>
                      <li><a href="#">6.5.4</a></li>
                      <li><a href="#">6.5.3</a></li>
                   </ul>
                </div>                
                <div class="content-inputs-col" id="col-clearall"><a href="#">清除</a></div>
            </div>

            <div class="content-panel">
                <div class="row">
                    <div class="col-sm-12">
                        <div class="panel panel-default">
                            <div class="panel-heading">
                                  情绪时间线   
                                  <i class="fa fa-question-circle panel-tips" data-toggle="tooltip" title="所选时间的积极，负面和中立的评论数量，堆叠表示总评论数，由图表的变化发现情绪变化，特别是在跟新后"></i>
                            </div>
                            <div class="panel-body">
                                <div id="timeline" class="echarts"></div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="row">            
                    <div class="col-sm-6">
                        <div class="panel panel-default">
                            <div class="panel-heading">
                              情绪分解   
                              <i class="fa fa-question-circle panel-tips" data-toggle="tooltip" title="对所选时间段的正，负和中立评论的总数进行细分。 悬停在这些评论中看到％情绪的细分。 旨在增加积极评价的百分比。"></i>
                            </div>
                            <div class="panel-body">
                                <div id="sentiment-breakdown" class="echarts"></div>
                            </div>
                        </div>
                    </div>
                    <div class="col-sm-6">
                        <div class="panel panel-default">
                            <div class="panel-heading">
                              评论数
                              <i class="fa fa-question-circle panel-tips" data-toggle="tooltip" title="在所选时间段内查看每天评论数，具体查看左侧栏的评分栏目"></i>
                            </div>
                            <div class="panel-body">
                                <div id="review" class="echarts"></div>
                            </div>
                        </div>
                    </div>
                </div>
                
                <div class="row">                    
                    <div class="col-sm-6">
                        <div class="panel panel-default">
                            <div class="panel-heading">
                              评论星级   
                              <i class="fa fa-question-circle panel-tips" data-toggle="tooltip" title="平均评分随着时间变化，从评论中计算的到，具体查看左侧栏的评分栏目"></i>
                            </div>
                            <div class="panel-body">
                                <div id="rating" class="echarts"></div>
                            </div>
                        </div>
                    </div>
                    <div class="col-sm-6">
                        <div class="panel panel-default">
                            <div class="panel-heading">
                              区域细节
                              <i class="fa fa-question-circle panel-tips" data-toggle="tooltip" title="查看评论地区分布情况"></i>
                            </div>
                            <div class="panel-body">
                                <div id="location" class="echarts"></div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="row">                    
                    <div class="col-sm-6">
                        <div class="panel panel-default">
                            <div class="panel-heading">
                              版本细节
                              <i class="fa fa-question-circle panel-tips" data-toggle="tooltip" title="查看所选时间段内每个应用程序版本的百分比。"></i>
                            </div>
                            <div class="panel-body">
                                <div id="version" class="echarts"></div>
                            </div>
                        </div>
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
        <!-- bootstrap sortable table -->
        <script type="text/javascript" src="lib/bootstrap-table/bootstrap-table.js"></script>
        <script type="text/javascript" src="lib/bootstrap-table/bootstrap-table-zh-CN.js"></script>
        <!-- Echarts -->
        <script src="lib/echarts/echarts.min.js"></script>
        <!-- 自定义 -->
        <script type="text/javascript" src="sys/js/sentiment.js"></script>
    </body>
</html>