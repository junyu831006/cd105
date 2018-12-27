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

        for($i=0;$i<10;$i++){
            $arr[$i]=rand(1,100);
            echo $arr[$i], "<br>";
        }

        // for($i=0;$i<10;$i++){
            //     $total+=$arr[$i];
            // }
            
        $total=0;
        $min=100;
        $max=0;
        for($i=0;$i<count($arr);$i++){
            $total+=$arr[$i];
            if($min>$arr[$i]){
                $min=$arr[$i];
            }
            if($max<$arr[$i]){
                $max=$arr[$i];
            }
        }
        
        echo "Total : $total <br>";
        echo "Min : $min <br>";
        echo "Max : $max <br>";
    
    
    ?>


    
</body>
</html>