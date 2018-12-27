<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Document</title>
</head>
<body>
	<?php 	
	echo "印出<br>";
	for ($i=1; $i <= 10 ; $i++) { 
		$sum=0;
		for ($j=1; $j <= $i ; $j++) { 
			echo $j;
			$sum += $j;
			if ($j!=$i) {
				echo "+";
			}
			 
		}echo "=$sum <br>";
	}

		  

			
			
		
		
	?>

	
</body>
</html>