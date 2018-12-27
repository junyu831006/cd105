<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Document</title>
</head>
<body>
	<?php
	$count=1;
	for($i=1; $i<=11; $i++){
		if($i<=6){
			for($j=1; $j<=$i; $j++){
			echo "*";
			}
			echo "<br>";
		}
		else{
			for($j=1; $j<=$i-2*$count; $j++){
				echo "*";
			}
			$count++;
			echo "<br>";
		}
	}
	?>
</body>
</html>