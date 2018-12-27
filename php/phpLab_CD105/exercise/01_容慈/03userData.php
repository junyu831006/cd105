<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Document</title>
	<style type="text/css">
		th{
			background-color: pink;
			font-weight: bold;

		}

	</style>
</head>
<body>
	<?php 
		$name="小丸子";
		$age="是秘密喲...";
		$address="漫畫走廊...";

	 ?>
	 
	<table border="1px ">
		<tr>
			<th>姓名：</th>
			<td><?php $name ?></td>
		</tr>
		<tr>
			<th>年齡：</th>
			<td><?php $age ?></td>
		</tr>
		<tr>
			<th>地址：</th>
			<td><?php $address ?></td>
		</tr>
	</table>

</body>
</html>