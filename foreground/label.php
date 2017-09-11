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
    <!-- <link rel="stylesheet" type="text/css" href="lib/bootstrap-table/bootstrap-table.css"> -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
    <script src="//cdn.bootcss.com/html5shiv/3.7.2/html5shiv.min.js"></script>
    <script src="//cdn.bootcss.com/respond.js/1.4.2/respond.min.js"></script>
    <![endif]-->
    <!-- Custom Theme Style -->
    <link rel="stylesheet" href="sys/css/label.css">
</head>
<body>
<?php require("foreground/nav.php") ?>
<!-- 侧边栏 -->
<div class="" id="sidebar">
    <!-- 侧边栏导航 -->
    <?php require("foreground/left-nav.php") ?>
</div>
<!-- 侧边栏结束 -->
<!-- 主体 -->
<div class="container-fluid content">
    <h1 id="content-title">文本标签</h1>
    <div id="content-phase">
        <span>可视化展示用户评论的文本分类标签结果。</span>
    </div>
    <hr>
    <div class="row">
        <div class="col-md-6">
            <div class="panel panel-default">
                <div class="panel-heading">
                    标签比例
                </div>
                <div class=" app-column-table panel-body ">
                    <div id="pie_chart" style="height: 300px; width: 100%;"></div>
                </div>
            </div>
        </div>
        <div class="col-md-6">
            <div class="panel panel-default">
                <div class="panel-heading">
                    标签时间线
                </div>
                <div class=" app-column-table panel-body ">
                    <div id="bar_chart" style="height: 300px; width: 100%;"></div>
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
    <!-- <script type="text/javascript" src="lib/bootstrap-table/bootstrap-table.js"></script> -->
    <!-- <script type="text/javascript" src="lib/bootstrap-table/bootstrap-table-zh-CN.js"></script> -->
    <!-- Echarts -->
    <script src="lib/echarts/echarts.min.js"></script>
    <!-- 自定义 -->
    <script type="text/javascript" src="sys/js/label.js"></script>
</body>
</html>