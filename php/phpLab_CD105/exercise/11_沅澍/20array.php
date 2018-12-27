<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>20array</title>
</head>
<body>
	<?php 
	$sum=0;
	$min=100;
	$max=0;
	for ($i=0; $i <10 ; $i++) { 
		$text= mt_rand(1,100);
		$arr[$i]= $text;
		$sum += $text;
		while ($text<$min) {
			$min= $text;
		}
		while ($text>$max) {
			$max=$text;
		}
	}
	foreach ($arr as $index => $data) {
		echo "此陣列第",$index+1,"個抽出的數字是{$data}<br>";
	}
	echo "此陣列總合為{$sum}<br>";
	echo "最小值為{$min}<br>";
	echo "最大值為{$max}<br>";
	 ?>
	 <Input Type="Button" Value="重算一次" onClick="window.location.reload();">
</body>
</html>