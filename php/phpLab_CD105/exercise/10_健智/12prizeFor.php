<!DOCTYPE html>
	<html lang="en">
	<head>
		<meta charset="UTF-8">
		<title>Document</title>
	</head>
	<body>
		<?php  
		$total = 0;
		for ($i=0; $i <10 ; $i++) { 
			$number=rand(0,10);
			echo $number, "<br>";
			$total+=$number;
		}

		$total*=100;
		echo "總獎金為 $total 元";
		?>
	</body>
	</html>	