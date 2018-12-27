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
    $n=10;
    $tal = 0;
    for($i=1;$i<=$n;$i++){
       for($j=1;$j<=$i;$j++){
           $tal += $j;
            printf("$j");
            if($j<$i){
            printf("+");
            }
            }
            printf("= $tal");
            $tal=0;
            printf("<br>");
       }


    ?>
    
</body>
</html>