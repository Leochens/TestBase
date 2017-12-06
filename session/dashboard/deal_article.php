<?php 
require '../include/init.php';

if($_GET['sub'])
{
    if($_GET['title']==''||$_GET['content']=='')
    {
        echo '请完善信息';
        header('refresh:1,url=./myinfo.php');
    }else{
    //把文章存进去
    $art_info['title']=$_GET['title'];
    $art_info['content']=$_GET['content'];
    if($db->autoExecute('article',$art_info))
    {
        echo "存储成功！";
        header('refresh:1,url=./myinfo.php');
    }
    else{
        header('refresh:1,url=./myinfo.php');
        echo "存储失败！";
        }

    }
    
}


/**/
?>