<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Document</title>
	<style type="text/css">
		h2{
			text-align: center;
		}
		table{
			margin: auto;
			width: 650px;
		}
	</style>
</head>
<body>
	<h2>您的會員資料為</h2>
	<table border="1">
		<tr>
			<td>姓名：</td>
			<td>
				<?php echo $_Get["memName"] ?>		
			</td>
		</tr>
		<tr>
			<td>帳號：</td>
			<td>
				<?php echo $_Get["memId"] ?>
            </td>
		</tr>
		<tr>
			<td>密碼：</td>
			<td>
				<?php echo $_Get["memPsw"] ?>
			</td>
		</tr>
		<tr>
			<td>e-mail：</td>
			<td>
				<?php echo $_Get["email"] ?>
		</tr>
		<tr>
			<td>性別：</td>
			<td>
				<?php echo $_Get["sex"] ?>
			</td>
		</tr>
		<tr>
			<td>生日：</td>
			<td>
				<?php echo $_Get["birthday"] ?>
			</td>
		</tr>
		<tr>
			<td>連絡電話：</td>
			<td>
				<?php echo $_Get["tel"] ?>
			</td>
		</tr>
	</table>
	
</body>
</html>