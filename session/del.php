<?php 
    //这里执行用户的注销行为
    require 'include/init.php';
    header("Content-Type:text/html;charset=utf-8");
    //清空session 
    $_SESSION=array();
    //如果用户是基于cookie的 那么就把cookie删除
    if(isset($_COOKIE[session_name()]))
    {
        setcookie(session_name(),'',time()-3600,'/');
    }
    include ROOT.'View/header.html';
    //彻底删除session
    if(session_destroy())
    {
    echo $Tips['logout']; ?>
<script>
    //解决iframe跳出
    console.log("跳出");
    top.location="./login.php";
</script>
<?php

    //header('refresh:1,url="./login.php"') ;
}
 ?>