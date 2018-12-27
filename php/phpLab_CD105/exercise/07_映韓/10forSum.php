<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<title>for</title>
	<style type="text/css">
		table {
			border:1px solid gray;
		}
	</style>
</head>
<body>
	<?php 
		$total=0;
		$odd=0;
		$even=0;
		for ($i=1; $i<=$_POST["number"]; $i++ ){
			$total += $i;
		}

		for ($i=1; $i<=$_POST["number"]; $i=$i+2){
			$odd += $i;
		}

		for ($i=2; $i<=$_POST["number"]; $i=$i+2){
			$even += $i;
		}
?>
	<table>
		<tr>
			<td>整數</td>
			<td>
				<?php 
					echo $_POST["number"];
				 ?>
			</td>
		</tr>
		<tr>
			<td>總和</td>
			<td>
				<?php 
					echo $total;
				 ?>
			</td>
		</tr>
		<tr>
			<td>奇數和</td>
			<td>
				<?php 
					echo $odd;
				 ?>
			</td>
		</tr>
		<tr>
			<td>偶數和</td>
		<td>
			<?php 
				echo $even;
			 ?>
		</td>
		</tr>
	</table>
</body>
</html>