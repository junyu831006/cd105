<?php
try {
	require_once("connectBooks.php");

	$sql = "select * from products";
	$products = $pdo->query($sql); 
	$products -> bindColumn("psn", $psn);
	$products -> bindColumn("pname", $pname);
	$products -> bindColumn("price", $price);
	$products -> bindColumn("author", $author);
} catch (PDOException $e) {
	echo "錯誤 : ", $e -> getMessage(), "<br>";
	echo "行號 : ", $e -> getLine(), "<br>";
}
 
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
</style>
</head>
<body>
<table align="center">
	<tr bgcolor="#bfbfef"><th>書號</th><th>書名</th><th>價格</th><th>作者</th></tr>
<?php	
	while($products->fetch(PDO::FETCH_ASSOC)){
?>		
		<tr>
			<td><?php echo $psn;?></td>
			<td><?php echo $pname;?></td>
			<td><?php echo $price;?></td>
			<td><?php echo $author;?></td>
		</tr>
<?php
	}
?>
</table>     
</body>
</html>