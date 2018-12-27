<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>20array_php</title>
</head>
<body>
	<?php 
	$arr = [mt_rand(0,100),mt_rand(0,100),mt_rand(0,100),mt_rand(0,100),mt_rand(0,100),mt_rand(0,100),mt_rand(0,100),mt_rand(0,100),mt_rand(0,100),mt_rand(0,100)];
	$all = count($arr);

	$total = 0;
	$i = 0;
	$j = 1;
	$k = 1;
	$max = $arr[$j];
	$min = $arr[$k];

		for($i=0; $i<$all; $i++){
			echo $arr[$i], ",";
			$total += $arr[$i]; 
		}
		echo "總合：", $total;
	
		for($j=1; $j<$all; $j++){
			if($arr[$j] > $max){
				$max = $arr[$j];
			}
		}
		echo ",最大值：", $max;
	
		for($k=1; $k<$all; $k++){
			if($arr[$k] < $min){
				$min = $arr[$k];
			}
		}
		echo ",最小值：", $min;

	
	 	

	 ?>
	
</body>
</html>