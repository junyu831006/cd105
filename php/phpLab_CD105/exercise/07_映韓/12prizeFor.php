<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<title>Prize</title>
</head>
<body>
	<?php 
		$total=0;
		for ($i=1; $i <=10 ; $i++) { 
			$ball = rand(0,10);
			$total=$total+$ball*100;
			echo "$ball<br>";
		}
		echo $total;
	 ?>
</body>
</html>