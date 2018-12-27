<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Document</title>
</head>
<body>
	<?php
	$number=$_GET["number"];
	$total=0;
	$odd=0;
	$even=0;

	for($i=1;$i<=$number;$i++){ 
		if( $i % 2 == 1)
			$odd += $i; 
		else
			$even+= $i;
	}

	$total = $odd + $even;
	echo "總數:{$total}<br>";
	echo "奇數和:{$odd}<br>";
	echo"偶數和:{$even}<br>";
	 ?>
</body>
</html>