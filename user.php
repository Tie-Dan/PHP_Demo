<?php
header("Content-Type:text/html;charset=utf-8");
    //1.接受数据
    $act=$_GET["act"];
    $user=$_GET["user"];
    $pass=$_GET["pass"];
    switch ($act){
        case "log":
            $conn=new mysqli('localhost','root','123','phpdata_base');
            $res=$conn->query("select * from users where username='".$user."'");
            $row=$res->fetch_row();

            if($row){
               if($row[1]==$pass){
                    echo '{"err":0,"msg":"登陆成功"}';
                }else{
                    echo '{"err":1,"msg":"用户名或者密码有误"}';
                }
            }else{
                echo '{"err":1,"msg":"用户名不存在"}';
            }
            break;
        case "add":
            $conn=new mysqli('localhost','root','123','phpdata_base');
            $res=$conn->query("select * from users where username='".$user."'");
            $row=$res->fetch_row();
            if($row){
                echo '{"err":1,"msg":"用户名已存在"}';
            }else{
              if ($conn->query("insert into users values ('".$user."','".$pass."')") ) {
                    echo '{"err":0,"msg":"注册成功"}';
                } else {
                    echo '{"err":1,"msg":"数据插入失败"}' ;
                }

            }
            break;
    }
?>