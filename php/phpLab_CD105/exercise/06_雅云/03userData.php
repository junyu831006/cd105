<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Document</title>
	<style type="text/css">
		table{
			border: 2px solid black;
			text-align: center;
			background-color: lightblue;
			margin: auto;
		}
	</style>
</head>
<body>
	<?php 
		$name="小丸子";
		$age="不告訴你";
		$addr="漫畫走廊";
	 ?>
	<table rules="all">
		<th colspan="2">個人小檔案</th>
		<tr>
			<td>姓名</td>
			<td><?php echo $name; ?></td>
		</tr>
		<tr>
			<td>年齡</td>
			<td><?php echo $age; ?></td>
		</tr>
		<tr>
			<td>地址</td>
			<td><?php echo $addr; ?></td>
		</tr>
	</table>
</body>
</html>