<?php 
require '../include/init.php';


if (isset($_GET['id'])) {
    $sql="DELETE FROM article WHERE art_id = ".$_GET['id'];
    if($db->query($sql))
    {
        echo "删除成功";
        echo"<script>alert('删除成功');history.go(-1);</script>";  
    }
    else{
        echo "删除失败";
        echo"<script>alert('删除成功');history.go(-1);</script>";  
    }
}


 ?>