<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>08orangeIf.php</title>
    <style type="text/css">
    table, tr, td{
        border: 1px solid black;
        width: 150px;
    }
    </style>
</head>
<body>
    <?php
    $level = $_POST["level"]; 
    $weight = $_POST["weight"];
    ?>
    <?php
    if($level == 1){
        if($weight <= 40){
            $total = $weight * 30;
        }elseif($weight > 40 && $weight <= 100){
            $total = $weight * 25;
        }elseif($weight > 100){
            $total = $weight *20;
        }
    }elseif($level == 2){
        if($weight <= 40){
            $total = $weight * 25;
        }elseif($weight > 40 && $weight <= 100){
            $total = $weight *20;
        }elseif($weight > 100){
            $total = $weight *15;
        }
    }elseif($level == 3){
        if($weight <= 40){
            $total = $weight * 20;
        }elseif($weight > 40 && $weight <= 100){
            $total = $weight *15;
        }elseif($weight > 100){
            $total = $weight *10;
        }
    }
    
    ?>
    <form action="">
        <table>
            <tr>
                <td>等級</td>
                <td><?php echo $_POST["level"];?><?php echo " 等";?></td>
            </tr>
            <tr>
                <td>公斤數</td>
                <td><?php echo $_POST["weight"];?><?php echo " 公斤";?></td>
            </tr>
            <tr>
                <td>小計</td>
                <td><?php echo $total;?><?php echo " 元";?></td>
            </tr>
        </table>
    </form>
</body>
</html>