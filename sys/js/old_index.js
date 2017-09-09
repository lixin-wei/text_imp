/**
 * 
 * @authors Your Name (you@example.org)
 * @date    2017-04-20 22:20:50
 * @version $Id$
 */
$(function() {
    // 下拉菜单选择功能
    $(".dropdown-menu > li").on("click", function() {
        $(this).parent().siblings(".dropdown-toggle").children("span:eq(0)").html($(this).find("span").html());
    });
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

    // wechat 微信评论
    var mychart = echarts.init(document.getElementById('review0'));
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
    var mychart = echarts.init(document.getElementById('download0'));
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
                50, 45, 40, 39, 45, 30, 29, 28, 25, 24,
                30, 28, 29, 30, 50, 48, 45, 45, 30, 25,
                28, 27, 50, 52, 30, 25, 26, 27, 30, 40,
                50, 80, 70, 60, 40
            ]
        }]
    };
    // 使用刚指定的配置项和数据显示图表。  
    mychart.setOption(option);

    // wechat 微信情绪
    var mychart = echarts.init(document.getElementById('sentiment0'));
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
                50, 45, 40, 39, 45, 30, 29, 28, 25, 24,
                30, 28, 29, 30, 50, 48, 45, 45, 30, 25,
                28, 27, 50, 52, 30, 25, 26, 27, 30, 40,
                50, 80, 70, 60, 40
            ]
        }]
    };
    // 使用刚指定的配置项和数据显示图表。  
    mychart.setOption(option);

    //-------------------------------
    
    // netease 网易云音乐评论
    var mychart = echarts.init(document.getElementById('netease-review'));
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
                50, 45, 40, 39, 45, 30, 29, 28, 25, 24,
                30, 28, 29, 30, 50, 48, 45, 45, 30, 25,
                28, 27, 50, 52, 30, 25, 26, 27, 30, 40,
                50, 80, 70, 60, 40
            ]
        }]
    };
    // 使用刚指定的配置项和数据显示图表。  
    mychart.setOption(option);

    // netease 网易云音乐下载
    var mychart = echarts.init(document.getElementById('netease-download'));
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
                50, 45, 40, 39, 45, 30, 29, 28, 25, 24,
                30, 28, 29, 30, 50, 48, 45, 45, 30, 25,
                28, 27, 50, 52, 30, 25, 26, 27, 30, 40,
                50, 80, 70, 60, 40
            ]
        }]
    };
    // 使用刚指定的配置项和数据显示图表。  
    mychart.setOption(option);

    // netease 网易云音乐情绪
    var mychart = echarts.init(document.getElementById('netease-sentiment'));
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
                50, 45, 40, 39, 45, 30, 29, 28, 25, 24,
                30, 28, 29, 30, 50, 48, 45, 45, 30, 25,
                28, 27, 50, 52, 30, 25, 26, 27, 30, 40,
                50, 80, 70, 60, 40
            ]
        }]
    };
    // 使用刚指定的配置项和数据显示图表。  
    mychart.setOption(option);

    //-------------------------------

    // weibo 微博评论
    var mychart = echarts.init(document.getElementById('weibo-review'));
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
                50, 45, 40, 39, 45, 30, 29, 28, 25, 24,
                30, 28, 29, 30, 50, 48, 45, 45, 30, 25,
                28, 27, 50, 52, 30, 25, 26, 27, 30, 40,
                50, 80, 70, 60, 40
            ]
        }]
    };
    // 使用刚指定的配置项和数据显示图表。  
    mychart.setOption(option);

    // weibo 微博下载
    var mychart = echarts.init(document.getElementById('weibo-download'));
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
                50, 45, 40, 39, 45, 30, 29, 28, 25, 24,
                30, 28, 29, 30, 50, 48, 45, 45, 30, 25,
                28, 27, 50, 52, 30, 25, 26, 27, 30, 40,
                50, 80, 70, 60, 40
            ]
        }]
    };
    // 使用刚指定的配置项和数据显示图表。  
    mychart.setOption(option);

    // weibo 微博情绪
    var mychart = echarts.init(document.getElementById('weibo-sentiment'));
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
                50, 45, 40, 39, 45, 30, 29, 28, 25, 24,
                30, 28, 29, 30, 50, 48, 45, 45, 30, 25,
                28, 27, 50, 52, 30, 25, 26, 27, 30, 40,
                50, 80, 70, 60, 40
            ]
        }]
    };
    // 使用刚指定的配置项和数据显示图表。  
    mychart.setOption(option);
});