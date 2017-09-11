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

        <link rel="stylesheet" href="lib/bootstrap-select/bootstrap-select.css">
        <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
        <!--[if lt IE 9]>-->
        <script src="//cdn.bootcss.com/html5shiv/3.7.2/html5shiv.min.js"></script>
        <script src="//cdn.bootcss.com/respond.js/1.4.2/respond.min.js"></script>
        <![endif]-->
        <!-- Custom Theme Style -->
        <link rel="stylesheet" href="sys/css/review.css">
    </head>
    <body>
		<?php require("foreground/nav.php") ?>
        <div class="content container">
                <div class="app-title-bar">
                <span class="app-title-review"><p>评论</p></span>
                <div id="appbot-content-description">
                    展示详细评论内容
             <!--        <a href="#">更多</a> -->
                </div>
            </div>  
            <div class="visible-xs">
                <div class="content-miniinputs">
                    <button class="btn btn-default content-miniinputs-filter">                    
                        <i class="fa fa-filter ">&nbsp筛选</i>
                    </button> 
                </div>                
            </div>
            <div class="content-inputs">
                <div class="content-inputs-head visible-xs">
                    <h1>筛选<i class="fa fa-times filter-dismis"></i></h1>                    
                </div>
                <form action="" id="filter_form">
                    <input type="hidden" name="request_id" value="<?php echo $request_id ?>">
                    <input type="hidden" name="date_start" value="<?php echo $date_start ?>">
                    <input type="hidden" name="date_end" value="<?php echo $date_end ?>">
                    <div class="btn-group content-inputs-col" id="col-date">
                        <button type="button"
                                class="btn btn-default dropdown-toggle"
                                data-toggle="dropdown"
                                <?php if(!$request_info['review_date']) echo "disabled"; ?>
                        >
                            <i class="fa fa-calendar input-icon"></i>
                            所有日期
                        </button>
                    </div>

                    <select name="location"
                            id="location"
                            class="selectpicker content-inputs-col"
                            data-width="200px"
                            <?php if(!$request_info['location']) echo "disabled"; ?>
                    >
                        <option value="" data-icon="fa fa-globe">
                            所有地区
                        </option>
                        <?php foreach($location_list as $lo): ?>
                            <option value="<?php echo $lo[0]?>"
                                <?php if($lo[0]==$location) echo "selected"; ?>
                            >
                                <?php echo $lo[0]?>
                            </option>
                        <?php endforeach; ?>
                    </select>
                    <!-- 版本选择 -->
                    <select name="version" id="version"
                            class="selectpicker content-inputs-col"
                            data-width="200px"
                            <?php if(!$request_info['version']) echo "disabled"; ?>
                    >
                        <option value="" data-icon="fa fa-flag">
                            所有版本
                        </option>
                        <?php foreach($version_list as $ver): ?>
                            <option value="<?php echo $ver[0]?>"
                                <?php if($ver[0]==$version) echo "selected"; ?>
                            >
                                <?php echo $ver[0]?>
                            </option>
                        <?php endforeach; ?>
                    </select>
                    <div class="content-inputs-col" id="col-clearall"><a href="review.php">清除</a></div>
                </form>

            </div>
               <!-- review实例head -->
            <div class="review-details-heading container">
             
                <div class="reviews-left-actions"><span class="action-title"><strong>评论</strong></span></div>
                <div class="reviews-right-actions">
                  <a class="btn btn-default" href="#"><i class="fa fa-share-square-o"></i><span>全部导出</span></a>
                </div>
            </div>
