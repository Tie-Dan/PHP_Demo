<?php
header("Content-Type:text/html;charset=utf-8");
    //1.链接数据库
    $conn=new mysqli('localhost','root','123','phpdata_base');
   //2.编写sql
    $res=$conn->query('select * from users');
   //3.取出一条(数组)
    while($row=$res->fetch_row()){
        echo '名字:'.$row[0].',密码:'.$row[1].'<br>';
    }
    echo $row[1];
    $res->free();
    $conn->close();
?>