<?php 
require '../include/init.php';
header("Content-Type:text/html;charset=utf-8"); ?>
<link rel="stylesheet" href="../css/myinfo.css">
<link rel="stylesheet" href="../css/animate.css">
<script src="../js/showdown.min.js"></script>
<div class="main">
<form class="Form animated pulse" action="./deal_article.php">
    <label id="info" for="title"><?php echo $Edit['info']; ?></label>
    <input type="submit" name="sub" id="sub" value="提交">
    <input type="text" name="title" placeholder="在此输入你的标题" id="title">
    <div onkeyup="compile()" id="art_raw"><textarea id="art_raw_text" placeholder="<?php echo $Edit['help']; ?>" ></textarea></div>
    <div id="art" ></div>
    <textarea hidden="hidden" name="content" id="cc"></textarea>
    
</form>


</div>

<style>
/*    h1{
    font-family: 'microsoft Yahei';
    font-weight: 500;
    color: red;
    animation: 0.5s pulse;
}*/

</style>
<script>
    //markdown
    function compile(){
    var text = document.getElementById("art_raw_text").value;
    var converter = new showdown.Converter();
    var html = converter.makeHtml(text);
    document.getElementById("art").innerHTML = html;
    document.getElementById("cc").innerHTML = html;
}


</script>