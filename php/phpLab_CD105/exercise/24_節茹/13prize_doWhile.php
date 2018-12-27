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
    $money = 0;
    $count = 0;
    do{
        $rand = mt_rand(0,10);
        $money += ($rand * 100);
        $count++;
        echo $rand, "<br>";
    }while($rand != 0);
    echo "摸彩次數為 {$count}次 <br>";
    echo "您所獲得的金額為 {$money}元 <br>";
    ?>
</body>
</html>