<?php
require './include/init.php';
include './session_check.php';
 ?>
<!DOCTYPE html>
<html>
<head>
    <title><?php echo $dashboard['title']; ?></title>
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
            <li class="menu_btn"><a href=""><h3><?php echo $dashboard['MENU']; ?></h3></a></li>
            <li>  
                <h3 onclick="ToArticle()"><?php echo $dashboard['item_1']; ?></h3>
            </li>
            <li>
                <span>
                    <h3 onclick="ToBookmark()"><?php echo $dashboard['item_2']; ?></h3>
                </span>
            </li>
            <li>
                <span>
                    <a href=""><h3><?php echo $dashboard['item_3']; ?></h3></a>
                </span>
            </li>
            <li>
                <span>
                    <a href=""><h3><?php echo $dashboard['item_4']; ?></h3></a>
                </span>
            </li>
            <li>
                <span>
                    <a href=""><h3><?php echo $dashboard['item_5']; ?></h3></a>
                </span>
            </li>
            <li>
                <span>
                    <a href=""><h3><?php echo $dashboard['item_6']; ?></h3></a>
                </span>
            </li>
            <li>
                <span>
                    <a href="del.php"><h3><?php echo $dashboard['item_7']; ?></h3></a>
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
    function ToBookmark() {
    var frame=document.getElementById('frame');
    frame.setAttribute('src','./dashboard/bookmark.php')
    }    

</script>

</body>
</html>
