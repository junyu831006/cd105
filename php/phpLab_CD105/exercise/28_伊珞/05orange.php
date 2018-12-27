<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>05orange_php</title>
	<style type="text/css">
		h1{
			text-align: center;
		}
		.wrap{
			width: 200px;
			background-color: #eee;
			margin: auto;
			padding: 5px;
		}
		td{
			width: 50px;
			padding: 5px;
		}
	</style>
</head>
<body>
	<h1>您的消費資料為</h1>
	<?php
	$total = $_GET["price"] * $_GET["amount"];
	echo
	"<table class=wrap>
		<tr>
			<td>單價：</td>
			<td>{$_GET["price"]}</td>
		</tr>
		<tr>
			<td>數量：</td>
			<td>{$_GET["amount"]}</td>
		</tr>
		<tr>
			<td>小計：</td>
			<td>{$total}</td>
		</tr>
	</table>"
	?>

</body>
</html>