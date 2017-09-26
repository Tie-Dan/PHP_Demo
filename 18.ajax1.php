<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Title</title>
    <script src="jquery-2.1.4.min.js"></script>
</head>
<body>
        user: <input type="text" class="user"><br>
        pass: <input type="password" class="pass"><br>
        <input type="button" value="登陆" class="log">
        <input type="button" value="注册" class="add">
</body>
<script>
    $(()=>{
        $(".log").click(()=>{
            $.ajax({
                url:'user.php',
                data:{
                    act:"log",
                    user:$(".user").val(),
                    pass:$(".pass").val()
                },
                cache:true,
                dataType:'json',
                success(res){
                    console.log(res);
                    if (res.err){
                        alert("登陆失败"+res.msg);
                    }else{
                        alert("登陆成功")
                    }
                },
                error(){
                    alert("请求有问题");
                }
            })
        });
        $(".add").click(()=>{
            $.ajax({
                url:'user.php',
                data:{
                    act:"add",
                    user:$(".user").val(),
                    pass:$(".pass").val()
                },
                cache:true,
                dataType:'json',
                success(res){
                    console.log(res);
                    if (res.err){
                        alert("注册失败"+res.msg);
                    }else{
                        alert("注册成功");
                    }
                }
            })
        })
    })
</script>
</html>