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
        <link rel="stylesheet" href="sys/css/index.css">
    </head>
    <body>
        <?php require("foreground/nav.php"); ?>
        <!-- 页面标题 -->
        <div class="container content">
            <div class="row subhead-row">
                <div class="col-xs-12">
                    <h4>应用近况</h4>
                    <p>关注的 APP 评论近况</p>
                </div>
                <div class="col-xs-12">
                    <!-- <div class="padding-box hidden-xs"></div> -->
                    <!-- 时间选择 -->
                    <div id="reportrange" class="">
                        <i class="fa fa-calendar"></i>
                        <span></span><b class="caret"></b>
                    </div>
                    <!-- 筛选商店 -->
                    <div class="dropdown stroedropdown">
                        <button class="btn btn-default dropdown-toggle" id="storedropdown" type="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="true">
                        <?php 
                            if ($store == 'iOS')
                                echo '<i class="fa fa-apple"></i><span>iOS</span>';
                            else if ($store == 'Android')
                                echo '<i class="fa fa-android"></i><span>Android</span>';
                            else 
                                echo '<i class="fa fa-adn"></i><span>所有商店</span>';
                        ?>
                        <!-- <i class="fa fa-adn"></i><span>所有商店</span> -->
                        &nbsp<span class="caret"></span>
                        </button>
                        <ul class="dropdown-menu" aria-labelledby="storedropdown">
                            <li><a href="?store=All"><i class="fa fa-adn"></i><span>所有商店</span></a></li>
                            <li><a href="?store=iOS"><i class="fa fa-apple"></i><span>iOS</span></a></li>
                            <li><a href="?store=Android"><i class="fa fa-android"></i><span>Android</span></a></li>
                        </ul>
                    </div>
                </div>
            </div>
            <!-- 表格标题行 -->
            <div class="row">
                <div class="col-md-12">
                    <div class="compare-head">
                        <button class="btn btn-default btn-sm pull-right" type="submit"><i class="fa fa-share-square-o"></i>导出</button>
                        <a class="btn btn-default btn-sm pull-right" href="setting.php#app"><i class="fa fa-plus-square-o"></i>添加</a>
                    </div>
                </div>
            </div>
            <!-- 表格 -->
            <div class="row">
                <div class="col-md-12">
                    <table id="table" data-toggle="table" class="table-no-bordered">
                    <thead>
                        <tr>
                            <th data-field="icon " class="icon-col"></th>
                            <th data-field="appName" data-sortable="true">
                                <div>应用</div>
                            </th>
                            <th data-field="grade" data-sortable="true">
                                <div href="#" data-toggle="tooltip" data-placement="top" title="带文字内容评论的平均分">评分</div>
                            </th>
                            <th data-field="reviews">
                                <div href="#" data-toggle="tooltip" data-placement="top" title="所选时间内带文字内容评论数">评论数</div>
                            </th>
                            <th data-field="download">
                                <div href="#" data-toggle="tooltip" data-placement="top" title="所选时间内应用下载量">下载量</div>
                            </th>
                            <th data-field="sentiment">
                                <div href="#" data-toggle="tooltip" data-placement="top" title="所选时间内积极内容的评论数">态度</div>
                            </th>
                        </tr>
                    </thead>
                    <tbody>
                    <?php
                        for ($i=0; $i<$rows_cnt; ++$i) {
                            if ($store=="All" || ($store=="iOS"&&$app[$i]->store=="iOS") || ($store=="Android"&&$app[$i]->store=="Android")) {
                    ?>
                        <tr>
                            <td class="icon-col"><img class="icon" src=<?php echo $app[$i]->icon; ?> alt="icon"></td>
                            <td>
                                <div class="appname"><a href="#"><?php echo $app[$i]->name; ?></a></div>
                                <!-- 平台图标 -->
                                <span class="platform-badge"><i class=
                                <?php 
                                    if ($app[$i]->store == 'iOS') echo "\"fa fa-apple\"";
                                    else echo "\"fa fa-android\"";

                                ?>></i>&nbsp<?php echo $app[$i]->store; ?></span>
                            </td>
                            <td class="grade-col"><i class="fa fa-star" aria-hidden="true"></i>&nbsp<?php echo $app[$i]->rate; ?></td>
                            <td>
                                <div class="chart-col"><div id="review<?php echo $i?>" class="echarts"></div></div>
                            </td>
                            <td>
                                <div class="chart-col"><div id="download<?php echo $i?>" class="echarts"></div></div>
                            </td>
                            <td>
                                <div class="chart-col"><div id="sentiment<?php echo $i?>" class="echarts"></div></div>
                            </td>
                        </tr>
                    <?php
                            }
                        }
                    ?>
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
        <!-- <script type="text/javascript" src="sys/js/index.js"></script> -->
    </body>
