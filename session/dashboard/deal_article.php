<?php 
require '../include/init.php';

if($_GET['sub'])
{
    if($_GET['title']==''||$_GET['content']=='')
        goTip_2F($Tips['improve']);
    else{
        //把文章存进去
        $art_info['title']=$_GET['title'];
        $art_info['content']=$_GET['content'];
        $art_info['user']=$_SESSION['username'];
        if($db->autoExecute('article',$art_info))
        {
            goTip_2F($Tips['store_sec']);
            //header('refresh:1,url=./myinfo.php');
        }
        else{
            goTip_2F($Tips['store_fai']);
            //header('refresh:1,url=./myinfo.php');
            //echo $Tips['store_fai'];
            }

    }
    
}


/**/
?>