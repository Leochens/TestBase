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
            <?php foreach ($dashboard['items'] as $item) {?>
            <li>  
                <h3 onclick="To('<?php echo  $item['src']?>')"><?php echo  $item['info']?></h3>
            </li>
            <?php } ?>
        </ul>
    </div>
</div>

<!--主要控制区域-->
<iframe id="frame" style="float: left;overflow: hidden;" src="./dashboard/myinfo.php" frameborder="0" height="100%" width="80%"></iframe>
<!--页脚-->

<script>
    function To(link) {
    var frame=document.getElementById('frame');
    frame.setAttribute('src',link )
    }
</script>

</body>
</html>
