<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Document</title>
	<style type="text/css">
		body{
			font-size: 40px;
		}
	</style>
</head>
<body>
	<!-- 印出
		 *
		 **
		 ***
		 ****
		 *****
		 ******
		 *****
		 ****
		 ***
		 **
		 * 
	-->
	
	<?php 
	for ($i=1; $i<=6 ; $i++) { 
		for ($j=1; $j<=$i ; $j++) { 
			echo "*";
		}
		echo "<br>";
	}
	 ?>
	<?php 
	$a = 7;
	for ($i=1; $i<= $a ; $i++) { 
		for ($j=$i; $j<$a-1 ; $j++) { 
			echo "*";
		}
		echo "<br>";
	}
	 ?>
</body>
</html>