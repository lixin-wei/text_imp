<!DOCTYPE html>
<html lang="zh-CN">
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <title>App 印象</title>
        <!-- Bootstrap -->
        <link href="lib/bootstrap/css/bootstrap.min.css" rel="stylesheet">
        <!--[if lt IE 9]>
        <script src="//cdn.bootcss.com/html5shiv/3.7.2/html5shiv.min.js"></script>
        <script src="//cdn.bootcss.com/respond.js/1.4.2/respond.min.js"></script>
        <![endif]-->
        <link rel="stylesheet" type="text/css" href="lib/bootstrap-table/bootstrap-table.css">
        <link rel="stylesheet" href="lib/font-awesome/css/font-awesome.min.css">
        <!-- Data Range Picker -->
        <link rel="stylesheet" type="text/css" href="lib/daterangepicker/daterangepicker.css">
        <link href="sys/css/login.css" rel="stylesheet">
    </head>
    <body>
        <div class="container-fluid" id = 'ui'>
            <nav class="navbar navbar-default navbar-fixed-top">
               <div class="container">
                    <!--                 <div class="row"> -->
                    <!-- Brand and toggle get grouped for better mobile display -->
                    <!-- width<1000 后head中的menu -->
                    <div class="visible-xs" id="navbar-collapse ">
                        <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#navbar-collapse" aria-expanded="false">
                    <!-- data-target 用来指定内容 -->
                            <span class="sr-only">Toggle navigation</span>
                            <span class="icon-bar"></span>
                            <span class="icon-bar"></span>
                            <span class="icon-bar"></span>
                        </button>
                     
                    </div>
                    <div class="navbar-header head">
                        <a href="#" class="navbar-brand">
                            <img src="img/brand.png" alt="Impression" id = 'logo'/>
                        </a>
                        <strong>App 印象</strong>
                    </div>
                    <!-- Collect the nav links, forms, and other content for toggling -->
                    <div class="collapse navbar-collapse " id="navbar-collapse ">
                        <div class="nav navbar-nav navbar-right">
                            <li><a href="login.php"><i class="fa fa-user-o fa-fw"></i>登录</a></li>
                            <li><a href="signup.php"><i class="fa fa-user-plus fa-fw"></i>注册</a></li>
                        </div>
                        <!-- </div> -->
                    </div>
                    <div class="navbar-collapse collapse " id="navbar-collapse" aria-expanded="true">
                    <ul class="visible-xs nav navbar-nav">
                        <li>
                            <a href="login.php"><i class="fa fa-user-o fa-fw"></i>登录</a>
                        </li>
                        <li><a href="signup.php"><i class="fa fa-user-plus fa-fw"></i>注册</a></li>
                    </ul>

                    </div>
                    <!-- head栏 -->
                   
                    <!-- end of navbar-collapse -->
                </div>
                <!-- end of container-fluid -->
            </nav>
            <div class="row main">
                <div class="container">
                    <div class = "col-md-7 main-text">
                        <p>一款自动、高效、精确的App评论数据分析系统：跨多个平台自动追踪自己和竞争对手的App，通过评论近况分析、评论详情等模块，帮助您快速获得并精确理解不同平台、不同用词习惯的用户最新反馈，进一步推动产品品质提升。</p>
                    </div>
                    <div class = "col-md-5 main-loginWindow">
                        <div class="row">
                            <div  class="main-loginWindow-box">
                            <form action="action/signup-action.php" method="get">
                              <div class="form-group">
                                <label for="exampleInputEmail1" class= 'label-text'>用户名</label>
                                <input class="form-control" name="user_name" id="sign-user" placeholder="请输入您的用户名">
                                <div class="input-item-error" id='userID-error'><span class='glyphicon glyphicon-remove-circle'></span>用户名不能为空</div>
                              </div>


                              <div class="form-group">
                                <label for="exampleInputPassword1" class= 'label-text' >邮箱</label>
                                <input type="email" class="form-control" name="email" id="sign-email" placeholder="请输入您的邮箱">
                                 <div class="input-item-error" id='email-error'><span class='glyphicon glyphicon-remove-circle'></span>邮箱不能为空</div>
                              </div>


                               <div class="form-group">
                                <label for="exampleInputPassword1" class= 'label-text' >密码</label>
                                <input type="password" class="form-control" name="pwd" id='sign-pass' maxlength="16" placeholder="请输入你的密码">
                                 <!-- input error 提示框 -->
                                   <div class="input-item-error" id='pass-error'><span class='glyphicon glyphicon-remove-circle'></span>密码应为6~16位</div>
                                   <p class="form-mention form-mention-right" >密码长度为6~16，可以是数字、字母的任意组合。</p>
                              </div>
                             
                             <!--  <div class="checkbox">
                               <label>
                                 <input type="checkbox"> Check me out
                               </label>
                             </div> -->
                             <div class="form-group ">
                              <button type="submit" class="btn form-button signup-button">注册</a>
                            </div>
                            </form>
                            </div>
                        </div>
                    </div>
                </div>
                
            </div>
            <!-- <div class="row bottomBar"></div> -->
        </div>
        <script src="lib/jquery/jquery-3.2.1.min.js"></script>
        <script src="lib/bootstrap/js/bootstrap.min.js"></script>
        <script src="sys/js/login.js"></script>
    </body>
</html>