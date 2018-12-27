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
				<td>單價:</td>
				<td>
					<?php
						echo $_GET["price"];
					?>
				</td>
			</tr>
			<tr>
				<td>數量:</td>
				<td>
					<?php
						echo $_GET["quantity"];
					?>
				</td>
			</tr>
			<tr>
				<td>小計:</td>
				<td>
					<?php
						$sum = $_GET["price"]*$_GET["quantity"];
						
						if($sum>=1000){
							echo $sum*0.7;
						}
						// elseif($_GET["price"]*$_GET["quantity"]<1000){	
						// 	echo $_GET["price"]*$_GET["quantity"]*0.9;
						// }
						elseif($sum>=500 && $sum<1000){	
							echo $sum*0.9;
						}
						else{
							echo $sum;
						}
					?>
				</td>
			</tr>
		</table>
	</form>
</body>
</html>