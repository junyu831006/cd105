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
echo "帳號 : ", $_REQUEST["memId"], "<br>";   
echo "密碼 : ", $_REQUEST["memPsw"], "<br>";   

echo "說了什麼 111 : <br>", $_REQUEST["note"], "<hr>";  
echo "說了什麼 222: 轉過後<br>", nl2br($_REQUEST["note"]), "<hr>";  


//echo "說了什麼 333: <br> {$_REQUEST["note"]}<hr>";  //...OK 
//echo "說了什麼 : 轉過後<br>{nl2br($_REQUEST["note"])}<br>";  //...NG
?>      
</body>
</html>