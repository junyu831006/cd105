<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Document</title>
</head>
<body>
	<?php 
	// $i = 1;
	// $j=1;
	$total = 0;
	$j = 1;
	for($i=1; $i<11; $i++){
		$total += $j;
		for($j=1; $j<=$i; $j++){
			echo $j;
			if($i != $j){
				echo "+";
			}	
		}
		echo "=", $total, "<br>";
	}
	 ?>
</body>
</html>