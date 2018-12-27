<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>10forSum</title>
	<style type="text/css">
		table{
			width: 480px;
			margin: auto;
		}
		table:first-child{
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

	$i=$_GET["i"];
	$total=0;
	$odd_total=0;
	$even_total=0;

	for ($x=1; $x<=$i ; $x++) { 
		$total += $x ;
	}

	for ($x=1; $x<=$i ; $x++) { 
		if ($x%2 == 1) {
			$odd_total += $x;
		}
	}

	for ($x=1; $x<=$i ; $x++) { 
		if ($x%2 == 0) {
			$even_total += $x;
		}
	}
		echo 
			"<table border='1' >
		<tr>
			<td>總和</td>
			<td> $total </td>
		</tr>
		<tr>
			<td>奇數和</td>
			<td> $odd_total </td>
		</tr>
		<tr>
			<td>偶數和</td>
			<td> $even_total </td>
		</tr>
	 </table>"
	 ?>
	
</body>
</html>