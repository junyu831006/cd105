<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>05orange.php</title>
	.<style type="text/css">
		body{
			font-size: 32px;
			text-align: center;
		}
		table{
			width: 400px;	

		} 
		tr,td{
			border:2px solid #ccc;
		}
		.txt-input,input{
			display: inline-block;
			padding: 5px 20px;
		}

	</style>
</head>
<body>
	<?php 
		$price = $_REQUEST["price"];
		$number = $_REQUEST["number"];
		// settype($price,integer);
		// settype($number,integer);
		$money = ($price * $number);
		

	 ?>

<div class="txt-input">
	<h2>您的消費資料為</h2>
	<table>
		<tr>
			<td>單價</td>
			<td><?php echo $_REQUEST["price"];?></td>
		</tr>
		<tr>
			<td>數量</td>
			<td><?php echo $_REQUEST["number"]; ?></td>
		</tr>
		<tr>
			<td>小計</td>
			<td>
				<?php 
					if($money >= 500){ 
						$money = $money * 0.9;
						echo "打9折後金額{$money}";
					}
					else{
						$money = ($price * $number);
						echo "原價金額{$money}";
					}
				?>	
			</td>
		</tr>
	</table>
</div>
</body>
</html>