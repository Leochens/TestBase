<?php 

if (!isset($_SESSION['username'])) {
    include './header.html';
    echo "请先登陆";
    header('refresh:2,url="./login.php"');
    die();
}


 ?>