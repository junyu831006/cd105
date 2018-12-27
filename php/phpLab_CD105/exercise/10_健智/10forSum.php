<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Document</title>
</head>
<body>
	<?php  
	$number = $_GET["number"];
	$total = 0;
	$total01 = 0;
	$total02 = 0;
	for ($i=1; $i <= $number ; $i++) { 
		$total +=  $i;
		if ($i % 2 == 1) {
			$total01 += $i;
		}
		elseif ($i % 2 == 0) {
			$total02 += $i;
		}
	}
	?>

	<div class="wrap">
		<h3>計算</h3>
		<table border="1" width="450px">
			<tr>
				<td>正整數</td>
				<td><?php echo $number ?></td>
			</tr>
			<tr>
				<td>1到此整數的總和</td>
				<td><?php echo $total ?></td>
			</tr>
			<tr>
				<td>1到此整數的奇數和</td>
				<td><?php echo $total01 ?></td>
			</tr>
			<tr>
				<td>1到此整數的偶數和</td>
				<td><?php echo $total02 ?></td>
			</tr>
		</table>
	</div>
</body>
</html>