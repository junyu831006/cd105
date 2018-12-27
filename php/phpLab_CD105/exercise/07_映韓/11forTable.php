<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<title>Table</title>
	<style type="text/css">
		table {
			border-collapse: collapse;
		}
	</style>
</head>
<body>
	<table border="1">
		<?php 
			for ($i=1; $i <=10 ; $i++) { 
				if ($i%2==1) {
					echo "<tr><td>$i</td>";
				}
				else{
					echo "<td>$i</td></tr>";
				}
			}
		 ?>
	</table>
</body>
</html>