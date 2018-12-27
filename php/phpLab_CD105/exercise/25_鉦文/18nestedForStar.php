<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>18nestedForStar</title>
	<style type="text/css">
	
	</style>
</head>
<body style="text-align:center;">

	@@@@@@@@@作業十八　：(巢狀迴圈練習)   
18nestedForStar.php

<br><br><br>

	<div style=" width: 300px; margin: auto; text-align: left;">
		<?php 			 
			$max=10;
			for($i=1;$i<=$max;$i++){
			$sum=0;
				for($j=1;$j<=$i;$j++){

				echo $j;

				$sum+=$j;
				if($j!=$i)
					echo "+"; 
				 else
					echo "=".$sum;				
				}

			echo "<br>";
			}
		 ?>
	</div>








 
</body>
</html>