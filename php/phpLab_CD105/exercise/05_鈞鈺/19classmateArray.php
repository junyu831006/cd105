<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>19classmateArray.php</title>
    <style>
        table, th, tr ,td{
            border:1px solid black;
        }
        table{
            margin: auto;
        }
    </style>
</head>
<body>
    <?php
        $a = array('94951001','黃一丁','0911000333','中壢市中大路1號');
        $b = array('94951002','劉二毛','0922999887','高雄市中山路2號');
        $c = array('94951003','張大化','0933555779','台北市師大路3號');
    ?>
    <?php
        echo "<table>";
        echo "<tr>";
            echo "<td>學號</td>";
            echo "<td>姓名</td>";
            echo "<td>電話</td>";
            echo "<td>地址</td>";
        echo "</tr>";
        foreach ($a as $value) {           
            echo "<td>" , $value , "</td>";            
        }
        echo "<tr>";
        foreach ($b as $value) {           
            echo "<td>" , $value , "</td>";            
        }
        echo "</tr>";
        echo "<tr>";
        foreach ($c as $value) {           
            echo "<td>" , $value , "</td>";            
        }
        echo "</tr>";
        echo "</table>"; 
    ?> 

</body>
</html>