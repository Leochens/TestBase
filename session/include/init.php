<?php 
header("Content-Type:text/html;charset=utf-8");
define('ROOT',str_replace('\\','/',dirname(dirname(__FILE__))).'/');

require ROOT.'./include/conf.ini.php';//加载配置文件
require ROOT.'./mysql.class.php';       //加载数据库模块
require ROOT.'/include/conf.class.php';
require ROOT.'/session_start.php';
//递归转义数组
function _addslashes($arr){
    foreach($arr as $key=>$value){
        if(is_string($value)){
            $arr[$key] = addslashes($value);
        }elseif(is_array($value)){ //如果是数组，调用自身再次转义
            $arr[$key] = _addslashes($value);
        }
    }
    return $arr;
}




$_GET = _addslashes($_GET);
$_POST = _addslashes($_POST);
$_COOKIE = _addslashes($_COOKIE);

//获得全局mysql链接
$db=mysql::getIns();


 ?>
     <link rel="stylesheet" href="css/style.css">