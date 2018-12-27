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
//$amount : 100000
function getAmount(){ 
 
}

function showAmount(){
 
}

getAmount();

showAmount();
   
?> 

<h2>static</h2>
<?php 
function myStatic(){
  static $i=0;     //靜態變數 :  i:1
  $i +=1;
  return $i;
}
echo "呼叫myStatic函數第一次, i : " . 1. "<br>";
echo "呼叫myStatic函數第二次, i : " . myStatic(). "<br>";
echo "呼叫myStatic函數第二次, i : " . myStatic(). "<br>";
?>     
</body>
</html>