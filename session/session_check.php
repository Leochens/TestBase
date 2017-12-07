<?php 

if (!isset($_SESSION['username'])) {
    include ROOT.'View/header.html';
    echo $Tips['login_err'];
    header('refresh:2,url="./login.php"');
   // header(location:.getenv("HTTP_REFERER")); 
     echo"<script>alert('".$Tips['login_err']."');history.go(-1);</script>";  
    die();
}


 ?>