<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<title>PRIZE</title>
</head>
<body>
	<?php
		$total=0;
		$ball = rand(0,10); 
		for ($i=1; $ball!=0 ; $i++) { 
			$total=$total+$ball*100;
			echo "$ball<br>";
			echo "$total<br>";
			$ball = rand(0,10);
		}
	 ?>
</body>
</html>