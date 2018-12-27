<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Document</title>
	<style type="text/css">
		h2{
			text-align: center;
		}
		td{
			text-align: center;
		}
		table{
			margin: auto;
		}
	</style>
</head>
<body>
	<?php 
		$total = $_REQUEST["price"]*$_REQUEST["number"];

	 ?>
	<h2>您的消費資料為</h2>
	 <table border='1' width= '250' >
	 	<tr>
	 		<th>單價</th>
	 		<td><?php echo $_REQUEST["price"] ?></td>
	 	</tr>
	 	<tr>
	 		<th>數量</th>
	 		<td><?php echo $_REQUEST["number"] ?></td>
	 	</tr>
	 	<tr>
	 		<th>小計</th>
	 		<td><?php echo $total ?></td>
	 	</tr>
	 	</table>
</body>
</html>