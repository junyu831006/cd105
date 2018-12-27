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
	<h2>您的會員資料為</h2>
 <!-- <?php 
	echo "姓名", $_GET["name"]," <br>";
	echo "帳號",$_GET["meberID"]," <br>" ;
	echo "密碼", $_GET["memberPsw"]," <br>";
	echo "e-mail", $_GET["memMail"]," <br>";
	echo "性別", $_GET["gender"]," <br>";
	echo "生日", $_GET["birthday"]," <br>";
	echo "連絡電話", $_GET["phone"]," <br>";


	 ?>  -->
	 
	<table border="2" width="500" align="center">
	<tr>
		<th>姓名</th>
		<td><?php echo  $_GET["name"]," <br>";  ?></td>
	</tr>

	<tr>
		<th>帳號</th>
		<td><?php echo $_GET["meberID"]," <br>" ; ?></td>
	</tr>

	<tr>
		<th>密碼</th>
		<td><?php echo  $_GET["memberPsw"]," <br>"; ?></td>
	</tr>

	<tr>
		<th>e-mail</th>
		<td><?php echo  $_GET["memMail"]," <br>"; ?></td>
	</tr>

	<tr>
		<th>性別</th>
		<td><?php echo  $_GET["gender"]," <br>"; ?></td>
	</tr>

	<tr>
		<th>生日</th>
		<td><?php echo  $_GET["birthday"]," <br>";  ?></td>
	</tr>

	<tr>
		<th>聯絡電話</th>
		<td><?php echo $_GET["phone"]," <br>";
 ?></td>
	</tr>
</table>

</body>
</html>