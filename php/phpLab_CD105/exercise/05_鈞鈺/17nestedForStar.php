<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>17nestedForStar.php</title>
</head>
<body>
    <?php
    $s = 6; //行數
    //for_1算到第幾行
    //for_2算到第幾個時跳出
    for($i=1 ; $i<=$s ; $i++){      
        for($k=1; $k<$i+1 ; $k++ ){
            echo $k;
        }
        echo "<br>";
    }
    ?>

    
</body>
</html>