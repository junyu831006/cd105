<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>13prize_php</title>
</head>
<body>
	<?php
	$total = 0;
	$price = mt_rand(0,10);
		echo "抽中獎金：", $price, "元<br>";

	while ( $price != 0) {
		$price = mt_rand(0,10);
		$total += $price;  
			echo "抽中獎金：", $price, "元<br>";
	}
		echo "獎金總額：", $total, "元<br>";
	?>


	<!-- <?php

	$total = 0;
	$price = -1;
	$times = 0;

	while ( $price != 0) {
		$price = mt_rand(0,10);
		$total += $price; 
		$times++;
			echo "第{$times}次抽中獎金{$price}元<br>";
	}
		echo "獎金總額：", $total, "元";
	?>  -->
</body>
</html>