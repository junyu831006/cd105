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
  <h2>預設參數</h2> 
<?php
function printMark( $classId="前端工程班"){
  echo "******<br>";
  echo "******<br>";
  echo "******<br>";
  echo "******<br>";
  echo "******<br>";
  echo "****** $classId<br><br>";
  return;
} 

printMark("CD104");  

printMark("CD105"); 

printMark();   
?> 
<h2>全域變數: global , $GLOBALS</h2>
<?php
//$amount : 100000
function getAmount(){ 
  // global $amount;	
  // $amount = 100000;

  $GLOBALS["amount"] = 100000;  
}

function showAmount(){
  // global $amount;
  // echo "營業額: ",$amount,"<br>";

  echo "營業額: ",$GLOBALS["amount"],"<br>";  
}

getAmount();

showAmount();
   
?> 

<h2>static</h2>
<?php 
function myStatic(){
  static $i=0;     //靜態變數 :  i:2
  $i +=1;
  return $i;
}
echo "呼叫myStatic函數第一次, i : " . myStatic(). "<br>";
echo "呼叫myStatic函數第二次, i : " . myStatic(). "<br>";
echo "呼叫myStatic函數第二次, i : " . myStatic(). "<br>";
?>     
</body>
</html>