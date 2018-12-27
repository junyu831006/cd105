<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Document</title>
</head>
<body>
	<?php 
	
	$sum = 0;
	$price = 1;
	$i= 1;	
		while ( $price!=0) {
			$price= mt_rand(0,10);
			echo "第 {$i} 次 ", '金額= ' ,$price,"百元<br>";		
			$sum += $price;
			$i++;
							
			}
			echo "玩了", $i-1,"次<br>";
			echo "總金額=", $sum*100, "元<br>";
	



	 ?>
	
</body>
</html>