<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Document</title>
</head>
<body>
	<?php  
		$total = 0;
		$i=0;
		while ($i<= 10) {
			$number=rand(0,10);
			echo $number, "<br>";
			$i++;
			$total+=$number;
			if ($number == 0) {
				break;
			}
			
		}

		$total*=100;
		echo "總獎金為 $total 元";
		?>
</body>
</html>