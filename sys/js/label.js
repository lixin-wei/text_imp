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

var pie_chart_series_data = [
    {value:335, name:'关于产品的建议'},
    {value:310, name:'毫无意义的反馈'},
    {value:234, name:'问题，且包含关键信息'},
    {value:135, name:'问题，但缺少关键信息'}
];
for(id=0 ; id<=3 ; ++id) {
    (function (id) {
        $.get("action/label-action.php?by=id"+"&id="+id, function (data) {
            pie_chart_series_data[id].value=data;
            if(i===3)pie_chart.setOption(pie_chart_option);
        });
    })(id);
}
pie_chart_option = {
    color: ['#5A9BD5', '#ED7C30', '#7E7E7E', '#FFC100'],
    tooltip : {
        trigger: 'item',
        formatter: "{a} <br/>{b} : {c} ({d}%)"
    },
    legend: {
        //orient: 'vertical',
        left: 'left',
        data: ['关于产品的建议','毫无意义的反馈','问题，且包含关键信息','问题，但缺少关键信息']
    },
    series : [
        {
            name: '标签统计',
            type: 'pie',
            radius : '55%',
            center: ['50%', '60%'],
            label: {
                normal: {
                    formatter: '{c}',
                    position: 'inside'
                }
            },
            data: pie_chart_series_data,
            itemStyle: {
                emphasis: {
                    shadowBlur: 10,
                    shadowOffsetX: 0,
                    shadowColor: 'rgba(0, 0, 0, 0.5)'
                }
            }
        }
    ]
};

var date = moment('2017-08-07');
var line_chart_xaxis_data = [], line_chart_series =[
    {
        name:'关于产品的建议',
        type:'line',
        data:[]
    },
    {
        name:'毫无意义的反馈',
        type:'line',
        data:[]
    },
    {
        name:'问题，且包含关键信息',
        type:'line',
        data:[]
    },
    {
        name:'问题，但缺少关键信息',
        type:'line',
        data:[]
    }
];
for(var i=0 ; i<30 ; ++i) {
    var now_date = date.format('YYYY-MM-DD');
    line_chart_xaxis_data.push(now_date);
    for (var id=0 ; id<=3 ; ++id) {
        line_chart_series[id].data.push(0);
    }
    date.add(1, "days");
}
for(i=0 ; i<line_chart_xaxis_data.length ; ++i) {
    now_date = line_chart_xaxis_data[i];
    for (id=0 ; id<=3 ; ++id) {
        (function (i, id) {
            $.get("action/label-action.php?by=date-id"+"&id="+id+"&date="+now_date, function (data) {
                line_chart_series[id].data[i]=data;
                if(i===line_chart_xaxis_data.length-1)bar_chart.setOption(line_chart_option);
            });
        })(i, id);
    }
}
line_chart_option = {
    color: ['#5A9BD5', '#ED7C30', '#7E7E7E', '#FFC100'],
    tooltip: {
        trigger: 'axis'
    },
    legend: {
        data:['关于产品的建议','毫无意义的反馈','问题，且包含关键信息','问题，但缺少关键信息']
    },
    grid: {
        left: '3%',
        right: '4%',
        bottom: '3%',
        containLabel: true
    },
    xAxis: {
        type: 'category',
        boundaryGap: false,
        data: line_chart_xaxis_data
    },
    yAxis: {
        type: 'value'
    },
    series: line_chart_series
};

pie_chart = echarts.init(document.getElementById("pie_chart"));
bar_chart = echarts.init(document.getElementById("bar_chart"));
pie_chart.setOption(pie_chart_option);
bar_chart.setOption(line_chart_option);

window.onresize = function() {
    pie_chart.resize();
    bar_chart.resize();
};