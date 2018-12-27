<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>10</title>
	<style type="text/css">
		table,td{
			margin: auto;
			border-collapse: collapse;
			border: 1px solid black;
		}
		td{
			padding: 10px;
		}
	</style>
</head>
<body>

	<?php  
		$n=$_GET["number"];
		$total=0;

		for ($i=0;$i<=$n;$i++){
			$total+=$i;
		}

		$odd=0;  //奇數
		for ($i=1;$i<=$n;$i+=2){
			$odd+=$i;
		}

		$even=0; //偶數
		for ($i=0;$i<=$n;$i+=2)
			$even+=$i;
	?>
	<table>
		<tr>
			<td>整數總和</td>
			<td><?php echo $total; ?></td>
		</tr>
		<tr>
			<td>奇數和</td>
			<td><?php echo $odd; ?></td>
		</tr>
		<tr>
			<td>偶數和</td>
			<td><?php echo $even; ?></td>
		</tr>
	</table>
</body>
</html>