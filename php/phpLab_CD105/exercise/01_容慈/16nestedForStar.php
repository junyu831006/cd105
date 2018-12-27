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
	 for ($k=1; $k <=5 ; $k++) { 
	 	for ($l=5; $l >= $k ; $l--) { 
	 		echo "*";
	 	}echo "<br>";
	 }
	  ?>
</body>
</html>