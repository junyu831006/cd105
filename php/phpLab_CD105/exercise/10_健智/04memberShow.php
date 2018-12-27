<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Document</title>
</head>
<body>
<!-- 	<?php  
	echo "姓名:" ,$_GET["memName"];  
	echo "帳號:" ,$_GET["memId"];  
	echo "密碼:" ,$_GET["memPsw"];  
	echo "e-mail:" ,$_GET["memEmail"];  
	echo "性別:" ,$_GET["gender"];  
	echo "生日:" ,$_GET["birthday"];  
	echo "連絡電話:" ,$_GET["tel"];
	?> -->
	
	<table border="1" width="500px">
		<tr>
			<td>姓名:</td>
			<td><?php echo $_GET["memName"] ?></td>
		</tr>
		<tr>
			<td>帳號:</td>
			<td><?php echo $_GET["memId"] ?></td>
		</tr>
		<tr>
			<td>密碼:</td>
			<td><?php echo $_GET["memPsw"] ?></td>
		</tr>
		<tr>
			<td>e-mail:</td>
			<td><?php echo $_GET["memEmail"] ?></td>
		</tr>
		<tr>
			<td>性別:</td>
			<td><?php echo $_GET["gender"] ?></td>
		</tr>
		<tr>
			<td>生日:</td>
			<td><?php echo $_GET["birthday"] ?></td>
		</tr>
		<tr>
			<td>連絡電話:</td>
			<td><?php echo $_GET["tel"] ?></td>
		</tr>
	</table>
</body>
</html>