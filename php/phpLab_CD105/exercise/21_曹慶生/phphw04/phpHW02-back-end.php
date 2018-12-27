<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Document</title>
</head>
<body>
	<table border="8">
		  <tr>
		  	<td width="100px">姓名</td><td  width="300px">
		  		<?php echo $_REQUEST["memName"], "<br>";  ?>
		  	</td>
		  </tr>
		  <tr>
		  	<td width="100px">帳號</td>
		  		<td  width="300px">
		  			<?php echo $_REQUEST["memId"],"<br>"; ?>
		  		</td>
		  	</tr>
		  <tr>
		  	<td width="100px">密碼</td>
		  		<td  width="300px">
		  			<?php echo $_REQUEST["memPsw"],"<br>"; ?>	
		  			</td>
		  		</tr>

		  <tr>
		  	<td width="100px">信箱</td>
		  		<td  width="300px">
		  			<?php echo $_REQUEST["email"]; ?>
		  		</td>
		  </tr>

		  <tr>
		  	<td width="100px">性別</td>
		  		<td  width="300px">
		  			<?php echo $_REQUEST["gender"]; ?>
		  		</td>
		  </tr>
		  <tr>
		  	<td width="100px">生日</td>
		  	<td  width="300px">
		  		<?php echo $_REQUEST["birthday"],"<br>"; ?>
		  		</td>
		  </tr>

		  <tr>
		  	<td width="100px">連絡電話:</td>
		  	<td  width="300px">
		  		<?php echo  $_REQUEST["phone"], "<br>";?>
		  	</td>
		  </tr>

		</table>
</body>
</html>


<!-- echo "姓名 : ", $_REQUEST["memName"], "<br>";   
<?php echo "帳號 : ", $_REQUEST["memId"], "<br>"; ?>
<? php echo "密碼 : ", $_REQUEST["memPsw"], "<br>"; ?>
<? php echo "信箱: ", $_REQUEST["email"], "<br>"; ?>
<? php echo "性別 : ", $_REQUEST["gender"], "<br>"; ?>
<? php echo "生日 : ", $_REQUEST["birthday"], "<br>"; ?>
<? php echo "連絡電話 : ", $_REQUEST["phone"], "<br>";   ?>
 -->