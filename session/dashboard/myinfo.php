<?php header("Content-Type:text/html;charset=utf-8"); ?>
<link rel="stylesheet" href="../css/myinfo.css">
<div class="main">
    <div class="content">
        <form action="./deal_article.php">
        <div class="top_l box">
            <div class="top_ll box">
                <div class="info_1">访问</div>
                <div class="info_1">回溯</div>
            </div>

            <div class="top_lr box">
                <input type="text" name="title" id="TITLE">
            </div>
        </div>
        <div class="top_r box">
            <div class="info_2"></div>
            <div class="info_2"></div>
        </div> 
        <div class="middle box">
            
            <div class="details box">
                <textarea name="content" id="art"></textarea>
            </div>
            <input type="submit" name="sub" value="提交"></form>
        </div>
        <div class="foot"></div>
    </div>
</div>
