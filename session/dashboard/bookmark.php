<?php 
require '../include/init.php';?>

<?php  if (isset($_GET['sub'])&&$_GET['link']!=null) {//info和link不能为空
    $url = $_GET['link'];
    $info='';

    if (empty($_GET['info'])) 
    {
        $array = file($url);
        echo "he";             
        foreach($array as $k=>$v)
        {
            if(preg_match("/<title>(.*)<\/title>/", $v, $title)){
            //转码
            $title[1]=mb_convert_encoding($title[1], 'UTF-8', 'UTF-8,GBK,GB2312,BIG5,gb2312');
            $info=$title[1];
            echo "<script>
            alert('$info');
        </script>";  
            }       
        
        }
    }
    elseif (isset($_GET['info'])) {
        $info = $_GET['info'];    
    }else{
        goTip_2F($Tips['store_err']);
    }

    $Mark['info']=$info;
    $Mark['link']=$_GET['link'];
    $Mark['user']=$_SESSION['username'];
    if($db->autoExecute('bookmark',$Mark))
    {
        goTip_2F($Tips['store_sec']);
    }else{
        goTip_2F($Tips['store_fai']);


    }
}?>
<link rel="stylesheet" href="../css/animate.css">
<link rel="stylesheet" href="../css/bookmark.css">
<form id="mark_form" action="">
    书签名：<input type="text" name="info" id="info" placeholder="如果不填写则自动获取">链接：<input type="text" name="link" id="link">
    <input type="submit" name="sub" id="sub" value="提交">
</form>



<!--显示-->
<div class="showMarks" >
    <ul>
<?php 
    $sql="select * from bookmark where user = '".$_SESSION['username']."'";
 $marks=$db->getAll($sql) ;
foreach ($marks as $key => $mark) {?>
        <li class="mark_item animated fadeIn">
        <!--获取书签图标图标-->
        <img src="<?php echo "http://favicon.byi.pw/?url=".$mark['link'] ?>" alt="$mark['link']">
        <!--<span>
        <?php echo $mark['info']; ?>
        </span>-->
        <a class="a_link" href="<?php echo $mark['link']; ?>" target='_blank'>
            <?php echo $mark['info']; ?>
        </a>
        <button onclick='window.location.href="./delete.php?mark_id=<?php echo $mark['mark_id']; ?>"' class="del animated rubberBand">X</button>
    </li>
        <?php    } ?>  
    </ul> 
</div>
<?php include ROOT.'./footer.php';?>



