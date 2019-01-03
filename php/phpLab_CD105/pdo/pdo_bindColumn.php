<?php
    $err="";
    try{
       	$dsn = "mysql:host=localhost;port=3306;dbname=books;charset=utf8";
        $user="root";
        $password="root";
        $options = array(PDO::ATTR_CASE=>PDO::CASE_NATURAL, PDO::ATTR_ERRMODE=>PDO::ERRMODE_EXCEPTION );
        $pdo = new PDO($dsn, $user, $password, $options); 
        $sql = "select * from products where psn = :psn,pname=:pname,price=:price,author=:author,pages=:pages,image=:image where psn=:psn";
    $products = $pdo->prepare($sql);
    $products->bindColumn("psn", $psn);
    $products->bindColumn("psn", $psn);
    $products->bindColumn("pname", $pname);
    $products->bindColumn("price", $price);
    $products->bindColumn("author", $author);
    $products->bindColumn("pages", $pages);
    $products->bindColumn("image", $image);
    //用fetch顯示資料(看不懂)
    $prodRows=$products->fetchAll(PDO::FETCH_ASSOC);
    // $products->execute();
       
    }catch (PDOException $e) {
        // echo "錯誤 : ", $e -> getMessage(), "<br>";
        // echo "行號 : ", $e -> getLine(), "<br>";
        $err .= "錯誤 : ".$e -> getMessage()."<br>";
	    $err .= "行號 : ".$e -> getLine()."<br>";	
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
<?php
if( $err != ""){ //有狀況
  echo "<div>$err</div>";
}else{ //OK
?>
<table align="center">
	<tr><th>書號</th><th>書名</th><th>價格</th><th>作者</th></tr>
<?php
	while($products->fetchAll(PDO::FETCH_ASSOC)){
?>
	<tr>
		<td><?php echo $psn;?></td>
		<td><?php echo $pname;?></td>
		<td><?php echo $price;?></td>
		<td><?php echo $author;?></td>
	</tr>
<?php	
	}
}     
?> 
</body>

</html>