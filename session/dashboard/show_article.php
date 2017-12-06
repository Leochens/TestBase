<?php 
include '../include/init.php';
require ROOT.'/session_check.php';

$sql="SELECT * FROM article WHERE user ='".$_SESSION['username']."'";
$res=$db->getAll($sql);
?>
<link rel="stylesheet" href="../css/animate.css">
<div class="menu">
    <ul class="menus">
        <li class="menu_item"><span onclick="choose()">选择</span></li>
        <li class="menu_item"></li>
        <li class="menu_item"></li>
        <li class="menu_item"></li>
        <li class="menu_item"></li>
    </ul>
</div>
<ul class="article">
    <?php 
    foreach ($res as $key => $art) {
        echo '<li>';
?>   
    <div class="card">
        <button onclick='window.location.href="./delete.php?art_id=<?php echo $art['art_id']; ?>"' class="del animated rubberBand">X</button>
        <div class="sa_header">
            <h1><?php echo $art['title']?></h1>
        </div>
        <div class="container">
            <!--从数据库取出时要把\n换成br-->
            <p><?php echo str_replace("\n","<br/>",$art['content']);?></p>
        </div>
    </div>     
<?php
        echo '</li>';
         }?>
</ul>


<style>
    ul,li{
        list-style: none;
    }
    li.menu_itme{
        display: inline;
    }
    .article,.article li{
        list-style: none;
        margin: 0;
        padding: 0;
    }
    .menu span{
        font-size: 14px;
        font-weight: 300;
        background: #00FA9A;
        color: #fff;
        padding: 4px;
        border-radius: 3px;
        cursor: pointer;
    }
    .card{
    min-height: 300px;
    min-width: 200px;
    max-width: 800px;
    max-height: 500px;
    box-shadow: 0 4px 8px 0 rgba(0, 0, 0, 0.2), 0 6px 20px 0 rgba(0, 0, 0, 0.19);
    text-align: center;
    float: left;
    margin:15px;
    animation:  1s flipInX ;

    }​
    .card:hover{
        
        background: #FFA07A;color: #fff;
        animation: 1s jello;
    }    
    .sa_header{
    width: 300px;
    background-color: #4CAF50;
    color: white;
    padding: 10px;
    
    padding-bottom: 6px;

    }​
    .container {
    padding: 10px;

    }
   
    
    .del{
        display: none;
        border: none;
        background: #FFFFE0;
        border: 1px solid #fff;
        border-radius: 10px;
        float: right;
        margin:10px;
       
    }
   
</style>


<script>

    function choose() {
        var btn = document.getElementsByClassName('del');
        for (var i = btn.length - 1; i >= 0; i--) {
            btn[i].style.display="block";
        }
    }
</script>

