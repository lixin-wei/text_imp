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
    $('#col-date>button').daterangepicker({
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

    // ---------------------Echarts--------------------------
    // 情绪时间线

    var timelinechart = echarts.init(document.getElementById('timeline'));
    option = {
        tooltip: {
            trigger: 'axis',
            axisPointer: { // 坐标轴指示器，坐标轴触发有效
                type: 'shadow' // 默认为直线，可选为：'line' | 'shadow'
            }
        },
        grid: {
            // 网格系统位置
            left: 'left',
            top: '15%',
            containLabel: true
        },
        xAxis: [{
            show: true,
            length: 20,
            type: 'category',
            barGap: '1%',
            data: [ //x轴的坐标s
                '25Feb', '26Feb', '27Feb', '28Feb', '29Feb',
                '1Mar', '2Mar', '3Mar', '4Mar', '5Mar', '6Mar', '7Mar', '8Mar', '9Mar', '10Mar',
                '11Mar', '12Mar', '13Mar', '14Mar', '15Mar', '16Mar', '17Mar', '18Mar', '19Mar', '20Mar',
                '21Mar', '22Mar', '23Mar', '24Mar', '25Mar', '26Mar', '27Mar', '28Mar', '29Mar', '30Mar',

                '1Apr', '2Apr', '3Apr', '4Apr', '5Apr', '6Apr', '7Apr', '8Apr', '9Apr', '10Apr',
                '11Apr', '12Apr', '13Apr', '14Apr', '15Apr', '16Apr', '17Apr', '18Apr', '19Apr', '20Apr',
                '21Apr', '22Apr', '23Apr', '24Apr', '25Apr', '26Apr', '27Apr', '28Apr', '29Apr', '30Apr', '31Apr',

                '1May', '2May', '3May', '4May', '5May', '6May', '7May', '8May', '9May', '10May',
                '11May', '12May', '13May', '14May', '15May', '16May', '17May', '18May', '19May', '20May',
                '21May', '22May', '23May', '24May'
            ]
        }],
        yAxis: [{
            show: true,
            type: 'value'
        }],

        series: [{
            name: '负面评价',
            type: 'bar',
            stack: '评论',
            itemStyle: {
                normal: {
                    color: '#ff5d48' //线的颜色
                        // 字条颜色 #ff5d48, #f9af0a, #03c770                        
                }
            },
            data: [
                30, 35, 30, 29, 35, 20, 19, 18, 15, 14,
                20, 18, 19, 20, 30, 28, 25, 25, 20, 15,
                18, 17, 30, 32, 20, 15, 16, 17, 20, 30,
                290, 590, 420, 360, 300, 280, 230, 270, 209, 250,
                120, 90, 70, 60, 60, 50, 45, 40, 39, 30,
                20, 30, 20, 30, 40, 30, 20, 30, 39, 40,
                40, 20, 20, 30, 40, 30, 30, 40, 49, 40,
                50, 60, 50, 50, 40, 30, 60, 70, 69, 50,
                140, 130, 120, 120, 90, 80, 60, 70, 69, 50
            ],
            markLine: {
                lineStyle: {
                    normal: {
                        type: 'dashed' //线的种类
                    }
                },
                data: [{
                    xAxis: 6.5
                }]
            }
        }, {
            name: '中性评价',
            type: 'bar',
            stack: '评论',
            itemStyle: {
                normal: {
                    color: '#f9af0a'
                } //线的颜色
            },
            data: [
                20, 15, 10, 19, 15, 20, 19, 18, 15, 14,
                20, 18, 19, 10, 20, 18, 15, 15, 10, 15,
                18, 17, 20, 22, 10, 15, 16, 17, 20, 10,
                90, 85, 80, 69, 55, 20, 79, 18, 15, 14,
                20, 18, 19, 10, 20, 18, 15, 15, 10, 15,
                18, 17, 20, 22, 10, 15, 16, 17, 20, 10,
                20, 15, 10, 19, 15, 20, 19, 18, 15, 14,
                20, 18, 19, 10, 20, 18, 15, 15, 10, 15,
                18, 17, 20, 22, 10, 15, 16, 17, 20, 10
            ],
            markLine: {
                lineStyle: {
                    normal: {
                        type: 'dashed' //线的种类
                    }
                }/*,
                data: [{
                    xAxis: 40
                }]*/
            }
        }, {
            name: '正面评价',
            type: 'bar',
            stack: '评论',
            itemStyle: {
                normal: {
                    color: '#03c770 '
                }
            },
            markPoint: { //标注点的
                data: [{
                    xAxis: 30,
                    yAxis: 1000,
                    name: '最大值'
                }, {
                    xAxis: 40,
                    yAxis: 1000,
                    name: '最大值'
                }]
            },
            data: [
                30, 35, 30, 29, 35, 30, 29, 28, 25, 24,
                30, 28, 29, 30, 30, 28, 35, 25, 30, 25,
                28, 27, 30, 32, 30, 25, 26, 27, 30, 40,
                50, 100, 270, 260, 240, 230, 260, 270, 269, 250,
                250, 300, 270, 260, 240, 230, 260, 270, 269, 250,
                250, 300, 270, 260, 240, 230, 260, 270, 269, 250,
                250, 300, 270, 260, 240, 230, 260, 270, 269, 250,
                150, 200, 170, 160, 140, 130, 160, 120, 139, 150,
                150, 300, 130, 130, 140, 130, 120, 120, 129, 80
            ]
        }]
    };
    // 使用刚指定的配置项和数据显示图表。  
    timelinechart.setOption(option);
    



    // 情绪分解
    var breakdownchart = echarts.init(document.getElementById('sentiment-breakdown'));
    var colors = [];
    option = {
        tooltip: {
            color: colors,
            trigger: 'axis',
            axisPointer: { // 坐标轴指示器，坐标轴触发有效
                type: 'shadow' // 默认为直线，可选为：'line' | 'shadow'
            }
        },
        grid: {
            // 网格系统位置
            left: 'left',
            top: '15%',
            containLabel: true
        },
        xAxis: [{
            show: true,
            length: 20,
            type: 'category',
            data: ['负面评价', '中立评价', '正面评价']
        }],
        yAxis: [{
            show: true,
            type: 'value',
            axisLabel: {
                show: true,
                formatter: '{value} %'
            },
            splitNumber: 2,            
            max: 100
        }],

        series: [{
            name: '消极评价 ',
            type: 'bar',
            stack: '评论',
            itemStyle: {
                normal: {
                    color: '#ff5d48'
                        // 字条颜色 #ff5d48, #f9af0a, #03c770
                }
            },
            data: [
                35, 0, 0
            ]
        }, {
            name: '中性评价 ',
            type: 'bar',
            stack: '评论',
            itemStyle: {
                normal: {
                    color: '#f9af0a'
                        // 字条颜色
                }
            },
            data: [
                0, 10, 0
            ]
        }, {
            name: '正面评价 ',
            type: 'bar',
            stack: '评论',
            itemStyle: {
                normal: {
                    color: '#03c770'
                        // 字条颜色 
                }
            },
            data: [
                0, 0, 60
            ]
        }]
    };
    // 使用刚指定的配置项和数据显示图表。  
    breakdownchart.setOption(option);

    // 评论数
    var reviewchart = echarts.init(document.getElementById('review'));
    var colors = ['#5793f3', '#d14a61', '#675bba'];
    option = {
        title: {
            text: '20,782',
            // subtext: 'Reviews(ave 228 per day)',
            subtextStyle: {
                color: 'black'
            }
        },
        tooltip: {
            trigger: 'axis',
            axisPointer: {
                type: 'cross'
            }
        },
        grid: {
            // 网格系统位置
            left: 'left',
            top: '30%',
            containLabel: true
        },
        xAxis: [{
            type: 'category',
            boundaryGap: false,
            data: [

                '25Feb', '26Feb', '27Feb', '28Feb', '29Feb',
                '1Mar', '2Mar', '3Mar', '4Mar', '5Mar', '6Mar', '7Mar', '8Mar', '9Mar', '10Mar',
                '11Mar', '12Mar', '13Mar', '14Mar', '15Mar', '16Mar', '17Mar', '18Mar', '19Mar', '20Mar',
                '21Mar', '22Mar', '23Mar', '24Mar', '25Mar', '26Mar', '27Mar', '28Mar', '29Mar', '30Mar',

                '1Apr', '2Apr', '3Apr', '4Apr', '5Apr', '6Apr', '7Apr', '8Apr', '9Apr', '10Apr',
                '11Apr', '12Apr', '13Apr', '14Apr', '15Apr', '16Apr', '17Apr', '18Apr', '19Apr', '20Apr',
                '21Apr', '22Apr', '23Apr', '24Apr', '25Apr', '26Apr', '27Apr', '28Apr', '29Apr', '30Apr', '31Apr',

                '1May', '2May', '3May', '4May', '5May', '6May', '7May', '8May', '9May', '10May',
                '11May', '12May', '13May', '14May', '15May', '16May', '17May', '18May', '19May', '20May',
                '21May', '22May', '23May', '24May','25May', '26May', '27May', '28May',
            ]
        }],
         yAxis: [{
            type: 'value',
            splitNumber: 3,
            max: 300
        }],
        series: [{
            name: '评论数',
            type: 'line',
            stack: '总量',
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
                20, 25, 20, 29, 45, 30, 29, 28, 25, 24,
                30, 28, 29, 30, 50, 48, 45, 45, 30, 25,
                28, 27, 50, 52, 30, 25, 26, 27, 30, 40,
                250, 300, 270, 240, 230, 220, 210, 200, 250,270,
                200, 200, 190, 180, 170, 170, 160, 169, 150,169, 
                165, 170, 160, 140, 143, 144, 146, 145, 150,150, 
                150, 130, 134, 140, 142, 144, 150, 179, 160,150, 
                150, 144, 145, 140, 140, 150, 144, 150, 160,162, 
                150, 146, 130, 120, 110, 220, 210, 166,150, 146, 
                130, 120, 110, 100
            ],
            markLine: {
                data: [{
                    type: 'average',
                    name: '平均值'
                }]
            }

        }]
    };
    reviewchart.setOption(option);



    // 地区
    var locationchart = echarts.init(document.getElementById('location'));
    // var colors = ['rgb(78, 137, 237  )', 'rgb(137, 203, 243)', 'rgb(196, 229, 249)'];
    // var colors = ['#ff5d48', '#f9af0a', '#03c770'];
                        // 字条颜色 #ff5d48, #f9af0a, #03c770

    option = {
        // color: colors,
        title: {

        },
        tooltip: {
            trigger: 'item',
            formatter: "{a} <br/>{b} : {c} ({d}%)"
        },
        legend: {

        },
        series: [{
            type: 'pie',
            radius: '40%',
            data: [
                {value: 2520, name: '浙江'}, 
                {value: 1530, name: '北京'},
                {value: 2310, name: '天津'},
                {value: 1382, name: '湖南'},
                {value: 1339, name: '江苏'},
                {value: 3921, name: '山东'}, 
                {value: 1430, name: '甘肃'},
                {value: 2980, name: '西藏'},
                {value: 1322, name: '黑龙江'},
                {value: 1139, name: '云南'},
                {value: 230, name: '湖北'}, 
                {value: 3430, name: '河南'},
                {value: 1310, name: '福建'},
                {value: 1372, name: '山西'},
                {value: 1239, name: '吉林'}
                ]
        }]
    };
    locationchart.setOption(option);

    // 版本细节

    var versionchart = echarts.init(document.getElementById('version'));
    // var colors = ['#ff5d48', 'rgb(137, 203, 243)', 'rgb(196, 229, 249)'];
    // var colors = ['#ff5d48', '#f9af0a', '#03c770'];
    option = {
        // color: colors,
        title: {
            // subtext: '',
            top: 'middle',
            left: 'center'
        },
        legend: {

        },
        series: [{
            name: '版本细节',
            type: 'pie',
            selectedMode: 'single',
            radius: [0, '30%'],
            data: [{
                value: 1200,
                name: '6.5.7',
                selected: true
            }, {
                value: 500,
                name: '6.5.6',
                selected: true
            }, {
                value: 300,
                name: '6.5.5',
                selected: true
            }]
        }]
    };

    versionchart.setOption(option);

    // 图表自适应大小
    window.onresize = function() {
        timelinechart.resize();
        breakdownchart.resize();
        reviewchart.resize();
        ratingchart.resize();
        locationchart.resize();
        versionchart.resize();
    };
});
