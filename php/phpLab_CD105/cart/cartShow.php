<?php

session_start();

error_reporting(E_ERROR | E_PARSE);
?>
<!DOCTYPE html>
<html>
<head>
<meta charset="utf-8">
<title>Examples</title>
<style type="text/css">
h2 {
	color:deeppink;
}	
td {
	border-bottom:1px dotted deeppink;
}
a {
	text-decoration:none;
}
a:hover {
	text-decoration:underline;
}
</style>
</head>
<body>
<div><a href="prodList.php"  rel="noopener noreferrer">回到購物頁面</a></div>
<table align="center" width="600">
	<tr bgcolor="#bfbfef">
		<th>書號</th>
		<th>書名</th>
		<th>價格</th>
		<th>作者</th>
		<th>數量</th>
		<th>修改</th>
	</tr>	
<?php foreach($_SESSION["pname"] as $psn => $pname){?>
	<!-- form 要放在php裡面，因為才會送出去-->
	<form action="cartUpdate.php">
	<tr>
		<!--input hidden 是要把資料帶去下一支php-->
		<td><input type="hidden" name="psn" value="<?php echo $psn;?>"></td>
		<td><?php echo  $psn ;?></td>
		<td><?php echo  $_SESSION["pname"][$psn] ,"<br>";?></td>  
		<td><?php echo  $_SESSION["price"][$psn] ,"<br>";?></td>
		<td><?php echo  $_SESSION["author"][$psn] ,"<br>";?></td>
		<td><input type="text" name="qty" value="<?php echo  $_SESSION["qty"][$psn];?>"></td>
		<td>
		<input type="submit" name="btnUpdate" value="新增">
		<input type="submit" name="btnDelete" value="修改">

		</td>
	</tr>
</form>
<?php } ?>
<?php?>
<form action="cartToDb.php">
		<input type="submit" name="btncheck" value="結帳">
	
		</form>
		<?php?>
	</table>

<center><a href="prodList.php">繼續購物</a></center>

</body>
</html>