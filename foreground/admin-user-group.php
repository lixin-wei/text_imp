<div class="row">
    <div class="col-xs-12 form-container">
        <div id="group" class="offset-box"></div>
        <!-- 子标题 -->
        <div class="subhead">
            <span class="subhead-title">用户组</span>
            <form class="user-filter-form pull-right">
                <button class="btn btn-success" type="button" data-toggle="modal" data-target="#addgroup"><i class="fa fa-plus"></i></button>
            </form>
        </div>
        <!-- 列表 -->
        <?php
            for ($i=0; $i<$group_cnt; ++$i) {
        ?>
        <div class="list-item">
            <div class="groupname pull-left"><?php echo $group[$i]->name?></div>
            <a href="action/admin-user-action.php?action=delgroup&group_id=<?php echo $group[$i]->id?>&gid=<?php echo $gid?>" class="btn btn-danger pull-right"><i class="fa fa-trash-o"></i></a>
        </div>
        <?php        
            }
        ?>
    </div>
</div>

<!-- 弹出模态框 -->
<!-- 添加新用户组 -->
<div class="modal fade" id="addgroup" tabindex="-1" role="dialog" aria-labelledby="addgroupModalLabel">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
                <h4 class="modal-title" id="">添加新用户组</h4>
            </div>
            <form action="action/admin-user-action.php" method="get">
                <input type="hidden" name="action" value="addgroup" />
                <input name="gid" type="hidden" value="<?php echo $gid?>" />
                <div class="modal-body">
                    <div class="form-group">
                        <label for="group-name" class="control-label">用户组名</label>
                        <input type="text" class="form-control" name="group_name">
                    </div>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-default" data-dismiss="modal">取消</button>
                    <button type="submit" class="btn btn-primary">添加</button>
                </div>
            </form>
        </div>
    </div>
</div>