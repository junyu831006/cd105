<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>PHP作業四-接收頁</title>
	<style type="text/css">
		td{
			text-align: center;
		}
		.title{
			text-align: center;
			width: 500px;
		}
	</style>
</head>
<body>
	<?php
		$ini_total = $_POST["price"] * $_POST["num"];
		// echo "$ini_total";
		echo "<div class='title'>您的消費資料為</div>";
		echo "<table border='1' width='500'>
		<tr>
			<td>單價</td>
			<td>{$_POST["price"]}</td>
		</tr>
		<tr>
			<td>數量</td>
			<td>{$_POST["num"]}</td>
		</tr>
		<tr>
			<td>小計</td>
			<td>{$ini_total}</td>
		</tr>
		</table>"; 
	 ?>
</body>
</html>