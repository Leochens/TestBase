<?php 
require './include/init.php';

if (!isset($_SESSION['username'])) {
        
?>
<!--向未登录用户展示-->
<div class="hello">
   <div class="newDay">
       <span class="how"><?php echo $Tips['login_err']; ?></span>
       <button class="are" onclick="toLogin()">去登陆界面</button>
   <?php include ROOT.'footer.php'; ?>
   </div>
   
</div>


<style>

    .hello{
        background:  url('upload/index.jpg');
        width: 100%;
        height: 100%;
        background-repeat: no-repeat;
        background-size: 100%;
        margin: 0;
        padding:  0;
        padding-top: 100px;
    }
    .newDay{
        height: 420px;
        width: 300px;
        background: #efefef;
        margin: 0 auto;
        border-radius: 10px;
        box-shadow: 0 10px 1000px 15px rgba(255,255,224,0.6);
        opacity: 0.6;
        padding: 25px;
        /*固定大小*/
        box-sizing: border-box;
    }
    .how{
        display: block;
        width: 100px;
        height: 45px;
        margin: 25px auto;
        background: #FFEBCD;
        border-radius: 10px;
        text-align: center;
        line-height: 45px;
        font-size: 17px;
        font-weight: 300;
        opacity: 1;
        margin-bottom: 100px;
    }
    .are{
        width: 100%;
        border: none;
        border-radius: 10px;
        background: #00FFFF;
        height: 45px;
        
        /*outline: 1px solid red;
        outline-offset: 10px;*/
        outline: none;
        margin-bottom: 60px;
    }
    .are:hover{
        background: #00CED1;
    }
</style>
<script>
    function toLogin(){
        window.location.href='login.php';
    }
</script>
<?php    



    //
    /*header('refresh:2,url="./login.php"');*/
    //header(location:.getenv("HTTP_REFERER")); 
    // echo"<script>alert('请先登陆');history.go(-1);</script>";  
    die();
}
?>


<script>window.location.href="dashboard.php"</script>