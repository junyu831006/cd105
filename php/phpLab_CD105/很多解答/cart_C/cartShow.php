<?php
ob_start();
session_start();
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
<table align="center" width="600">
	<tr bgcolor="#bfbfef"><th>書號</th><th>書名</th><th>價格</th><th>數量</th></tr>	
		<tr>
			<td><?php echo $_SESSION["psn"];?></td>
			<td><a href="prodQuery.php?psn=<?php echo $_SESSION["psn"];?>">
				<?php echo $_SESSION["pname"];?>
				</a>	
			</td>
			<td><?php echo $_SESSION["price"];?></td>
			<td><?php echo $_SESSION["qty"];?></td>
		</tr> 
</table>


</body>
</html>