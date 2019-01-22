<?php
ob_start();
session_start();
$errMsg = "";
try {
	require_once("connectBooks.php");

	$sql = "select * from products";
	$products = $pdo->query($sql); 
} catch (PDOException $e) {
	$errMsg .= "錯誤 : ".$e -> getMessage()."<br>";
	$errMsg .= "行號 : ".$e -> getLine()."<br>";
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
a {
	text-decoration:none;
}
a:hover {
    text-decoration:underline;
}
.prodImg{
	width:100px;
}
</style>
</head>
<body>
<table align="center" width="600">
	<tr bgcolor="#bfbfef"><th>書號</th><th>書名</th><th>價格</th><th>作者</th><th>購買</th></tr>
<?php	
	while($prodRow = $products->fetch(PDO::FETCH_ASSOC)){
?>		
		<form action="cartAdd.php">
			<input type="hidden" name="psn" value="<?php echo $prodRow["psn"];?>">
			<input type="hidden" name="pname" value="<?php echo $prodRow["pname"];?>">
			<input type="hidden" name="price" value="<?php echo $prodRow["price"];?>">
		<tr>
			<td><?php echo $prodRow["psn"];?></td>
			<td><a href="prodQuery.php?psn=<?php echo $prodRow["psn"];?>">
				<?php echo $prodRow["pname"];?>
				</a>	
			</td>
			<td><?php echo $prodRow["price"];?></td>
			<td><?php echo $prodRow["author"];?></td>
			<td><img src="images/<?php echo $prodRow["image"];?>"  class="prodImg">  </td>
			<td><input type="submit" value="放入購物車"></td>
		</tr>
		</form>
<?php
	}
?>
</table>     
</body>
</html>