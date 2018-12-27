<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Document</title>
	<style type="text/css">

		td{
			text-align: center;
		}

	</style>
</head>
<body>
	<form method="get" action>
	<table border="1" width="450px">
		<tr>
			<td>姓名</td>
			<td>
			<?php 
			echo $_GET["memName"]
			?>
			</td>
		</tr>
			<td>帳號</td>
			<td><?php 
			echo $_GET["memId"]
			?></td>
		<tr>
			<td>密碼</td>
			<td><?php 
			echo $_GET["memPsw"]
			?></td>
		</tr>
		<tr>
			<td>email</td>
			<td><?php 
			echo $_GET["email"]
			?></td>
		</tr>
		<tr>
			<td>性別</td>
			<td>
			<?php
			echo $_GET["sex"];
			?>	
			</td>
		</tr>
		<tr>
			<td>生日</td>
			<td><?php
			echo $_GET["birthday"];
			?>	
			</td>		
		</tr>
		<tr>
			<td>聯絡電話</td>
			<td>
			<?php  
			echo $_GET["tel"];
			?>	
			</td>
		</tr>
		

	</table>	

	</form>
	
</body>
</html>