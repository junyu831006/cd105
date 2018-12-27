<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Document</title>
</head>
<body>
	<!-- 	@@@@@@@@@作業八　：(if練習)   
橘子的單價和等級的關係如下:

	x<40 x>40 x>100
1	30 25 20
2   25 20 15
3   20 15 10 
 
08orangeIf.htm , 08orangeIf.php
輸入所購買的等級及公斤數,並算出小計 -->
	<?php 	 

	$price;
	$lv=$_REQUEST["lv"];
	$val=$_REQUEST["val"];

	 // 等級規則
	 
	 	if($lv==1){
			if($val>100){
				$price=20;			
			}
			elseif($val>40){
				$price=25;
			}
			elseif($val<=40&&$val>=0){
				$price=30;
			}
		 }
		 elseif($lv==2){
			if($val>100){
				$price=15;			
			}
			elseif($val>40){
				$price=20;
			}
			elseif($val<=40&&$val>=0){
				$price=25;
			}
		}
		 elseif($lv==3){
			if($val>100){
				$price=10;			
			}
			elseif($val>40){
				$price=15;
			}
			elseif($val<=40&&$val>=0){
				$price=20;
			}
		}
		 

		//計算 
	   $sum=$price*$val;
	
		echo "等級:",$lv,"<br>";
		echo "重量:",$val,"<br>";
		echo "單價:",$price,"<br>";
		echo "小計",$sum,"<br>";
	?>
	
	
</body>
</html>