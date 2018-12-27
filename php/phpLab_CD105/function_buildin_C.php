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
	<h2>math</h2>
<?php
echo "floor(2.8) : ", floor(2.8), "<br>";  //2  
echo "ceil(2.8) : ", ceil(2.8), "<br>";    //3
echo "sqrt(4) : ", sqrt(4), "<br>"; //2
echo "pow(2, 5) : ", pow(2, 5), "<br>";
?> 


<h2>string</h2>
<?php 
$str = "abcdeabcde日月金木水火土"; //
echo "strlen('$str') : ", mb_strlen($str), "<br>";
echo "strpos('$str','bc') : ", mb_strpos($str, 'bc'), "<br>";
echo "substr('$str',12,5) : ", mb_substr($str,12,5), "<br>"; //cdeab

$arr = array(11,22,33);
echo implode(",",$arr);
echo "<hr>";
//
$str = "11@_@22@_@33"; //11 22 33
$newArr = explode("@_@", $str);
foreach( $newArr as $data){
	echo $data,"<br>";
}
?> 

<h2>time, date</h2>
<?php 
$now = time(); //1970-01-01 0:0:0
echo "now : ", $now, "<br>";
echo "date() : ", date("Y-m-d H:i:s", $now), "<br>";
echo "date() : ", date("Y-m-d H:i:s"), "<br>";

?>      
</body>
</html>