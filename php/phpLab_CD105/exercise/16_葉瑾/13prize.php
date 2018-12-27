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
    <!-- 摸彩金 : 有11顆彩球, 彩球面額為0-10之間, 若摸到的彩球不為0,則可繼續摸彩,若摸到的彩球為0,則停止摸彩,並計算其摸彩次數及彩金總金額(單位:佰元)  -->
    
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
            $numA = $num * 100;
            $total = $numA + $total;
        if($num == 0){
            break;
        }elseif($i<=10){
            echo "<tr>";
            echo "<td>" , $i , "</td>";
            echo "<td>", $numA ,"元</td>";
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