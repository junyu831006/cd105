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
}
</style>
</head>
<body>
<h2>產生2維陣列===1</h2>	
<?php

$arr0 = array(1,2,3,4);  
$arr1 = array(11,12,13,14);
$arr2 = array(21,22,23,24);
$arr = array( $arr0, $arr1, $arr2);
echo $arr[2][2],"<hr>";
?>  


<h2>產生2維陣列===2</h2>
<?php
$arr = array( array(1,2,3,4), array(11,12,13,14), array(21,22,23,24), array(31,32,33,34));
echo "<table border='1' cellspacing='0'>";

$rowCount = count($arr);
for( $i=0; $i<$rowCount; $i++){
	//$i : 0 ==>array(1,2,3,4)
	echo "<tr>";
	$colCount = count( $arr[$i] );
	for( $j=0; $j<$colCount; $j++){
		echo "<td>{$arr[$i][$j]}</td>";
	}
	echo "</tr>";
}

echo "</table>";
?> 


<h2>產生2維陣列===3</h2>
<?php
$arr = array( array(1,2,3,4), array(11,12,13,14), array(21,22,23,24), array(31,32,33,34));
echo "<table border='1' cellspacing='0'>";

$rowCount = count($arr);
for( $i=0; $i<$rowCount; $i++){
	//$i : 0 ==>array(1,2,3,4)
	$total = 0;
	echo "<tr>";
	$colCount = count( $arr[$i] );
	for( $j=0; $j<$colCount; $j++){
		echo "<td>{$arr[$i][$j]}</td>";
		$total += $arr[$i][$j];
	}
	echo "<td>",$total/$colCount,"</td>";
	echo "</tr>";
}

echo "</table>";
?> 


<h2>產生2維陣列===foreach</h2>
<?php
$arr = array( array(1,2,3,4), array(11,12,13,14), array(21,22,23,24), array(31,32,33,34));
echo "<table border='1' cellspacing='0'>";

$rowCount = count($arr);
foreach( $arr as $row){
	$total = 0;
	echo "<tr>";
	$colCount = count( $row);
	foreach( $row as $data){
		echo "<td>{$data}</td>";
		$total += $data;
	}
	echo "<td>",$total/$colCount,"</td>";
	echo "</tr>";
}

echo "</table>";
?> 
</body>
</html>