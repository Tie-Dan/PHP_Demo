<?php
header("Content-Type:text/html;charset=utf-8");
    //1.接受数据
    $user = $_POST["user"];
    $pass = $_POST["pass"];
    //链接数据库
    $conn=new mysqli("localhost","root","123","phpdata_base");
    //编写sql
    $res=$conn->query("select * from users where username='".$user."'");
    $row=$res->fetch_row();
       if($row){
           if($row[1]==$pass){
                echo "登录成功";
           }else{
               echo "用户名或者密码有误";
           }
       }else{
            echo "用户名不存在";
       }
?>