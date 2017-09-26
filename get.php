<?php
/**
 * Created by PhpStorm.
 * User: tiedan
 * Date: 2017/6/17
 * Time: 10:09
 */
 header("Content-Type:text/html;charset=utf-8");
    //1.接受数据
        $user=$_GET['user'];
        $pass=$_GET['pass'];
    //2.处理数据
        $str = '我的名字是'.$user.'我的密码是'.$pass;
    //3.返回结果
echo $str;
?>