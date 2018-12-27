<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>11forTable.php</title>
	<style type="text/css">
		
		table{
			margin: auto;
		}
		td{
			width: 200px;
		}

	</style>
</head>
<body>
	<?php  
		echo "<table border='1px solid black'>";


			//五個row，$i主要當左邊直行的值

			for ($i=1;$i<=9;$i+=2){
				echo "<tr>";
				echo "<td>$i</td>";
				echo "<td>";
				echo $i+1;
				echo "</td>";
				echo "</tr>";
			}

			

		
		echo "</table>";
	?>


	
	
	
</body>
</html>