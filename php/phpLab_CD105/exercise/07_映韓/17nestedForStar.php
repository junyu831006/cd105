<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<title>17nested</title>
</head>
<body>
	<?php 
		for ($i=1; $i <=6 ; $i++) { 
			for($j=1; $j<=$i ; $j++){
				echo "$j";
			}
			echo "<br>";		
		}
	 ?>
</body>
</html>