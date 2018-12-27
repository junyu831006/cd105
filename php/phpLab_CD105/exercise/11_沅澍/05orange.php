<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>05orange</title>
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
			<td>計價</td>
			
		</tr>
	</table>
	<?php 
	$a=$_GET["price"];
	$b=$_GET["amount"];
	$total=$a*$b;
		echo 
			"<table border='1' width='960px'>
		<tr>
			<td>單價</td>
			<td> {$_GET["price"]} </td>
		</tr>
		<tr>
			<td>數量</td>
			<td> {$_GET["amount"]} </td>
		</tr>
		<tr>
			<td>小計</td>
			<td> $total </td>
		</tr>
	 </table>"
	 ?>
	
</body>
</html>