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
    for($i=1; $i<=10; $i++){
        $rand = mt_rand(0,10);
        $money = $rand * 100;
        $total += $money;
        echo $rand, "您所獲得的金額為 {$money}元 <br>";
    }
    echo "此次彩金總額為 {$total}元";
    ?>
</body>
</html>