<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<title>18nested</title>
</head>
<body>
	<?php 
		
		for($i=1;$i<=10;$i++){
			$total=0;
			for($j=1;$j<=$i;$j++){
				echo "{$j}";
				$total+=$j;
				if($i!=$j){
					echo "+";
				}
			}
			echo "={$total}";
			echo "<br>";

		}
	 ?>
</body>
</html>