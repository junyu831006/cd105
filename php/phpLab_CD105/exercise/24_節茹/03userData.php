<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Document</title>
	<style type="text/css">
		caption{
			color: #FF1493;
			font-size: 20px;
			font-weight: 700;
			padding: 10px;
		}
		th, td{
			padding: 5px;
		}
		th{
			background-color: #FFC0CB;
		}
	</style>
</head>
<body>
	<?php
		$name="小丸子";
		$age="是秘密喲...";
		$address="漫畫走廊";
	?>
	<table border="1">
		<caption>個人小檔案</caption>
		<tr>
			<th>姓名</th>
			<td><?php echo $name ?></td>
		</tr>
		<tr>
			<th>年齡</th>
			<td><?php echo $age ?></td>
		</tr>
		<tr>
			<th>地址</th>
			<td><?php echo $address ?></td>
		</tr>
	</table>
</body>
</html>