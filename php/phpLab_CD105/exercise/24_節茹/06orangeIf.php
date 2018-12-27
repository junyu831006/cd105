<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Document</title>
</head>
<body>
	<?php
		$price= $_GET["price"];
		$amount= $_GET["amount"];
		$total= $price * $amount;
		if($total>500){
			$total= $total *0.9;
		}
	?>
	<table border="1" width="400px" style="text-align: center">
		<caption>您的消費資料為</caption>
		<tr>
			<td>單價</td>
			<td><?php echo $price ?></td>
		</tr>
		<tr>
			<td>數量</td>
			<td><?php echo $amount ?></td>
		</tr>
		<tr>
			<td>小計</td>
			<td><?php echo $total ?></td>
		</tr>
	</table>
</body>
</html>