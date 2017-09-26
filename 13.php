<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Title</title>
    <style>
        .odd{
            background: #ccc;
        }
        .even{
            background: #888;
        }
    </style>
</head>
<body>
<ul>
    <?php for($i=0;$i<10;$i++){?>
        <?php if($i%2){?>
            <li class="odd"></li>
        <?php }else{?>
            <li class="even"></li>
        <?php }?>
    <?php }?>
</ul>
</body>
</html>