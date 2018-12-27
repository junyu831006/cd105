<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
    <?php
    $money = $_REQUEST["money"];
    if($money <= 500000){
        $tax = $money * 0.05;
    }elseif($money <=1130000){
        $tax = $money * 0.12;
        $tax -= 35000;
    }elseif($money <=2260000){
        $tax = $money * 0.2;
        $tax -= 125400;
    }elseif($money <=4230000){
        $tax = $money * 0.3;
        $tax -= 351400;
    }elseif($money > 4230000){
        $tax = $money * 0.4;
        $tax -= 774400;
    }
    echo"您的綜合所得為 $money 所得稅為 $tax";
    
    ?>
    
</body>
</html>