<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Document</title>
</head>
<body>
	<?php 
		$number = $_GET["number"];
		$total = 0;
		$oddtotal = 0;
		$eventotal = 0;

		for($i=1;$i<=$number;$i++){
			$total += $i;
		}
		for($i=1;$i<=$number;$i+=2){
			$oddtotal += $i;
		}
		for($i=2;$i<=$number;$i+=2){
			$eventotal += $i;
		}
		echo "總和為 $total <br>";
		echo "基數和為 $oddtotal <br>";
		echo "偶數和為 $eventotal <br>";
	 ?>	

</body>
</html>