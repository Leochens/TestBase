<?php 
    //模板管理
    $header['logo_path']='LOGO';
    $header['title']='TITLE';
    $header['Menu']= array(
        'Home' ,
        'Github',
        'About',
        'Fork',
        'Session',
    );
    $dashboard=array(
        'title' =>'后台首页' ,
        'MENU' => 'MENU',
        'items' =>array(
            array('info' => '我的日记卡片' , 'src' =>'./dashboard/show_article.php' ),
            array('info' => '我的书签' , 'src' =>'./dashboard/bookmark.php' ),
            array('info' => '我的文件' , 'src' =>'./dashboard/upload_file.php' ),
            array('info' => '测试下载' , 'src' =>'./dashboard/download.php' ),

            //array('info' => 'Github' , 'src' =>'javascript:void(0);' ),
            //array('info' => '进程管理' , 'src' =>'javascript:void(0);' ),
            array('info' => '注销登陆' , 'src' =>'./del.php' ),
        )
    );


    $Tips= array(
        'login_sec' => '登陆成功' ,
        'login_fai' => '登陆失败' ,
        'reg_sec'   => '注册成功' ,
        'reg_fai'   => '注册失败' ,
        'logout'    => '注销成功' ,
        'login_err' => '请先登陆' ,
        'store_sec'  => '存储成功！',
        'store_fai'  => '存储失败！',
        'store_err'  => '存储时发生意外！',
        'improve'    => '请完善信息'
         );


    $login['title']='日志管理系统';
    $login['err']='用户名或密码错误！';
    //
    $reg['improve']='请完善信息';
    $reg['reg_sec']='注册成功';
    $reg['reg_fai']='注册失败';

    $delete['sec']='删除成功';
    $delete['fai']='删除失败';

    $Edit['info']='这里是markdown编辑器';
    $Edit['help']="在此区域可以进行markdown的编辑，一切编辑都会实时预览在右边的区域. ";



    //版权
    $About['author']='张鹤麟';
    $About['email']='1183422598@qq.com';
    $About['copyright']='© 2017 Mokis.top, Inc.';


 ?>