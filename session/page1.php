<?php session_start(); ?>

<h1>这里是page1 : session_id:<?php 
header("Content-Type:text/html;charset=utf-8");
    echo session_id();
 ?>  </h1>
<h1><?php echo "<a href='./del.php'>注销</a>"; ?></h1>
