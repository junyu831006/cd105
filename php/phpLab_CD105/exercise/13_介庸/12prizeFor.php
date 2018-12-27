<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
    <h1>摸 10  次 唷</h1>
    <?php
        
        $ball=0;
        $ballsum=0;
        for($i=1;$i<=10;$i++){
            $ball=rand(0,10);
            $ballsum+=$ball;
            echo $ball*100,"<br>";
        }
        echo "獲得分數:",$ballsum*100;
    ?>
</body>
</html>