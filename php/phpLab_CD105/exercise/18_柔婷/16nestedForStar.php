<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Document</title>
</head>
<body>
	<?php 
		$n=6;
		for ($i=1; $i <$n ; $i++) { 
		 	for ($j=1; $j<=$i ; $j++) { 
		 		echo "*";
		 	}
		 	echo "<br>";
		 } 

		for ($i=$n-1; $i>=1 ; $i--) { 
		 	for ($j=1; $j<=$i ; $j++) { 
		 		echo "*";
		 	}
		 	echo "<br>";
		 } 




	 ?>
</body>
</html>