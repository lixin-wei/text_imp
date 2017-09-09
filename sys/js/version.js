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

   $("#app-picker").on("click",function(){
       $(".app-picker-slide").addClass("app-picker-slide-transform")
    });
    $(".content, .navbar").on("click",function(){
       $(".app-picker-slide").removeClass("app-picker-slide-transform")

    });
   
    $(".app-review-button>a").on("click",function(){

        var aps = $(".app-review-bar");
       aps.animate({"left":" 0 ","opacity":"1"},300)
      

    });
    $(".close-arss-bottom").on("click",function(){
        var aps = $(".app-review-bar");
       aps.animate({"left":"-1000","opacity":"1"},300)
      
    });
    $(".dropdown>ul li").on("click", function(){
     $(this).parent().siblings().find(".button-input").html($(this).find("a").html());
     
     
    });
  /*  $(".chose-star>ul li").on("click", function(){
     $(this).parent().siblings().find("").remove();
     
     var index = $("ul li").index(this);
     var i = 0;

     for(i;i < 33-index;i++){
      console.log(32-index);
       $(this).parent().siblings().prepend("<i class='fa fa-star star-icon'></i>")}

    });*/
    
    $("#slidebar-back").on("click", function(){ 
        $("#sidebar").removeClass("slidebar-back-transform");
    });
    $("#slidebar-in").on("click", function(){ 
        $("#sidebar").addClass("slidebar-back-transform");
    });

    // EChart
    // 版本变化
      var versionchart = echarts.init(document.getElementById('version'));
    var colors = ['rgb(44, 140, 44)', '#ff0055', 'rgb(255,154,66)'];
    option = {
        color: colors,
        tooltip: {
            trigger: 'none',
            axisPointer: {
                type: 'cross'
            }
        },
        legend: {
            data: ['6.5.7', '6.5.6', '6.5.5'], //名称
            // top: '93%' //图例名称
            bottom: '1%'

        },
        grid: {
            top: '10%'
            // height: '80%', //设置整个坐标轴的高度
            // width: 'auto' //设置宽度
        },
        xAxis: [{
            type: 'category',
            data: [
                '25Feb', '26Feb', '27Feb', '28Feb', '29Feb',
                '1Mar', '2Mar', '3Mar', '4Mar', '5Mar', '6Mar',
                '7Mar', '8Mar', '9Mar', '10Mar',
                '11Mar', '12Mar', '13Mar', '14Mar', '15Mar', '16Mar',
                '17Mar', '18Mar', '19Mar', '20Mar',
                '21Mar', '22Mar', '23Mar', '24Mar', '25Mar', '26Mar',
                '27Mar', '28Mar', '29Mar', '30Mar',
                '1Apr', '2Apr', '3Apr', '4Apr', '5Apr', '6Apr',
                '7Apr', '8Apr', '9Apr', '10Apr',
                '11Apr', '12Apr', '13Apr', '14Apr', '15Apr', '16Apr',
                '17Apr', '18Apr', '19Apr', '20Apr',
                '21Apr', '22Apr', '23Apr', '24Apr', '25Apr', '26Apr',
                '27Apr', '28Apr', '29Apr', '30Apr', '31Apr',
                '1May', '2May', '3May', '4May', '5May', '6May',
                '7May', '8May', '9May', '10May',
                '11May', '12May', '13May', '14May', '15May', '16May',
                '17May', '18May', '19May', '20May',
                '21May', '22May', '23May', '24May'
            ]
        }, {
            type: 'category',
            data: []
        }],
        yAxis: [{
            type: 'value',
            max : 300
        }],
        series: [{
            name: '6.5.7',
            type: 'line',
            smooth: true,
            data: [
                0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 
                0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 
                0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 
                0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 
                49, 48, 51, 49, 48, 70, 90, 108, 132, 149,
                130, 125, 120, 115, 113, 112, 111, 110, 109, 100, 
                110, 109, 108, 107, 106, 99, 97, 96, 92, 90,
                92, 95, 100, 110, 115, 116, 120, 118, 117, 119, 
                117, 116, 115, 120, 114, 117, 80, 50, 30, 0
            ]
        }, {
            name: '6.5.6',
            type: 'line',
            smooth: true,
            data: [
                0, 0, 0, 0, 0, 0, 00, 00, 0, 00,
                0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 
                30, 40, 62, 71, 72, 70, 68, 69, 68, 71,
                70, 68, 69, 68, 69, 70, 68, 69, 68, 69,
                70, 68, 69, 68, 69, 68, 71, 50, 42, 22,
                0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 
                0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 
                0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 
                0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 

            ]
        }, {
            name: '6.5.5',
            type: 'line',
            smooth: true,
            data: [
                20, 18, 16, 15, 11, 9, 7, 6, 4, 3,
                0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 
                41, 42, 40, 38, 39, 72, 104, 136, 140, 174, 
                200, 174, 170, 168, 164, 160, 155, 150, 148, 145,
                120, 90, 60, 30, 0, 0, 0, 0, 0, 0, 
                0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 
                0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 
                0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 
                0, 0, 0, 0, 0, 0, 0, 0, 0, 0
            ]
        }, ]
    };
    versionchart.setOption(option);
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
                50, 45, 40, 56, 25, 30, 29, 78, 25, 24,
                30, 28, 29, 10, 58, 48, 48, 35, 30, 25,
                28, 27, 59, 52, 37, 25, 26, 27, 30, 40,
                50, 80, 70, 60, 40
            ]
        }]
    };
    // 使用刚指定的配置项和数据显示图表。  
    trendchart.setOption(option);
    var trendchart = echarts.init(document.getElementById('trend-3'));
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
                30, 28, 29, 30, 50, 68, 45, 45, 30, 25,
                28, 27, 32, 65, 30, 25, 26, 27, 30, 40,
                50, 98, 43, 23, 40
            ]
        }]
    };
    // 使用刚指定的配置项和数据显示图表。  
    trendchart.setOption(option);

    var trendchart = echarts.init(document.getElementById('trend-4'));
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
                30, 45, 40, 39, 45, 30, 29, 28, 25, 24,
                30, 28, 29, 30, 50, 48, 45, 65, 30, 25,
                28, 27, 50, 52, 30, 55, 26, 27, 30, 20,
                50, 80, 70, 50, 40
            ]
        }]
    };
    // 使用刚指定的配置项和数据显示图表。  
    trendchart.setOption(option);
    // 图表自适应大小
    window.onresize = function() {
        versionchart.resize();
    };
});