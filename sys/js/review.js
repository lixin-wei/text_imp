/**
 * 
 * @authors Your Name (you@example.org)
 * @date    2017-04-20 22:20:50
 * @version $Id$
 */
$(function() {
    var $filter_form = $("#filter_form");
    $filter_form.find("select").change(function () {
        $filter_form.submit();
    });
    $("#app-picker").on("click",function(){
       $(".app-picker-slide").addClass("app-picker-slide-transform")
    });
    $(".content, .navbar").on("click",function(){
       $(".app-picker-slide").removeClass("app-picker-slide-transform")
    });

    $(".content-inputs-col>ul li, .sidebar-inputs>ul li").on("click", function(){
      $(this).parent().siblings().find(".inputs-option-flex").html($(this).find("a").html());
      $(this).parent().siblings().find(".inputs-option").html($(this).find("a").html());
    });


    $(".content-miniinputs-filter").on("click", function(){
        $(".content-inputs").addClass("filter-transform");
    })
    $(".filter-dismis").on("click", function(){ 
        $(".content-inputs").removeClass("filter-transform");
    });
    var start = $("input[name=date_start]").val();
    var end = $("input[name=date_end]").val();
    if(start==="") {
        start = moment().subtract(29, 'days');
        end = moment();
    }
    else {
        start = moment(start);
        end = moment(end);
    }
    function update_date_input(start, end) {
        var start_fmt = start.format('YYYY-MM-DD');
        var end_fmt = end.format('YYYY-MM-DD');
        $('#col-date .inputs-option').html(start_fmt + ' - ' + end_fmt);
        $filter_form.find("input[name=date_start]").val(start_fmt);
        $filter_form.find("input[name=date_end]").val(end_fmt);
        console.log(start_fmt + ' - ' + end_fmt);
    }
    function cb(start, end) {
        update_date_input(start, end);
        $filter_form.submit();
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
    update_date_input(start, end);

    // -----------初始化提示框
    $('[data-toggle="tooltip"]').tooltip();
    


    // ECharts
    // 评分分解
    var ratingchart = echarts.init(document.getElementById('rating-breakdown'));
    option = {
        grid: {
            left: '10%',
            top: '5%',
            containLabel: true
        },
        xAxis: [{
                show: false,
                type: 'value',
                name: '数量',
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
            data: ['10,554', '2,061', '2,041', '1,213', '6,529'],
            axisPointer: {
                type: 'shadow'
            }
        }, ],
        series: [{
            name: '评分数',
            type: 'bar',
            stack: 'news',
            data: [201, 45, 40, 25, 125],
            itemStyle: {
                normal: {
                    color: 'rgb(243, 182, 54)' //线的颜色
                        // 字条颜色
                }
            }
        }]
    };
    ratingchart.setOption(option);

    var colors = ['rgb(0, 0, 0)'];
    // 情绪分解
    var sentimentchart = echarts.init(document.getElementById('sentimentchart'));
    option = {
        grid: {
            left: '10%',
            top: '5%',
            containLabel: true
        },
        xAxis: [{
                show: false,
                type: 'value',
                name: '评论数',
                max: 100
            }

        ],
        yAxis: [{
            type: 'category',
            data: ['贬义', '中立', '褒义'],
            axisPointer: {
                type: 'shadow'
            },
            axisTick: {
                length: '1',
                type: 'solid'
            }
        }, {
            type: 'category',
            data: ['10%', '56%', '34%'],
            axisPointer: {
                type: 'shadow'
            }
        } ],
        series: [{
            name: '贬义',
            type: 'bar',
            stack: 'news',
            data: [10, 0, 0],
            itemStyle: {
                normal: {
                    color: 'rgb(255, 93, 72)' //线的颜色
                        // 字条颜色
                }
            }
        }, {
            name: '中立',
            type: 'bar',
            stack: 'news',
            data: [0, 56, 0],
            itemStyle: {
                normal: {
                    color: 'rgb(175, 211, 33 )' //线的颜色
                        // 字条颜色
                }
            }
        }, {
            name: '褒义',
            type: 'bar',
            stack: 'news',
            data: [0, 0, 34],

            itemStyle: {
                normal: {
                    color: 'rgb(12, 214, 114)' //线的颜色
                        // 字条颜色
                }
            }
        }]
    };
    sentimentchart.setOption(option);

    // 图表自适应大小
    window.onresize = function() {
        ratingchart.resize();
        sentimentchart.resize();
    };
});