<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>09orangeSwitch.php</title>
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
    switch($level){
        case "1":
        switch($weight){
            case $weight <= 40:
            $total = $weight * 30;
            break;
            case $weight > 40 && $weight <= 100:
            $total = $weight * 25;
            break;
            case $weight > 100:
            $total = $weight *20;
            break;
        }
        break;

        case "2" :
        switch($weight){
            case $weight <= 40:
            $total = $weight * 25;
            break;
            case $weight > 40 && $weight <= 100:
            $total = $weight * 20;
            break;
            case $weight > 100:
            $total = $weight * 15;
            break;
        }
        break;

        case "3" :
        switch($weight){
            case $weight <= 40:
            $total = $weight * 20;
            break;
            case $weight > 40 && $weight <= 100:
            $total = $weight * 15;
            break;
            case $weight > 100:
            $total = $weight * 10;
            break;
        }
        break;
    }
    ?>
 
    <form action="">
        <table>
            <tr>
                <td>等級</td>
                <td><?php echo $_POST["level"]; ?><?php echo " 等";?></td>
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