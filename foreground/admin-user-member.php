<div class="row">
    <div class="col-xs-12 form-container">
        <!-- 子标题 -->
        <div id="member" class="offset-box"></div>
        <div class="subhead">
            <span class="subhead-title">用户组成员</span>
            <form class="user-filter-form pull-right">
                <div class="btn-group" role="group">
                    <button type="button" class="btn btn-default dropdown-toggle" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                    <span><?php echo $gname1 ?></span>
                    <span class="caret"></span>
                    </button>
                    <ul class="dropdown-menu">
                        <li><a href="?gid=0"><span>所有用户</span></a></li>
                    <?php
                        for ($i=0; $i<$group_cnt; ++$i) {
                    ?>
                        <li><a href="?gid=<?php echo $group[$i]->id?>"><span><?php echo $group[$i]->name ?></span></a></li>
                    <?php
                        }
                    ?>
                    </ul>
                </div>
                <!-- 弹出模块框 - 添加用户组成员 -->
                <button class="btn btn-success" type="button" data-toggle="modal" data-target="#adduser"><i class="fa fa-plus"></i></button>
            </form>
        </div>
        <!-- 列表 -->
        <?php
            for ($i=0; $i<$user_cnt; ++$i) {
                if ($gid==0 || $gid==$user[$i]->group_id) {
        ?>
        <div class="list-item">
            <dl class="pull-left">
                <dt><?php echo $user[$i]->name;?></dt>
                <dd><?php echo $user[$i]->email;?></dd>
            </dl>
        <?php 
            if ($gid && $gid!=1) { 
        ?>
            <a href="action/admin-user-action.php?action=deluser&user_id=<?php echo $user[$i]->id?>&gid=<?php echo $user[$i]->group_id?>" class="btn btn-danger pull-right"><i class="fa fa-trash-o"></i></a>
        <?php } ?>
            <!-- <button class="btn btn-danger pull-right" type="submit"><i class="fa fa-trash-o"></i></button> -->
        </div>
        <?php       
                }
            }
        ?>
    </div>
</div>

<!-- 弹出模态框 -->
<!-- 添加用户 -->
<div class="modal fade" id="adduser" tabindex="-1" role="dialog" aria-labelledby="userModalLabel">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
                <h4 class="modal-title" id="">添加用户组新成员</h4>
            </div>
            <form action="action/admin-user-action.php" method="get" />
                <input name="action" type="hidden" value="adduser" />
                <input name="gid" type="hidden" value="<?php echo $gid?>">
                <div class="modal-body">
                    <!--
                        <div class="form-group">
                            <label for="user-name" class="control-label">用户名</label>
                            <input type="text" class="form-control" id="user-name">
                        </div>
                    -->
                    <div class="form-group">
                        <label for="email" class="control-label">邮箱</label>
                        <input type="text" class="form-control" name="email">
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