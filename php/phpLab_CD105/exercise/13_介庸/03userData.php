<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <style>
    .lefttd{
        background-color:pink;
    }
    table{
        margin:auto;
        text-align:center;
        
  
    }
    </style>
    <title>Document</title>
</head>
<body>
<?php $data=["小丸子","是秘密唷...","漫畫走廊..."]; ?>



    <table border=1>
        <tr>
            <td class="lefttd">姓名</td>
            <td><?php echo $data[0]; ?></td>
        </tr>
        <tr>
            <td class="lefttd" >年齡</td>
            <td><?php echo $data[1]; ?></td>
        </tr>
        <tr>
            <td class="lefttd">地址</td>
            <td><?php echo $data[2]; ?></td>
        </tr>
    </table>
</body>
</html>