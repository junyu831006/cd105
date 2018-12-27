<!DOCTYPE html>
<html>
<head>
<meta charset="utf-8">
<title>Examples</title>
</head>
<body>
<?php 
// //..............1
// define("PI", 3.14, true); //是不區分, 大小寫視為一樣
// echo 10*10*Pi , "<br>";
// echo 10*10*PI , "<br>";


// //..............2
//define("PI", 3.14, false); //否不區分, 大小寫視為不一樣
// //echo 10*10*Pi , "<br>";//NG
// echo 10*10*PI , "<br>";;

define("PI", 3.14); //否不區分, 大小寫視為不一樣
echo 10*10*PI , "<br>";

define("cd105", "Happy 班!!");
echo cd105, "<br>";

echo PHP_VERSION, "<br>";

const QQ = "@_@";
echo QQ, "<br>";

?>    
</body>
</html>