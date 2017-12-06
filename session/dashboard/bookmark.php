<?php 
require '../include/init.php';?>
<form id="mark_form" action="">
    书签名：<input type="text" name="info" id="info">链接：<input type="text" name="link" id="link">
    <input type="submit" name="sub" id="sub" value="提交">
</form>

<?php  if (isset($_GET['sub'])&&$_GET['info']!=null&&$_GET['link']!=null) {//info和link不能为空
    $Mark['info']=$_GET['info'];
    $Mark['link']=$_GET['link'];
    if($db->autoExecute('bookmark',$Mark))
    {
        echo "<script>alert('存储成功');history.go(-1)</script>";
    }else{
        echo "<script>alert('存储失败');history.go(-1)</script>";

    }
}?>
<link rel="stylesheet" href="../css/animate.css">
<!--显示-->
<div class="showMarks" >
    <ul>
<?php $marks=$db->getAll("select * from bookmark") ;
foreach ($marks as $key => $mark) {?>
        <li class="mark_item animated flipInY">
        <button onclick='window.location.href="./delete.php?mark_id=<?php echo $mark['mark_id']; ?>"' class="del animated rubberBand">X</button>
        <!--<span>
        <?php echo $mark['info']; ?>
        </span>-->
        <a class="a_link" href="<?php echo $mark['link']; ?>" target='_blank'>
            <?php echo $mark['info']; ?>
        </a></li>
        <?php    } ?>  
    </ul> 
</div>
<style>
    ul,li{
        list-style: none;
    }
    .mark_item{
        margin: 10px;
        /*border: 1px red solid;*/
        max-width: 600px;
        min-height: 30px;
 background: #FCFCFC;

    }
    #mark_form{
        padding: 10px;
        font-weight: 300;
        font-size: 17px;
    }
    #info,#link,#sub{
        border: none;
        outline: none;
        border: 0;
        border: 1px solid #7B68EE;
        padding: 6px 8px 6px 8px;
        margin: 10px;
        border-radius: 3px;        

    }
    #sub{
        background:  #7B68EE;
        color: #fff;
    }
    #link{
    
    }
    .del{
        border: solid 1px #DDA0DD;
        padding: 6px 8px 6px 8px;
        background: #DDA0DD;
        color: #fff;
        border-radius: 3px;

    }
    .del:hover{
        background: #8A2BE2;

    }
    .showMarks{
       
    }
    .a_link{
        text-decoration: none;
        font-size: 17px;
        font-weight: 300;
        color: #6A5ACD;
        margin-left: 15px;
    }
    .a_link:hover,.a_link:focus{
        text-decoration: underline;
    }
</style>