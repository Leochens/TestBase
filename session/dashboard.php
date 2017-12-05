<?php
include './session_start.php';
include './session_check.php';
 ?>
<!DOCTYPE html>
<html>
<head>
    <title>后台首页</title>
    <link rel="stylesheet" href="css/dashboard.css">
</head>
<body>
<!--头部-->
<?php include './header.html'; ?>
<!--侧边栏-->
<div id="sidebar">
    <div class="content">
        <ul>
            <li class="menu_btn">MENU</li>
            <li>
                <span>
                    <h3>我的信息</h3>
                </span>
            </li>
            <li>
                <span>
                    <h3>我的日志</h3>
                </span>
            </li>
            <li>
                <span>
                    <h3>回收站</h3>
                </span>
            </li>
            <li>
                <span>
                    <h3>Github</h3>
                </span>
            </li>
            <li>
                <span>
                    <h3>进程管理</h3>
                </span>
            </li>
            <li>
                <span>
                    <h3>运行状态</h3>
                </span>
            </li>
        </ul>
    </div>
</div>
<!--主要控制区域-->
<iframe style="float: left;overflow: hidden;" src="./dashboard/myinfo.php" frameborder="0" height="100%" width="80%"></iframe>
<!--页脚-->
<script src="js/dashboard.js"></script>
</body>
</html>
