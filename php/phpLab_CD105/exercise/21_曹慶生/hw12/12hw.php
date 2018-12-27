<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Document</title>
</head>
<body>
	 <h1>摸彩10次</h1>
    <?php
        
        $ball=0;
        $total=0;
        for($i=1;$i<=10;$i++){
            $ball=rand(0,10);
            $total+=$ball;
            echo $ball*100,"<br>";
        }
        echo "獲得分數:",$total*100;
    ?>
</body>
</html>