<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Document</title>
	<style type="text/css">
		table {
			border-collapse: collapse;
		}
	</style>
</head>
<body>
	<?php 
		echo "<table border=1>";
		for ($i=1;$i<=10;$i=$i+1){
			if ($i%2 == 1){
				echo "<tr>";
            	echo "<td width=50> $i</td>";
			}
			elseif ($i%2 == 0){
				echo "<td width=50> $i</td>";
				echo "</tr>";
			}
		}
		echo"</table>";
	?>
	
</body>
</html>