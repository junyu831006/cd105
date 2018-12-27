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
for($i=0;$i<=9;$i++){
    $k=0;
        for($j=1;$j<=$i;$j++){
            echo "{$j}+";
            $k+=$j;
        }
    $all=$k+$j;
    echo "{$j}={$all}","<br>";
}






?>
    
</body>
</html>