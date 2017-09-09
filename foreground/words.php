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
        <link rel="stylesheet" href="sys/css/words.css">
    </head>
    <body>
        <?php require("foreground/nav.php"); ?>
        <!-- 侧边栏 -->
         <div class="" id="sidebar">
            <!-- 选择的app -->
            <div class="hidden-xs" id="app-picker">
                <!-- 侧边栏目 -->
                <div class="app-ap" title="wechat">
                    <img src="<?php echo $app_cur->icon ?>">
                    <div class="app-ap-details">
                        <div class="app-ap-title"><?php echo $app_cur->app_name ?></div>
                        <div class="app-ap-info">
                            <i class="fa fa-apple"></i>&nbsp<?php echo $app_cur->store ?>
                        </div>
                    </div>
                    <i class="fa fa-caret-right app-ap-caret"></i>
                </div>
                <!-- 侧边隐藏的盒子 -->
                <div class="app-picker-slide">
                    <!-- 盒子中的搜索栏 -->
                        <div class="app-picker-slide-search">
                            <input type="search" class="form-control" placeholder="根据应用名称或商店名称筛选应用">
                            <i class="fa fa-search"></i>    
                            <button type="button" class="btn"><a href="#">+</a></button> 
                        </div>
<?php
                    for ($i=0; $i<$app_cnt; ++$i) {
?>
                        <a href="?app=<?php echo $app[$i]->app_id ?>" style="text-decoration:none">
                            <div class="app-ap" title="wechat">
                                <img src="<?php echo $app[$i]->icon ?>">
                                <div class="app-ap-details">
                                    <div class="app-ap-title"><?php echo $app[$i]->app_name ?></div>
                                    <div class="app-ap-info">
                                        <i class="fa fa-apple"></i>&nbsp<?php echo $app[$i]->store ?>
                                    </div>
                                </div>
                            </div>
                        </a>
<?php
                    }
