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
	<h2>建立一維索引陣列 : array()</h2>
<?php
$arr = array(11,22,33);
$len = count($arr);
for( $i=0; $i<$len ; $i++){
	echo $arr[$i],"<br>"; 
}  
?> 

  
</body>
</html>