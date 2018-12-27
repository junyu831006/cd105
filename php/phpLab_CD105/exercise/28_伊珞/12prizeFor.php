<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>12prizeFor_php</title>
</head>
<body>
	<?php

	$price = 0;
	$total = 0;
	
	
	for ($i=0; $i < 11 ; $i++) { 
			$price = mt_rand(0,10);
			$total += $price;
				echo "抽中獎金：", $price, "元<br>";
		}	
		   
		echo "獎金總額：", $total, "元";
	?> 
</body>
</html>