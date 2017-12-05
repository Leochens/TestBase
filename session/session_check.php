<?php 

if (!isset($_SESSION['username'])) {
    include ROOT.'View/header.html';
    echo "请先登陆";
    header('refresh:2,url="./login.php"');
   // header(location:.getenv("HTTP_REFERER")); 
     echo"<script>alert('请先登陆');history.go(-1);</script>";  
    die();
}


 ?>