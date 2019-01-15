<?php
    $err="";
    try{
       	$dsn = "mysql:host=localhost;port=3306;dbname=books;charset=utf8";
        $user="root";
        $password="root";
        $options = array(PDO::ATTR_CASE=>PDO::CASE_NATURAL, PDO::ATTR_ERRMODE=>PDO::ERRMODE_EXCEPTION );
        $pdo = new PDO($dsn, $user, $password, $options); 
        // $sql = "update products set price=price+20";
        // $sql = "insert into products(psn,pname,price,author,pages,image)
        //         VALUES('10','pis story','2000','Gina','100',null)";
        //用變數$products取資料(變數名可改)
        // $sql = "delete from products where psn=9";
        // $sql = "select * from products where psn=:psn,pname=:pname,price=:price,author=:author,pages=:pages,images=:images";
        $sql = "select * from products where psn=:psn,price=:price";
        // $sql = "select * from products where psn> :psn";
        // $products = $pdo->exec($sql);
        $products = $pdo->prepare($sql);
        $psn=2;
        $price=850;
        // $pname=	"Acess2000 程式設計";
        // $author="郭尚君";
        // $pages=2;
        // $images="2.gif";
        $products->bindValue(":psn",$psn);
        // $products->bindValue(":pname",$pname);
        $products->bindValue(":price",$price);
        // $products->bindValue(":author",$author);
        // $products->bindValue(":pages",$pages);
        // $products->bindValue(":images",$images);
        $prodRows=$products->fetchAll(PDO::FETCH_BOTH);
	    $products->execute();	
        
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
	// foreach( $prodRows as $i => $prodRow ){
        while($products->fetchObject(PDO::FETCH_ASSOC)){
?>
	<tr>
		<!-- <td><?php echo $prodRow["psn"];?></td>
		<td><?php echo $prodRow["pname"];?></td>
		<td><?php echo $prodRow["price"];?></td>
		<td><?php echo $prodRow["author"];?></td> -->
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