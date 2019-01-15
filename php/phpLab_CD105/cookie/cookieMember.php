
<!DOCTYPE html>
<html>
<head>
<meta charset="utf-8">
<title>cookie</title>
</head>
<body>
<?php
error_reporting(0); 
echo "帳號 : ",$_COOKIE["memId"] ,"<br>";
echo "姓名 : ", $_COOKIE["memName"] ,"<br>";
echo "email : ", $_COOKIE["email"]  ,"<br>";
?> 
</body>
</html>