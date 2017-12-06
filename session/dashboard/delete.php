<?php 
require '../include/init.php';


if (isset($_GET['art_id'])) {

    $sql="DELETE FROM article WHERE art_id = ".$_GET['art_id'];
    if($db->query($sql))
    {
        echo "删除成功";
        unset($_GET['art_id'])  ;
        echo"<script>alert('日记卡片删除成功');history.go(-1);</script>";
    }
    else{
        echo "删除失败";
        unset($_GET['art_id'])  ;

        echo"<script>alert('日记卡片删除失败');history.go(-1);</script>";  
    }
}

if (isset($_GET['mark_id'])) {

    $sql="DELETE FROM bookmark WHERE mark_id = ".$_GET['mark_id'];
    if($db->query($sql))
    {
        echo "删除成功";
        echo"<script>alert('删除书签成功');history.go(-1);</script>";  
    }
    else{
        echo "删除失败";
        echo"<script>alert('删除书签失败');history.go(-1);</script>";  
    }
}


 ?>