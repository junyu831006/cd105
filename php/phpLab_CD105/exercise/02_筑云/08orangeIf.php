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