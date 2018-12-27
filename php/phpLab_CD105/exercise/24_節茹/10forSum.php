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
    $number = $_GET["number"];
    $total = 0;
    $oddTotal = 0;
    $evenTotal = 0;

    for($i=1; $i<=$number; $i++){
        $total += $i;
    }

    for($i=1; $i<=$number; $i+=2){
        $oddTotal += $i;
    }

    for($i=2; $i<=$number; $i+=2){
        $evenTotal += $i;
    }
    echo "總和為 $total <br>";
    echo "奇數和為 $oddTotal <br>";
    echo "偶數和為 $evenTotal <br>";
    ?>
</body>
</html>