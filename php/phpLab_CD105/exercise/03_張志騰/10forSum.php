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
		echo "<h3>計算如下</h3>";
	 ?>
	<form>
		<table>
			<tr>
				<td>總和：</td>
				<td>
					<?php
						$sum = $_GET["nub"];
						$total = 0;
						for($i=1; $i<=$sum ; $i++){
							$total = $total + $i;
						}
						echo "$total";
					?>
				</td>
			</tr>
			<tr>
				<td>奇數和:</td>
				<td>
					<?php
						$sum = $_GET["nub"];
						$total = 0;
						for($i=1; $i<=$sum ; $i++){
							if ($i%2 == 1) {
							$total = $total + $i;
							}
						}
						echo "$total";
					?>
				</td>
			</tr>
			<tr>
				<td>偶數和:</td>
				<td>
					<?php
						$sum = $_GET["nub"];
						$total = 0;
						for($i=1; $i<=$sum ; $i++){
							if ($i%2 == 0) {
							$total = $total + $i;
							}
						}
						echo "$total";
					?>
				</td>
			</tr>
		</table>
	</form>
</body>
</html>