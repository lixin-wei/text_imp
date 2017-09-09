/**
 * 
 * @authors Your Name (you@example.org)
 * @date    2017-04-20 22:20:50
 * @version $Id$
 */
$(function() {

    $("#app-picker").on("click",function(){

       $(".app-picker-slide").addClass("app-picker-slide-transform")
    });
    $(".content, .navbar").on("click",function(){
       $(".app-picker-slide").removeClass("app-picker-slide-transform")

    });


    $(".content-inputs-col>ul li").on("click", function(){
      $(this).parent().siblings().find(".inputs-option").html($(this).find("a").html());
    });
    $(function () { $("[data-toggle='tooltip']").tooltip(); });
    
     $(".dropdown>ul li").on("click", function(){
    
      $(this).parent().siblings().find(".button-input").html($(this).find("a").html());
     
    });

    $("#slidebar-back").on("click", function(){ 
        $("#sidebar").removeClass("slidebar-back-transform");
    });
    $("#slidebar-in").on("click", function(){ 
        $("#sidebar").addClass("slidebar-back-transform");
    });
    $(".app-rating-over-time-button a").on("click", function(){ 
        $(".app-rating-over-time-button").find("a").removeClass("active");
         $(this).addClass("active");
    });
  

    // EChart

    // 评分分布
    var ratingbreakchart = echarts.init(document.getElementById('rating-breakdown'));
    option = {
        title: {},
        legend: {},
        grid: {
            // left: 'left',
            top: '5%',
            containLabel: true
        },
        xAxis: [{
                show: false,
                type: 'value',
                name: '人数',
                max: 250
            }

        ],
        yAxis: [{
            type: 'category',
            data: ['1', '2', '3', '4', '5'],
            axisPointer: {
                type: 'shadow'
            },
            axisTick: {
                length: '1',
                type: 'solid'
            }
        }, {
            type: 'category',
            data: ['137,136', '31,318', '50,262', '76,155', '451,381'],
            axisPointer: {
                type: 'shadow'
            }
        }, ],
        series: [{
            name: '人数',
            type: 'bar',
            stack: 'news',
            data: [80, 30, 40, 50, 170],
            itemStyle: {
                normal: {
                    color: 'rgb(243, 182, 54)' //线的颜色
                        // 字条颜色
                }
            }
        }]
    };
    ratingbreakchart.setOption(option);
    // 当前版本评分分布
    var cratingbreakchart = echarts.init(document.getElementById('current-rating-breakdown'));
    option = {
        title: {},
        legend: {},
        grid: {
            // left: 'left',
            top: '5%',
            containLabel: true
        },
        xAxis: [{
                show: false,
                type: 'value',
                name: '人数',
                max: 250
            }

        ],
        yAxis: [{
            type: 'category',
            data: ['1', '2', '3', '4', '5'],
            axisPointer: {
                type: 'shadow'
            },
            axisTick: {
                length: '1',
                type: 'solid'
            }
        }, {
            type: 'category',
            data: ['2,136', '1,318', '2,242', '2,555', '1,381'],
            axisPointer: {
                type: 'shadow'
            }
        }, ],
        series: [{
            name: '人数',
            type: 'bar',
            stack: 'news',
            data: [30, 20, 40, 50, 170],
            itemStyle: {
                normal: {
                    color: 'rgb(243, 182, 54)' //线的颜色
                        // 字条颜色
                }
            }
        }]
    };
    cratingbreakchart.setOption(option);

    // 评分变化
    var ratingchart = echarts.init(document.getElementById('rating'));
    var colors = ['rgb(243, 182, 54)'];
    option = {
        color: colors,
        tooltip: {
            trigger: 'none',
            axisPointer: {
                type: 'cross'
            }
        },
        legend: {},
        grid: {
            // top: 70,
            // bottom: 50
        },
        xAxis: [{
            type: 'category',
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
                '21May', '22May', '23May', '24May'
            ]
        }, {
            type: 'category',
            data: []
        }],
        yAxis: [{
            type: 'value'
        }],
        series: [{
            name: '',
            type: 'line',
            smooth: true,
            data: [
                50, 45, 40, 39, 45, 30, 29, 28, 25, 24,
                30, 28, 29, 30, 50, 48, 45, 45, 30, 25,
                28, 27, 50, 52, 30, 25, 26, 27, 30, 40,
                250, 300, 270, 260, 240, 230, 260, 270, 269, 250,
                220, 182, 191, 234, 290, 330, 310, 123, 242, 321,
                90, 149, 210, 122, 133, 334, 198, 123, 125, 220,
                250, 300, 270, 260, 240, 230, 260, 270, 269, 250,
                220, 182, 191, 234, 290, 330, 310, 123, 242, 321,
                90, 149, 210, 122, 133, 334, 198, 123, 125, 220
            ],
            markPoint: {
                data: [{
                    xAxis: 15,
                    yAxis: 50,
                    name: '最大值'
                }, {
                    xAxis: 20,
                    yAxis: 30,
                    name: '最大值'
                }, {
                    xAxis: 25,
                    yAxis: 30,
                    name: '最大值'
                }, {
                    xAxis: 30,
                    yAxis: 260,
                    name: '最大值'
                }, {
                    xAxis: 35,
                    yAxis: 235,
                    name: '最大值'
                }, {
                    xAxis: 70,
                    yAxis: 225,
                    name: '最大值'
                }]
            },
            markLine: {
                lineStyle: {
                    normal: {
                        type: 'dashed'
                    }
                },
                data: [{
                        xAxis: 70
                    }, {
                        xAxis: 35
                    }, {
                        xAxis: 30
                    }, {
                        xAxis: 25
                    }, {
                        xAxis: 20
                    }, {
                        xAxis: 15
                    }

                ]
            }
        }]
    };
    ratingchart.setOption(option);
    // 图表自适应大小
    window.onresize = function() {
        ratingchart.resize();
        ratingbreakchart.resize();
        ratingbreakchart.resize();
    };
});