<?php 
require './include/init.php';

if (!isset($_SESSION['username'])) {
    include ROOT.'View/header.html';
    echo $Tips['login_err'];
    header('refresh:2,url="./login.php"');
   // header(location:.getenv("HTTP_REFERER")); 
    // echo"<script>alert('请先登陆');history.go(-1);</script>";  
    die();
}



?>

<h1>这里是index.php</h1>
<a href="./page1.php">page1</a><br>
 <h1><?php echo "<a href='./del.php'>注销</a>"; ?></h1>
