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
	$a=0;
	for ($i=0; $i !=1 ; $i) { 
		$asd =  rand(0,10);
		$sum = $asd*100;
		$total += $sum;	
		$a++;
		if ($asd == 0 ) {
			$i += 1;
			echo "摸彩{$a}次 <br>";
		}
	}
	echo "彩金總金額{$total} 元<br>";
	?>
</body>
</html>