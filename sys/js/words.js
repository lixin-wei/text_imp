/**
 * 
 * @authors Your Name (you@example.org)
 * @date    2017-04-20 22:20:50
 * @version $Id$
 */
$(function() {

    var start = moment().subtract(29, 'days');
    var end = moment();
    function cb(start, end) {
        $('#col-date .inputs-option').html(start.format('YY-MM-DD') + ' - ' + end.format('YY-MM-DD'));
    }
    $('#col-date').daterangepicker({
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

    $('[data-toggle="tooltip"]').tooltip();

    $("#app-picker").on("click",function(){
       $(".app-picker-slide").addClass("app-picker-slide-transform")
    });
    $(".content, .navbar").on("click",function(){
       $(".app-picker-slide").removeClass("app-picker-slide-transform")
    });

    $(".content-inputs-col>ul li, .sidebar-inputs>ul li").on("click", function(){
      $(this).parent().siblings().find(".inputs-option").html($(this).find("a").html());
    });


    $(".content-miniinputs-filter").on("click", function(){
        $(".content-inputs").addClass("filter-transform");
    })
    $(".filter-dismis").on("click", function(){ 
        $(".content-inputs").removeClass("filter-transform");
    });
    

    $("#slidebar-back").on("click", function(){ 
        $("#sidebar").removeClass("slidebar-back-transform");
    });
    $("#slidebar-in").on("click", function(){ 
        $("#sidebar").addClass("slidebar-back-transform");
    });

    // EChart
    // wechat 微信评论
    var trendchart = echarts.init(document.getElementById('trend-1'));
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
    trendchart.setOption(option);

    var trendchart = echarts.init(document.getElementById('trend-2'));
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
    trendchart.setOption(option);
    var trendchart = echarts.init(document.getElementById('trend-3'));
    trendchart.setOption(option);
    var trendchart = echarts.init(document.getElementById('trend-4'));
    trendchart.setOption(option);
    var trendchart = echarts.init(document.getElementById('trend-5'));
    trendchart.setOption(option);
    // 使用刚指定的配置项和数据显示图表。  

});