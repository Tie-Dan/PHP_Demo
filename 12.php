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
       <?php
        for ($i=0;$i<10;$i++){
            if($i%2){
                echo ' <li class="odd"></li>';
            }else{
                echo '<li class="even"></li>';
            }
        }
       ?>
    </ul>
</body>
</html>