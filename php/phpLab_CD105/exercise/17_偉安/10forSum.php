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
        $num = (int)$_REQUEST["num"];
        $total = 0;
        for( $i=1; $i<=$num; $i++){
            $total = $total + $i;
        } 
        echo "1到此{$num}的總和{$total}<br>";
        $even = 0;
        for($i=1; $i<=$num; $i++){
            if($i % 2 == 0){
                $even += $i;
            }
        }
        echo "1到此{$num}的偶數和{$even}<br>";
        $odd = 0;
        for($i=1; $i<=$num; $i++){
            if($i % 2 == 1){
                $odd += $i;
            }
        }
        echo "1到此{$num}的奇數和{$odd}";
    ?>
    
</body>
</html>