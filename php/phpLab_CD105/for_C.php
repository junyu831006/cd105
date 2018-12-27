<!DOCTYPE html>
<html>
<head>
<meta charset="utf-8">
<title>Examples</title>
<style type="text/css">
h2 {
	color:deeppink;
}

td {
	width:50px;
	text-align:center;
	color:blue;
}	
</style>
</head>
<body>
<h2>印 3 個 I love PHP~~</h2>
<?php
for($i=1; $i<=3; $i++){
	echo "I love PHP~~<br>";  	
}
?>

<h2>印出1、2 、3 、…..9 、10 (一)</h2>
<?php 
for( $i=1; $i<=10; $i++){
  echo $i;	
  if( $i<10){
  	echo  "、";
  }
 
}
?>


<h2>印出1、2 、3 、…..10 (二)</h2>
<?php 
for( $i=1; $i<=9; $i++){
  echo $i,"、";	
}
echo $i;
?>

<h2>計算1+2+3+….+50 = ?</h2>
<?php 
$total = 0;
for( $i=1; $i<=50; $i++){  //total:0+1+2+3+4+5...+50
	$total = $total + $i;
} 
echo "總和 : $total<br>";
?> 

<h2>印出 1到50間3的倍數,並計算這些數的總和(一)</h2> 
<?php
$total = 0; 
for( $i=1; $i <= 50; $i++){
	if( $i%3 == 0){
		echo $i, "<br>";
		$total += $i;
	}
}
echo "總和 : $total<br>";
?> 

<h2>印出 1到50間3的倍數,並計算這些數的總和(二)</h2> 
<?php
$total = 0; 
for( $i=3; $i <= 50; $i=$i+3){
		echo $i, "<br>";
		$total += $i;
}
echo "總和 : $total<br>";
?> 

<h2>3+6+9+12.....+45+48=408</h2> 
<?php
$total = 0; 
$end = (int)(50/3) * 3 - 3; //先計算出最後一個數的前一個數
//$end = (50 - 50%3) - 3;
for( $i=3; $i <= $end; $i=$i+3){
		echo $i, "+";
		$total += $i;
}
$total += $i;
echo "$i = $total<br>";
?> 


<h2>table</h2>
<?php 
echo "<table border='1' cellspacing='0' align='center' >";
for( $i=1; $i<=10; $i++){
	echo "<tr><td>{$i}</td></tr>";
}
echo "</table>";
?>  
</body>
</html>