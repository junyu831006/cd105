<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>PHP作業四-接收頁</title>
	<style type="text/css">
		td{
			text-align: center;
		}
		.title{
			text-align: center;
			width: 500px;
		}
	</style>
</head>
<body>
	<?php
		echo "<div class='title'>您的會員資料為</div>";
		echo "<table border='1' width='500'>
		<tr>
			<td>姓名</td>
			<td>{$_POST["memName"]}</td>
		</tr>
		<tr>
			<td>帳號</td>
			<td>{$_POST["memId"]}</td>
		</tr>
		<tr>
			<td>密碼</td>
			<td>{$_POST["memPsw"]}</td>
		</tr>
		<tr>
			<td>e-mail</td>
			<td>{$_POST["email"]}</td>
		</tr>
		<tr>
			<td>性別</td>
			<td>{$_POST["sex"]}</td>
		</tr>
		<tr>
			<td>生日</td>
			<td>{$_POST["birthday"]}</td>
		</tr>
		<tr>
			<td>聯絡電話</td>
			<td>{$_POST["tel"]}</td>
		</tr>
		</table>"; 
	 ?>
</body>
</html>