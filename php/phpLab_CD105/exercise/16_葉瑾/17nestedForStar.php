<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Document</title>
	<style type="text/css">
	body{
		font-size: 30px;
	}
	</style>
</head>
<body>
<!-- 	印出
		1
		12
		123
		1234
		12345
		123456 
-->
	<?php 
	for ($i=1; $i<=6 ; $i++) { 
		for ($j=1; $j<=$i ; $j++) { 
			echo "$j";
		}
		echo "<br>";
	}
	 ?>
</body>
</html>