<?php
		for ($i=0; $i<$review_cnt; ++$i) {
?>
			<!-- review实例 -->
			<div class="review-container container">
			<!-- review实例左栏 -->
				<div class="row">
			    	<div class="review-basic-attributes col-sm-2">
                        <span class="review-country"><i class="fa fa-globe review-logo"></i>
                            <?php
                            if($request_info['location'])
                                echo $review[$i]->location;
                            else
                                echo "缺少地区数据"
                            ?>
                        </span>
                        <span class="review-version"><i class="fa fa-bookmark review-logo"></i>
                            <?php
                            if($request_info['version'])
                                echo $review[$i]->version;
                            else
                                echo "缺少版本数据"
                            ?>
                        </span>
                        <span class="review-version"><i class="fa fa-clock-o review-logo"></i>
                            <?php
                            if($request_info['review_date'])
                                echo $review[$i]->review_date;
                            else
                                echo "缺少时间数据"
                            ?>
                        </span>
			    	</div>
			    	<!-- review实例右栏 -->
					<div class="review-content col-sm-10">
			    		<div class="review-primary-content">
							<div class="review-body"><span><?php echo $review[$i]->content ?></span></div>
							<div class="review-translated">
								<!-- <div><span class="review-date">Translated</span></div> -->
								<div><span class="review-date"><?php echo $cut_words_str[$i] ?></span></div>
			          		</div>
                            <div>
                                <span class="label label-info"><?php echo $review[$i]->sentiment?></span>
                                <span class="label label-info"><?php echo $review[$i]->label?></span>
                            </div>
			        	</div>
			        	<div class="review-control" data-toggle="modal" data-target="#edit_word_<?php echo $i ?>">
                            <span class="review-share"><i class="fa fa-edit"></i>编辑</span>
                        </div>
                    </div>
				</div>
			</div>

<?php
			}
?>
            <?php for ($i=0; $i<$review_cnt; ++$i): ?>
                <!-- 弹出模态框 -->
                <div class="modal fade" id="edit_word_<?php echo $i;?>" tabindex="-1" role="dialog" aria-labelledby="modal-title-<?php echo $i ?>">
                    <div class="modal-dialog" role="document">
                        <div class="modal-content">
                            <div class="modal-header">
                                <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
                                <h4 class="modal-title" id="modal-title-<?php echo $i ?>">编辑分词与标签</h4>
                            </div>
                            <form action="action/review-action.php" method="POST">
                                <input name="review_id" type="hidden" value="<?php echo $review[$i]->review_id ?>" />

                                <div class="modal-body">
                                    <div class="form-group">
                                        <label for="cut_word" class="control-label">请输入分词（用英文逗号隔开）</label>
                                        <input type="text" class="form-control" name="cut_words" value="<?php echo $cut_words_str[$i] ?>">
                                    </div>
                                    <div class="form-group">
                                        <label for="label" class="control-label">请选择类别标签</label>
                                        <div>
                                            <select name="label" id="label" class="selectpicker">
                                                <?php foreach ($label_list as $label): ?>
                                                    <option value="<?php echo $label['label_id'] ?>" <?php echo $label['label_id']==$review[$i]->label_id?"selected":""?>>
                                                        <?php echo $label['text']?>
                                                    </option>
                                                <?php endforeach ?>
                                            </select>
                                        </div>
                                    </div>
                                    <div class="form-group">
                                        <label for="sentiment" class="control-label">请选择情感标签</label>
                                        <div>
                                            <select name="sentiment" id="sentiment" class="selectpicker">
                                                <?php foreach ($sentiment_list as $sentiment): ?>
                                                    <option value="<?php echo $sentiment['sentiment_id'] ?>" <?php echo $sentiment['sentiment_id']==$review[$i]->sentiment_id?"selected":""?>>
                                                        <?php echo $sentiment['text']?>
                                                    </option>
                                                <?php endforeach ?>
                                            </select>
                                        </div>
                                    </div>

                                </div>
                                <div class="modal-footer">
                                    <button type="button" class="btn btn-default" data-dismiss="modal">取消</button>
                                    <button type="submit" class="btn btn-primary">确定</button>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
            <?php endfor ?>
            <div class="text-center">
                <ul class="pagination">
                    <li>
                        <a href="<?php echo $url_root."page={$pagination_pre}"?>" aria-label="Previous">
                            <span aria-hidden="true">&laquo;</span>
                        </a>
                    </li>
                    <?php for($i = $pagination_left; $i<=$pagination_right; ++$i): ?>
                        <li <?php if($page == $i) echo "class=\"active\""?>>
                            <a href="<?php echo $url_root."page={$i}"?>"><?php echo $i ?></a>
                        </li>
                    <?php endfor ?>
                    <li>
                        <a href="<?php echo $url_root."page={$pagination_next}"?>" aria-label="Next">
                            <span aria-hidden="true">&raquo;</span>
                        </a>
                    </li>
                </ul>
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

        <script type="text/javascript" src="lib/bootstrap-select/bootstrap-select.js"></script>
        <!-- 自定义 -->
        <!-- Echarts -->
        <script src="lib/echarts/echarts.min.js"></script>
        <!-- <script type="text/javascript" src="sys/js/index.js"></script> -->
        <script type="text/javascript" src="sys/js/review.js"></script>
    </body>
</html>