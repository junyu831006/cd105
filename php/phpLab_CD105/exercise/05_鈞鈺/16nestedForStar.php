<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>16nestedForStar</title>
</head>
<body>
    <?php
        $s = 6; //列數
        for($i=0 ; $i<=($s*2-1) ; $i++){
            if($i<$s){                
                for($j=0; $j<($i+1); $j++){
                    echo "*" ;
                }
                echo  "<br>";                
            }
            if($i>$s && $i<=($s*2-1)){
                for($k=0; $k<(12-$i) ;$k++){
                    echo "*";
                }
                echo "<br>";
            }
        }

    ?>
</body>
</html>