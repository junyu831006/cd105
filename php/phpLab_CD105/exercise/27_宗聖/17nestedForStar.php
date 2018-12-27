<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>17nestedForStar.php</title>
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
			for ($i=1; $i <=6 ; $i++) { 
				for ($j=1; $j <= $i; $j++) { //1 結束 外+<br> 12 結束 外+<br>
					echo "$j";
				}
				echo "<br>";
			}
		 ?>
	</p>
</body>
</html>