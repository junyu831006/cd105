<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>18nestedForStar.php</title>
</head>
<body>
<?php
    $s = 10;
    for($i=1 ; $i<=$s ; $i++){      
        for($k=1; $k<$i+1 ; $k++ ){
            if($k !== $i){
                echo $k,"+";               
            }else{
                echo $k;
            }         
        }
            $total += $i;
            echo "=",$total;
            echo "<br>";
        }
        
    ?>

</body>
</html>