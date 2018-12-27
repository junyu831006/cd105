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
$lottery = 0;
$total = 0 ;
$num =mt_rand(0,10);
while($num!=0){
    $lottery = $num*100; 
    $total += $lottery;
    echo"每次得獎金額為 $lottery 元<br>";
    $num =mt_rand(0,10);
}
   echo"總獎金為", $total,"元";
?>
    
</body>
</html>