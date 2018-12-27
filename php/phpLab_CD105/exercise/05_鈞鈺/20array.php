<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>20array.php</title>
</head>
    <?php
        $num = array();
        $max = 1;
        $min = 100;
    ?>
    <?php 
        $total=0;
        for($i=0;$i<10;$i++){
            $num[i] = mt_rand(1,100);
            $total+=$num[i];
            if($i < 10){
                echo $num[i] ,"、";    
            }else{
                echo $num[i]; 
            }
            if($num[i]>$max){
                $max = $num[i];
            }elseif($num[i]<$min){
                $min = $num[i];
            }
        }
        echo "<br>";
        echo 'total=', $total,"<br>";
        echo '最大值=', $max ,"<br>";
        echo '最大值=', $min ;
    ?>


</body>
</html>