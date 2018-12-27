<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Document</title>
</head>
<body>
	<?php  

	$arr;
	$total=0;

	for ($i=0;$i<10; $i++) { 
		$arr[$i]=rand(1,100);
		$total+=$arr[$i];
		echo $arr[$i],"<br>";
	}

	$min=$arr[0];
	$max=$arr[0];

	foreach ($arr as $data) {
		if ($data>$max) {
			$max=$data;
		}
		elseif ($data<$min) {
			$min=$data;
		}
	}

	echo "max=",$max,"<br>";
	echo "min=" ,$min,"<br>";

	?>
</body>
</html>