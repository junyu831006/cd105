<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>04memberShow</title>
	<style type="text/css">
		table{
			width: 300px;
			text-align: center;
			border: 1px solid #ccc;
			margin: auto;
		}
		td{
			border: 1px solid #ccc;
		}
	</style>
</head>
<body>

	<table>
		<tr>
			<td>使用者</td>
			<td><?php echo $_REQUEST["memName"];?></td>
		</tr>
		<tr>
			<td>帳號</td>
			<td><?php echo $_REQUEST["memId"]; ?></td>
		</tr>
		<tr>
			<td>密碼</td>
			<td><?php echo $_REQUEST["memPsw"]; ?></td>
		</tr>
		<tr>
			<td>e-mail</td>
			<td><?php echo $_REQUEST["email"]; ?></td>
		</tr>
		<tr>
			<td>性別</td>
			<td><?php echo $_REQUEST["sex"]; ?></td>
		</tr>
		<tr>
			<td>生日</td>
			<td><?php echo $_REQUEST["birthday"]; ?></td>
		</tr>
		<tr>
			<td>連絡電話</td>
			<td><?php echo $_REQUEST["tel"]; ?></td>
		</tr>
	</table>
	
</body>
</html>