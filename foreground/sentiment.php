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
        	<!-- 侧边栏导航 -->
        	<?php require("foreground/left-nav.php") ?>
        </div>
        <!-- 侧边栏结束 -->
        <div class="content container-fluid">
            <h1 id="content-title">情绪</h1>
            <div id="content-phase">
                <span>可视化展示用户评论的情绪分析结果与趋势。</span>
            </div>
            <hr>
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