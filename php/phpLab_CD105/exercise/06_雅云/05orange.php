<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Document</title>
	<style type="text/css">
		body{
			text-align: center;
		}
		table,td{
			border: 2px double black;
		}
		table{
			margin: auto;
		}
		td{
			width: 300px;
			padding: 10px;
		}
	</style>
</head>
<body>
	
		<table>
			<tr>
				<th colspan="2">您的消費資料為</th>		
			</tr>
			<tr>
				<td>單價：</td>
				<td>
					<?php echo $_GET["price"]; ?>
				</td>
			</tr>
			<tr>
				<td>數量：</td>
				<td><?php echo $_GET["number"]; ?></td>
			</tr>
			<tr>
				<td>小計：</td>
				<td><?php echo $_GET["price"]*$_GET["number"]; ?></td>
			</tr>
		</table>
	
</body>
</html>