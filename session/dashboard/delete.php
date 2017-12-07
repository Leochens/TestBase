<?php 
require '../include/init.php';


if (isset($_GET['art_id'])) {

    $sql="DELETE FROM article WHERE art_id = ".$_GET['art_id'];
    if($db->query($sql))
    {
        echo $delete['sec'];
        unset($_GET['art_id'])  ;
        //删除成功
        goTip_2F($delete['sec']);
    }
    else{
        echo $delete['fai'];
        unset($_GET['art_id']);
        //删除失败
        goTip_2F($delete['fai']);
    }
}

if (isset($_GET['mark_id'])) {

    $sql="DELETE FROM bookmark WHERE mark_id = ".$_GET['mark_id'];
    if($db->query($sql))
    {
        echo $delete['sec'];
        unset($_GET['mark_id']);
       //删除成功
        goTip_2F($delete['sec']);  
    }
    else{
        echo  $delete['fai'];
        unset($_GET['mark_id']);
        
        //删除失败
        goTip_2F($delete['fai']);
    }
}


 ?>