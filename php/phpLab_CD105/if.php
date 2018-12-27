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
<h2>句型1</h2>

<?php
//....
$avg = 58;
if( $avg >= 60)
  echo "通過<br>";   
?> 

<h2>句型2</h2>
<?php 
$avg = 58;
if( $avg >= 60){
  echo "通過<br>"; 
  echo "合格證書列印中....<br>"; 
}
?> 

<h2>句型3</h2>
<?php
//....
$avg = 58;
if( $avg >= 60) //true
  echo "通過<br>"; 
else //false
  echo "再努力<br>"; 
?> 

<h2>句型4</h2>
<?php 
$avg = 58;
if( $avg >= 60){
  echo "通過<br>"; 
  echo "合格證書列印中....<br>"; 
}else{
  echo "再努力<br>"; 
  echo "三餐飯後睡前看<br>";	
}
?> 

<h2>句型5</h2>
<?php 
$avg = 38;
if($avg >= 90){
   $grade = "A";
}elseif($avg >= 80){ 
        $grade = "B";
}elseif($avg >= 70){
        $grade = "C";
}elseif($avg >= 60){
        $grade = "D";
}else{
        $grade = "E";
}
echo "等級為 $grade";

?> 

<h2>句型9 ????</h2>
<?php 
$avg = 58;
if( $avg >= 60):
  echo "通過<br>"; 
  echo "合格證書列印中....<br>"; 
else:
  echo "再努力<br>"; 
  echo "三餐飯後睡前看<br>";	
endif;
?> 

<h2>句型11</h2>
<?php
$lowType = "1";
$education = false;
if( $lowType == "1"){
	$amount = 5000;
}elseif( $lowType == "2"){
	$amount = 3000;
}elseif( $lowType == "3"){
	$amount = 1000;
}else{
	$amount = 0;
}
echo "補助款 : {$amount}元<br>";
?>   


<hr>
<?php 
$avg = 39;
// if( $avg >= 60){
//   echo "通過";
// }else{
//   echo "再努力";
// }

echo 2*3+5 , "<br>";

echo ($avg>=60)? "通過" : "再努力", "<br>";

?>

</body>
</html>