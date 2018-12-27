<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Document</title>
</head>
<body>

	@@@@@@@@@作業十六　： (巢狀迴圈練習)  
16nestedForStar.php
<br>
<br>
<br>
		<?php 
		$max=500;

			for ($i=1; $i <= $max*2-1 ; $i++) { 
				if($i<=$max){
					for ($j=1; $j <= $i; $j++) { 
						echo "*";
					}
					echo "<br>";
				}else{
					 for ($j=1; $j <= ($max-$i%$max); $j++) { 
						echo "*";
					}
					echo "<br>";
				}
			}
		 ?>
</body>
</html>