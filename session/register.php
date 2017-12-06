<?php 
require './include/init.php';
?>

<form id="reg_form" action="" method="post">
    用户名：<input type="text" name="username" id="" class="username"><br>
    密码：<input type="password" name="password" id="" class="password"><br>
    邮箱：<input type="text" name="email" class="email"><br>
    <input type="submit" name="sub" value="注册" class="sub">
</form>


<?php 
if (isset($_POST['sub'])) {
    $tip='';
    if ($_POST['username']==null||$_POST['password']==null||$_POST['email']==null) {
        $tip='请完善信息';
    }else{
        $tip="注册成功";
    }
    //echo "<script>window.location=".'./View/Tips.php?tip='.$tip.";</script>";
    header("Location:./View/Tips.php?tip=".$tip);
   // header('Location:dashboard.php');
}
?>

<style>
    #reg_form{
        margin: 100px auto;
        width: 300px;
        }
    .username,.password,.email{
        border: 1px solid grey;
        border-radius: 3px;
        padding:6px 8px 6px 8px;
        margin: 10px;
    }
    .sub{
        padding:6px 8px 6px 8px;
        background: #FFE4E1;
    }
</style>