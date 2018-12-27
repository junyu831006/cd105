<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<title>20array</title>
</head>
<body>
	<?php 
		$total=0;
		$min=100;
		$max=0;
		for ($i=0; $i <10 ; $i++) { 
			$num[$i] = rand(1,100);
			$total=$total+$num[$i];
			echo "{$num[$i]}<br>";
			if($num[$i]<$min){
				$min=$num[$i];
			}
			elseif($num[$i]>$max){
				$max=$num[$i];
			}
		}
		echo "總和:","{$total}","<br>";
		echo "最小值:","{$min}","<br>";
		echo "最大值:","{$max}";

	 ?>
</body>
</html>