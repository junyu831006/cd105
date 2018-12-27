<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Document</title>
</head>
<body>
	<?php 
	$min=100;
	$max=0;
	$sum=0; 
	for ($i=0; $i <10 ; $i++) { 
			$arr=mt_rand(1,100);
			echo "$arr<br>";
			$sum +=$arr ; 
			if ($arr<$min) {
				$min=$arr;
			}
			if ($arr>$max) {
				$max=$arr;
			}
		}	
		echo "總和為$sum<br>",
			 "最小值為$min<br>",	
			 "最大值為$max<br>";
	 ?>
	
</body>
</html>