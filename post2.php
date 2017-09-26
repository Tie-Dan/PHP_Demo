<?php
header("Content-Type:text/html;charset=utf-8");
    //1.接受数据
        $user=$_POST['user'];
        $pass=$_POST['pass'];
    //2.处理数据
        if($user=='admin'&&$pass=='admin'){
            echo "登录成功";
        }else{
            echo "登陆失败";
        }
?>