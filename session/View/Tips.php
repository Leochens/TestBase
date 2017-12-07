<?php 
require '../include/init.php';
header("Content-Type:text/html;charset=utf-8");
if (isset($_GET['tip'])) {
?>
<link rel="stylesheet" href="../css/animate.css">
<div class="wraper">

<div class="tip animated zoomInUp">
    <p class="tip_info"><?php echo $_GET['tip']; ?></p>
    <?php if ($_GET['tip']==$Tips['reg_sec']) {?>
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
        /*animation: 1s ani;*/
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
        margin: 30% auto;
        color: #fff;
    }
    @keyframes ani{
        from{opacity: 0;}to{opacity: 1}
    }
    
</style>

