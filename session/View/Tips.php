<?php 
header("Content-Type:text/html;charset=utf-8");
if (isset($_GET['tip'])) {
?>
<div class="wraper">
<div class="tip">
    <p class="tip_info"><?php echo $_GET['tip']; ?></p>
    <?php if ($_GET['tip']=='注册成功') {?>
    <button class="yes" onclick="window.location='../login.php'">确定</button>
    <?php   }else{ ?>
    <button class="yes" onclick="history.go(-1)">确定</button>
    <?php } ?>
</div>
</div>
<?php } ?>

<style>
    .wraper{
        height: 100%;
        width: 100%;
        position: fixed;
        left: 0;
        top: 0;
        background: rgba(0,0,0,0.3);
    }
    .tip{
        animation: 1s ani;
        position: relative;
        margin: 10% auto;
        height: 200px;
        width: 350px;
        background: #fff;
        border-radius: 10px;
        padding: 10px;
        font-size: 17px;
        font-weight: 300;
        text-align: center;
    }
    .yes{
        border: none;
        padding: 3px;
        border-radius: 3px;
        background: #7B68EE;
        margin: 0 auto;
    }
    @keyframes ani{
        from{top: 0;opacity: 0;}to{top: 10%;opacity: 1}
    }
    
</style>

