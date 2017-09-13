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
    <!-- bootstrap select -->
    <link rel="stylesheet" type="text/css" href="lib/bootstrap-select/bootstrap-select.css">
    <!-- Bootstrap sortable table -->
    <!-- <link rel="stylesheet" type="text/css" href="lib/bootstrap-table/bootstrap-table.css"> -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
    <script src="//cdn.bootcss.com/html5shiv/3.7.2/html5shiv.min.js"></script>
    <script src="//cdn.bootcss.com/respond.js/1.4.2/respond.min.js"></script>
    <![endif]-->
    <!-- Custom Theme Style -->
    <link rel="stylesheet" href="sys/css/index.css">
</head>
<body>
<?php require("foreground/nav.php") ?>
<div class="container">
    <!--  加载遮罩层  -->
    <div id="loading">
        <div class="fa fa-spinner fa-spin"></div>
    </div>
    <form action="" id="main_form">
        <input type="file" name="data">
    </form>
    <div class="row">
        <div class="col-md-6" id="col_left">
            <h2>第一步，选择数据文件</h2>

            <hr>
            <button class="btn btn-default btn-block" id="upload_button">选择文件</button>
            <div id="file_info"></div>

            <h2>第二步，匹配数据列的含义</h2>
            <hr>
            <div class="data-field-box">
                <div class="data-field-item row">
                    <div class="col-md-5">
                        <label for="content">评论文本（必选）</label>
                    </div>
                    <div class="col-md-7">
                        <select name="content" id="content" class="data-field-select" disabled>
                            <option value="">请先选择文件</option>
                        </select>
                    </div>
                </div>
                <div class="data-field-item row">
                    <div class="col-md-5">
                        <label for="version">版本号</label>
                    </div>
                    <div class="col-md-7">
                        <select name="version" id="version" class="data-field-select" disabled>
                            <option value="">请先选择文件</option>
                        </select>
                    </div>
                </div>
                <div class="data-field-item row">
                    <div class="col-md-5">
                        <label for="location">所在地区</label>
                    </div>
                    <div class="col-md-7">
                        <select name="location" id="location" class="data-field-select" disabled>
                            <option value="">请先选择文件</option>
                        </select>
                    </div>
                </div>
                <div class="data-field-item row">
                    <div class="col-md-5">
                        <label for="review_date">评论时间</label>
                    </div>
                    <div class="col-md-7">
                        <select name="review_date" id="review_date" class="data-field-select" disabled>
                            <option value="">请先选择文件</option>
                        </select>
                    </div>
                </div>
            </div>
            <div id="info_box" class="text-danger"></div>


            <h2>第三步，上传数据</h2>
            <hr>
            <button id="submit_button" class="btn btn-default btn-block">确认上传</button>
        </div>
        <div class="col-md-6">
            <div class="text-center">
                <img src="img/index/index-logo.gif" class="" alt="logo" id="index_logo">
                <div class="subtitle text-center">数据分析师的得力助手，您最贴心的评论分析工具</div>
                <img src="img/index/index-right.gif" class="" alt="poster" id="index_right">
            </div>

        </div>
    </div>



</div>
</body>
<!-- jQuery (Bootstrap必需) -->
<script src="lib/jquery/jquery-3.2.1.min.js"></script>
<!-- Bootstrap -->
<script src="lib/bootstrap/js/bootstrap.min.js"></script>
<!-- Moment -->
<script type="text/javascript" src="lib/momentjs/moment.min.js"></script>
<!-- Date Range Picker -->
<script type="text/javascript" src="lib/daterangepicker/daterangepicker.js"></script>
<!--bootstrap select-->
<script type="text/javascript" src="lib/bootstrap-select/bootstrap-select.js"></script>
<!--xlsx-->
<script type="text/javascript" src="lib/js-xlsx/jszip.js"></script>
<script type="text/javascript" src="lib/js-xlsx/xlsx.js"></script>
<!-- bootstrap sortable table -->
<!-- <script type="text/javascript" src="lib/bootstrap-table/bootstrap-table.js"></script> -->
<!-- <script type="text/javascript" src="lib/bootstrap-table/bootstrap-table-zh-CN.js"></script> -->
<!-- Echarts -->
<script src="lib/echarts/echarts.min.js"></script>
<!-- 自定义 -->
<script src="sys/js/index.js"></script>
</html>
