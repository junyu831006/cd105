<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Document</title>
</head>
<body>
	<h1>摸彩獎金</h1>
	<?php
		$price=0; 
		$total=0;
		for($i=1;$i<=10;$i++){
			$price= rand(0,10);
			$total += $price;
			echo "你的獎金{$price}00<br>";
		}
			echo "獎金總額{$total}00<br>";

	 ?>
</body>
</html>