<?php
//这里执行用户的登陆行为 
require './include/init.php';
$flag=0;        //检测是否登陆出错
if (isset($_POST['sub'])) {
    $db= mysql::getIns();
    $sql="SELECT * FROM user WHERE username = '".$_POST['username']."' AND  password = '".md5($_POST['password'])."'";
    $res=$db->getAll($sql);

    if(count($res)>0)
    {
        $_SESSION['username']=$_POST['username'];
        header('Location:dashboard.php');        
    }else{
        $flag=1;
    }

}?>
<link rel="stylesheet" href="css/login.css">
<div class="login_main">
    <h3 class="title" align="center"><?php echo $login['title']; ?></h3>
     <form method="post" action="login.php" method="get">
         <div id="tip" ></div>
         <input id="username" type="text" name="username" placeholder="请输入用户名.."><br>
         <input id="password" type="password" name="password"><br>
         <input class="btn" type="submit" name="sub" value="login">
     </form> 
     <a class="reg" href="./register.php">没有账户？注册</a>
 </div>
 <style>
     body{
        background: url(upload/login.jpg);
        -webkit-background-size: 100%;
        background-size: 100%;
     }
 </style>
<?php include ROOT.'./footer.php';?>
<?php if($flag) {?>
 <script>

    document.getElementById('tip').innerHTML="<?php echo $login['err']; ?>";
</script>
<?php } ?>

