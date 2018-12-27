<!DOCTYPE html>
<html>
<head>
<meta charset="utf-8">
<title>Examples</title>
</head>
<body>
<h2>integer</h2>	
<?php 
echo 25, "<br>"; //25
echo 025, "<br>";//2*8 + 5 --->21
echo 0x25, "<br>";//2*16 + 5 -->37
?> 

<h2>float</h2>	
<?php 
echo 1.23456789012345678, "<br>"; 
echo 12345.678e3,"<br>";
echo 12345.678e32,"<br>";
?>  


<h2>boolean</h2>	
<?php 
echo "true : ", true, "<br>";  //1
echo "false : ", false, "<br>"; 
?>  

<h2>單引號</h2>
<?php
echo 'I am Sara', "<br>";
echo 'I am "Sara"', "<br>";
echo 'I am \'Sara\'', "<br>";
echo 'I am \Sara\\', "<br>";
?>

<h2>雙引號</h2>
<?php 
echo "I amr Sara", "<br>";
echo "I am \"Sara\"", "<br>";
echo "I am \n'Sara'", "<br>";
echo "I amr \\Sara\\", "<br>";
?>

<h2>雙引號可套用變數替換功能</h2>
<?php 
$name = "Sara";
$coco = 6000;
echo "I am ", $name, ",我有", $coco, "<br>";
echo 'I am $name, 我有$coco<br>';  //單引號没有變數替換功能
echo "I am $name, 我有$coco<br>";
echo "I am $name, 我有$coco 元<br>";
echo "I am $name, 我有{$coco}元<br>";
echo "I am $name, 我有$coco \$NT<br>";
?>

<h2>簡化版</h2>
姓名 : <?php echo $name; ?><br>
姓名 : <?=$name?><br>
</body>
</html>