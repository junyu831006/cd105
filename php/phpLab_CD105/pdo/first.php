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
       	$dsn = "mysql:host=localhost;port=3306;dbname=test1;charset=utf8";
        $user="root";
        $password="abc1006";
        $options = array(PDO::ATTR_CASE=>PDO::CASE_NATURAL, PDO::ATTR_ERRMODE=>PDO::ERRMODE_EXCEPTION );
        $pdo = new PDO($dsn, $user, $password, $options); 
        //先決定誰要變更資訊
        $sql= "update emp set sal=sal +100";
        //再叫pdo執行
        $pdo->exec($sql);
        echo "異動成功"; 	
    }catch (PDOException $e) {
        echo "錯誤 : ", $e -> getMessage(), "<br>";
        echo "行號 : ", $e -> getLine(), "<br>";
    }
    
    ?>
</body>
</html>