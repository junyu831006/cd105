<!DOCTYPE html>
<html>
<head>
<meta charset="utf-8">
<title>Examples</title>
</head>
<body>
<?php 
echo "您的IP : ", $_SERVER["REMOTE_ADDR"], "<br>";
echo "您目前執行的程式 : ", $_SERVER["PHP_SELF"], "<br>";

phpinfo();
 ?>    
</body>
</html>