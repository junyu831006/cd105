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

<h2>建立一維索引陣列 : array() , []</h2>
<?php
$arr = array(11,22,33);
// $arr = [ 11, 22, 33];
$len = count($arr);
for( $i=0; $i<$len ; $i++){
	echo $arr[$i],"<br>"; 
}  
?> 

<h2>直接指定</h2>
<?php
$arr22[0]=11;
$arr22[1]=22;
$arr22[2]=33;
$arr22[]=44;
$arr22[1]=1000;

$len22 = count($arr22);
for( $i=0; $i<$len22 ; $i++){
	echo $arr22[$i],"<br>"; 
}  
?> 

<h2>foreach... </h2>
<?php
$arr = array(11,22,33);
$arr[6] = 600;

 
foreach( $arr as $index => $data){  
	echo "$index : $data","<br>"; 
}  
?>   

<h2>foreach... </h2>
<?php
$arr = array(11,22,33);
$arr[6] = 600;

 
foreach( $arr as $data){  
	echo $data,"<br>"; 
}  
?> 

<h2>associative array</h2>
<?php 
$zip = array("台北市"=>"100", "中壢區"=>"320", "楊梅區" => "326");
$zip["台南市"] = "600";
foreach( $zip as $key => $data){  
	echo "$key : $data","<br>"; 
}  
?>  



<h2>整體陣列操作</h2>
<?php
$arr = array(11,22,33);

$arrB = $arr;
$arrB[2] = 300;
$len = count($arrB);
for( $i=0; $i<$len ; $i++){
	echo $arrB[$i],"<br>"; 
}  

echo "<hr>";
$len = count($arr);
for( $i=0; $i<$len ; $i++){
	echo $arr[$i],"<br>"; 
}  
?> 

<h2>找資料: 自己做</h2>
<?php 
$students = array("小玉", "花輪", "小丸子", "丸尾", "野口");
//$someone = "葉瑾";
$someone = "丸尾";
$len = count($students);

$found = false;

for( $i=0; $i<$len; $i++){
	if( $students[$i] == $someone){
		echo "{$someone}在本班，學號是{$i}";
		$found = true;
		break;
	}
}

if( $found == false){
	echo "{$someone}不在本班，學號是{$i}";
}
?>  

<h2>找資料: array_search(data,array)</h2>
<?php 
$students = array("小玉", "花輪", "小丸子", "丸尾", "野口");
// $someone = "丸尾";
// $no = array_search($someone, $students);

$someone = "值日生";
$no = array_search($someone, $students);

if( $no == false){
	echo "{$someone}不在本班~";
}else{  //index
	echo "{$someone}在本班，學號是{$i}";
}
?> 

<h2>找資料: in_array(data,array)</h2>
<?php 
$students = array("小玉", "花輪", "小丸子", "丸尾", "野口");
$someone = "丸尾";
// $someone = "值日生";
$ans = in_array($someone, $students); //true

if( $ans == false){
	echo "{$someone}不在本班~";
}else{  //index
	echo "{$someone}在本班";
}
?> 


<h2>shuffle(陣列) , print_r(陣列)</h2>
<?php 
$arr = array(11,22,33,44,55,66,77,88,99);
print_r($arr);
echo "<hr>";
shuffle($arr);
print_r($arr);
?> 


<hr>
<?php 
for( $i=1; $i<=6; $i++){  //i:2
	for( $j=1; $j<=$i; $j++){
		echo "*";
	}
	echo "<Br>";
}
?>

</body>
</html>