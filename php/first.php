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
        $dsn="mysql:host=localhost;
            port=3306;
            dbname=books;
            charset=utf8
            ";
        $user="root";
        $password="abc1006";
        $pdo = new PDO($dsn,$user,$password,$options)
    
    ?>
</body>
</html>