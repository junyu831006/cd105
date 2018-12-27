<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Document</title>
</head>
<body>
	<?php  
		
		for ($i=1; $i <=10; $i++) { 
			$total = 0;
			for ($j=1; $j <=$i; $j++) { 
				if($j==1){
					echo "$j";
				}else{
					echo "+ $j";
				}
				$total += $j;
			}
			echo "= $total <br>";
		}

	?>
</body>
</html>