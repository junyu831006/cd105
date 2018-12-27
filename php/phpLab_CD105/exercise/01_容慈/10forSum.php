<!DOCTYPE html>
	<html lang="en">
	<head>
		<meta charset="UTF-8">
		<title>Document</title>
		<style type="text/css">
			h2{
				text-align:center;
				color: lightslategrey; 
			}
			table{
				width: 300px;
				margin: auto;
				border-collapse: collapse;
			}
		</style>

	</head>
	<body>
		<!-- 輸入一正整數,並算1 到此整數間的總和、奇數和、偶數和 -->
		<?php 
			$num=$_GET["num"];
			$sum=0;
			$odd;
			$even;
			
			for ($i=1; $i<=$num ; $i++) { 
				$sum+=$i;
			} 
			for ($i=1; $i<=$num ; $i++) { 
				if ($i%2==1) {
					$odd+=$i;
				}
			}
			for ($i=1; $i <=$num ; $i++) { 
				if ($i%2==0) {
					$even+=$i;
				}
			}
		 ?>
		 	<h2>計算結果</h2>
			<table >
				<tr>
					<td>你輸入的數</td>
					<td><?php echo $num; ?></td>
				</tr>
				<tr>
					<td>總和</td>
					<td><?php echo $sum; ?></td>
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