<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>04memberShow</title>
	<style type="text/css">
		.center{
			text-align: center;
			width: 960px;
		}
	</style>
</head>
<body>
	<div class="center">
		<h2>您的會員資料為</h2>
			<?php 
				echo 
			"<table border='1' width='960px'>
		<tr>
			<td>姓名</td>
			<td> {$_GET["memName"]} </td>
		</tr>
		<tr>
			<td>帳號</td>
			<td> {$_GET["memId"]} </td>
		</tr>
		<tr>
			<td>密碼</td>
			<td> {$_GET["memPsw"]} </td>
		</tr>
		<tr>
			<td>e-mail</td>
			<td> {$_GET["email"]} </td>
		</tr>
		<tr>
			<td>性別</td>
			<td> {$_GET["sex"]} </td>
		</tr>
		<tr>
			<td>生日</td>
			<td> {$_GET["birthday"]} </td>
		</tr>
		<tr>
			<td>聯絡電話</td>
			<td> {$_GET["tel"]} </td>
		</tr>
	
	 </table>"
			 ?>
			</div>
		 	
	
</body>
</html>