<?php 
require './session_start.php';
require 'session_check.php';
include './header.html';

?>
<h1>这里是index.php</h1>
<a href="./page1.php">page1</a><br>
 <h1><?php echo "<a href='./del.php'>注销</a>"; ?></h1>
