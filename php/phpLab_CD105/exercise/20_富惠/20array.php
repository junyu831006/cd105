<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Document</title>
</head>
<body>
	<?php
		$num="0"; 
		$total="0";
		$max="0";
		$min="100";
		for($i=1;$i<=10;$i++){
			$num=mt_rand(0,100);
			$total += $num;
			while ($num<$min) {
				$min = $num;
			}
			while ($max<$num) {
				$max = $num;
			}
			echo "抽到數字 {$num}<br>";
		}
			echo "總和 {$total}<br>";
			echo "最小值{$min}<br>";
			echo "最大值{$max}";

	 ?>
	
</body>
</html>