<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Document</title>
	<style type="text/css">
		h2{
			text-align: center;
		}

	</style>
</head>
<body>

	<h2>您的消費資料為</h2>

	<table border="2" width="500" align="center">
	<tr>
		<th>價位</th>
		<td><?php echo  $_GET["money"]," <br>";  ?></td>
	</tr>

	<tr>
		<th>數量</th>
		<td><?php echo $_GET["amount"]," <br>" ; ?></td>
	</tr>

	 </td>
	<tr>
		<th>小計</th>
		<td><?php 

		echo  $_GET["money"] * $_GET["amount"], " 元 ";  ?> </td>
	</tr>
</table>
	
</body>
</html>