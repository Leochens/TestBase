<?php 

function goTip_3F($tip)
{   
    //只适用于三级目录
    //$path=ROOT.'View/Tips.php';
     header("Location:../../View/Tips.php?tip=".$tip);
}

function goTip_2F($tip)
{   
    //只适用于二级目录
    //$path=ROOT.'View/Tips.php';
     header("Location:../View/Tips.php?tip=".$tip);
}


function goTip_1F($tip)
{   
    //只适用于一级目录
    //$path=ROOT.'View/Tips.php';
     header("Location:./View/Tips.php?tip=".$tip);
}

 ?>