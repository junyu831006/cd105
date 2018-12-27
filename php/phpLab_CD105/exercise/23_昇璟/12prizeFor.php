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


$all=0;
    for($i=1;$i<=10;$i++){ 
        $number =mt_rand(0,11);
        if($i<=10){
            $number2=mt_rand(0,10);
            $number2 *=100;
            $all +=$number2;
            echo "第{$i}次:抽到{$number}號是{$number2}元","<br>" ;
        }
    }
    echo "總金額為{$all}";
?>

</body>
</html>