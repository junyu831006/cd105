<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>03userData</title>
    <style>
    h2, table{
        margin: 0 auto;
        text-align: center;
    }
    h2{
        color: #ff0080;
        padding: 10px;
    }
    table, th, td{
        border: 1px solid gray;
    }
    th{
        background-color: pink;
    }
    th, td{
        padding: 5px;
    }
    </style>
</head>
<body>
    <?php
        $name="小丸子";
        $age="是秘密呦...";
        $addr="漫畫走廊...";
        ?>
    <?php
        echo "<h2>個人小檔案</h2>";
    ?>
    <table>
        <tr>
            <th>姓名：</th>
            <td><?php echo $name ?></td>
        </tr>
        <tr>
            <th>年齡：</th>
            <td><?php echo $age ?></td>
        </tr>
        <tr>
            <th>地址：</th>
            <td><?php echo $addr ?></td>
        </tr>
    </table>

   
</body>
</html>