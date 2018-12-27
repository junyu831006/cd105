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
do{
	echo "I love PHP~~<br>";  
	$i++;	
}while( $i<=3 );
?>

<h2>印出1、2 、3 、…..9 、10 </h2>
<?php 
$i=1;
do{
	echo "{$i}、";
	$i++;
}while( $i<=9);
echo $i, "<br>";
?>

<h2>計算1+2+3+….+50 = ?</h2>
<?php 
$total = 0;
$i = 1;
do{
	$total += $i;
	$i++;
}while( $i<=50);
echo "總和 : $total <br>";
?>

<h2>印出 1到50間3的倍數,並計算這些數的總和</h2> 
<?php 
$total = 0;
$i=3;
do{
	$total += $i;
	$i += 3;
}while($i<=50);
echo "總和 : $total <br>";
?>

</body>
</html>