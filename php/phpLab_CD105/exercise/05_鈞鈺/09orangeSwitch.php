<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>08orangeIf.php</title>
</head>
<body>
    <?php
    $level = $_POST["level"]; 
    $weight = $_POST["weight"];
    ?>
    <?php
    switch($level){
        case 1:
        switch($weight){
            case $weight <= 40:
            $total = $weight * 30;
            case $weight > 40 && $weight <= 100:
            $total = $weight * 25;
            case $weight > 100:
            $total = $weight *20;
        }
        case 2 :
        switch($weight){
            case $weight <= 40:
            $total = $weight * 25;
            case $weight > 40 && $weight <= 100:
            $total = $weight * 20;
            case $weight > 100:
            $total = $weight * 15;
        }
        case 3 :
        switch($weight){
            case $weight <= 40:
            $total = $weight * 20;
            case $weight > 40 && $weight <= 100:
            $total = $weight * 15;
            case $weight > 100:
            $total = $weight * 10;
        }
    }
    ?>
 
    <form action="">
        <table>
            <tr>
                <td>等級</td>
                <td><?php echo $_POST["level"]; ?></td>
            </tr>
            <tr>
                <td>公斤數</td>
                <td><?php echo $_POST["weight"];?></td>
            </tr>
            <tr>
                <td>小計</td>
                <td><?php echo $total;?></td>
            </tr>
        </table>
    </form>
</body>
</html>