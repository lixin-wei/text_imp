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
    <form action="" id="main_form">
        <input type="file" name="data">
    </form>
    <button class="btn btn-default" id="upload_button">上传数据</button>
    <div class="panel panel-default">
        <div class="panel-heading">数据域映射关系选择</div>
        <div class="panel-body">
            <div id="title_list">
            </div>
            <div id="info_box"></div>
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