<?php
    $err="";
    try{
       	$dsn = "mysql:host=localhost;port=3306;dbname=books;charset=utf8";
        $user="root";
        $password="abc1006";
        $options = array(PDO::ATTR_CASE=>PDO::CASE_NATURAL, PDO::ATTR_ERRMODE=>PDO::ERRMODE_EXCEPTION );
        $pdo = new PDO($dsn, $user, $password, $options); 
        $sql = "select * from products";
        //用變數$products取資料(變數名可改)
        $products = $pdo->query($sql);
        //用fetch顯示資料(看不懂)
        // $prodRows=$products->fetchObject();
       
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

<table align="center">
	<tr bgcolor="#bfbfef"><th>書號</th><th>書名</th><th>價格</th><th>作者</th></tr>
<?php	
//fetchObject一次只抓一個物件，透過while迴圈跑出全部
	while($prodRow = $products->fetchObject()){
?>		
		<tr>
			<td><?php echo $prodRow->psn ;?></td>
			<td><?php echo $prodRow->pname ;?></td>
			<td><?php echo $prodRow->price ;?></td>
			<td><?php echo $prodRow->author ;?></td>
		</tr>
<?php
	}
?>
</table>    
</body>

</html>