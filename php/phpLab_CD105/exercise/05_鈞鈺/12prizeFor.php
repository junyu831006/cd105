<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>作業十二　：(迴圈 for…練習) </title>
    <style>
     h2, table{
        text-align: center;
    }
    table{
        width: 600px;
        margin: 0 auto;
    }
    
    table, tr, td{
        border: 1px solid black;
        border-collapse: collapse;
        padding: 5px 10px;
    }
    td{
        width: 100px;
    }
    </style>
</head>
<body>
<h2>摸彩金</h2>
    <?php $total = 0;?>
    <table>
    <tr>
        <th>第幾次</th>
        <th>金額</th>
    </tr>
    <tr>
        <?php
        for($i=1 ; $i<=10 ; $i++){
            $num = mt_rand(0,10);
            $num = $num * 100;
            $total = $num + $total;
        if($i<=10){
            echo "<tr>";
            echo "<td>" , $i , "</td>";
            echo "<td>", $num ,"元</td>";
            echo "</tr>";
        }
        }
        echo "<tr>";
        echo "<td>獎金總額</td>";
        echo "<td>" , $total , "元</td>";
        echo "</tr>";
        ?>
    </tr>
    </table>
</body>
</html>