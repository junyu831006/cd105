<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Document</title>
</head>
<body>

	<?php 
	$number=1;
	$time=0;
	$total=0;
	$single=0;

	while ($number!=10) {
		$number=rand(0,10);
		$time++;
		$total += $number;
		echo"本次獎金為{$number}00<br>";
	}

		echo "總獎金為{$total}00<br>抽獎次數{$time}<br>";
	 ?>
	
</body>
</html>