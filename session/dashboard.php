<?php
require './include/init.php';
include './session_check.php';
 ?>
<!DOCTYPE html>
<html>
<head>
    <title>后台首页</title>
    <link rel="stylesheet" href="./css/dashboard.css">
    <script src="js/dashboard.js"></script>
</head>
<body>
<!--头部-->
<?php include (ROOT.'View/header.html');
 ?>
<!--侧边栏-->
<div id="sidebar">
    <div class="content">
        <ul>
            <li class="menu_btn"><a href=""><h3>MENU</h3></a></li>
            <li>
                <span onclick="ToArticle()">
                   <h3>我的文章</h3>
                </span>
            </li>
            <li>
                <span>
                    <a href=""><h3>我的日志</h3></a>
                </span>
            </li>
            <li>
                <span>
                    <a href=""><h3>回收站</h3></a>
                </span>
            </li>
            <li>
                <span>
                    <a href=""><h3>Github</h3></a>
                </span>
            </li>
            <li>
                <span>
                    <a href=""><h3>进程管理</h3></a>
                </span>
            </li>
            <li>
                <span>
                    <a href=""><h3>运行状态</h3></a>
                </span>
            </li>
            <li>
                <span>
                    <a href="del.php"><h3>注销登陆</h3></a>
                </span>
            </li>            
        </ul>
    </div>
</div>
<!--主要控制区域-->
<iframe id="frame" style="float: left;overflow: hidden;" src="./dashboard/myinfo.php" frameborder="0" height="100%" width="80%"></iframe>
<!--页脚-->
<script>
    function ToArticle() {
    var frame=document.getElementById('frame');
    frame.setAttribute('src','./dashboard/show_article.php')
    }

</script>

</body>
</html>
