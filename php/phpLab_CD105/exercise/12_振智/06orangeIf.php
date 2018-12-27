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
			width: 480px;
			margin: auto;
			text-align: center;
		}
	</style>
</head>
<body>
	<?php 
		$price= $_GET["price"];
		$amount= $_GET["amount"];
		$total= $price*$amount;
		if($total>500){$total=$total*0.9;}
		else{$total;}
	 ?>
	 <h3>您的消費資料為</h3>
	 <table border="1">
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