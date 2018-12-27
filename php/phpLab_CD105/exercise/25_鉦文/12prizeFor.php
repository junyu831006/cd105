<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Document</title>
</head>
<body>

	@@@@@@@@作業十二　：(迴圈 for…練習)   <br>
12prizeFor.php<br>
摸彩金 : 有11顆彩球, 彩球面額為0-10之間, 可以摸彩10次, 印出其每次的摸彩金額及彩金總金額(單位:佰元)<br><br><br>
	<?php  
	 
		

		for($i=1;$i<=10;$i++){
			$r =rand(0,10);
			$sum += $r;
			echo "第{$i}次: ",$r," (百元)<br>";
			echo "當前總額小計".$sum."百元<br><br>";
		}
		echo "<hr style='width:100px;float:left;'><br>";
		echo "彩金總金額".$sum."百元";
	?>
</body>
</html>