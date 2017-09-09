<div class="row">
    <div class="col-xs-12 form-container">
        <div id="authority" class="offset-box"></div>
        <!-- 子标题 -->
        <div class="subhead">
            <span class="subhead-title">用户组权限</span>
            <form class="user-filter-form pull-right">
                <!-- 弹出模态框 - 添加新应用-->
                <button class="btn btn-success" type="button" data-toggle="modal" data-target="#addauthority"><i class="fa fa-plus"></i></button>
            </form>
        </div>
        <div class="list-item">
        <?php
            
        ?>


            <img src="img/icon/wechat.png" alt="" class="icon pull-left hidden-xs">
            <div class="list-item-text pull-left">
                <div class="appname">微信</div>
                <div class="platform-badge"><i class="fa fa-apple"></i>&nbspiOS</div>
            </div>
            <button class="btn btn-danger pull-right" type="submit"><i class="fa fa-trash-o"></i></button>
        </div>
        <div class="list-item">
            <img src="img/icon/weibo.png" alt="" class="icon pull-left hidden-xs">
            <div class="list-item-text pull-left">
                <div class="appname">微博</div>
                <div class="platform-badge"><i class="fa fa-apple"></i>&nbspiOS</div>
            </div>
            <button class="btn btn-danger pull-right" type="submit"><i class="fa fa-trash-o"></i></button>
        </div>
        <div class="list-item">
            <img src="img/icon/Neteasecloudmusic.png" alt="" class="icon pull-left hidden-xs">
            <div class="list-item-text pull-left">
                <div class="appname">网易云音乐</div>
                <div class="platform-badge"><i class="fa fa-android"></i>&nbspAndroid</div>
            </div>
            <button class="btn btn-danger pull-right" type="submit"><i class="fa fa-trash-o"></i></button>
        </div>
    </div>
</div>

<!-- 弹出模态框 -->
<!-- 添加用户组权限 -->
<div class="modal fade" id="addauthority" tabindex="-1" role="dialog" aria-labelledby="authorityModalLabel">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
                <h4 class="modal-title" id="">添加新应用</h4>
            </div>
            <div class="modal-body">
                <form>
                    <div class="form-group">
                        <label for="app-platform" class="control-label">商店</label>
                        <div class="dropdown">
                            <button class="btn btn-default dropdown-toggle" id="dropdownMenu1" type="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="true">
                            <i class="fa fa-adn"></i><span>请选择商店</span>&nbsp<span class="caret"></span>
                            </button>
                            <ul class="dropdown-menu" aria-labelledby="dropdownMenu1">
                                <li><a href="#"><i class="fa fa-apple"></i><span>iOS</span></a></li>
                                <li><a href="#"><i class="fa fa-android"></i><span>Android</span></a></li>
                            </ul>
                        </div>
                    </div>
                    <div class="form-group">
                        <label for="app-name" class="control-label">应用名</label>
                        <input type="text" class="form-control" id="app-name">
                    </div>
                </form>
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-default" data-dismiss="modal">取消</button>
                <button type="button" class="btn btn-primary">添加</button>
            </div>
        </div>
    </div>
</div>