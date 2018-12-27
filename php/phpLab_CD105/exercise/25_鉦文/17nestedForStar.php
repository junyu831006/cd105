<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>17nestedForStar.php</title>
	
	
</head>
<body style="text-align: center;">

	@@@@@@@@@作業十七　： (巢狀迴圈練習)  
17nestedForStar.php
 
<br><br><br> 
	
		<div style=" width: 300px; margin: auto; text-align: left;">
		
		<?php 

			$max=6;
			for($i=1;$i<=$max;$i++){
				for($j=1;$j<=$i;$j++){
				echo $j;
				}
				echo "<br>";
			}


		 ?>	
		</div>
	

	 



</body>
</html>