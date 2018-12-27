<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>10forSum</title>
	<style type="text/css">
		table{
			width: 480px;
			margin: auto;
			text-align: center;
		
		}
		
	</style>
</head>
<body>
	<table>
		<tr>
			<td>計算結果</td>
			
		</tr>
	</table>
	<?php 
	echo 
		"<table border='1' cellspacing='0'>";
	for ($i=1; $i<=10 ; $i++) { 
		if ($i%2 == 1) {
		echo"<tr><td> $i</td>" ;
		}
		elseif ($i%2 ==0) {
		echo" <td>$i</td></tr>" ;
		}
	}
		
	echo
		"</table>";
	 ?>
	
</body>
</html>