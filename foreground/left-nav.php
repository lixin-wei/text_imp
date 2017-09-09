<ul id="sidebar-nav" class="nav  nav-stacked">
  <li <?php if ($file=="sentiment.php") echo "class=active" ?> ><a href="sentiment.php">情绪</a></li> 
  <li <?php if ($file=="words.php") echo "class=active" ?>><a href="words.php">关键词</a></li> 
  <li <?php if ($file=="version.php") echo "class=active" ?>><a href="version.php">版本</a></li> 
  <li <?php if ($file=="rating.php") echo "class=active" ?>><a href="rating.php">评分</a></li>
    <li <?php if ($file=="label.php") echo "class=active" ?>><a href="label.php">文本标签</a></li>
  <li class="visible-xs">
    <div class="btn-group sidebar-inputs " id="col-selectapp" value="选择app">
       <button type="button" class="btn btn-default dropdown-toggle" data-toggle="dropdown">
       <span class="inputs-option">微信<i class="fa fa-apple input-icon"></i></span>                   
        <span class="caret input-caret"></span>
       </button>
       <ul class="dropdown-menu" role="menuitem">
          <li><a href="#">微信<i class="fa fa-apple input-icon"></i></a></li>
          <li><a href="#">网易云音乐<i class="fa fa-android input-icon"></i></a></li>
          <li><a href="#">微博<i class="fa fa-apple input-icon"> </i></a></li>
       </ul>
    </div>
  </li>  
  <li><a href="javascript:void(0)" id="slidebar-back" class=" visible-xs fa fa-angle-right"></a></li> 
</ul>