<?php
$url = "https://segmentfault.com/q/1010000000457608";  // 要获取的网址
header("Content-Type:text/html;charset=utf-8");
$array = file($url); // file 函数 把整个文件读入到一个数组中
foreach($array as $k=>$v){
/*这里再脑补一下 preg_match() 函数;
preg_match() 函数用于进行正则表达式匹配，成功返回 1 ，否则返回 0 。

语法：
int preg_match( string pattern, string subject [, array matches ] )

参数说明： 参数 说明
pattern 正则表达式
subject 需要匹配检索的对象
matches 可选，存储匹配结果的数组， $matches[0] 将包含与整个模式匹配的文本，$matches[1] 将包含与第一个捕获的括号中的子模式所匹配的文本，以此类推
*/

if(preg_match("/<title>(.*)<\/title>/", $v, $title)){
//echo $title[1]; 
//当然这期间有时候会涉及编码问题需要用到 mb_detect_encoding() 函数去判断字符串的编码
/*
mb_detect_encoding()
该函数有三个参数：
1：被检测的输入变量、
2：编码方式的检测顺序(一旦为真，后面自动忽略)、
3：strict模式(该模式表示是都按照严格的编码进行判断默认是false)
*/
        $encode=mb_detect_encoding($title[1],array('ASCII','UTF-8','GB2312','GBK','BIG5')); //这边编码类型不全  需要是补全
        if ($encode == "GBK")
        {
            $str = iconv("GBK","UTF-8",$title[1]);
        }
        /*if ($encode == "UTF-8"){
        $str = iconv("UTF-8","GBK",$title[1]);
        }*/
        // 这个举例把UTF-8de 转换成 GBK  具体需要转成什么样就去 判断了
        echo $str;
        break;
    }
}
?>