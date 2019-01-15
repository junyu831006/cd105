<?php
$errMsg = "";

try {
	require_once("connectBooks.php");
	$sql = "update products set pname=:pname, price=:price, author=:author, pages=:pages, image=:image where psn=:psn";
   	$products = $pdo->prepare($sql);
   	$products -> bindValue(":psn", $_REQUEST["psn"]);
   	$products -> bindValue(":pname", $_REQUEST["pname"]);
   	$products -> bindValue(":price", $_REQUEST["price"]);
   	$products -> bindValue(":author", $_REQUEST["author"]);
   	$products -> bindValue(":pages", $_REQUEST["pages"]);
   	$products -> bindValue(":image", $_REQUEST["image"]);
   	$products -> execute();
} catch (PDOException $e) {
  $errMsg .= "錯誤原因 : ".$e -> getMessage(). "<br>";
  $errMsg .= "錯誤行號 : ".$e -> getLine(). "<br>";	
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
</style>
</head>
<body>
<?php 
if( $errMsg != ""){
	echo $errMsg;
}else{
  echo "異動成功<br>";
}
?>    
</body>
</html>