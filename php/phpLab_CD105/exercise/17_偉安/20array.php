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
    $arr = array();
    for($i=0;$i<=9;$i++){
        $num=mt_rand(1,100);
        $arr [$i]= $num;
        echo"$num <br>";
    }
        $total=0;
        $max=0;
        $min=100;
    foreach($arr as $index=>$data){
        $total+=$data;
    if($data>$max){
        $max=$data;
    }elseif($data<$min){
        $min=$data;
    }
    }
    echo"總和:{$total}，最大值:{$max}，最小值{$min}";
    ?>
</body>
</html>