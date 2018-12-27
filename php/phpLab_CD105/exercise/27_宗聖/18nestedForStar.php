<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>18nestedForStar</title>
	<style type="text/css">
		body{
			text-align: center;
			font-size: 20px;
		}
	</style>
</head>
<body>
	<p>
		<?php 
			$sum=0;
			for ($i=1; $i <=10 ; $i++) { 
				for ($j=1; $j <= $i; $j++) { //1 結束 外+<br> 1+2+ 結束 外+<br>...9+
					echo "{$j}";
					$len = $j;
					if ($len !=$i) {
					echo "+";
					}
				}
				$sum += $i;
				echo "={$sum}";
				echo "<br>";
			}
		 ?>

	</p>
	
</body>
</html>