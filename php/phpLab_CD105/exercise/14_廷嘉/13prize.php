<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Document</title>
</head>
<body>
	<?php  
		$times = 1;
		$total = 0;
		$money = 0;
		$num =mt_rand(0,10);
		echo "第 $times 次面額： $num <br>";
		while ($num!=0) {
			$total = $total+$num;
			$money =$total *100;
			$num=mt_rand(0,10);
			$times++;
			echo "第 $times 次面額： $num <br>";			
		}
		echo "你總共摸了 $times 次<br>";
		echo "總金額是 $money 元";
	?>
</body>
</html>