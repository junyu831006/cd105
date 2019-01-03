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
        $password="root";
        $options = array(PDO::ATTR_CASE=>PDO::CASE_NATURAL, PDO::ATTR_ERRMODE=>PDO::ERRMODE_EXCEPTION );
        $pdo = new PDO($dsn, $user, $password, $options); 
        // $sql = "select * from products where price >500";
        $sql = "select * from products where price > ?";
        $products=$pdo -> prepare($sql);
        //bindValue(第一個問號,比較的值)
        $products -> bindValue(1,500);
        $products -> execute();
    }catch (PDOException $e) {
        echo "錯誤 : ", $e -> getMessage(), "<br>";
        echo "行號 : ", $e -> getLine(), "<br>";
    }
    
    ?>
</body>
</html>