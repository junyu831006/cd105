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
		for ($i=0; $i<10; $i++) { 
			$arr[]=mt_rand(1,100);
			echo "$arr[$i] ";
			$total +=$arr[$i];
			if($arr[$i]<$min){
				$min= $arr[$i];
			}
			if($arr[$i]>$max){
				$max= $arr[$i];
			}
		}
		echo "<br>";
		echo "總和為{$total}<br>";
		echo "最小值為{$min}<br>";
		echo "最大值為{$max}<br>";
	?>
</body>
</html>