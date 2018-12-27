<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Document</title>
</head>
<body>
	<?php 
		$money=0;
		
		echo "$num";
		echo "<table border='1'  width='100' align='center' cellspacing='0'>";

	for ($i=1; $i <=10 ; $i++) { 
		$num = rand(0,10);
		echo "$num";
		$money=$num*100;
		echo "<tr><td>{$i}</td></tr>
		<tr><td>{$money}元</td></tr>
		";
		}
	

	echo "</table>";





	 ?>
	
</body>
</html>