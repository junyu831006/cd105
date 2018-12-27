<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>11forTable.php</title>
	<style type="text/css">
		body{
			text-align: center;
		}
		
		table{
			display: inline-block;
			width: 600px;
		}
		td{
			width: 300px;
			font-size: 20px;
			border: 1px solid #ccc;
			border-collapse: collapse;
		}
	</style>
</head>
<body>

	<?php 
		echo "<table>";
			for ($i=1; $i <= 20 ; $i++) { 	
				if($i%2 == 1){
					echo "<tr><td>{$i}</td>";
				}
				elseif ($i%2 ==0) {
					echo "<td>{$i}</td></tr>";
				}
			}
		echo "</table>";
	 ?>


		
	
</body>
</html>