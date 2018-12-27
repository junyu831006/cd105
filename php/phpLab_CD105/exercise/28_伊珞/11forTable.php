<!DOCTYPE html>
	<html lang="en">
	<head>
		<meta charset="UTF-8">
		<title>11forTable.php</title>
		<style type="text/css">
			table{
				width: 300px;
				border: 1px solid;
			}
			td{
				width: 150px;
				border: 1px solid;
			}

		</style>
	</head>
	<body>
		<?php 

		echo "<table>";
			for( $i = 1; $i <= 10; $i++){
				if( $i % 2 == 1){
					echo "<tr><td>{$i}</td>";
				}elseif ( $i % 2 == 0) {
					echo "<td>{$i}</td></tr>";
				}
		 	}	
		 echo "</table>";
		 ?>


	</body>
	</html>	