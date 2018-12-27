<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Document</title>
	<link rel="stylesheet" type="text/css" href="phpHw02.css">
</head>
<body>
	<?php
	$name=["黃一丁","劉二毛","張大化"];
	$studentNumber=["949510001","949510002","949510003"];
	$phone=["0987456889","0987456889","0987456889"];

// $aaa=["",""];
// $aaa[0];
	?>	

    <table>
	  <tr >
	    <th>學生</th>
	    <th>姓名</th>
	    <th>電話</th>
	  </tr>
	  <tr>
	    <td><?php echo $studentNumber[0];?></td>
	  	<td><?php echo $name[0];?></td>
	   	<td><?php echo $phone[0];?></td>
	  </tr>
	  <tr>
	    <td><?php echo $studentNumber[1];?></td>
	    <td><?php echo $name[1];?></td>
	    <td><?php echo $phone[1];?></td>
	  </tr>
	  <tr>
	  	<td><?php echo $studentNumber[2];?></td>
	    <td><?php echo $name[2];?></td>
	    <td><?php echo $phone[2];?></td>
	  </tr>
	</table>
		
	
	<h1>h3 homework</h1>
	<?php
		$name="小丸子";
		$age="是秘密唷...";
		$address="漫畫走廊...";
	?>


	<table class="table2">
	  <tr >
	    <th>姓名</th>
	    <th><?=$name?></th>
	  </tr>
	  <tr>
	  	<td>年齡</td>
	    <td><?=$age?></td>
	  </tr>
	  <tr>
	  	<td>地址</td>
	    <td><?=$address?></td>
	  </tr>
	</table>

	 <!--  <h1>h4 homework</h1>
	  <h2>申請會員</h2>
	
	 <form method="get" action="phpHW02-back-end.php.php">
	<table border="8">
	  <tr><td width="100px">姓名:</td><td  width="300px"><input type="text" name="memName" size="8" maxlength="6"></td></tr>
	  <tr><td width="100px">帳號:</td><td  width="300px"><input type="text" name="memId" size="8" maxlength="6"></td></tr>
	  <tr><td width="100px">密碼:</td><td  width="300px"><input type="password" name="memId" size="8" maxlength="6"></td></tr>
	  <tr><td width="100px">信箱:</td><td  width="300px"><input type="mail" name="email" size="8" maxlength="6"></td></tr>
	  <tr><td width="100px">性別:</td><td  width="300px"><input type="text" name="gender" size="8" maxlength="6"></td></tr>
	  <tr><td width="100px">生日:</td><td  width="300px"><input type="text" name="birthday" size="8" maxlength="6"></td></tr>
	  <tr><td width="100px">連絡電話:</td><td  width="300px"><input type="phone" name="phone" size="8" maxlength="6"></td></tr>
	</table>
	<br>
	<input type="submit" value="新增">
	</form>
	 -->
</body>
</html>