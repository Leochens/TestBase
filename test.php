<?php 
//实现跳转到本页并处理
echo $_GET['test'];

?>
<div contenteditable="true" class="pp" id="oo" name='test'>this is 1</div>
<div contenteditable="true" class="pp" id="oo" name='test'>this is 2</div>
<div contenteditable="true" class="pp" id="oo" name='test'>this is 3</div>
<!--<input type="button" value="click" onclick='window.location="?test="+document.getElementById("oo").innerHTML'> 成功-->
<!--<input type="button" value="click" onclick='window.location="?test="+document.getElementsByName("test").value'> 失败-->
<input type="button" value="click" onclick='window.location="?test="+document.getElementsByClassName("pp")[2].innerHTML'>
<!--成功-->