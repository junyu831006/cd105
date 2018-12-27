<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Document</title>
</head>
<body>
	<?php 
		$price=1;
		$time=0;
		$total=0;

	while($price!=0){
		$price=rand(0,10);
		$time++;
		$total += $price;
		echo "你的獎金{$price}00<br>";
	}
		echo"獎金總額{$total}00<br>抽獎次數{$time}<br>";




	 ?>



</body>
</html>