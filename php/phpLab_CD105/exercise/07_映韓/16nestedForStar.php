<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<title>nested</title>
</head>
<body>
	<?php 
		for ($i=1; $i<=6; $i++) { 
			for ($j=1; $j <=$i ; $j++) { 
				echo "*";
			}
			echo "<br>";
		}
		for ($i=1; $i<=5 ; $i++) { 
			for($j=5;$j>=$i;$j--){
				echo "*";
			}
			echo "<br>";
		}
	 ?>
</body>
</html>