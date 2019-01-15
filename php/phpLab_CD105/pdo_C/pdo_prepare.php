<?php
try {
	$dsn = "mysql:host=localhost;port=3306;dbname=books;charset=utf8";
	$user = "root";
	$password = "root";
	$options = array(PDO::ATTR_CASE=>PDO::CASE_NATURAL, PDO::ATTR_ERRMODE=>PDO::ERRMODE_EXCEPTION );
	$pdo = new PDO($dsn, $user, $password, $options);

	//...................bindValue
	// $sql = "select * from products where price> ? ";
	// $products = $pdo->prepare($sql);
	// $products->bindValue(1, 500);
	// $products->execute();

	//...................bindValue
	// $sql = "select * from products where price> :price ";
	// $products = $pdo->prepare($sql);
	// $products->bindValue(":price", 800);
	// $products->execute();

	//...................bindParam, 第二個參數只能是變數
	$sql = "select * from products where price= :price ";
	// $sql = "update products set price=price+10 where price= :price ";
	$products = $pdo->prepare($sql);
	$price = 850;
	$products->bindParam(":price", $price);
	$products->execute();	

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
<table align="center" width="800">
	<tr bgcolor="#bfbfef"><th>書號</th><th>書名</th><th>價格</th><th>作者</th></tr>
<?php	
	while($prodRow = $products->fetch(PDO::FETCH_ASSOC)){
?>		
		<tr>
			<td><?php echo $prodRow["psn"];?></td>
			<td><?php echo $prodRow["pname"];?></td>
			<td><?php echo $prodRow["price"];?></td>
			<td><?php echo $prodRow["author"];?></td>
		</tr>
<?php
	}
?>
</table>     
</body>
</html>