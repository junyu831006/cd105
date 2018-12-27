<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Document</title>

	<style type="text/css">
		h3{
			text-align: center;
		}
		table{
			text-align: center;
			margin: auto;
		}
	</style>
</head>
<body>
	
	<?php  
	$price = $_GET["price"];
	$amount = $_GET["amount"];
	$total = $price * $amount;
	if($total >= 1000){
		$total = $total * 0.7;
	}
	elseif ($total >= 500) {
		$total = $total * 0.9;
	}
	?>

	<div class="wrap">
		<h3>計價</h3>
		<table border="1" width="450px">
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
	</div>
</body>
</html>