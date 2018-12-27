<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Document</title>
	<style type="text/css">
		table,tr,td{
			border: 1px solid #000;
		}
	</style>
</head>
<body>
	<?php
	echo "<table>";
		for ($i=1; $i<=10 ; $i++) { 
			if ($i%2 == 1) {
				echo "<tr><td> $i </td>";
			}
			if ($i%2 == 0) {
				echo "<td> $i </td></tr>";
			}
		}
	echo"</table>";
	?>
</body>
</html>