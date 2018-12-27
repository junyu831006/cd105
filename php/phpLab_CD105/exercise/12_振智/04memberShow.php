<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Document</title>
	<style type="text/css">
		h3{
			text-align: center;
		}
		td{
			width: 300px;
			text-align: center;
		}
		table{
			margin: auto;
		}
	</style>
</head>
<body>
	<h3>你的會員資料</h3>
	<table border="1">
		<tr>
			<td>姓名</td>
			<td><?php echo $_REQUEST["memName"] ?></td>
		</tr>
		<tr>
			<td>帳號</td>
			<td><?php echo $_REQUEST["memId"]?></td>
		</tr>
		<tr>
			<td>密碼</td>
			<td><?php echo $_REQUEST["memPsw"] ?></td>
		</tr>
		<tr>
			<td>信箱</td>
			<td><?php echo $_REQUEST["email"] ?></td>
		</tr>
		<tr>
			<td>性別</td>
			<td><?php echo $_REQUEST["sex"] ?></td>
		</tr>
		<tr>
			<td>生日</td>
			<td><?php echo $_REQUEST["birthday"] ?></td>
		</tr>
		<tr>
			<td>連絡電話</td>
			<td><?php echo $_REQUEST["tel"] ?></td>
		</tr>

	</table>
</body>
</html>