<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Document</title>
</head>
<body>
	@@@@@@@@@作業十　：(迴圈..練習)  <br> 
10forSum.htm ,10forSum.php<br>
輸入一正整數,並算1 到此整數間的總和、奇數和、偶數和<br><br><br>

<?php 

	$num=$_REQUEST["num"];

	$Sum;
	$oddSum;
	$eventSum;

	for($i=1;$i<=$num;$i++){
		$Sum+=$i; 
		$str1 .= "{$i} + ";
	}
	$newstr1=substr($str1,0,-3);
	echo "整數總和　{$newstr1} = {$Sum} <br>"; 

	for($i=1;$i<=$num;$i+=2){
		$oddSum+=$i;
		$str2 .= "{$i} + ";
	}
	$newstr2=substr($str2,0,-3);
	echo "奇數和　{$newstr2} = {$oddSum} <br>"; 

	for($i=2;$i<=$num;$i+=2){
		$eventSum+=$i;
		$str3 .= "{$i} + ";
	}
	$newstr3=substr($str3,0,-3);
	echo "偶數和　{$newstr3} = {$eventSum} <br>"; 
	 
 ?>


</body>
</html>