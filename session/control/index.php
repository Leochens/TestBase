<?php require '../include/init.php'; ?>
<!DOCTYPE html>
<html>
<head>
    <title>高级管理控制台</title>
</head>
<body>
<?php 
//$dashboard['items'][8] =array('info' => '测试' , 'src' =>'./del.php' );

$cc='hllo';

$output="$cc=".var_export($cc, TRUE);

file_put_contents(ROOT.'./zn/string.php', $output);
 ?>
</body>
</html>