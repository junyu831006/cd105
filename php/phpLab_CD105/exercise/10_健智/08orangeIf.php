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
	if ($level == "1") {
		$total = $kg * 30;
		if ($kg > 40) {
			$total = $kg * 25;
			if ($kg > 100) {
				$total = $kg * 20;
			}
		}
	}
	elseif ($level == "2") {
		$total = $kg * 25;
		if ($kg > 40) {
			$total = $kg * 20;
			if ($kg > 100) {
				$total = $kg * 15;
			}
		}
	}
	elseif ($level == "3") {
		$total = $kg * 20;
		if ($kg > 40) {
			$total = $kg * 15;
			if ($kg > 100) {
				$total = $kg * 10;
			}
		}
	}

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