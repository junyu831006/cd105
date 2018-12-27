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
    $a=0;
    $all=0;
    for($i=0;$i<1;$i){
        $number = mt_rand(0,11);
        $a++;
        if($number>0){
            $number2 = mt_rand(0,10);
            $number2 *=100;
            echo "抽第{$a}次得到{$number}號金額為{$number2}元","<br>";
            $all +=$number2;
        }
        elseif($number == 0){
            $i++;
            echo "抽到{$number}號 恭喜結束";
        }
    }
            echo "總金額為{$all}元";


?>
</body>
</html>