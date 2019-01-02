
<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
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
    <?php
    try{
       	$dsn = "mysql:host=localhost;port=3306;dbname=books;charset=utf8";
        $user="root";
        $password="abc1006";
        $options = array(PDO::ATTR_CASE=>PDO::CASE_NATURAL, PDO::ATTR_ERRMODE=>PDO::ERRMODE_EXCEPTION );
        $pdo = new PDO($dsn, $user, $password, $options); 
        $sql = "select * from products";
        //用變數$pdoStatement取資料(變數名可改)
        $products = $pdo->query($sql);
        //用fetch顯示資料
        // while( $row=$products->fetch()){
            
        //      echo $row[0],"...",$row[1],"...",$row["price"],"<br>";

        // };
        echo "異動成功"; 	
    }catch (PDOException $e) {
        echo "錯誤 : ", $e -> getMessage(), "<br>";
        echo "行號 : ", $e -> getLine(), "<br>";
    }
    
    ?>
    <table>
    <tr>
        <th>順序</th>
        <th>書名</th>
        <th>價格</th>
    </tr>
    <?php                    
        while($row=$products->fetch()){
          echo "<tr><td>{$row["psn"]}</td><td>{$row["pname"]}</td><td>{$row["price"]}</td><td>{$row["author"]}</td></tr>";
        }
    ?>
    </table>
    
</body>
</html>