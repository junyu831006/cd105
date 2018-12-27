<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Document</title>
</head>
<body>

<?php
$arr = array();
$sum = 0;
$odd =0;
$even = 0;
for($i=1; $i<=10 ;$i++){
	$rand = mt_rand(1,100);
	// echo "第{$i}次 : {$rand}<br>";
	$arr[$i]=$rand;
	echo "第{$i}個: ",$arr[$i],"<br>";
	$sum += $arr[$i];
	if($arr[$i]%2==1){
		$odd+=$arr[$i];
	}else{
		$even+=$arr[$i];
	}
}
	echo  "總和:",$sum,"<br>";
	echo  "奇數和:",$odd,"<br>";
	echo  "偶數和:",$even;"<br>";

?>
	
</body>
</html>