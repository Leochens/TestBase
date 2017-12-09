<?php 
require './include/init.php';
//echo md5('123456');
?>

<form id="reg_form" action="" method="post">
    <input placeholder="输入用户名" type="text" name="username" id="css/" class="username"><br>
    <input placeholder="输入密码"  type="password" name="password" id="p1" class="password"><br>
    <input placeholder="重复输入密码" type="password" name="password" id="p2" class="password" onblur="validate()"><span class="_tip"></span><br>
    <input placeholder="请输入邮箱" type="text" name="email" class="email" onblur="emailcheck(this)"><span class="_tip"></span><br>
    <input type="submit" name="sub" id="submit" value="注册" class="sub">
</form>
<?php include ROOT.'./footer.php';?>
<?php 
if (isset($_POST['sub'])) {
    $tip='';
    if ($_POST['username']==null||$_POST['password']==null||$_POST['email']==null) {
        $tip=$reg['improve'];
    }else{
        $new_user['username']=$_POST['username'];
        $new_user['password']=md5($_POST['password']);
        $new_user['email']=$_POST['email'];
        if($db->autoExecute('user',$new_user))
            $tip=$reg['reg_sec'];
        else
            $tip=$reg['reg_fai'];
    }
    //echo "<script>window.location=".'./View/Tips.php?tip='.$tip.";</script>";
    header("Location:./View/Tips.php?tip=".$tip);
   // header('Location:dashboard.php');
}
?>

<style>
    body{
        background: #F5FFF5;
    }
    #reg_form{
        margin: 100px 60%;
        width: 300px;
        border: 1px solid #90EE90;
        border-radius: 10px;
        }
    .username,.password,.email{
        border: 1px solid grey;
        border-radius: 3px;
        padding:6px 8px 6px 8px;
        margin: 10px;
        width: 60%;
    }
    .sub{
        padding:6px 8px 6px 8px;
        background: #FFE4E1;
        margin: 10px;
        width: 60%;
    }
    ._tip{
        font-size: 12px;
    }
    form> input{
        
    }
</style>

<script src="./js/reg_check.js"></script>