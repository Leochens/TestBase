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
        echo "<h1>亲爱的".$_SESSION['username']."你登陆成功了</h1>";
        header('Location:dashboard.php');        
    }else{
        $flag=1;
    }

}?>

<div class="login_main">
    <h3 class="title" align="center">日志管理系统</h3>
     <form method="post" action="login.php" method="get">
         <div id="tip" ></div>
         <input id="username" type="text" name="username" placeholder="请输入用户名.."><br>
         <input id="password" type="password" name="password"><br>
         <input class="btn" type="submit" name="sub" value="login">
     </form> 
     <a class="reg" href="./register.php">没有账户？注册</a>
 </div>

<?php if($flag) {?>
 <script>

    document.getElementById('tip').innerHTML='用户名或密码错误！'
</script>
<?php } ?>

