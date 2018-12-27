<!DOCTYPE html>
<html lang='en'>
<head>
	<meta charset='UTF-8'>
	<title>11forTable</title>
	<style type="text/css">
		table{
			border-collapse: collapse;
			border-spacing: 0;
		}
		td{
			border: 1px solid #ccc;
			width: 100px;
			text-align: center;
		}
	</style>
</head>
<body>
<?php
    echo "<table>";
	$Odd_vaule = 0;
	$Even_vaule= 0;
	for($i=1 ; $i<=10 ; $i++){
		if($i%2 == 1){
			$Odd_vaule = $i;
		}
		elseif ($i%2 == 0) {
			$Even_vaule = $i;
			 echo
			"<tr>
			<td>$Odd_vaule</td>
			<td>$Even_vaule</td>
			</tr>";
			}
		}
?>
</body>
</html>
