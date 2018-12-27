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
<h2>印 3 個 I love PHP~~</h2>
<?php
$i=1;
while( $i<=3 ){
	echo "I love PHP~~<br>";  
	$i++;	
}
?>

<h2>印出1、2 、3 、…..9 、10 </h2>
<?php 
$i=1;
while( $i<=9){
	echo "{$i}、";
	$i++;
}
echo $i, "<br>";
?>

<h2>計算1+2+3+….+50 = ?</h2>
<?php 
$total = 0;
$i = 1;
while( $i<=50){
	$total += $i;
	$i++;
}
echo "總和 : $total <br>";
?>

<h2>印出 1到50間3的倍數,並計算這些數的總和</h2> 
<?php 
$total = 0;
$i=3;
while($i<=50){
	$total += $i;
	$i += 3;
}
echo "總和 : $total <br>";
?>

</body>
</html>