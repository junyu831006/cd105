<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Document</title>
</head>
<body>
	@@@@@@@@@作業十一　：(迴圈 for..配合if…練習)  <br>
11forTable.php 	<br>
印出資料表:<br><br><br>

<?php 
	
	echo "<table border='1' style='text-align: left;border-collapse:collapse;'>";
	for($i=1;$i<=10;$i++){
		if($i%2!=0){
			// 若奇數
			echo "<tr><td style='width: 250px;'>{$i}</td>";
		}
		else
			// 若偶數
		echo "<td style='width: 250px;'>{$i}</td><tr>";
	}
	echo "</table>"

	


 ?>


</body>
</html>

<!-- <table border="1" style="width: 300px; text-align: center;">
	 	<tr><td>姓名</td><td><?php // echo $_REQUEST["memName"]?></td></tr>
	 	<tr><td>帳號</td><td><?php // echo $_REQUEST["memId"]?></td></tr>
	 	<tr><td>密碼</td><td><?php // echo $_REQUEST["memPsw"]?></td></tr>
	 	<tr><td>e-mail</td><td><?php // echo $_REQUEST["email"]?></td></tr>
	 	<tr><td>性別</td><td><?php // echo $_REQUEST["sex"]?></td></tr>	
	 	<tr><td>生日</td><td><?php // echo $_REQUEST["birthday"]?></td></tr>
	 	<tr><td>聯絡電話</td><td><?php // echo $_REQUEST["tel"]?></td></tr>
	 </table> -->