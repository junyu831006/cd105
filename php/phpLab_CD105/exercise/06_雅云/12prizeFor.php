<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>12</title>
</head>
<body>
	<?php  

	$total=0;

	for ($i=0;$i<10;$i++){
		$n=rand(0,10);
		echo $n."<br>";
		$total+=$n;
	}

	$total*=100;
	echo "總獎金為 $total";
	?>
</body>
</html>