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
        $total=0;
        for($i=1;$i<=10;$i++){
            for($j=1;$j<$i;$j++){
                echo "$j+";
            }
            echo "$j";
            for($k=1;$k<=$i;$k++){
                $total+=$k;
            }
            echo "=$total<br>";
            $total=0;
        }
    ?>

    
</body>
</html>