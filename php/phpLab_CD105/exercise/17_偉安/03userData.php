<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<style>
    table, tr, td {
        border: 1px solid black;
    }
    .tdf{
        background-color: #FFB8C4; 
    }
    h3{
        color: #FF1C8D;
    }
</style>
<body>
    <?php
        $name="小丸子";
        $age="是秘密呦...";
        $add="漫畫走廊...";
        echo "
            <h3>個人小檔案</h3>
            <table>
                <tr>
                    <td class=tdf>姓名</td>
                    <td>{$name}</td>
                </tr>
                <tr>
                    <td class=tdf>年齡</td>
                    <td>{$age}</td>
                </tr>
                <tr>
                    <td class=tdf>地址</td>
                    <td>{$add}</td>
                </tr>        
        </table>"
    ?>
</body>
</html>