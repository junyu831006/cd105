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
$dsn = "mysql:host=localhost;port=3306;dbname=sample;charset=utf8";
$user = "root";
$password = "root";
$pdo = new PDO($dsn, $user, $password); 
echo "連線成功";  
?>      
</body>
</html>