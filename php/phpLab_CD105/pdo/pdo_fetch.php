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
    try{
       	$dsn = "mysql:host=localhost;port=3306;dbname=books;charset=utf8";
        $user="root";
        $password="abc1006";
        $options = array(PDO::ATTR_CASE=>PDO::CASE_NATURAL, PDO::ATTR_ERRMODE=>PDO::ERRMODE_EXCEPTION );
        $pdo = new PDO($dsn, $user, $password, $options); 
        $sql = "select * from products";
        //用變數$pdoStatement取資料(變數名可改)
        $pdoStatement = $pdo->query($sql);
        //用fetch顯示資料
        $row=$pdoStatement->fetch();
        echo $row[0],"...",$row[1];
        echo "異動成功"; 	
    }catch (PDOException $e) {
        echo "錯誤 : ", $e -> getMessage(), "<br>";
        echo "行號 : ", $e -> getLine(), "<br>";
    }
    
    ?>
</body>
</html>