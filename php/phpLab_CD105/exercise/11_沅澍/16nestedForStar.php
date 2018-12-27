<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>16nestedForStar</title>
</head>
<body>
	<?php 
	for ($i=1; $i<=11  ; $i++) { 
		if ($i<=6) {
			# code...
			for ($j=1; $j<=$i ; $j++) { 
				echo "*";
			}
			echo "<br>";
		}
		else {
			for ($k=12; $k>$i ; $k--) { 
				echo "*";
		}
		echo "<br>";}
	}

	 ?>
	
</body>
</html>