<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
    <h1>一直摸喔 到0為止唷</h1>
    <?php
        $count=1;
        $ball=rand(0,10);
        $ballsum=0;
        while(($ball!=0)&&($count<12)){
            echo $ball*100,"<br>";
            $ballsum+=$ball;
            $count++;
            $ball=rand(0,10);
        }


        echo $ball*100,"<br>";
            
            
            

            

            
            
        

        echo "獲得分數:",$ballsum*100,"<br>";
        echo "摸彩次數" , $count;
    ?>
</body>
</html>