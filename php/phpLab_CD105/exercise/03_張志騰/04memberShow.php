<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Document</title>
	<style type="text/css">
		table,tr,th,td{
			border: 1px solid;
		}
/*		td{
			width: 300px;
		}
		th{
			width: 100px;
		}*/
		h2{
			text-align: center;
		}
		form,table{
			width: 540px;
			margin: auto;
		}
	</style>
</head>
<body>
	<?php
		echo "<h2>您的會員資料為</h2>";
	?>
	<form>
		<table>
			<tr>
				<th>姓名</th>
				<td>
					<?php
						echo $_GET["memName"];
					?>
				</td>
			</tr>
			<tr>
				<th>帳號</th>
				<td>			
					<?php
						echo $_GET["memId"];
					?>
				</td>
			</tr>
			<tr>
				<th>密碼</th>
				<td>
					<?php
						echo $_GET["memPsw"];
					?>
				</td>
			</tr>
			<tr>
				<th>e-mail</th>
				<td>
					<?php
						echo $_GET["email"];
					?>
				</td>
			</tr>
			<tr>
				<th>性別</th>
				<td>
					<?php
						echo $_GET["sex"];
					?>
				</td>
			</tr>
			<tr>
				<th>生日</th>
				<td>
					<?php
						echo $_GET["birthday"];
					?>
				</td>
			</tr>
			<tr>
				<th>連絡電話</th>
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