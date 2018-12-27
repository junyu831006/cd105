<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Document</title>
</head>
<body>

 <?php
        $num=1;
        $ball=rand(0,10);
        $total=0;
        while(($ball!=0)&&($num<12)){
            echo $ball*100,"<br>";
            $total+=$ball;
            $num++;
            $ball=rand(0,10);
        }


        echo $ball*100,"<br>";
            

        echo "獲得分數:",$total*100,"<br>";
        echo "摸彩次數" , $num;
    ?>
</body>
</html>