<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>變數練習</title>
	<style type="text/css">
		.box{
			background-color: #f3f3f3;
			width: 500px;
			height: 200px;
			margin: auto;
		}
		p{
			text-align: center;
			padding-top: 10px;
		}
		table{
			margin: auto; 
		}
		td{
			padding: 5px;
			background: #fff;
			border-top: solid 10px #f3f3f3;
			border-right:  solid 3px #f3f3f3;
		}

	</style>
</head>
<body>
	<?php
	$name = "小丸子";
	$age = "是秘密呦...";
	$address = "漫畫走廊...";
	?>

	<div class="box">
		<p>個人小檔案</p>
		<table>
			<tr>
				<td>姓名：</td>
				<td><?=$name?></td>
			</tr>
			<tr>
				<td>年齡：</td>
				<td><?=$age?></td>
			</tr>
			<tr>
				<td>地址：</td>
				<td><?=$address?></td>
			</tr>
	</div>
	</table>
</body>
</html>