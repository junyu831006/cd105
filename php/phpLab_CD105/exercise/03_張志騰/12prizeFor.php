<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Document</title>
</head>
<body>
	<?php  
	$total=0;
	$sum=0;
	for ($i=0; $i <=10 ; $i++) { 
		$asd =  rand(0,10);
		$sum = $asd*100;
		echo "摸彩金額 {$sum} 元 <br>";
		$total += $sum;
	}
	echo "彩金總金額{$total} 元<br>";
	?>
</body>
</html>