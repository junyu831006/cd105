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
			margin: auto;
		}
	</style>
</head>
<body>
	<?php  
	$level = $_GET["level"];
	$kg = $_GET["kg"];
	switch ($level) {
		case "1":
			if ($kg<40) {
				$price = 30;
				
			}
			elseif ($kg>100) {
				$price = 20;
			}
			else {
				$price = 25;
			}
			break;
		case "2":
			if ($kg<40) {
				$price = 25;
				
			}
			elseif ($kg>100) {
				$price = 15;
			}
			else {
				$price = 20;
			}
			break;
		case "3":
			if ($kg<40) {
				$price = 20;
				
			}
			elseif ($kg>100) {
				$price = 10;
			}
			else {
				$price = 15;
			}
			break;
		default:
			$total = 0;
			break;
	}
	$total = $price * $kg;
	?>

	<div class="wrap">
		<h3>計價</h3>
		<table border="1" width="450px">
			<tr>
				<td>等級</td>
				<td><?php echo $level ?></td>
			</tr>
			<tr>
				<td>公斤數</td>
				<td><?php echo $kg ?></td>
			</tr>
			<tr>
				<td>小計</td>
				<td><?php echo $total ?></td>
			</tr>
		</table>
	</div>
</body>
</html>