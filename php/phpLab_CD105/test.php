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

<h2>有一個參數, 没有傳回值</h2>
<?php

$name = "CD105";  //name : "CD105"

function sayHello(){
	//global $name;


	
	echo "{$GLOBALS["name"]}, 大家好...........<br>";



} 

sayHello();  
?> 
     
</body>
</html>