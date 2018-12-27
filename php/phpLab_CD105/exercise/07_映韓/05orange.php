<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<title>消費資料</title>
</head>
<body>
	<h3>您的消費資料為</h3>
	<table border="1">
		<tr>
			<td>單價</td>
			<td>
				<?php 
					echo $_POST["memPrice"];
				 ?>
			</td>
		</tr>

		<tr>
			<td>數量</td>
			<td>
				<?php 
				echo $_POST["memQuality"]; 
				?>
			</td>
		</tr>
		<tr>
			<td>小計</td>
			<td>
				<?php
				$memPrice = $_POST["memPrice"];
				$memQuality = $_POST["memQuality"]; 
				$sum = $memPrice * $memQuality;
				
				echo $sum;
				 ?>
			</td>
		</tr>
	</table>
</body>
</html>