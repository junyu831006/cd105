<?php
$psn = $_REQUEST["psn"];
$errMsg = "";
//連線資料庫
try{
  require_once("connectBooks.php");
  $sql = "update products set pname=:pname,price=:price,author=:author,pages=:pages,image=:image where psn=:psn";
  $products = $pdo->prepare($sql);
  $products->bindValue(":psn", $_REQUEST["psn"]);
  $products->bindValue(":pname", $_REQUEST["pname"]);
  $products->bindValue(":price", $_REQUEST["price"]);
  $products->bindValue(":author", $_REQUEST["author"]);
  $products->bindValue(":pages", $_REQUEST["pages"]);
  $products->bindValue(":image", $_REQUEST["image"]);
  $products->execute();
}catch(PDOException $e){
  $errMsg .= "錯誤原因 : ".$e -> getMessage(). "<br>";
  $errMsg .= "錯誤行號 : ".$e -> getLine(). "<br>";
}
?> 
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
    test
    <?php
    if($errMsg !=''){
        echo $errMsg;
    }
    ?>
</body>
</html>