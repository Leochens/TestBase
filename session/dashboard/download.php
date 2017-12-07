<?php
//文件下载
//readfile
if (isset($_GET['file'])) {
    $fileinfo = pathinfo($_GET['file']);
    header('Content-type: application/x-'.$fileinfo['extension']);
    header('Content-Disposition: attachment; filename='.$fileinfo['basename']);
    header('Content-Length: '.filesize($filename));
    readfile($thefile);
    exit();
}else{
  echo "没有文件要下载";
}
?>