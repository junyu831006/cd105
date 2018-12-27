<!DOCTYPE html>
<html>
<head>
	<title></title>
</head>
<body>



	<?php 
// 姓名：memName 
// 帳號：memId
// 密碼：memPsw
// e-mail：email
// 性別：sex
// 生日：birthday
// 聯絡電話：tel
// 將表單送出到04memberShow.php



	 // 	echo "姓名 : ", $_REQUEST["memName"], "<br>";   
		// echo "帳號 : ", $_REQUEST["memId"], "<br>";   
		// echo "密碼 : ", $_REQUEST["memPsw"], "<br>";   
		// echo "e-mail : ", $_REQUEST["email"], "<br>";   
		// echo "性別 ： ", $_REQUEST["sex"], "<br>";   
		// echo "生日 : ", $_REQUEST["birthday"], "<br>";   
		// echo "聯絡電話 : ", $_REQUEST["tel"], "<br>";  

 // echo
	// "<div style='width: 300px'>
	//  <h3 style='text-align: center;'>您的會員資料為</h3>
	//  <table border='1'>
	//  	<tr><td>姓名</td><td>$_REQUEST["memName"]</td></tr>
	//  	<tr><td>帳號</td><td>$_REQUEST["memId"]</td></tr>
	//  	<tr><td>密碼</td><td>$_REQUEST["memPsw"]</td></tr>
	//  	<tr><td>e-mail</td><td>$_REQUEST["email"]</td></tr>
	//  	<tr><td>性別</td><td>$_REQUEST["sex"]</td></tr>	
	//  	<tr><td>生日</td><td> $_REQUEST["birthday"]</td></tr>	
	//  	<tr><td>聯絡電話</td><td>$_REQUEST["tel"]</td></tr>		 	
	//  </table>
	//  </div>"
	 ?>
	
	<div style="width: 300px">
	<h3 style="text-align: center;">您的會員資料為</h3>
	 <table border="1" style="width: 300px; text-align: center;">
	 	<tr><td>姓名</td><td><?php echo $_REQUEST["memName"]?></td></tr>
	 	<tr><td>帳號</td><td><?php echo $_REQUEST["memId"]?></td></tr>
	 	<tr><td>密碼</td><td><?php echo $_REQUEST["memPsw"]?></td></tr>
	 	<tr><td>e-mail</td><td><?php echo $_REQUEST["email"]?></td></tr>
	 	<tr><td>性別</td><td><?php echo $_REQUEST["sex"]?></td></tr>	
	 	<tr><td>生日</td><td><?php echo $_REQUEST["birthday"]?></td></tr>
	 	<tr><td>聯絡電話</td><td><?php echo $_REQUEST["tel"]?></td></tr>
	 </table>
	 </div>

 
</body>
</html>