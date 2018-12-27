<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Document</title>
    <style>
     h2, table{
        text-align: center;
    }
    table{
        width: 600px;
        margin: auto;
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
    <!-- 摸彩金 : 有11顆彩球, 彩球面額為0-10之間, 可以摸彩10次, 印出其每次的摸彩金額及彩金總金額(單位:佰元) -->
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