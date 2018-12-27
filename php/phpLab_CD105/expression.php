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


<h2>++在前</h2>	
<?php
$x = 10;
$y = ++$x + 100;
echo "x : $x<br>"; //11 
echo "y : $y<br>"; //111
?>	

<h2>++在後</h2>	
<?php
$x = 10;
$y = $x++ + 100;
echo "x : $x<br>"; //11 
echo "y : $y<br>"; //110
?>	


<hr>
<h2>--</h2>
<?php 
$x = 10;
$x--;
echo "x : $x<br>";
?>
<hr>
<h2>算術</h2>	
<?php
echo "18/4 = ", 18/4, "<br>"; //4.5 
echo "18%4 = ", 18%4, "<br>"; //2  
?>  

<h2>比較</h2>
<?php 
echo "18>4 ? ", 18>4, "<br>"; //true
echo "0===false ? ", 0===false, "<br>"; //false
echo "0==false ? ", 0==false, "<br>"; //true
echo "18!=4 ? ", 18!=4, "<br>"; //true
?>

<h2>邏輯</h2>
<?php 
echo "18>4 and 100<10 ? ", 18>4 and 100<10, "<br>"; //true and false -->false
echo "18>4 or 100<10 ? ", 18>4 or 100<10, "<br>"; //true or false -->true
echo "18>4 xor 100<10 ? ", 18>4 xor 100<10, "<br>"; //true xor false -->true

echo "! 18>4 ? ", ! 18>4, "<br>";
echo "! false ? ", ! false, "<br>";  //true
?> 

<h2>位元</h2>
<?php 
echo "13 & 6 ? ", 13 & 6, "<br>"; //4
echo "13 | 6 ? ", 13 | 6, "<br>"; //15
?>  

<h2>字串結合</h2>
<?php 
echo "name : " . "Sara" , "<br>"; //"name : Sara"
echo "name : " , "Sara" , "<br>"; 
?> 

<h2>指定</h2>
<?php
$x = 18;
$x /= 4; 
echo "x = $x<br>";

$x = 18;
$x %= 4; 
echo "x = $x<br>"; //2

?>   

<h2>@</h2>
<?php 
$x = 0;
echo @(10/$x);
 ?>
<hr>
<?php
$a = $b = $c = 1000;
echo "a : $a<br>";//1000
echo "b : $b<br>";//1000
echo "c : $c<br>";//1000
?>
</body>
</html>