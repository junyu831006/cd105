<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>03userData</title>
	<style type="text/css">
		th{
			color: #ea00bb;
			font-weight: 700;
			font-size: 20px;
		}
		.one{
			background-color: #ffcccc;
			font-weight: 700;
		}
	</style>
</head>
<body>
	<?php 
		$name='小丸子';
		$age='是秘密...';
		$site='漫畫走廊...';
		echo 
		"<table border='0' width='150px'>
		<th>個人小檔案</th>
		</table>
		<table border='1' width='150px'>
		</tr>
		<tr>
			<td class='one' >姓名：</td>
			<td> $name </td>
		</tr>
		<tr>
			<td class='one' >年齡：</td>
			<td> $age </td>
		</tr>
		<tr>
			<td class='one'>地址：</td>
			<td> $site </td>
		</tr>
		</table> "

	 ?>
	
</body>
</html>