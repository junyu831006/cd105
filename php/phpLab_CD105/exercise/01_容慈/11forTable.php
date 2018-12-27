<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Document</title>
</head>
<body>
	
	<?php 
		echo "<table border='1' cellspacing='0' align='center' >";
		for( $i=1; $i<=10; $i++){
			if ($i%2==1) {
				$l=$i;
			echo"<tr><td>{$l}</td>";
			}elseif ($i%2==0) {
				$r=$i;
			echo "<td>{$r}</td></tr>";
			}
		}
		?>  
</body>
</html>