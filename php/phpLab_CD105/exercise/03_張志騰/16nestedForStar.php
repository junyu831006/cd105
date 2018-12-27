<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Document</title>
</head>
<body>
	 <?php 
		 for ($i=1; $i <= 6 ; $i++) { 
		 	for ($j=1; $j <= $i ; $j++) { 
		 		echo "*";
		 	}echo "<br>";
		 }
		 for ($a=1; $a <=5 ; $a++) { 
		 	for ($b=5; $b >= $a ; $b--) { 
		 		echo "*";
		 	}echo "<br>";
		 }
	 ?>
</body>
</html>