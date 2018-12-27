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

<h2>没有參數, 没有傳回值</h2>	
<?php
function sayHello(){
	echo "您好~~<br>";
	return;
} 

sayHello();  
?> 

<h2>有一個參數, 没有傳回值</h2>
<?php
function sayHelloToSomeone($name){
	echo "{$name}, 您好~~<br>";
} 

sayHelloToSomeone("昱君");  
?> 

<h2>有參數, 有傳回值</h2>
<?php 
function sum2num( $a, $b){  //a, b, total 都是區域變數
	$total = $a + $b;
	return $total;
}

$x = 10;
$y = 20;
echo "a = ", $a, "<br>";
echo "$x+$y = ", sum2num(10, 20), "<br>";
// echo $a; //error, $a 是區域變數，只能在它所屬的函式中使用
?>


<h2>有一堆資料要傳(可以考慮使用陣列型參數), 有傳回值</h2>
<?php 
// function sumMany( $array ){  //$array,$total 都是區域變數
// 	$total = 0;
// 	foreach( $array as $data){
// 		$total += $data;
// 	}
// 	return $total;
// }

function sumMany( $array ){  //$array,$total 都是區域變數
	$total = 0;
	if( is_array($array) === true){
		foreach( $array as $data){
			$total += (double)$data;
		}		
	}else{
		$total = false;
	}

	return $total;
}

$arr = array(10,20,30);
echo "10+20+30 = ", sumMany( $arr ), "<br>"; //60

$arr = array(111,222,333,444);
echo "111+222+333+444 = ", sumMany( $arr ), "<br>";

echo "111 = ", sumMany(111), "<br>";

$arr = array(10, 3.5 ,"This is a book.");
echo "10+true+'This is a book.' = ", sumMany( $arr ), "<br>";

?>


<h2>call by value, call by reference</h2>
<?php 
function sum( $a, &$b){  //a : 是by value, b: 是by reference
	$total = $a + $b;
	$a = 100;
	$b = 200;
	return $total;
}

$x = 10;
$y = 20;
echo "$x+$y = ", sum($x, $y), "<br>";
echo "x : $x <br>";
echo "y : $y <br>";
?>

<h2>陣列型參數 以call by value</h2>
<?php 
 function adjustSalary($dataArr,$amt){
     for($i=0;$i<count($dataArr);$i++){
     	$dataArr[$i] += $amt;
     }
	 return $dataArr;  

 }

$salaryArr = array(10000,20000,30000,40000);

$salaryArr = adjustSalary($salaryArr,5000);
print_r($salaryArr);
?>

<h2>陣列型參數 以call by reference</h2>
<?php 
 function adjustSalary222( &$dataArr,$amt){
     for($i=0;$i<count($dataArr);$i++){
     	$dataArr[$i] += $amt;
     }
 }

$salaryArr = array(10000,20000,30000,40000);

adjustSalary222($salaryArr,5000);
print_r($salaryArr);
?>
</body>
</html>