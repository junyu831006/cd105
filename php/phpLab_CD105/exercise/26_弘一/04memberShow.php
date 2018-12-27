<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Document</title>
	<style type="text/css">
	tr{
		text-align:center;
	}
</style>
</head>
<body>
	<table border='1' width='500px' style='text-align: left'>
   	 	<caption style='padding-bottom:10px'>您的會員資料為</caption>
   		<tr>
   			<th>姓名 : </th>
   			<td><?php echo $_REQUEST["memName"] ?></td>
   		</tr>
   		<tr>
   			<th>帳號 : </th>
   			<td><?php echo $_REQUEST["memAccount"] ?></td>
   		</tr>
   		<tr>
   			<th>密碼 : </th>
   			<td><?php echo $_REQUEST["memPassword"] ?></td>
   		</tr>
   		<tr>
   			<th>e-mail : </th>
   			<td><?php echo $_REQUEST["memeEmail"] ?></td>
   		</tr>
   		<tr>
   			<th>性別 : </th>
   			<td><?php echo $_REQUEST["gender"] ?></td>
   		</tr>
   		<tr>
   			<th>生日 : </th>
   			<td><?php echo $_REQUEST["memBirthday"] ?></td>
   		</tr>
   		<tr>
   			<th>聯絡電話 : </th>
   			<td><?php echo $_REQUEST["memTel"] ?></td>
   		</tr>
   	</table>
</body>
</html>