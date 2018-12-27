<!DOCTYPE html>
<html>
<head>
<meta charset="utf-8">
<title>Examples</title>
</head>
<body>
<?php 
$aStr = "36000";
$bInt = 36000;
echo gettype($aStr) , "<br>";
echo gettype($bInt) , "<br>";
echo "is_integer : ", is_integer($bInt) , "<br>";
echo "is_string : ", is_string($bInt) , "<br>";
echo var_dump($aStr, $bInt);
?>  

<h2>data convert (隱含轉換)</h2>
<?php 
$aInt = 123;   
$bStr = "100";   
$cBool =  true; 

echo ($aInt + $bStr) , "<br>";
echo ($aInt + $cBool) , "<br>";
echo ($bStr + $cBool) , "<br>";
?>

<h2>data convert (強制轉換)</h2>
<?php 
$aInt = 123;   
$bStr = "100NT";   
$cBool =  true; 

//echo ($aInt + $bStr) , "<br>";//error (隱含轉換)
echo ($aInt + (int)$bStr) , "<br>";//error (隱含轉換)
echo ($aInt + $cBool) , "<br>";
echo ((int)$bStr + $cBool) , "<br>";

var_dump($bStr);
?>

<h2>data convert (強制轉換_2)</h2>
<?php 
$aInt = 123;   
$bStr = "100NT";   
$cBool =  true; 
settype($bStr, "integer");

echo ($aInt + $bStr) , "<br>";//error (隱含轉換)
echo ($aInt + $cBool) , "<br>";
echo ($bStr + $cBool) , "<br>";

var_dump($bStr);
?>

<hr>
<?php 
$d = "100";

echo settype($d, "integer");
echo "<br>";
var_dump($d);
?>
</body>
</html>