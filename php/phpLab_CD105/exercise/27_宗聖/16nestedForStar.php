<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>16nestedForStar</title>
	<style type="text/css">
		body{
			text-align: left;
			font-size: 20px;
		}
	</style>
</head>
<body>
	<p>
		<?php 
			for ($i=1; $i <= 6 ; $i++) { 
				for ($j=1; $j <= $i && $j<=6 ; $j++) { 
					echo "*";
				}
				echo "<br>";
			}
			for ($i=1; $i <= 5 ; $i++) { 
				for ($k=5; $k >= $i ; $k--) { //----- ---- ---
					echo "*";
				}
				echo "<br>";
			}

		 ?>




<hr>
		<?php  //wrong
			for ($i=1; $i < 12 ; $i++) { //1  11
				$n = ($i/2);
				if ($n == 0.5 || $n == 5.5) {
					echo "*<br>";
				}elseif ($n == 1 || $n == 5) {
					echo "**<br>";
				}elseif ($n == 1.5 || $n == 4.5) {
					echo "***<br>";
				}elseif ($n == 2 || $n == 4) {
					echo "****<br>";
				}elseif ($n == 2.5 || $n == 3.5) {
					echo "*****<br>";
				}elseif($n == 3){
					echo "******<br>";
				}
			}


		 ?>
	</p>
</body>
</html>