</html>
<script>
    $(function() {
        // 下拉菜单选择功能
        // $(".dropdown-menu > li").on("click", function() {
        //     $(this).parent().siblings(".dropdown-toggle").children("span:eq(0)").html($(this).find("span").html());
        // });
        // -------------初始化日期选择
        var start = moment().subtract(29, 'days');
        var end = moment();

        function cb(start, end) {
            $('#reportrange span').html(start.format('YY-MM-DD') + ' - ' + end.format('YY-MM-DD'));
        }

        $('#reportrange').daterangepicker({
            startDate: start,
            endDate: end,
            ranges: {
                '今日': [moment(), moment()],
                '近7天': [moment().subtract(6, 'days'), moment()],
                '近30天': [moment().subtract(29, 'days'), moment()],
                '本月': [moment().startOf('month'), moment().endOf('month')],
                '上个月': [moment().subtract(1, 'month').startOf('month'), moment().subtract(1, 'month').endOf('month')]
            }
        }, cb);

        cb(start, end);

        // -----------初始化提示框
        $('[data-toggle="tooltip"]').tooltip();

        // ---------------------Echarts--------------------------

        <?php 
            for ($i=0; $i<$rows_cnt; ++$i) {
        ?>
        var mychart = echarts.init(document.getElementById('review<?php echo $i?>'));
        option = {
            xAxis: [{
                show: false,
                type: 'category',
                boundaryGap: false,
                data: [

                    '2017-5-11', '2017-5-12', '27Feb', '28Feb', '29Feb',
                    '1Mar', '2Mar', '3Mar', '4Mar', '5Mar', '6Mar', '7Mar', '8Mar', '9Mar', '10Mar',
                    '11Mar', '12Mar', '13Mar', '14Mar', '15Mar', '16Mar', '17Mar', '18Mar', '19Mar', '20Mar',
                    '21Mar', '22Mar', '23Mar', '24Mar', '25Mar', '26Mar', '27Mar', '28Mar', '29Mar', '30Mar',
                ]
            }],
            yAxis: [{
                show: false,
                type: 'value'
                    // max: 100
            }],
            series: [{
                name: '趋势',
                type: 'line',
                stack: '总量',
                symbol: 'none',
                areaStyle: {
                    normal: {
                        color: 'rgb(240, 249, 254)'
                    }
                },
                itemStyle: {
                    normal: {
                        color: 'rgb(78, 177, 237)'
                            // 字条颜色
                    }
                },
                data: [
                    50, 45, 40, 39, 45, 30, 29, 28, 25, 24,
                    30, 28, 29, 30, 50, 48, 45, 45, 30, 25,
                    28, 27, 50, 52, 30, 25, 26, 27, 30, 40,
                    50, 80, 70, 60, 40
                ]
            }]
        };
        // 使用刚指定的配置项和数据显示图表。  
        mychart.setOption(option);

        // wechat 微信下载
        var mychart = echarts.init(document.getElementById('download<?php echo $i?>'));
        option = {
            xAxis: [{
                show: false,
                type: 'category',
                boundaryGap: false,
                data: [

                    '25Feb', '26Feb', '27Feb', '28Feb', '29Feb',
                    '1Mar', '2Mar', '3Mar', '4Mar', '5Mar', '6Mar', '7Mar', '8Mar', '9Mar', '10Mar',
                    '11Mar', '12Mar', '13Mar', '14Mar', '15Mar', '16Mar', '17Mar', '18Mar', '19Mar', '20Mar',
                    '21Mar', '22Mar', '23Mar', '24Mar', '25Mar', '26Mar', '27Mar', '28Mar', '29Mar', '30Mar',
                ]
            }],
            yAxis: [{
                show: false,
                type: 'value'
                    // max: 100
            }],
            series: [{
                name: '趋势',
                type: 'line',
                stack: '总量',
                symbol: 'none',
                areaStyle: {
                    normal: {
                        color: 'rgb(240, 249, 254)'
                    }
                },
                itemStyle: {
                    normal: {
                        color: 'rgb(78, 177, 237)'
                            // 字条颜色
                    }
                },
                data: [
                    50, 45, 80, 39, 45, 30, 29, 38, 25, 24,
                    30, 28, 29, 40, 50, 28, 45, 25, 30, 25,
                    28, 37, 50, 22, 30, 25, 24, 27, 30, 40,
                    50, 20, 70, 60, 90
                ]
            }]
        };
        // 使用刚指定的配置项和数据显示图表。  
        mychart.setOption(option);

        // wechat 微信情绪
        var mychart = echarts.init(document.getElementById('sentiment<?php echo $i?>'));
        option = {
            xAxis: [{
                show: false,
                type: 'category',
                boundaryGap: false,
                data: [

                    '25Feb', '26Feb', '27Feb', '28Feb', '29Feb',
                    '1Mar', '2Mar', '3Mar', '4Mar', '5Mar', '6Mar', '7Mar', '8Mar', '9Mar', '10Mar',
                    '11Mar', '12Mar', '13Mar', '14Mar', '15Mar', '16Mar', '17Mar', '18Mar', '19Mar', '20Mar',
                    '21Mar', '22Mar', '23Mar', '24Mar', '25Mar', '26Mar', '27Mar', '28Mar', '29Mar', '30Mar',
                ]
            }],
            yAxis: [{
                show: false,
                type: 'value'
                    // max: 100
            }],
            series: [{
                name: '趋势',
                type: 'line',
                stack: '总量',
                symbol: 'none',
                areaStyle: {
                    normal: {
                        color: 'rgb(240, 249, 254)'
                    }
                },
                itemStyle: {
                    normal: {
                        color: 'rgb(78, 177, 237)'
                            // 字条颜色
                    }
                },
                data: [
                    50, 45, 40, 39, 35, 30, 29, 28, 25, 24,
                    20, 28, 29, 30, 50, 48, 45, 45, 30, 25,
                    28, 37, 50, 57, 30, 29, 26, 27, 32, 40,
                    50, 60, 50, 60, 40
                ]
            }]
        };
        // 使用刚指定的配置项和数据显示图表。  
        mychart.setOption(option);
        <?php
            }
        ?>
        
    });
</script>