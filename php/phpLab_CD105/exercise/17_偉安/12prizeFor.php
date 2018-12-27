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
for($i=1; $i<=10; $i++){
    $num =mt_rand(0,10);
    $num = $num*100; 
    $lottery += $num;
    
    echo"每次得獎金額為 $num 元<br>";
}
   echo"總獎金為", $lottery,"元";


?>
    
</body>
</html>