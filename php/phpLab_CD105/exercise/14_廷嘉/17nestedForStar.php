<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Document</title>
</head>
<body>
	<?php  
		
		for ($i=1; $i <=6; $i++) { 
			$total = 0;
			for ($j=1; $j <=$i; $j++) { 
				echo "$j";
				// $total += $j;
			}
			echo "<br>";
		}

	?>
</body>
</html>