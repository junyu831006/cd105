<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Document</title>
	<style type="text/css">
		.title{
			color: pink;
		}
		.colTitle{
			background-color: pink;
			text-align: center;
			font-weight: bold;
		}
	</style>
</head>
<body>
	<?php 
		$name = "小丸子";
		$years = "是秘密喲...";
		$addr = "漫畫走廊...";
		echo "<table width=200px class='title'><th>個人小檔案</th></table>";
		echo "<table border='1' width=200px class='data'>
		<tr>
			<td class='colTitle';>姓名：</td>
			<td>{$name}</td>
		</tr>
		<tr>
			<td class='colTitle';>年齡：</td>
			<td>{$years}</td>
		</tr>
		<tr>
			<td class='colTitle';>地址：</td>
			<td>{$addr}</td>
		</tr>

		</table>";
	?>
</body>
</html>