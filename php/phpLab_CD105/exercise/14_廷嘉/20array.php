<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Document</title>
</head>
<body>
 	<?php  
		$total = 0;
		$min = 100;
		$max = 1;
		for ($i=0; $i < 10; $i++) { 
			$arr[$i] = $a = mt_rand(1,100);
		}
		$length = count($arr);

		foreach ($arr as $index => $value) {
			echo "arr[ $index ] : $value <br>";
			$total += $value;
			if($value<$min){
				$min = $value;
			}
			if($value>$max){
				$max = $value;
			}
		}
		echo "總和： $total <br>";
		echo "最小值： $min <br>";
		echo "最大值： $max <br>";


	?>
</body>
</html>