?>
                </div>
            </div>
            <!-- 侧边栏导航 -->
            <?php require("foreground/left-nav.php"); ?>
        </div>

        <div class="content container-fluid">
            <h1 id="content-title">关键字</h1>
            <div id="content-phase">
                <span>汇总并统计分析所有出现在评论中的关键词。</span>
            </div>
            <div class="visible-xs">
                <div class="content-miniinputs">
                    <button class="btn btn-default content-miniinputs-filter">                    
                        <i class="fa fa-filter ">&nbsp筛选</i>  
                    </button> 
                    <button class="btn btn-default" id="slidebar-in">
                        <i class=" visible-xs fa fa-angle-left"></i>
                    </button>
                </div>                
            </div> 
            <div class="content-inputs"> 
                <div class="content-inputs-head visible-xs">
                    <h1>筛选<i class="fa fa-times filter-dismis"></i></h1>                    
                </div>            
                <div class="btn-group content-inputs-col" id="col-date" value="最后一年">
                   <button type="button" class="btn btn-default dropdown-toggle" data-toggle="dropdown">
                       <i class="fa fa-calendar input-icon"></i>
                       <span class="inputs-option"></span>
                        <span class="caret input-caret"></span>
                   </button>
                </div>
                <div class="btn-group content-inputs-col " id="col-country" value="中国">
                   <button type="button" class="btn btn-default dropdown-toggle" data-toggle="dropdown">
                   <i class="fa fa-globe input-icon"></i>
                   <span class="inputs-option">中国</span>
                    <span class="caret input-caret"></span>
                   </button>
                   <ul class="dropdown-menu" role="menuitem">
                      <li><a href="#">中国</a></li>
                      <li><a href="#">美国</a></li>
                      <li><a href="#">日本</a></li>
                   </ul>
                </div>
                <div class="btn-group content-inputs-col " id="col-version" value="所有版本">
                   <button type="button" class="btn btn-default dropdown-toggle" data-toggle="dropdown">
                   <i class="fa fa-bookmark input-icon"></i>
                   <span class="inputs-option">所有版本</span>
                    <span class="caret input-caret"></span>
                   </button>
                   <ul class="dropdown-menu" role="menuitem">
                      <li><a href="#">所有版本</a></li>
                      <li><a href="#">6.5.7</a></li>
                      <li><a href="#">6.5.6</a></li>
                      <li><a href="#">6.5.5</a></li>
                      <li><a href="#">6.5.4</a></li>
                      <li><a href="#">6.5.3</a></li>
                   </ul>
                </div>
                <div class="content-inputs-col" id="col-clearall"><a href="#">清除</a></div>
            </div>      
            <div class="content-panel">
            	<div class="row">
                    <div class="col-sm-12">
                        <div class="content-mypanel panel panel-default">
                           <div class="content-mypanel-heading panel-heading">
                              <div class="content-mypanel-title panel-title">
                                <a class="active" href="#" data-target="#interstingwords">
                                    兴趣
                                </a>
                                <a href="#" data-target="#popularwords">
                                    人气
                                </a>
                                <a href="#" data-target="#criticalwords">
                                    关键
                                </a>
                                <a href="#" data-target="#trendingupwords">
                                    上升趋势
                                </a>
                                <a href="#" data-target="#trendingdownwords">
                                    下降趋势
                                </a>
                                <a href="#" data-target="#newwords">
                                    最新
                                </a>
                              </div>                              
                           </div>                         
                           <table class="content-mypanel-table table" id="interstingword">
                                <tr class="mypanel-table-titles">
                                    <th class="key">关键字</th>
                                    <th class="hidden-xs">情绪</th>
                                    <th class="mention">提及次数</th>
                                    <th class="hidden-xs">总体评价</th>
                                    <th class="hidden-xs">趋势</th>
                                </tr>
                                <tr class="mypanel-table-row">
                                    <td class="key">非常好</td>
                                    <td class="hidden-xs"><div class="row-bar"><div class="row-bar-green" id="bar-green-1"></div></div></td>
                                    <td class="mention">157</td>
                                    <td class="hidden-xs">0.8%</td>
                                    <td class="hidden-xs">
                                        <div id="trend-1" class="echarts"></div>
                                    </td>
                                </tr>
                                <tr class="mypanel-table-row">                          
                                    <td class="key">朋友圈</td>
                                    <td class="hidden-xs"><div class="row-bar"><div class="row-bar-green" id="bar-green-2"></div></div></td>                                
                                    <td class="mention">161</td>
                                    <td class="hidden-xs">0.8%</td>
                                    <td class="hidden-xs">
                                        <div id="trend-2" class="echarts"></div>
                                    </td>
                                </tr>
                                <tr class="mypanel-table-row">
                                    <td class="key">好好好</td>
                                    <td class="hidden-xs"><div class="row-bar"><div class="row-bar-green" id="bar-green-3"></div></div></td>
                                    <td class="mention">185</td>
                                    <td class="hidden-xs">0.4%</td>
                                    <td class="hidden-xs">
                                        <div id="trend-3" class="echarts"></div>
                                    </td>
                                </tr>
                                <tr class="mypanel-table-row">
                                    <td class="key">群</td>
                                    <td class="hidden-xs"><div class="row-bar"><div class="row-bar-green" id="bar-green-4"></div></div></td>
                                    <td class="mention">84</td>
                                    <td class="hidden-xs">0.4%</td>
                                    <td class="hidden-xs">
                                        <div id="trend-4" class="echarts"></div>
                                    </td>
                                </tr>
                                <tr class="mypanel-table-row">
                                    <td class="key">还不错</td>
                                    <td class="hidden-xs"><div class="row-bar"><div class="row-bar-green" id="bar-green-5"></div></div></td>
                                    <td class="mention">52</td>
                                    <td class="hidden-xs">0.3%</td>
                                    <td class="hidden-xs">
                                        <div id="trend-5" class="echarts"></div>
                                    </td>
                                </tr>
                           </table>
                            <div class="content-mypanel-footer panel-footer">
                                <a href="#" data-target="#showmorewords">显示更多</a>
                            </div>
                        </div>
                    </div>
                </div>
            	
			   <div class="row">
			   		<div class="col-xs-12 col-md-12">
			   			<div class="panel panel-default">
						    <div class="panel-heading">
						   		热词词云
						   		<i class="fa fa-question-circle panel-tips" data-toggle="tooltip" title="展示评论中出现的关键词，字号越大说明出现频率越高"></i>
						    </div>
						    <div class="panel-body">
                                  <div class="col-xs-12">
                                      <div id="wordcloud" class="echarts"></div>    
                                  </div>
                            </div>
			            </div>
			   		</div>
			   </div>
               <!-- 地图分布 -->
               <div class="row">
                       <div class="col-xs-12 col-md-12">
                           <div class="panel panel-default">
                            <div class="panel-heading">
                                   区域分布
                                   <i class="fa fa-question-circle panel-tips" data-toggle="tooltip" title="点击上方词云查看某一热词在全国省市的分布情况"></i>
                            </div>
                            <div class="panel-body">
                                  <div class="col-xs-12">
                                      <div id="wordmap" class="echarts"></div>    
                                  </div>
                            </div>
                        </div>
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
        <!-- EChart -->
        <script src="lib/echarts/echarts.min.js"></script>
        <!-- ECharts Map -->
        <script src="lib/echarts/china.js"></script>
        <script src="lib/echarts/echarts-wordcloud.min.js"></script>
        <!-- 自定义 -->
        <script type="text/javascript" src="sys/js/words.js"></script>
        <script type="text/javascript">

            // 词云
            var myChart = echarts.init(document.getElementById('wordcloud')); 
            
            function createRandomItemStyle() {
                return {
                    normal: {
                        color: 'rgb(' + [
                            Math.round(Math.random() * 160),
                            Math.round(Math.random() * 160),
                            Math.round(Math.random() * 160)
                        ].join(',') + ')'
                    }
                };
            }

            option = {
                tooltip: {
                    show: true
                },
                series: [{
                    name: '热词词云',
                    type: 'wordCloud',
                    // size: ['100%', '100%'],
                    width: '95%',
                    height: '90%',
                    rotationRange: [0, 0],
                    shape: 'circle',
                    data: [
<?php
for ($i=0; $i<$word_cnt; ++$i) {
?>
                        {
                            name: "<?php echo $word[$i]->s?>",
                            value: <?php echo $word[$i]->t?>,
                            textStyle: createRandomItemStyle()
                        }                        
<?php
if ($i != $word_cnt-1) echo ",";
}
?>
                    ]
                }]
            };
    
            // 为echarts对象加载数据 
            myChart.setOption(option);
            

            //  点击词云生成ECharts 地图
            var wordmap = echarts.init(document.getElementById('wordmap'));
            var colors = ['#c03546','#fc913a','#f9d423', '#ede574'];
            
            // 默认配置
            defaultoption = {
                title: {
                    // text: params.name,
                    subtext: '反应热词在不同地区的分布情况',
                    left: 'center'
                },
                tooltip: {
                    // 悬浮框
                },
                series: [{
                    // name: params.name,
                    type: 'map',
                    mapType: 'china',
                    layoutCenter: ['50%', '50%'],
                    // 如果宽高比大于 1 则宽度为 100%，如果小于 1 则高度为 100%，保证了不超过 100x100 的区域
                    layoutSize: '100%',
                    roam: false
                    // data: 
                }]
            }
            // 默认配置地图
            wordmap.setOption(defaultoption);
            // 点击词云生成地图
            myChart.on('click', function (params) {
                // word = params.name;
                 $.ajax({
                    type: "POST",
                    url: 'action/words-action.php',
                    data: {
                        hotword: params.name
                    },
                    dataType: 'json',
                    success: function(data) {
                        console.log(data);
                        option = {
                            title: {
                                text: params.name,
                                subtext: '反应热词在不同地区的分布情况',
                                left: 'center'
                            },
                            tooltip: {
                                // 悬浮框
                            },
                            visualMap: {
                                min: 0,
                                max: data[0]['value'],
                                // left: 'left',
                                text: ['多', '少'],
                                orient: 'horizontal',
                                top: 'bottom',
                                calculable: true
                            },
                            series: [{
                                name: params.name,
                                type: 'map',
                                mapType: 'china',
                                layoutCenter: ['50%', '50%'],
                                // 如果宽高比大于 1 则宽度为 100%，如果小于 1 则高度为 100%，保证了不超过 100x100 的区域
                                layoutSize: '100%',
                                data: data
                            }]
                        }
                        // 配置地图
                        wordmap.setOption(option);
                    }
                });
            });
            //  自适应大小
            window.onresize = function() {
                myChart.resize();
                wordmap.resize();
            };
        </script>
    </body>
</html>

