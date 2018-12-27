<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Document</title>
	<style type="text/css">
		table,tr,td{
			border: 1px solid #000;
		}
	</style>
</head>
<body>
	<?php 
		echo "<h3>您的消費為</h3>";
	 ?>
	<form>
		<table>
			<tr>
				<td>等級:</td>
				<td>
					<?php
						echo $_GET["grade"];
					?>
				</td>
			</tr>
			<tr>
				<td>公斤數:</td>
				<td>
					<?php
						echo $_GET["kg"];
					?>
				</td>
			</tr>
			<tr>
				<td>小計:</td>
				<td>
					<?php
						$quantity = $_GET["kg"];
						$type = $_GET["grade"]; 
						$sum = $quantity;
						if($type == 1){
							if ($quantity >= 100) {
								echo $sum = $quantity*20;
							}
							elseif ($quantity >=40 && $quantity <100) {
								echo $sum = $quantity*25;
							}
							elseif ($quantity <40) {
								echo $sum = $quantity*30;
							}
						}
						if($type == 2){
							if ($quantity >= 100) {
								echo $sum = $quantity*15;
							}
							elseif ($quantity >=40 && $quantity <100) {
								echo $sum = $quantity*20;
							}
							elseif ($quantity <40) {
								echo $sum = $quantity*25;
							}
						}
						if($type == 3){
							if ($quantity >= 100) {
								echo $sum = $quantity*10;
							}
							elseif ($quantity >=40 && $quantity <100) {
								echo $sum = $quantity*15;
							}
							elseif ($quantity <40) {
								echo $sum = $quantity*20;
							}
						}
						else{
							echo "無資料";
						}
					?>
				</td>
			</tr>
		</table>
	</form>
</body>
</html>