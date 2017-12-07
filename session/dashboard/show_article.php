<?php 
include '../include/init.php';
require ROOT.'/session_check.php';

$sql="SELECT * FROM article WHERE user ='".$_SESSION['username']."'";
$res=$db->getAll($sql);
?>
<link rel="stylesheet" href="../css/animate.css">
<!--<div class="menu">
    <ul class="menus">
        <li class="menu_item"><span></span></li>
        <li class="menu_item"></li>
        <li class="menu_item"></li>
        <li class="menu_item"></li>
        <li class="menu_item"></li>
    </ul>
</div>-->
<button class="del_btn" onclick="choose()">选择</button>
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
    textarea,h1,h2,h3,h4,h5,h6,input,button,div,p,span,ul,li,table,th,td,tr,label{
        border: none;
        font-family: 'microsoft Yahei';
        /*font-size: 17px;*/
        font-weight: 300;  
    }
    .del_btn{
        border: none;
        display: inline;
        position: fixed;
        right: 50px;
        top: 25px;
        background: #A9A9A9;
        color: #fff;
        outline: none;
        padding: 3px;
        border-radius: 3px;
    }
    .del_btn:hover,.del_btn:focus{
        background: #FF6347;
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
    min-height: 400px;
    min-width: 300px;
    max-width: 1000px;
    max-height: 2000px;
    overflow: hidden;
    box-shadow: 0 4px 8px 0 rgba(0, 0, 0, 0.2), 0 6px 20px 0 rgba(0, 0, 0, 0.19);
    /*text-align: center;*/
    float: left;
    margin:15px;
    animation:  1s fadeIn ;


    }​
    .card:hover{
        background: #FFA07A;color: #fff;
        animation: 1s jello;
    }
    .sa_header{

    min-width: 300px;
    max-width: 800px;
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

