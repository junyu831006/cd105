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
		}
	</style>
</head>
<body>
	<!-- <?php 
	echo "姓名",$_REQUEST["memName"];
	echo "帳號",$_REQUEST["memId"];
	echo "密碼 :",$_REQUEST["memPsw"];
	echo "e-mail",$_REQUEST["email"];
	echo "性別",$_REQUEST["gender"];
	echo "生日",$_REQUEST["birthday"];
	echo "連絡電話",$_REQUEST["tel"];	
	 ?> -->
	 <h2>您的會員資料為</h2>
	 <table border='1' width= '250' >
	 	<tr>
	 		<th>姓名</th>
	 		<td><?php echo $_REQUEST["memName"] ?></td>
	 	</tr>
	 	<tr>
	 		<th>帳號</th>
	 		<td><?php echo $_REQUEST["memId"] ?></td>
	 	</tr>
	 	<tr>
	 		<th>密碼</th>
	 		<td><?php echo $_REQUEST["memPsw"] ?></td>
	 	</tr>
	 	<tr>
	 		<th>e-mail</th>
	 		<td><?php echo $_REQUEST["email"] ?></td>
	 	</tr>
	 	<tr>
	 		<th>性別</th>
	 		<td><?php echo $_REQUEST["gender"] ?></td>
	 	</tr>
	 	<tr>
	 		<th>生日</th>
	 		<td><?php echo $_REQUEST["birthday"] ?></td>
	 	</tr>
	 	<tr>
	 		<th>連絡電話</th>
	 		<td><?php echo $_REQUEST["tel"] ?></td>
	 	</tr>
 	</table>

</body>
</html>